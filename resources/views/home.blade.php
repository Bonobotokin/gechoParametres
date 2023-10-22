@extends('layouts.app')

@section('title')
Acceuil
@endsection


@section('style')
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="alert-list">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                </button>
                <strong>Bienvenue, </strong> <a href="" class="alert-link">Sur votre Poste de travaille.</a>
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