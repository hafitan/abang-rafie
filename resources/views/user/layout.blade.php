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
          <a class="navbar-brand" style="margin-left: 2px" href="students">Kebutuhan Tambahan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="margin-left: 260v>px" href="students">Data Pemohon</a>
                
              </li>
              
              <a class="btn btn-primary" style="margin-left: 640px"href="login" role="button" >login</a>
              {{-- <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="needs">Kebutuhan</a> --}}
                </li>
            </ul>
          </div>
        </div>
      </nav>
</button>
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-bordered">
                    <h1>Selamat datang User </h1>         
                    <br>
                    <span>website list kebutuhan expost inport</span>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <br>
    <br>
    @yield('content')
</div>
   
</body>
</html>