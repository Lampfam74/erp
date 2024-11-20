@extends('admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}

<div class="container-fluid p-5">
    <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Ajouts d'un Clients

    </button>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
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

                {{-- <th class="l1">Date Paiement</th> --}}
                <th class="l1" >Structure</th>
                <th class="l1" >Telephone</th>
                {{-- <th class="l1" > Type Local</th> --}}
                 <th class="l1" >Date debut</th>
                <th class="l1">date Fin </th>
                <th>Nombre jours restant</th>
                <th class="l1" >prix unitaire</th>
                <th class="l1" >forfait</th>
                <th class="l1" > Motant Total </th>
                <!-- <th class="l1" >Caution</th>  -->
                <th class="l1" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cdds as $per)
            <tr>
                {{-- <td>{{$per->datePaiment}}</td> --}}
                @foreach ($clients as $c)
                @if ($c->id === $per->client_id)
                <td> {{$c->structure}} </td>
                <td> {{$c->telephone}}</td>
                @endif
                @endforeach

                {{-- <td>{{$per->local}}</td> --}}
                <td>{{$per->debut}}</td>
                <td>{{$per->dateFin}}</td>
                <td>{{floor(strtotime($per->dateFin) - strtotime(date('Y-m-d')))/(86400)}}</td>
                @foreach ($forfaits as $f)
                @if ($f->id == $per->forfait)
                <td> {{$f->tarif}} </td>
                <td> {{$per->duree}}* {{$f->unite}}</td>
                <td> {{$per->duree*$f->tarif}} fcfa</td>
                @endif
                @endforeach

                <td><a href="{{route('cdd.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">plus</a></td>
                @empty
                <td colspan="7">Cdd vide</td>
            </tr>


            @endforelse
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
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un Nouveau clients</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="{{ route('clients.store') }}" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    {{-- <label for="exampleFormControlInput1" class="form-label">Date Paiement</label>
                    <input type="date" class="form-control" class="@error('datePaiment') is-invalid @enderror" id="exampleFormControlInput1" name="datePaiment"
                        placeholder=""> --}}
                    <label for="exampleFormControlInput1" class="form-label">structure</label>
                    <input type="text" class="form-control" class="@error('structure') is-invalid @enderror" id="exampleFormControlInput1" name="structure"
                        placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">telephone</label>
                    <input type="tel" class="form-control" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone"
                        placeholder="">
                        {{-- <label for="exampleFormControlInput1" class="form-label">Categorie</label>
                        <select class="browser-default custom-select form-select" name="local">
                            <option value="A-A1">A-A1</option>
                            <option value="A-A2">A-A2</option>
                          </select>
                          <br>
                          <label for="exampleFormControlInput1" class="form-label">Local</label>
                          <select class="browser-default custom-select form-select" name="categorie">
                            <option value="kiosque">Kiosque</option>
                            <option value="Magazin simple">magazin simple</option>
                          </select>
                          <br>
                          <label for="exampleFormControlInput1" class="form-label">montant</label>
                          <input type="text" class="form-control" class="@error('montantEncaisse') is-invalid @enderror" id="exampleFormControlInput1" name="montantEncaisse"
                              placeholder="">
                              <br>
                              <div class="slider">
                              <label for="exampleFormControlInput1" class="form-label">Remise</label>
                          <input type="range" value="25" min="10" max="100" step="5" class="@error('remise') is-invalid @enderror form-control " id="exampleFormControlInput1" name="remise"
                          oninput="rangeValue.innerText = this.value">
                              <p id="rangeValue">25</p>
                            </div>
                              <label for="exampleFormControlInput1" class="form-label">Pas de Porte</label>
                              <input type="text" class="form-control" class="@error('PasDePorte') is-invalid @enderror" id="exampleFormControlInput1" name="PasDePorte"
                                 >
                              <label for="exampleFormControlInput1" class="form-label">Facilite paiement</label>
                              <input type="text" class="form-control" class="@error('faciliteDePayment') is-invalid @enderror" id="exampleFormControlInput1" name="faciliteDePayment"
                                  placeholder="">
                                  <label for="exampleFormControlInput1" class="form-label">caution</label>
                          <input type="text" class="form-control" class="@error('caution') is-invalid @enderror" id="exampleFormControlInput1" name="caution"
                              placeholder=""> --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
