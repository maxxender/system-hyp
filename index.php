<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
-->
    <link rel="stylesheet" href="css/style.css">
    <title>System-hypo - no boot</title>
</head>
<body>
    <header>
        <h1>system-hyp nb2</h1>
    </header>

    <div class="container">

    <div class="actions">
            <div class="action">
                    <legend>Enregistrez demande</legend>
                    <select name="" id="">
                        <option value="">Nouveau branchement</option>
                        <option value="">Repreise abonnement</option>
                        <option value="">Déplacement compteur</option>
                        <option value="">Vente compteur</option>
                        <option value="">Extension réseau</option>
                    </select>
            </div>
            <div class="action">
                    <legend>Enregistrez un devis</legend>
                    <select name="" id="">
                        <option value="nouveau-branchement">Nouveau branchement</option>
                        <option value="reprise-abonnenemnt">Reprise Abonnement</option>
                        <option value="deplacement-compteur">Déplacement Comtpeur</option>
                        <option value="vente-compteur">Vente Compteur</option>
                        <option value="extension-reseau">Extension Réseau</option>
                    </select>
            </div>
            <div class="action">
                    <legend>Voir les données</legend>
                    <select name="" id="">
                        <option value="compteur-branche">Compteur Branchés</option>
                        <option value="abonnement-reprise">Abonnement Repris</option>
                        <option value="compteur-remplacer">Compteur Remplacés</option>
                        <option value="compteur-vendus">Comtpeur Vendus</option>
                        <option value="extension-reseau-effectue">Extension Réseau Effectués</option>
                    </select>
            </div>            
            <div class="action">
                    <legend>Gestions des compteurs</legend>
                    <select name="" id="">
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
                <select name="" id="">
                    <option value="">Etats Mensuels</option>
                    <option value="">Autres Etats</option>
                </select>
            </div>
        </div>
        <div class="actions-container">
                <div class="" id="demande-nouveau-branchement">
                    <legend>Entrez la demande pour un nouveau branchement</legend>
                    <?php include_once "php/form/demande/nouveau-branchement.php" ?>
                </div>

                <div class="" id="demande-reprise-abonnement">
                    <legend>Entrez la demande pour une reprise d'abonnement</legend>
                    <?php  include_once 'php/form/demande/reprise-abonnement.php' ?>
                </div>

                <div class="" id="demande-deplacement-compteur">
                    <legend>Entrez la demande pour un déplacement de compteur</legend>
                    <?php include_once 'php/form/demande/deplacement-compteur.php' ?>
                </div>

                <div class="" id="demande-vente-compteur">
                    <legend>Enregistrez une demande pour une vente de compteur</legend>
                    <?php include_once 'php/form/demande/vente-compteur.php' ?>
                </div>

                <div class="" id="demande-extension-reseau">
                    <legend>Entrez la demande pour une extension de réseau</legend>
                    <?php include_once 'php/form/demande/extension-reseau.php' ?>
                </div>

                <div class="" id="devis-nouveau-branchement">
                    <legend>Enregistrez un devis pour un nouveau branchement</legend>
                    <?php include_once 'php/form/devis/nouveau-branchement.php' ?>
                </div>
                
                <div class="" id="devis-remplacement-compteur">
                    <legend>Entrez les informations pour un remplacement de compteur :</legend>
                    <?php include_once 'php/form/devis/remplacement-comtpeur.php' ?>
                </div>
                <div class="" id="devis-reprise-abonnement">
                <legend>Etablir le devis pour une reprise d'abonnement</legend>
                <?php include_once 'php/form/devis/reprise-abonnement.php' ?>
            </div>
            <div class="" id="devis-vente-compteur">
                <legend>Enregistrez un devis pour la vente de compteur </legend>
                <?php include_once 'php/form/devis/vente-compteur.php' ?>
            </div>
            <div class="" id="devis-extension-reseau">
                <legend>Enregistrez un devis pour une extension réseau</legend>
                <?php include_once 'php/form/devis/extension-reseau.php' ?>
            </div>

            <div class="" id="deposer-compteur">
                <legend>Formulaire de depose de compteur</legend>
                <?php include_once 'php/form/gestion/depose-compteur.php' ?>
            </div>

            <div class="" id="compteur-stock">
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

            <div class="" id="poser-compteur">
                <legend>Formulaire de pose de compteur</legend>
                <?php include_once 'php/form/gestion/pose-compteur.php' ?>
            </div>

            <div class="" id="affecter-compteurs">
                <legend>Affecter des compteurs à des agents ici</legend>
                <?php include_once "php/form/gestion/affecter-compteur.php" ?>
            </div>
            <div class="" id="compteur-a-remplacer">
                <legend>Formulaire compteur à remplacer</legend>
                <?php include_once "php/form/gestion/compteur-a-remplacer.php" ?>
            </div>
        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/jquery-3.3.1.js"></script>
    <script src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
    <script src="ville.js"></script>
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

       // (function(){
            var dernierLien = "#"
            var ajaxPost = function(form, url, callback){
                var xhr = new XMLHttpRequest();
                var data = new FormData(form)
                xhr.onreadystatechange = function(e){
                    if(xhr.readyState === 4){
                        if(xhr.status === 200){
                            callback(xhr.responseText)
                            
                        }else{
                            console.log("une eereur sest produite")
                        }
                    }
                }
                xhr.open('POST',url,true);
                xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
                xhr.send(data);
            }

            document.querySelector('#form-ajouter-compteur').addEventListener('submit',
                function(e){
                    e.preventDefault()
                    
                    
                    ajaxPost(document.querySelector('#form-ajouter-compteur'),
                        document.querySelector("#form-ajouter-compteur").getAttribute('action'),
                        function(response){
                            //alert(response)
                            var responseEle = document.createElement('div')
                            responseEle.classList.add('form-group')
                            responseEle.classList.add('col-lg-12')

                            //responseEle.style.border = '1px solid black'
                            //responseEle.style.padding = "10px 10px 10px 50px"
                            responseEle.style.margin = "20px 0px 0px 30px"

                            response = JSON.parse(response)
                            responseEle.innerHTML = response
                            document.querySelector('#form-ajouter-compteur').appendChild(responseEle)
                    })
                    
                }         
            )
          
      //  })
    </script>
</body>
</html>