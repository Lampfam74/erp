@extends('./admin.nav')
@section('contents')
<div class="container">
    <div class="container row">
        <div class="col-sm-6 justify-contents-center">
              <h4> Profil Operateur en CDI</h4>
                <ul class="list-group">
                  <li class="list-group-item">Structure : {{$clients->structure}}</li>
                  <li class="list-group-item">Numero Telephone : {{$clients->telephone}} </li>
                   <div class="dropdown-divider"></div>
               @if($cdds )
               @if($diffInDays > 5)
                                  <li class="list-group-item list-group-item-success">CDD En Cours ({{$diffInDays}})</li>
                              @else
                                  <li class="list-group-item list-group-item-danger">CDD Presque Terminer ({{$diffInDays}})</li>
                              @endif

                                 <li class="list-group-item">Date Debut : {{$cdds->debut}}</li>
                                 <li class="list-group-item">Date Fin : {{$cdds->dateFin}}</li>
                                 <li class="list-group-item">Produits : {{$cdds->produit}}</li>
                                 <li class="list-group-item">Local : {{$local->typeLocale}} - {{$local->ficheTechnique}}</li>
                                 <li class="list-group-item">Type de payement  : {{$cdds->typePaiement}}</li>
                                 <li class="list-group-item">forfait : {{$forfait->tarif}} par {{$forfait->unite}}</li>
                                 <li class="list-group-item">Duree : {{$cdds->duree}} *  {{$forfait->unite}}</li>
               @endif
                </ul>


        </div>
        <div class="col-sm-6 justify-contents-center">
             @if($cdis)
                        <h4>Contrat a Duree Indetermine</h4>
                                      <ul class="list-group">
                                                      <li class="list-group-item">Magasin : {{$local_CDI['typeLocale']}}</li>
                                                      <li class="list-group-item">fiche Technique : {{$local_CDI['ficheTechnique']}}</li>
                                                      <li class="list-group-item">pas de Porte : {{$local_CDI['PasDePorte']}} F CFA</li>
                                                      <li class="list-group-item">caution : {{$local_CDI['caution']}} F CFA</li>
                                                      <li class="list-group-item">charge Locative : {{$local_CDI['chargeLocative']}} F CFA</li>
                                                      <li class="list-group-item">Quantite Affecter : {{$local_CDI['quantiteAffecter']}}</li>
                                                      <li class="list-group-item">MOntant Total Mensuel : {{$local_CDI['quantiteAffecter']*$local_CDI['chargeLocative']}} F CFA</li>
                                                      <li class="list-group-item">Serie : {{$cdis->serie}} </li>
                                                       <div class="dropdown-divider"></div>
                                                      <li class="list-group-item">Remise en %: {{$cdis->loyeRemise}} </li>
                                                      <li class="list-group-item">Date : {{$cdis->dateencaisse}}</li>
                                                      <li class="list-group-item">Vestibulum at eros</li>
                                      </ul>
                        @endif
        </div>
    </div>
</div>
@endsection
