@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-element-list">

            <div class="basic-tb-hd">
                <h2>Nouveaux Personnels</h2>
            </div>

            <form class="form-sample" action="{{ route('personnels.store') }}" method="POST">
                @csrf
                <p class="card-description"> Information sur les Personnels </p>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" name="personnels[nom_personneles]" placeholder="Nom et prenom" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-star"></i>
                            </div>
                            <div class="nk-int-st">
                                <select name="personnels[sexe_personneles]" class="form-control">
                                    <option value="0">Femme</option>
                                    <option value="1">Homme</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-calendar"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="date" name="personnels[date_naissance_personneles]" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-ip-locator"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" name="personnels[lieu_naissance_personneles]" placeholder="Lieu de naissance">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-star"></i>
                            </div>
                            <div class="nk-int-st">
                                <select name="personnels[situation_matrimoniale_personneles]" class="form-control">
                                    <option value="Celibataire">Celibataire</option>
                                    <option value="Mariee">Mariee</option>
                                    <option value="Fiancee">Fiancee</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-ip-locator"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" name="personnels[adresse_personneles]" placeholder="Adresse">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-phone"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="number" class="form-control" name="personnels[telephone_1_personneles]" placeholder="telephone 1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-phone"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="number" class="form-control" name="personnels[telephone_2_personneles]" placeholder="telephone 2">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="card-description"> Fonctions du Personnels </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <select name="rolePersonnels[fonction_id]" class="form-control">
                                    <option value=" ">Fonction</option>
                                    @foreach($allFonctions as $fonctions)
                                    <option value="{{$fonctions['id']}}">{{$fonctions['designation_fonction']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="number" value="0" class="form-control" name="personnels[salaire]" placeholder="Salaire de base">
                            </div>
                        </div>
                    </div>
                </div>
                <p class="card-description"> Comptes utilisateurs </p>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="text" class="form-control" name="users[name]" placeholder="nom d'utilisateurs">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-edit"></i>
                            </div>
                            <div class="nk-int-st">
                                <input type="password" name="users[password]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group ic-cmp-int">
                            <div class="form-ic-cmp">
                                <i class="notika-icon notika-support"></i>
                            </div>
                            <div class="nk-int-st">

                                <select name="rolePersonnels[role_id]" class="form-control">
                                    <option value=" ">Role</option>
                                    @foreach($allRoles as $role)
                                    <option value="{{$role['id']}}">{{$role['designation_role']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-danger btn-lg btn-block">
                            <i class="mdi mdi-account-multiple-minus "></i>
                            Annuler
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success btn-lg btn-block">
                            <i class="mdi mdi-account-check "></i>
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>
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