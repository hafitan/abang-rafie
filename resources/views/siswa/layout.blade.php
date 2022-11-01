<!DOCTYPE html>
<html>
<head>
  <br>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark m-10 Background-color:black">
        <div class="container">
          <a class="navbar-brand" style="margin-left: 2px" href="{{ url('home') }}"><h3>Admin</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="margin-left: 260v>px"  href="{{ url('siswa') }}">Data Kebutuhan</a>
                  </li>


      <!-- Nav Item - Login -->
      <li class="nav-item">
        <a class="btn btn-danger"style="margin-left: 700px" href="{{ route('logout') }}"role="button" onclick="event.preventDefault();
        document.getElementById('log').submit();return confirm('yakin ingin Log Out');" >
        <i class="fas fa-fw fa-arrow-right"></i>
          {{ __('logout') }}</a>

          <form id="log" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
                </li>
            </ul>
          </div>
        </div>
      </nav>
</button>


<div class="container">
    <br>
    <br>
    @yield('content')
</div>
   
</body>
</html>