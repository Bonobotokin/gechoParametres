@extends('layouts.app')

@section('style')

<link rel="stylesheet" href="{{ asset ('assets/css/jquery.dataTables.min.css')}}">
@endsection

@section('content')
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="data-table-list">
            <div class="basic-tb-hd">
                <h2>Liste Personnels</h2>
            </div>

            <div class="btn-list">

                <a type="button" href="{{ route('personnel.create') }}" class="btn btn-primary waves-effect">Nouveaux Personnels</a>


                <a type="button" href="{{ route('personnel.create') }}" class="btn btn-primary waves-effect">Nouveaux Roles</a>


                <a type="button" href="{{ route('personnel.create') }}" class="btn btn-primary waves-effect">Nouveaux Fonctions</a>
            </div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th> Image </th>
                            <th> Nom & prenom </th>
                            <th> Telephone </th>
                            <th> Fonctions </th>
                            <th> Comptes </th>
                            <th> Action </th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($allPersonnels as $personnel)
                        <tr>
                            <td class="py-1">
                                @if($personnel['sexe'] == FALSE)
                                <img src="{{asset('assets/images/faces-clipart/pic-3.png')}}" alt="image">
                                @else
                                <img src="{{asset('assets/images/faces-clipart/pic-8.png')}}" alt="image">
                                @endif
                            </td>
                            <td> {{$personnel['nom']}} </td>
                            <td>
                                <p>
                                    @if(!is_null($personnel['telephone_1']))
                                    0{{$personnel['telephone_1']}}
                                    @endif
                                </p>
                                <p>
                                    @if(!is_null($personnel['telephone_2']))
                                    0{{$personnel['telephone_2']}}
                                    @endif
                                </p>
                            </td>
                            <td> {{$personnel['fonction']}} </td>
                            <td>
                                <p>
                                    Nom : {{ $personnel['pseudo'] }}
                                </p>
                                <p>
                                    Email : {{ $personnel['email'] }}
                                </p>
                                <p>
                                    Role : {{ $personnel['role'] }}
                                </p>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Plus de details
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item">Profil</a>
                                        <a class="dropdown-item">Modifier</a>
                                        <a class="dropdown-item">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th> Image </th>
                            <th> Nom & prenom </th>
                            <th> Telephone </th>
                            <th> Fonctions </th>
                            <th> Action </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
<script>
    window.onload = () => {
        var currentUrl = window.location.href.split('/')[3]
        console.log(currentUrl);
        if (currentUrl == "home") {
            var homes = document.getElementById("homes");
            var Home = document.getElementById("Home");
            homes.setAttribute('class', 'active');
            Home.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Rh") {
            var rh = document.getElementById("Rhs");
            var contentRh = document.getElementById("Rh");
            rh.setAttribute('class', 'active');
            contentRh.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "parametres") {
            var parametres = document.getElementById("parametres");
            parametres.setAttribute('class', 'active');
        } else if (currentUrl == "Econome") {
            var econome = document.getElementById("econome");
            var Economes = document.getElementById("Economes");
            econome.setAttribute('class', 'active');
            Economes.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Caisse") {
            var caisses = document.getElementById("caisses");
            var Caisse = document.getElementById("Caisse");
            caisses.setAttribute('class', 'active');
            Caisse.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Magasin") {
            var magasins = document.getElementById("magasins");
            var Magasin = document.getElementById("Magasin");
            magasins.setAttribute('class', 'active');
            Magasin.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Pharmacie") {
            var pharmacie = document.getElementById("pharmacie");
            var Pharmacies = document.getElementById("Pharmacie");
            pharmacie.setAttribute('class', 'active');
            Pharmacies.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Receptioniste") {
            var receptioniste = document.getElementById("receptioniste");
            var Receptioniste = document.getElementById("Receptioniste");
            receptioniste.setAttribute('class', 'active');
            Receptioniste.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Medecin") {
            var medecin = document.getElementById("medecin");
            var Medecin = document.getElementById("Medecin");
            medecin.setAttribute('class', 'active');
            Medecin.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        } else if (currentUrl == "Laboratoire") {
            var laboratoire = document.getElementById("laboratoire");
            var Laboratoire = document.getElementById("Laboratoire");
            medecin.setAttribute('class', 'active');
            Laboratoire.setAttribute('class', 'tab-pane in active notika-tab-menu-bg animated flipInX');
        }
    };
</script>
@endsection