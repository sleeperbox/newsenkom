<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\bcrypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;
use App\Berita;
use App\User;
use Telegram;

class AdminController extends Controller
{
    //
	public function index(){
        $tgl = date('Y-m-d');
        $tanggal = $tgl;
        $data_berita = Berita::where('tgl',$tanggal)->paginate(10);
		if(Session::get('login')){
            if(Session::get('role') == "basic"){
                return view('user_component.user.dashboard');    
            }else if(Session::get('role') == "admin"){
                return view('user_component.admin.admin', compact('data_berita'));
            }else{
                return redirect('/');    
            }
        }else{
            return redirect('/');
        }
	}
	public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = User::where('username',$username)->first();
        if(count($data) > 0){ 
            if(Hash::check($password,$data->password)){
            	if($data->role == "admin"){
                    Session::put('nama',$data->nama);
                    Session::put('id',$data->id);
                    Session::put('username',$data->username);
            		Session::put('role',$data->role);
                	Session::put('login',TRUE);
                    return redirect('admin');	
            	}else if($data->role == "basic"){
                    Session::put('nama',$data->nama);
                    Session::put('id',$data->id);
                    Session::put('username',$data->username);
                    Session::put('password',$data->password);
                    Session::put('role',$data->role);
                	Session::put('login',TRUE);
                	return redirect('user');
            	}else{
                    return back();
                }       
            }
            else{
                return back();
            }
        }
        else{
            return back();
        }
    }
    public function admin(){
        $tgl = date('Y-m-d');
        $tanggal = $tgl;
        $data_berita = Berita::where('tgl',$tanggal)->paginate(5);
		if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.admin', compact('data_berita'));
            }else if(Session::get('role') == "basic"){
                return redirect('user');    
            }else{
                return  redirect('/');    
            }
        }else{
            return redirect('/');
           }
	}
    public function tampil(Request $request){
        $tgl = $request->tgl;
        $format = date('Y-m-d', strtotime($tgl));
        $data_berita = Berita::where('tgl',$format)->paginate(5);
        if(count($data_berita) == 0){
            Session::flash('alert-', 'Tidak Ada Berita');
            return view('user_component.admin.admin', compact('data_berita'));
        }else{
            Session::forget('alert-');
            return view('user_component.admin.admin', compact('data_berita'));
        }
    }
    public function admin_user(){
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.admin_user');
            }else if(Session::get('role') == "basic"){
                return redirect('user');    
            }else{
                return  redirect('/');     
            }
        }else{
            return  redirect('/'); 
        }
    }
    public function datauser(){
        $data_user = User::paginate(10);
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.datauser', compact('data_user'));
            }else if(Session::get('role') == "basic"){
                return redirect('user');    
            }else{
                return  redirect('/');     
            }
        }else{
            return  redirect('/'); 
        }
    }
    public function tambahuser(){
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.tambahuser');
            }else if(Session::get('role') == "basic"){
                return redirect('user');    
            }else{
                return  redirect('/');     
            }
        }else{
            return  redirect('/'); 
        }
    }
    public function tambah(Request $request){
        $role = $request->role;
        if($role != ""){
            $data = new User();
            $data->username = $request->username;
            $data->password = bcrypt($request->password);
            $data->role = $role;
            $data->nama = $request->nama;
            $data->save();
            Session::flash('sukses', 'User Berhasil Di Tambahkan');
            return back();
        }else{
            Session::flash('alert', 'Gagal Menambah User');
            return back();
        }
    }
    public function updateuser($id){
        $data = User::where('id', $id)->first();
        return view('user_component.admin.update_user', compact('data'));
    }
    public function update(Request $request){
        $id = $request->id;
        $username = $request->username;
        $password = bcrypt($request->password);
        $pass = $request->pass;
        $role = $request->role;
        $nama = $request->nama;
        $data = User::where('id', $id)->first();
        if(Hash::check("",$password)){
            User::where('id', $id)->update(['username' => $username, 'role' => $role, 'nama' => $nama]);
            Session::flash('sukses', 'User Berhasil Di Ubah');
            return back();      
        }else{
            User::where('id', $id)->update(['username' => $username, 'password'=> $password, 'role' => $role, 'nama' => $nama]);
            Session::flash('sukses', 'User Berhasil Di Ubah');
            return back();      
        }
    }
    public function delete(Request $id) {
        $id = $id->id;
        User::where('id', $id)->delete();
        Session::flash('hapus', 'User Berhasil Di Hapus');
        return back();
    }
    public function pemantauan(){
        $data_berita = Berita::orderBy('id', 'DESC')->paginate(5);
        if(Session::get('login')){
            if(Session::get('role') == "admin"){
                return view('user_component.admin.pemantauan', compact('data_berita'));
            }else if(Session::get('role') == "basic"){
                return redirect('user');    
            }else{
                return  redirect('/');     
            }
        }else{
            return  redirect('/'); 
        }
    }
    public function hidden_berita(){
        $id = $request->id;
        $status = $request->status_tampil;
        $data = Berita::where('id', $id)->first();
        if($data->status_tampil == "tampil"){
            Berita::where('id', $id)->update(['status_tampil' => "tidak tampil"]);
            return back();      
        }else{
            Berita::where('id', $id)->update(['status_tampil' => "tampil"]);
            return back();
        }
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
    public function telegram(){
        $token = "647754242:AAFoPw6oz2CsYv8wPyUskxHhwezwgOq-y8g";
        $bot = "sleeperboxrev1";
        $chat_id = "602048323";
        $telegram_api = "https://api.telegram.org/bot".$token."/getupdates";

        $json = file_get_contents($telegram_api);
        $data = json_decode($json, true);

        $check =  $data['ok'];

        $update_id = $data['result'][0]['update_id'];
        $lastdata = end($data['result']);
        $message = $lastdata['message']['text'];
        $no2 = "0816863212";
        $tgl = date('Y-m-d');
        $Jam = date('h:s a');
        $tanggal = $tgl;
        $jam = $Jam;

            $data = new Berita();
            $data->callsign = $message;
            $data->tlp = $no2;
            $data->pesan = $message;
            $data->tgl = $tgl;
            $data->jam = $jam;
            $data->status_tampil = "tampil";
            $data->status_pemantauan = "tidak tampil";
            $data->save();
    }
}
