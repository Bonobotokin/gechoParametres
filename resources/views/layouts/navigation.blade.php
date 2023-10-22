<div class="main-menu-area mg-tb-20">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                <li id="homes"><a href="{{ route('home') }}"><i class="notika-icon notika-house"></i> Acceuil</a>
                </li>
                <li id="caisses"><a data-toggle="tab" href="#Caisse"><i class="notika-icon notika-edit"></i> Caisse</a>
                </li>
                <li id="econome"><a data-toggle="tab" href="#Economes"><i class="notika-icon notika-edit"></i> Econome</a>
                </li>
                <li id="laboratoire"><a data-toggle="tab" href="#Laboratoire"><i class="notika-icon notika-edit"></i> Laboratoire</a>
                </li>
                <li id="magasins"><a data-toggle="tab" href="#Magasin"><i class="notika-icon notika-edit"></i> Magasin</a>
                </li>
                <li id="medecin"><a data-toggle="tab" href="#Medecin"><i class="notika-icon notika-edit"></i> Medecin</a>
                </li>
                <li id="parametres"><a href="{{ route('parametres') }}"><i class="notika-icon notika-settings"></i> Parametres</a>
                </li>
                <li id="pharmacie"><a data-toggle="tab" href="#Pharmacie"><i class="notika-icon notika-edit"></i> Pharmacie</a>
                </li>
                <li id="Rhs"><a data-toggle="tab" href="#Rh"><i class="notika-icon notika-edit"></i> RH</a>
                </li>
                <li id="receptioniste"><a data-toggle="tab" href="#Receptioniste"><i class="notika-icon notika-edit"></i> Receptioniste</a>
                </li>
            </ul>
            <div class="tab-content custom-menu-content">

                <div id="Rh" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('personnel.liste')}}">Liste Personels</a>
                        </li>
                        <li><a href="{{ route('personnel.nouveaux') }}">Nouveaux Personnel</a>
                        </li>
                        <li><a href="{{ route('personnels.abscent.liste') }}">Abscences</a>
                        </li>
                    </ul>
                </div>
                <div id="Economes" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('produits.achat')}}">Achats</a>
                        </li>
                        <li><a href="">Livraison</a>
                        </li>
                        <!-- <li><a href="{{ route('personnel.nouveaux') }}">Livraison</a>
                        </li> -->
                        <li><a href="{{ route('personnels.payement') }}">Payement Personnel</a>
                        </li>
                        <li><a href="{{ route('patient.bulletin') }}">Patient bulletin</a>
                        </li>
                    </ul>
                </div>
                <div id="Caisse" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('all.patient.payeable')}}">Payements</a>
                        </li>
                        <li><a href="{{route('livres.caisses')}}">Livres de caisse</a>
                        </li>
                        <!-- <li><a href="{{ route('demandeListeDecaissement') }}">Demande</a>
                                </li> -->
                    </ul>
                </div>
                <div id="Magasin" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('index.produits')}}">Produits</a>
                        </li>
                        <li><a href="{{route('depots')}}">Depots</a>
                        </li>
                        <li><a href="{{route('depots.mmouvement')}}">Mouvement Depots</a>
                        </li>
                        <li><a href="{{ route('index.achat.produits') }}">Achat</a>
                        </li>
                        <li><a href="{{ route('liste.reception') }}">Livraison</a>
                        </li>
                        <li><a href="{{ route('commandeAll') }}">Commande</a>
                        </li>
                    </ul>
                </div>
                <div id="Pharmacie" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('distribution')}}">Distribution</a>
                        </li>
                        <li><a href="{{ route('pharmacie.stock') }}">Stock</a>
                        </li>
                        <li><a href="{{ route('livraison_pharmacie.index') }}">Livraison</a>
                        </li>
                        <li><a href="{{ route('commande.index') }}">Commande</a>
                        </li>
                    </ul>
                </div>
                <div id="Receptioniste" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{ route('liste.patient') }}">Liste Patient</a>
                        </li>
                        <li><a href="{{route('liste.consultation')}}">Liste des Consultation</a>
                        </li>
                    </ul>
                </div>
                <div id="Medecin" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('get.all.consultation')}}">Consultation</a>
                        </li>
                        <li><a href="{{ route('liste.patient') }}">Liste Patient</a>
                        </li>
                    </ul>
                </div>
                <div id="Laboratoire" class="tab-pane notika-tab-menu-bg animated flipInX">
                    <ul class="notika-main-menu-dropdown">
                        <li><a href="{{route('laboratoire.examen.liste')}}">Patient Examen</a>
                        </li>
                        <li><a href="{{ route('liste.patient') }}">Liste Patient</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>