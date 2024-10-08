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
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'une Nouvelle Reservation</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="{{ route('prospecte.store') }}" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">Structure</label>
                    <input type="text" class="form-control" class="@error('structure') is-invalid @enderror" id="exampleFormControlInput1" name="structure"
                        placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="email" class="form-control" class="@error('email') is-invalid @enderror" id="exampleFormControlInput1" name="email"
                        placeholder="">
                    {{-- <label for="exampleFormControlInput1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" class="@error('adresse') is-invalid @enderror" id="exampleFormControlInput1" name="adresse"
                        placeholder=""> --}}

                    <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                    <input type="text" pattern="[[0-9]{9}]" class="form-control" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone"
                        placeholder="">
                        {{-- <label for="exampleFormControlInput1" class="form-label">Ninea</label>
                    <input type="text" class="form-control" class="@error('ninea') is-invalid @enderror" id="exampleFormControlInput1" name="ninea"
                        placeholder=""> --}}
                        <label for="exampleFormControlInput1" class="form-label">Contact</label>
                        <input type="text"  class="form-control" class="@error('contact') is-invalid @enderror" id="exampleFormControlInput1" name="contact"
                            placeholder="">
                            <label for="exampleFormControlInput1" class="form-label">poste</label>
                    <input type="text"  class="form-control" class="@error('poste') is-invalid @enderror" id="exampleFormControlInput1" name="poste"
                        placeholder="">
                        <br>
                          <label for="exampleFormControlInput1" class="form-label">Affecter</label>
                          <select class="browser-default custom-select form-select" name="affecter">
                            <option value="kiosque">Kiosque</option>
                            <option value="Magazin simple">magazin simple</option>
                          </select>
                            <label for="exampleFormControlInput1" class="form-label">Commentaire</label>
                            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
