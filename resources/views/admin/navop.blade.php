<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link
href="../css/all.min.css"
rel="stylesheet"
/>
<link
href="../bootstrap/css/bootstrap.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="../css/mdb.min.css"
rel="stylesheet"
/>
<link
href="../css/jquery.dataTables.min.css"
rel="stylesheet"
/>
<link href="../css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script> --}}
{{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

    <title>SEMIG-SA| ERP</title>
</head>
<style>
    .slider {
/* position: absolute;
top: 50%;
left: 50%; */
/* transform: translate(-50%,-50%);
width: 500px;
height: 60px;
padding: 30px;
padding-left: 40px;
background: #fcfcfc;
border-radius: 20px;
display: flex;
align-items: center;
box-shadow: 0px 15px 40px #7E6D5766; */
}
.slider p {
font-size: 26px;
font-weight: 600;
font-family: Open Sans;
padding-left: 30px;
color: black;
}
.slider input[type="range"] {
-webkit-appearance:none !important;
width: 300px;
height: 2px;
background: black;
border: none;
outline: none;
}
.slider input[type="range"]::-webkit-slider-thumb {
-webkit-appearance: none !important;
width: 30px;
height:30px;
background: black;
border: 2px solid black;
border-radius: 50%;
cursor: pointer;
}
.slider input[type="range"]::-webkit-slider-thumb:hover {
background: black;
}
</style>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="../img/l1.png"
            height="70px"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}">Remises</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('reservation.index')}}">Contrats</a>
          </li>
    
        </ul> --}}
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        {{-- <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a> --}}
        <div>{{Auth::user()->name}}</div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                       @csrf
                       <div class="nav-link">
                           <input type="submit" class="form-control" value="Se déconnecter">
                       </div>
                   </form>

        <!-- Notifications -->
        <div class="dropdown">
          {{-- <a
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a> --}}

        </div>

      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <div class="row" style="overflow-x:auto;">
    @yield('contents')
  </div>
  <!-- MDB -->
<script
type="text/javascript"
src="../js/jquery.min.js"
></script>
<script
type="text/javascript"
src="../js/bootstrap.min.js"
></script>
<script
type="text/javascript"
src="../js/jquery.dataTables.min.js"
></script>
  <script
  type="text/javascript"
  src="../js/mdb.min.js"
  ></script>
  <script>
    $(document)
            .ready(
                    function() {
                        $('#tabsous')
                                .DataTable(
                                        {
                                            "searching" : true,
                                            "info" : false,
                                            "bLengthChange" : false,
                                            "pageLength" : 10,
                                            "language" : {
                                                "sEmptyTable" : "Aucune donnée disponible dans le tableau",
                                                "sInfoPostFix" : "",
                                                "sInfoThousands" : ",",
                                                "oPaginate" : {
                                                    "sNext" : "Suivant",
                                                    "sPrevious" : "Précédent"
                                                }
                                            },
                                            "aaSorting" : [],
                                            columnDefs : [ {
                                                orderable : true,
                                                targets : 4
                                            } ]
                                        });
                        $('.dataTables_length').addClass(
                                'bs-select');
                    });
</script>
</body>
</html>
