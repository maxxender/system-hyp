<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="css/style.css">
    <script src="index.js" async=""></script>
    <title>System-hypo - no boot</title>
</head>
<body>
    <header>
        <h1>system-hyp index.php</h1>
    </header>

    <div class="container">

    <div class="actions">
            <div class="action">
                    <legend>Enregistrez demande</legend>
                    <select name="" id="demande">
                        <option value="nouveau-branchement">Nouveau branchement</option>
                        <option value="reprise-abonnement">Reprise abonnement</option>
                        <option value="deplacement-compteur">Déplacement compteur</option>
                        <option value="vente-compteur">Vente compteur</option>
                        <option value="extension-reseau">Extension réseau</option>
                    </select>
            </div>
            <div class="action">
                <legend>Enregistrez un devis</legend>
                <select name="" id="devis">
                        <option value="nouveau-branchement">Nouveau branchement</option>
                        <option value="reprise-abonnenemnt">Reprise Abonnement</option>
                        <option value="deplacement-compteur">Déplacement Comtpeur</option>
                        <option value="vente-compteur">Vente Compteur</option>
                        <option value="extension-reseau">Extension Réseau</option>
                </select>
            </div>
            <div class="action">
                    <legend>Voir les données</legend>
                    <select name="" id="donnees">
                        <option value="compteur-branche">Compteur Branchés</option>
                        <option value="abonnement-reprise">Abonnement Repris</option>
                        <option value="compteur-remplacer">Compteur Remplacés</option>
                        <option value="compteur-vendus">Comtpeur Vendus</option>
                        <option value="extension-reseau-effectue">Extension Réseau Effectués</option>
                    </select>
            </div>            
            <div class="action">
                <legend>Gestions des compteurs</legend>
                <select name="" id="compteurs">
                        <option value="">Déposer Comtpeur</option>
                        <option value="">Comtpeurs en stock</option>
                        <option value="">Poser Comtpeur</option>
                        <option value="">Affecter Compteur</option>
                        <option value="">Compteur à Remplacer</option>
                        <option value="">Comtpeur Mis à Disposition</option>
                </select>
            </div>
            <div class="action">
                <legend>RECAPITULATIF</legend>
                <select name="" id="recap">
                    <option value="">Etats Mensuels</option>
                    <option value="">Autres Etats</option>
                </select>
            </div>
        </div>
        <div class="actions-container">
                <div class="action-container" id="demande-nouveau-branchement">
                    <legend>Entrez la demande pour un nouveau branchement</legend>
                    <?php include_once "php/form/demande/nouveau-branchement.php" ?>
                </div>

                <div class="action-container" id="demande-reprise-abonnement">
                    <legend>Entrez la demande pour une reprise d'abonnement</legend>
                    <?php  include_once 'php/form/demande/reprise-abonnement.php' ?>
                </div>

                <div class="action-container" id="demande-deplacement-compteur">
                    <legend>Entrez la demande pour un déplacement de compteur</legend>
                    <?php include_once 'php/form/demande/deplacement-compteur.php' ?>
                </div>

                <div class="action-container" id="demande-vente-compteur">
                    <legend>Enregistrez une demande pour une vente de compteur</legend>
                    <?php include_once 'php/form/demande/vente-compteur.php' ?>
                </div>

                <div class="action-container" id="demande-extension-reseau">
                    <legend>Entrez la demande pour une extension de réseau</legend>
                    <?php include_once 'php/form/demande/extension-reseau.php' ?>
                </div>

                <div class="action-container" id="devis-nouveau-branchement">
                    <legend>Enregistrez un devis pour un nouveau branchement</legend>
                    <?php include_once 'php/form/devis/nouveau-branchement.php' ?>
                </div>
                
                <div class="action-container" id="devis-remplacement-compteur">
                    <legend>Entrez les informations pour un remplacement de compteur :</legend>
                    <?php include_once 'php/form/devis/remplacement-comtpeur.php' ?>
                </div>
                <div class="action-container" id="devis-reprise-abonnement">
                <legend>Etablir le devis pour une reprise d'abonnement</legend>
                <?php include_once 'php/form/devis/reprise-abonnement.php' ?>
            </div>
            <div class="action-container" id="devis-vente-compteur">
                <legend>Enregistrez un devis pour la vente de compteur </legend>
                <?php include_once 'php/form/devis/vente-compteur.php' ?>
            </div>
            <div class="action-container" id="devis-extension-reseau">
                <legend>Enregistrez un devis pour une extension réseau</legend>
                <?php include_once 'php/form/devis/extension-reseau.php' ?>
            </div>

            <div class="action-container" id="deposer-compteur">
                <legend>Formulaire de depose de compteur</legend>
                <?php include_once 'php/form/gestion/depose-compteur.php' ?>
            </div>

            <div class="action-container" id="compteur-stock">
                <legend>Consultez la liste des compteurs en stocks</legend>
                <div class="compteur">
                    <div>Index</div>
                    <div>Marque</div>
                    <div>Diamètre (dm)</div>
                    <div>Police</div>
                    <div>Numéro</div>
                    <div>Date dépot</div>
                </div>
                <div class="compteur">
                    <div>1104984554</div>
                    <div>SILEX</div>
                    <div>60</div>
                    <div>0018450009654</div>
                    <div>12</div>
                    <div>12/10/2023</div>
                </div>
            </div>

            <div class="action-container" id="poser-compteur">
                <legend>Formulaire de pose de compteur</legend>
                <?php include_once 'php/form/gestion/pose-compteur.php' ?>
            </div>

            <div class="action-container" id="affecter-compteurs">
                <legend>Affecter des compteurs à des agents ici</legend>
                <?php include_once "php/form/gestion/affecter-compteur.php" ?>
            </div>
            <div class="action-container" id="compteur-a-remplacer">
                <legend>Formulaire compteur à remplacer</legend>
                <?php include_once "php/form/gestion/compteur-a-remplacer.php" ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="ville.js"></script>
    <script>
    
    </script>
</body>
</html>