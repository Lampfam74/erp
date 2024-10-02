@extends('../admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}
<div class="container-fluid p-5">
        <a href="#home" class="btn btn-success" data-toggle="tab">CDD</a>
        <a href="#profile" class="btn btn-success" data-toggle="tab">CDI</a>
        <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#remises">
          Remises
       </button>
       <br>
       <br>
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
       @if(count($errors) > 0)
               @foreach( $errors->all() as $message )
                 <div class="alert alert-danger display-hide">
                 <button class="close" data-close="alert"></button>
                 <span>{{ $message }}</span>
                 </div>
               @endforeach
             @endif
    {{-- <table id="tabsous" class="table align-middle mb-0 bg-white ">
        <thead class="bg-warning">
            <tr>
                <th class="l1">Structure</th>
                <th class="l1">Telephone</th>

                <th class="l1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $per)
            <tr>
                <td> {{$per->structure}} </td>
                <td> {{$per->telephone}}</td>

                <td><a href="{{route('clients.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">plus</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> --}}
    <div class="well">

        <div id="myTabContent" class="tab-content container">
          <div class="tab-pane active in" id="home">
            <form id="tab" action="{{ route('cdd.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="client_id" value="{{$id}}" id="">
                <label>debut</label>
                <input type="date" name="debut" value="<?php echo Date('Y-m-d')?>" class="input-xlarge form-control">
                <label class="label">Forfait</label>
                <select name="forfait" id="" class="form-control">
                    @forelse ($forfaits as $for)
                    <option value="{{ $for->id }}">{{ $for->tarif }} F cfa : {{ $for->unite}}</option>
                    @empty
                       <option value=""> pas de forfaits disponible</option>
                    @endforelse

                </select>
                <label class="label">type Paiement</label>
                <select name="typepaiement" id="" class="form-control">
                    @forelse ($typepaiement as $for)
                    <option value="{{ $for->libelle }}">{{ $for->libelle }} </option>
                    @empty
                       <option value=""> pas de nouvelles types d'especes</option>
                    @endforelse
                </select>
                <label>Durée</label>
                <input type="number" name="duree"  class="input-xlarge form-control">
                  <label>Produits</label>
                 <input type="text" name="produit"  class="input-xlarge form-control">
                <label class="label">Local</label>
                <select name="local" id="" class="form-control">
                    @forelse ($locals as $for)
                    <option value="{{ $for->id }}">{{ $for->typeLocale }} : {{ $for->ficheTechnique }} </option>
                    @empty
                       <option value="">  pas d'offres</option>
                    @endforelse
                </select>
               <br>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
          <div class="tab-pane fade" id="profile">
            <form id="tab2" action="{{ route('cdi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="client_id" value="{{$id}}" id="">
                <label>Date Paiement</label>
                <input type="date" name="dateencaisse" value="<?php echo Date('Y-m-d')?>" class="input-xlarge form-control">
                <label>Nombre de Magasin</label>
                  <input type="number" name="nombre" value="1" class="input-xlarge form-control">
                {{-- loyer remise --}}
                <label> Local</label>
                                <select name="local_id" id="" class="form-control" >
                                                    @forelse ($locals as $for)
                                                    <option value="{{ $for->id }}">{{ $for->typeLocale }} : {{ $for->ficheTechnique }}  </option>
                                                    @empty
                                                       <option value="">  pas d'offres</option>
                                                    @endforelse
                                                </select>
                                            <label> SERIE </label>
                                                                            <select name="serie" id="" class="form-control" >

                                                                                                @forelse ($serie as $for)
                                                                                                <option value="{{ $for->description }}">{{ $for->identifiants }} : {{ $for->description }}  </option>
                                                                                                @empty
                                                                                                   <option value="">  pas d'offres</option>
                                                                                                @endforelse
                                                                                            </select>
                <label> Remise sur Loyer</label>
                <select name="loyeRemise" id="" class="form-control">
                         <option value="pas de Remise">  pas de Remise</option>
                                    @forelse ($remises as $for)
                                    <option value="{{ $for->value }}">{{ $for->date }} : {{ $for->value }} % </option>
                                    @empty
                                       <option value="">  pas d'offres</option>
                                    @endforelse
                                </select>

               <br>
                <div>
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
          </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal Remises -->
<div class="modal fade" id="remises" tabindex="-1" aria-labelledby="remises" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header">
                <h5 class="modal-title" id="remises">Ajout d'un Nouveau clients</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                color:black;
                 ">
                <form action="{{ route('remises.store') }}" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$id}}" class="form-control"  id="exampleFormControlInput1" name="client_id" placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" value="<?php echo Date('Y-m-d')?>" class="form-control"  id="exampleFormControlInput1" name="date" placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">Valeur Remises en %</label>
                    <input type="range" value="25" min="10" max="100" step="5" class="form-control " style="color: black" id="exampleFormControlInput1" name="value"
                    oninput="rangeValue.innerText = this.value">
                        <p id="rangeValue" style="color: black" >25</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
</div>
<!-- Modal Contrats -->
<div class="modal fade" id="contrats" tabindex="-1" aria-labelledby="contrats" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header">
                <h5 class="modal-title" id="contrat">Ajout d'un Nouveau clients</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="{{ route('clients.store') }}" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">structure</label>
                    <input type="text" class="form-control" class="@error('structure') is-invalid @enderror" id="exampleFormControlInput1" name="structure" placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">telephone</label>
                    <input type="tel" class="form-control" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone" placeholder="">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
</div>
<!-- Modal exampleModal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content container">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un Nouveau clients</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="
                padding: 50px;
                width:  auto;
                 ">
                <form action="" method="POST" style=" color: white;" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">structure</label>
                    <input type="text" class="form-control" class="@error('structure') is-invalid @enderror" id="exampleFormControlInput1" name="structure" placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">telephone</label>
                    <input type="tel" class="form-control" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone" placeholder="">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save </button>
                    </div>
                </form>


            </div>
        </div>
</div>

    @endsection

