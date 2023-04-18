<?php include_once "ville-benin.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css">
    <title>System-hypo</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .nav-pills li{
            border: 1px solid skyblue;
        }
    </style>
</head>
<body>
    <h1>system-hyp</h1>
    <div class="actions container">
            <div id="accordeon" class="panel-group col-lg-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#faire-demande"  data-parent="#accordeon"  data-toggle="collapse">ENREGISTREZ UNE DEMANDE </a>
                        </h3>
                    </div>

                    <div id="faire-demande" class="panel-collapse collapse in">
                        <div class="panel-body">      
                            <div>
                                <ul class="nav nav-pills">
                                    <li class=""><a href="#demande-nouveau-branchement">Nouveau Branchement</a></li>
                                    <li class=""><a href="#demande-reprise-abonnement">Reprise d'abonnement</a></li>
                                    <li><a href="#demande-deplacement-compteur">Déplacement compteur</a></li>
                                    <li><a href="#demande-vente-compteur">Vente de compteur</a></li>
                                    <li><a href="#demande-extension-reseau">Extension réseau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#faire-devis"  data-parent="#accordeon"  data-toggle="collapse">ENREGISTREZ UN DEVIS </a>
                        </h3>
                    </div>

                    <div id="faire-devis" class="panel-collapse collapse in">
                        <div class="panel-body">          
                            <div>
                                <ul class="nav nav-pills">
                                    <li><a href="#devis-nouveau-branchement">Nouveau Branchement</a></li>
                                    <li><a href="#devis-reprise-abonnement">Reprise d'abonnement</a></li>
                                    <li><a href="#devis-remplacement-compteur">Deplacement compteur</a></li>
                                    <li><a href="#devis-vente-compteur">Vente de compteur</a></li>
                                    <li><a href="#devis-extension-reseau">Extension réseau</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="#voir-donnees"  data-parent="#accordeon"  data-toggle="collapse">VOIR LES DONNEES  : </a>
                        </h3>
                    </div>

                    <div id="voir-donnees" class="panel-collapse collapse in">
                        <div class="panel-body">      
                            <div>
                                <ul class="nav nav-pills">
                                    <li><a href="">compteurs branchés</a></li>
                                    <li><a href="">Abonnement repris</a></li>
                                    <li><a href="">Compteur remplacés</a></li>
                                    <li><a href="">Compteur vendus</a></li>
                                    <li><a href="">Extension réseau éffectué</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
           
            <div class="tab-content container">
                <div class="tab-pane active" id="demande-nouveau-branchement">
                    <legend>Entrez la demande pour un nouveau branchement</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Nom :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Prénoms :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contact 1 :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contact 2 :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Ville :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <?php for ($i = 0; $i < count($villes); $i++):?>
                                            <option value="<?= $villes[$i] ?>"><?= $villes[$i] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Quartier :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Numéro de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Date de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>

                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="demande-reprise-abonnement">
                    <legend>Entrez la demande pour une reprise d'abonnement</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Nom :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Prénoms :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Ville :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <?php for ($i = 0; $i < count($villes); $i++):?>
                                            <option value="<?= $villes[$i] ?>"><?= $villes[$i] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Quartier :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contact :</label>
                                <div class="col-lg-9">
                                    <input type="tel" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Date de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>

                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="demande-deplacement-compteur">
                    <legend>Entrez la demande pour un déplacement de compteur</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Nom :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Prénoms :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Ville :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <?php for ($i = 0; $i < count($villes); $i++):?>
                                            <option value="<?= $villes[$i] ?>"><?= $villes[$i] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Quartier :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contacts :</label>
                                <div class="col-lg-9">
                                    <input type="tel" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Numéro de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Date de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Montant</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>

                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="demande-vente-compteur">
                    <legend>Enregistrez une demande pour une vente de compteur</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Nom :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Prénoms :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Ville :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <?php for ($i = 0; $i < count($villes); $i++):?>
                                            <option value="<?= $villes[$i] ?>"><?= $villes[$i] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Quartier :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contacts :</label>
                                <div class="col-lg-9">
                                    <input type="tel" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Numéro de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Date de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>

                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="demande-extension-reseau">
                    <legend>Entrez la demande pour une extension de réseau</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Nom :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Prénoms :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Ville :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <?php for ($i = 0; $i < count($villes); $i++):?>
                                            <option value="<?= $villes[$i] ?>"><?= $villes[$i] ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Quartier :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Contacts :</label>
                                <div class="col-lg-9">
                                    <input type="tel" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Numéro de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Date de la demande :</label>
                                <div class="col-lg-9">
                                    <input type="date" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>

                        </div>
                    </form>
                </div>

            <!--FORMULAIRE DEVIS NOUVEAU BRANCHEMENT-->
                <div class="tab-pane" id="devis-nouveau-branchement">
                    <legend>Enregistrez un devis pour un nouveau branchement</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Conduite : </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Linéair mesuré :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Encadrant :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="" id="" class="form-control">                                 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">DVU :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Montant :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>
                        </div>
                    </form>
                </div>
                
                <!--FORMULAIRE DEVIS REMPLACEMENT COMPTEUR-->
                <div class="tab-pane" id="devis-remplacement-compteur">
                    <legend>Entrez les informations pour un remplacement de compteur :</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">   Police :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">   Date d'exécution :</label>
                                <div class="col-lg-9">
                                    <input type="date" name="" id="" class="form-control">                                 
                                </div>
                            </div>
                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>    
                
                        </div>
                    </form>
                </div>
                <!--DEVIS REPRISE ABONNEMENT DEVIS REPRISE ABONNEMENT-->
                <div class="tab-pane" id="devis-reprise-abonnement">
                <legend>Etablir le devis pour une reprise d'abonnement</legend>
                    <form action="" method="post" class="form-horizontal col-lg-6">
                        <div class="row">
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Pièces manquantes :</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Robinet d'arret :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="oui">OUI</option>
                                        <option value="non">NON</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Robinet équerre :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="oui">OUI</option>
                                        <option value="non">NON</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Demi-raccord :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="oui">OUI</option>
                                        <option value="non">NON</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Compteur :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="oui">OUI</option>
                                        <option value="non">NON</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-3 control-label">Facturé :</label>
                                <div class="col-lg-9">
                                    <select name="" id="" class="form-control">
                                        <option value="oui">OUI</option>
                                        <option value="non">NON</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                            <button class="btn btn-primary pull-right col-lg-5">Valider</button>    
                        </div>
                    </form>
            </div>
            <div class="tab-pane" id="devis-vente-compteur">
                <legend>Enregistrez un devis pour la vente de compteur </legend>
                <form action="" method="post" class="form-horizontal col-lg-6">
                    <div class="row">
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Robinet d'arret :</label>
                            <div class="col-lg-9">
                                <select name="" id="" class="form-control">
                                    <option value="oui">OUI</option>
                                    <option value="non">NON</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Robinet équerre :</label>
                            <div class="col-lg-9">
                                <select name="" id="" class="form-control">
                                    <option value="oui">OUI</option>
                                    <option value="non">NON</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Demi-raccord :</label>
                            <div class="col-lg-9">
                                <select name="" id="" class="form-control">
                                    <option value="oui">OUI</option>
                                    <option value="non">NON</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Compteur :</label>
                            <div class="col-lg-9">
                                <select name="" id="" class="form-control">
                                    <option value="oui">OUI</option>
                                    <option value="non">NON</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Demi-raccord :</label>
                            <div class="col-lg-9">
                                <select name="" id="" class="form-control">
                                    <option value="oui">OUI</option>
                                    <option value="non">NON</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-lg-3 control-label">Montant :</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right">VALIDER</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="devis-extension-reseau">
                <legend>Enregistrez un devis pour une extension réseau</legend>
                <form action="" class="form-horizontal col-lg-6">
                    <div class="form-group">
                        <label for="" class="col-lg-3 control-label">Calibre :</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 control-label">Linéaire :</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 control-label">Motif :</label>
                        <div class="col-lg-9">
                            <select name="" id="" class="form-control">
                                <option value="fond-propre">Fond propre</option>
                                <option value="payer">Payée</option>
                                <option value="projet">Projet</option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 control-label">Police (Si payé )</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 control-label">Montant : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <button class="btn btn-primary pull-right">VALIDER</button>
                </form>
            </div>
    </div>

    <script src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/jquery-3.3.1.js"></script>
    <script src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script>
        $(function(){
            $('a')
            .click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
            .on('shown.bs.tab', function (e) {
                $('#actif span').html($(e.target).text());
                $('#precedent span').html($(e.relatedTarget).text());
            });
        });
    </script>
</body>
</html>