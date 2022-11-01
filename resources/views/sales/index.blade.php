@extends('admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}

<div class="container-fluid p-5">
    <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Ajouter d'un Personnel

    </button>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
    <table id="tabsous" class="table align-middle mb-0 bg-white ">
        <thead class="bg-warning">
            <tr>

                <th class="l1">Libelle Entreprises</th>
                <th class="l1" >Activite</th>
                <th class="l1" >Adresse</th>
                <th class="l1" > Numero Telephone</th>
                <th class="l1" >Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($association as $per)
            <tr>
                <td>{{$per->libelle}}</td>
                <td> {{$per->activite}} </td>
                <td> {{$per->adresse}}</td>
                <td>{{$per->telephone}}</td>

                <td><a href="{{route('association.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">Editer </a></td>
            </tr>
            @endforeach --}}
        </tbody>
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
                                                        orderable : false,
                                                        targets : 4
                                                    } ]
                                                });
                                $('.dataTables_length').addClass(
                                        'bs-select');
                            });
        </script>
    </table>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un Personnels</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="{{ route('association.store') }}" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">Structure</label>
                    <input type="text" class="form-control" class="@error('libelle') is-invalid @enderror" id="exampleFormControlInput1" name="libelle"
                        placeholder="libelle">
                    <label for="exampleFormControlInput1" class="form-label">Activite</label>
                    <input type="text" class="form-control" class="@error('activite') is-invalid @enderror" id="exampleFormControlInput1" name="activite"
                        placeholder="Activite">
                    <label for="exampleFormControlInput1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" class="@error('adresse') is-invalid @enderror" id="exampleFormControlInput1" name="adresse"
                        placeholder="name@example.com">

                    <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                    <input type="text" class="form-control" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone"
                        placeholder="number">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
