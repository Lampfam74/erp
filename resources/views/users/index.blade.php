@extends('admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}

<div class="container-fluid p-5">
    <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        new Users

    </button>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
@if(session()->has('data'))
<div class="alert alert-danger">
    {{ session()->get('data') }}
</div>
@endif
    <table id="tabsous" class="table align-middle mb-0 bg-white ">
        <thead class="bg-warning">
            <tr>
                <th class="l1" >name</th>
                <th class="l1" >Email</th>
                <th class="l1" >profil</th>
                <th class="l1" > statut</th>
                <th class="l1" > plus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $per)
            <tr>
                <td>{{$per->name}}</td>
                <td> {{$per->email}} </td>
                <td>{{$per->profil}}</td>
                <td>@if ($per->statut == true)
                   <span><a href="{{route('users.edit',$per->id)}}">Activer</a></span>
                @endif
                @if ($per->statut == false)
                <span><a href="{{route('users.edit',$per->id)}}">Desactiver</a></span>
                @endif
            </td>


                <td><a href="{{route('users.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">Editer </a></td>
            </tr>
            @endforeach
        </tbody>
        {{-- <script>
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
                                                        orderable : false,
                                                        targets : 4
                                                    } ]
                                                });
                                $('.dataTables_length').addClass(
                                        'bs-select');
                            });
        </script> --}}
    </table>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'une Nouvelle Utilisateur</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                 <form method="POST" action="{{ route('users.store') }}">
          @csrf
            <div class="form-group">
              <input type="name" class="form-control" name="name" placeholder="name" :value="old('name')">
            </div>
            <br>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" :value="old('email')">
            </div>
            <br>
            <div class="form-group">
                <select class="form-select form-control" name="profil"
							required aria-label="Default select example">
							<option value="DC">Directrice Commercial </option>
							<!-- <option value="RC">Responsable Commercial</option> -->
							<option value="RC">Responsable Commercial</option>
							<option value="AC">Agent Commercial</option>
							<option value="DE">Directeur Exploitation</option>
                            <option value="RE" >Responsable  Exploitation</option>
							<option value="CC">Chef Comptable</option>
							<option value="AE">Agent Exploitation</option>
							<option value="autres">autres</option>
				</select>
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
              </div>
              <br>
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirmation Mot de passe">
              </div>
              <br>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
            </div>
            <br>
            <div class="form-group forget-password">
                <a href="{{ route('login') }}">Se connecter </a>
            </div>
          </form>
          @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

            </div>
        </div>
    </div>

@endsection
