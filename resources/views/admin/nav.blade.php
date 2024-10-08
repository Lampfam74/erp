<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
<link
href="/css/all.min.css"
rel="stylesheet"
/>
<link
href="./bootstrap/css/bootstrap.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="/css/mdb.min.css"
rel="stylesheet"
/>
<link
href="/css/jquery.dataTables.min.css"
rel="stylesheet"
/>

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
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                 <li class="nav-item">
                                   <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                                 </li>
                              <li class="nav-item">
                               <a class="nav-link" href="{{route('clients.index')}}">Clients</a>
                                </li>

 @if(Auth::user()->profil === 'DC' || Auth::user()->profil === 'RC')


                     <li class="nav-item">
                       <a class="nav-link" href="{{route('typepaiement.index')}}">Mode paiements</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('forfaits.index')}}">Forfaits</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('association.index')}}">Association</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('offres.index')}}">Services</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="{{route('local.index')}}">Local</a>
                     </li>
@endif
                                @if(Auth::user()->profil==='AC')
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('typepaiement.index')}}">Visite</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('forfaits.index')}}">Forfaits Disponible</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('association.index')}}">Association Partenaire</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('offres.index')}}">Grille Tarifaire</a>
                                           </li>


                                 @endif
                                 @if(Auth::user()->profil==='CC')
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('association.index')}}"> Abonnements GGP</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('offres.index')}}">Grille Tarifaire</a>
                                           </li>


                                 @endif
                                 @if(Auth::user()->profil==='DE'||Auth::user()->profil==='RE')
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('typepaiement.index')}}">Liste Des CDI</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('forfaits.index')}}">Liste Des CDD</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('association.index')}}"> Abonnements GGP</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('offres.index')}}">Grille Tarifaire</a>
                                           </li>


                                 @endif
                                 @if(Auth::user()->profil==='AE')
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('typepaiement.index')}}">Liste Des CDI</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('forfaits.index')}}">Liste Des CDD</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('association.index')}}"> Abonnements GGP</a>
                                           </li>
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('offres.index')}}">Grille Tarifaire</a>
                                           </li>


                                 @endif
                                 @if(Auth::user()->profil==='superadmin')
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('users.index')}}">User</a>
                                           </li>
                                           <!-- <li class="nav-item">
                                             <a class="nav-link" href="{{route('forfaits.index')}}">new user</a>
                                           </li> -->
                                           <!-- <li class="nav-item">
                                             <a class="nav-link" href="{{route('clients.index')}}"> CLients</a>
                                           </li> -->
                                           <li class="nav-item">
                                             <a class="nav-link" href="{{route('offres.index')}}">Grille Tarifaire</a>
                                           </li>


                                 @endif

       </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
       <div class="d-flex align-items-center">
                           <div class="dropdown d-inline-block ml-2">
                                  <a  class="header-item waves-effect" style="color:aliceblue"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-2.jpg"
                                          alt=""> --}}
                                      <span class="d-none d-sm-inline-block ml-1" style="color:black">
                                      {{-- {{ Auth::user()->prenom }}  --}}
                                      {{ Auth::user()->name }}</span>
                                      <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">

                                      <a class="dropdown-item d-flex align-items-center justify-content-between"
                                          href="{{route('profile.edit')}}">
                                          {{ __('Profile') }}

                                      </a>


                                      <form method="POST" action="{{ route('logout') }}">
                                           @csrf
                                      <a class="dropdown-item d-flex align-items-center justify-content-between"
                                      href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                                           {{ __('Log Out') }}
                                      </a>
                                      </form>


                                  </div>
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
src="/js/jquery.min.js"
></script>
<script
type="text/javascript"
src="/js/bootstrap.min.js"
></script>
<script
type="text/javascript"
src="/js/jquery.dataTables.min.js"
></script>
  <script
  type="text/javascript"
  src="/js/mdb.min.js"
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
