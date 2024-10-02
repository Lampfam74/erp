@extends('admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}

<div class="container-fluid p-5">
    <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Ajouts d'un Association

    </button>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
@if(session()->has('data'))
<div class="alert alert-success">
    {{ session()->get('data') }}
</div>
@endif
    <table id="tabsous" class="table align-middle mb-0 bg-light ">
        <thead class="bg-warning">
            <tr>

                <th class="l1">Identifiant</th>
                <th class="l1" >Fiche Technique</th>
                <th class="l1" >Quantite Disponible</th>
                <th class="l1" > Quantite Affecter</th>
                <th class="l1" >pas de porte</th>
                <th class="l1" >Caution</th>
                <th class="l1" > Charge Locative</th>
                <th class="l1" >Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offre as $per)
            <tr>
                <td>{{$per->typeLocale}}</td>
                <td> {{$per->ficheTechnique}} </td>
                <td> {{$per->quantiteDinsponible}}</td>
                <td>{{$per->quantiteAffecter}}</td>
                <td>{{$per->PasDePorte}}</td>
                <td>{{$per->caution}}</td>
                <td>{{$per->chargeLocative}}</td>

                <td><a href="{{route('offres.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">Editer </a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'une Nouvelles association</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="{{ route('offres.store') }}" method="POST" style="bg-color: rgb(0, 0, 0);" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">Type Local</label>
                 <select name="typeLocale" id="" class="form-control" multiple>
                     <option value="">  pas de Remise</option>
                     @forelse ($serie as $for)
                     <option value="{{ $for->identifiants }}">{{ $for->identifiants }}   </option>
                     @empty
                        <option value="">  pas d'offres</option>
                     @endforelse
                 </select>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">Fiche Technique</label>
                  <select name="ficheTechnique" id="" class="form-control" multiple>
                                       <option value="">  pas de Remise</option>
                                       @forelse ($serie as $for)
                                       <option value="{{ $for->mesure }}">{{ $for->mesure }}   </option>
                                       @empty
                                          <option value="">  pas d'offres</option>
                                       @endforelse
                  </select>
                    <label for="exampleFormControlInput1" class="form-label">quantite Dinsponible</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="quantiteDinsponible"
                        placeholder="">

                    <label for="exampleFormControlInput1" class="form-label">quantite Affecter</label>
                    <input type="tel" class="form-control"  id="exampleFormControlInput1" name="quantiteAffecter"
                        placeholder="">
                        <label for="exampleFormControlInput1" class="form-label">Pas De Porte</label>
                        <input type="tel" class="form-control"  id="exampleFormControlInput1" name="PasDePorte"
                            placeholder="">
                            <label for="exampleFormControlInput1" class="form-label">Caution</label>
                            <input type="tel" class="form-control"  class="@error('caution') is-invalid @enderror" id="exampleFormControlInput1" name="caution"
                                placeholder="">
                                <label for="exampleFormControlInput1" class="form-label">Charge Locative</label>
                                <input type="tel" class="form-control"  class="@error('chargeLocative') is-invalid @enderror" id="exampleFormControlInput1" name="chargeLocative"
                                    placeholder="">


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
