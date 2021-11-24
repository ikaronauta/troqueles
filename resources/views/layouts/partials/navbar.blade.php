<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success shadow">
    <div class="container-fluid">   
      <ul class="navbar-nav me-auto" style="margin-left: 10%">
        <li class="nav-item">
          <a class="navbar-brand text-light fs-2" href="/">
            <img src="{{asset('img/favicon.ico')}}" alt="" width="45" class="d-inline-block align-text-top">
            Troqueles<b class="fs-1">JC</b>
          </a>
        </li>
        
      </ul>

      <a class="nav-link disabled text-warning" href="#">Usuario</a>
      
      <div style="margin-right: 10%">        
        <form class="form-inline my-2 my-lg-0" action="#" method="post">
          @csrf
          <button class="btn btn-outline- my-2 my-lg-0 text-light" type="submit">Cerrar sesion</button>
        </form>
      </div>
        
    </div>
  </nav>