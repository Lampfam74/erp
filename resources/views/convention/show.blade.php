@extends('../admin.nav')
@section('contents')
{{-- <br><br><br><br><br> --}}
<div class="container-fluid p-5">
    <a href="#home" class="btn btn-success" data-toggle="tab">New Docs</a>
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
        @foreach($errors->all() as $message)
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
                <form id="tab2" action="{{ route('convention.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="client_id" value="{{$client_id}}" id="">
                    <label>Date archive</label>
                    <input type="date" name="date" value="<?php echo Date('Y-m-d')?>"
                        class="input-xlarge form-control">
                       
                    <br>
                    <label> Categorie</label>
                    <select name="categorie" id="" class="form-control">

                        <option value="convention">convention</option>
                        <option value="NINEA">NINEA</option>
                        <option value="CNI">CNI</option>
                    </select>
                    <br>
                    <label>Document</label>
                    <input type="file" id="file" name="filename"  accept=".pdf" maxlength="5120" class="form-control">
                    <br>
                    {{-- loyer remise --}}
                    <input type="submit" value="Ajouter" class="btn btn-primary">
                    <input type="reset" value="annuler" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
  


    @endsection