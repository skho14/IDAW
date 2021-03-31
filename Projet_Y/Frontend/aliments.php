
<?php
require_once('template_header.php');
?>

<div class="conteneur-flexible ligne ">
            <div class="element-flexible bleu-clair element-hw-autres"> 
            
            <table class = "tableau-formulaire">
            <thead>
                <tr>
                    <th>Nom de l'aliment </th>
                    <th>Type </th>
                </tr>
            </thead>

            <tbody id="table-content">

            </tbody>
        </table>

        <form id="AddFoodForm" onsubmit="onFormSubmit();" autocomplete="off">
            <p>Nom de l'aliment <br id="contenu-nom"> <input type="text" id="IDnom" name="nom"></p>
            <p>Type <br> <input type="text" id="IDtype" name="type"></p>
            <p><button type="submit">Submit</button></p>
        </form>

        <script>
            let currentMaxId = 1; 
            let aliments = [];
            let currentEditedFoodId =-1;
            let urlBackendPrefix = "http://localhost:8888/Projet_Y/Backend/";
            
            $(document).ready(function(){
                $.getJSON(urlBackendPrefix+"afficheAliment.php", function(data){ 
                    aliments = data;
                    $.each(aliments, function(i, a){
                        let aliment = {};
                        aliment.nom = a.Nom;
                        aliment.type = a.Type; 
                        ajouteAliment(aliment);
                    });
                });
            });
 

            function AjaxEnvoieAliment(aliment){
                $.ajax({
                        //L'URL de la requête 
                        url: urlBackendPrefix+"addAliment.php",

                        //La méthode d'envoi (type de requête)
                        method: "POST",

                        //Le format de réponse attendu
                        dataType : "json",
                        data : aliment
                    })
                    //Ce code sera exécuté en cas de succès - La réponse du serveur est passée à done()
                    /*On peut par exemple convertir cette réponse en chaine JSON et insérer
                    * cette chaine dans un div id="res"*/
                    .always(function(response){
                        //let data = JSON.stringify(response);
                        console.log(response);
                    });
            }

            function onForm(nom,type){
                $("#IDnom").val(nom);
                $("#IDtype").val(type);

            }

            
    

            function onFormSubmit(){
                event.preventDefault();
                let newFood = {};
                newFood.nom = $("#IDnom").val();
                newFood.type = $("#IDtype").val();
                // $("p").remove("#contenu-removable");
                if (newFood.nom != ''){
                   if (currentEditedFoodId >= 0){
                       currentFoodId = -1;
                       onForm("","");
                    }
                    else{
                        aliments.push(newFood);
                        ajouteAliment(newFood);
                        AjaxEnvoieAliment(newFood);
                        onForm("","");
                    }
                }
            }
            
            

            function ajouteAliment(newFood){
                newFood.id = currentMaxId;
                $("#table-content").append
                        (`<tr id=aliments-${newFood.id}> 
                        <td> ${newFood.nom}  </td> <td> 
                        ${newFood.type}  </td> <td><button onclick="edit(${newFood.id})" style="color:blue">Edit</button>  <button onclick="remove(${newFood.id})" style="color:blue">Remove</button> </td> </tr>`);
                         
                currentMaxId++;
            }

            

            
        </script>
            </div>
        </div>        

