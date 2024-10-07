@extends('admin.nav')
@section('contents')

@if (Auth::user()->profil==='DC' || Auth::user()->profil==='RC')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Administrateur</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                        <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">Nombres de Prof</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$count_ticket}} --}}1
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">Nombre de d'Apprenant</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$count_typeticket}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-6">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">le Nombre de Promo</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            {{-- {{$record}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div>
            <!--end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-6">
                        <span class="badge badge-soft-primary float-right">All</span>
                        <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                               {{-- {{$count_personnals}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>

@endif
@if (Auth::user()->profil==='AC')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Administrateur</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                            <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombres de Prof</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_ticket}} --}}1
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombre d'Apprnant</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_typeticket}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Le Nombre de Promo</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$record}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">All</span>
                            <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   {{-- {{$count_personnals}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
</div>
@endif
@if (Auth::user()->profil==='DE' || Auth::user()->profil==='RE')
<div class="container">
    <div class="row">
        <br>
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Administrateur</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                        <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">Nombres de Prof</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$count_ticket}} --}}1
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">Nombre de d'Apprenant</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$count_typeticket}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-6">
                        <span class="badge badge-soft-primary float-right">all</span>
                        <h5 class="card-title mb-0">le Nombre de Promo</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                            {{-- {{$record}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div>
            <!--end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-6">
                        <span class="badge badge-soft-primary float-right">All</span>
                        <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                               {{-- {{$count_personnals}} --}}1
                            </h2>
                        </div>
                        <!-- <div class="col-4 text-right">
                            <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div> -->
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>

@endif
@if (Auth::user()->profil==='AE')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Administrateur</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                            <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombres de Prof</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_ticket}} --}}1
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombre d'Apprnant</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_typeticket}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Le Nombre de Promo</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$record}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">All</span>
                            <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   {{-- {{$count_personnals}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
</div>
@endif
@if (Auth::user()->profil==='CC')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Administrateur</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                            <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombres de Prof</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_ticket}} --}}1
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombre d'Apprnant</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_typeticket}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Le Nombre de Promo</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$record}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">All</span>
                            <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   {{-- {{$count_personnals}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
</div>
@endif
@if (Auth::user()->profil==='superadmin')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Administrateur</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG <sup>SA</sup> </a></li>
                            <li class="breadcrumb-item active">{{ Auth::user()->profil }}</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombres de Prof</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_ticket}} --}}1
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-muted">% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div>
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Nombre d'Apprnant</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    {{-- {{$count_typeticket}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">all</span>
                            <h5 class="card-title mb-0">Le Nombre de Promo</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                {{-- {{$record}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                            </div>
                        </div>
                    </div>
                    <!--end card body-->
                </div>
                <!--end card-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-6">
                            <span class="badge badge-soft-primary float-right">All</span>
                            <h5 class="card-title mb-0">Nombre utilisateur Admin</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                   {{-- {{$count_personnals}} --}}1
                                </h2>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                            </div> -->
                        </div>

                        <div class="progress shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                    <!--end card body-->
                </div><!-- end card-->
            </div> <!-- end col-->
        </div>
</div>
@endif
@endsection
