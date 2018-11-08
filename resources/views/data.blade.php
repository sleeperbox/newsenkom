

<center>
<ul class="list-group w3-agile">
 @foreach($data_berita as $datas)
	<li class="list-group-item">
		<span class="title">{{$datas->callsign}} - {{$datas->tlp}}</span>
		 <p>{{$datas->pesan}}</p>
	</li>
	 @endforeach
</ul>
</center>
 <!-- <center>{{ $data_berita->links() }}</center> -->