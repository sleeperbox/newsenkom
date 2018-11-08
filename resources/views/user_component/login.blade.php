<div class="section-header">
          <h3>Masuk</h3>
        </div>

        <div class="form">
          <div id="sendmessage">Anda berhasil masuk</div>
          <div id="errormessage"></div>
          <form action="{{url('/loginPost')}}" method="post" role="form">
             {{ csrf_field() }} 

              <div class="form-group">
              <label>Username</label>
                <input type="text" name="username" class="form-control" id="inputUsername" data-rule="minlen:4" required>
                <!-- <div class="validation"></div> -->
              </div>

              <div class="form-group">
              <label>Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword" data-rule="minlen:4" required>
                <!-- <div class="validation"></div> -->
              </div>

            <div class="text-center"><button type="submit" value="Login">Masuk</button></div>
          </form>
        </div>
