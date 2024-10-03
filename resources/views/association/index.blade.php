@extends('admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}

<div class="container-fluid p-5">
     @if(Auth::user()->profil === 'DC' || Auth::user()->profil === 'RC')
    <button type="button" class="btn btn-success" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Ajouts d'un Association

    </button>
@endif
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

                <th class="l1">Libelle Entreprises</th>
                <th class="l1" >Activite</th>
                <th class="l1" >Adresse</th>
                <th class="l1" > Numero Telephone</th>
                 @if(Auth::user()->profil === 'DC' || Auth::user()->profil === 'RC')
                <th class="l1" >Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($association as $per)
            <tr>
                <td>{{$per->libelle}}</td>
                <td> {{$per->activite}} </td>
                <td> {{$per->adresse}}</td>
                <td>{{$per->telephone}}</td>
          @if(Auth::user()->profil === 'DC' || Auth::user()->profil === 'RC')
                <td><a href="{{route('association.show',$per->id)}}" class="btn btn-link btn-sm btn-rounded">Editer </a></td>
          @endif
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
                <form action="{{ route('association.store') }}" method="POST" style="bg-color: rgb(0, 0, 0);" enctype="multipart/form-data">
                    @csrf
                    <label for="exampleFormControlInput1" class="form-label">Structure</label>
                    <input type="text" class="form-control" class="@error('libelle') is-invalid @enderror" id="exampleFormControlInput1" name="libelle"
                        placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">Activite</label>
                    <input type="text" class="form-control" class="@error('activite') is-invalid @enderror" id="exampleFormControlInput1" name="activite"
                        placeholder="">
                    <label for="exampleFormControlInput1" class="form-label">Adresse</label>
                    <input type="text" class="form-control" class="@error('adresse') is-invalid @enderror" id="exampleFormControlInput1" name="adresse"
                        placeholder="">

                    <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                    <input type="tel" class="form-control"  pattern="[[0-9]{9}]" class="@error('telephone') is-invalid @enderror" id="exampleFormControlInput1" name="telephone"
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
