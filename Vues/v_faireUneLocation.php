<div class="container" style="margin-top:90px">
<div class="row">
<form method="POST" action="index.php?controleur=gestionLocation&action=enregistrerUneLocation" >
   <fieldset>
       <legend class='display-4'>Faire une location de véhicule
     </legend>
     <div>
     <p class="row span6">
        <label for="codeAgence">Agence sélectionnée</label>
        <input class="border-0" readonly form-control-plaintext  id="codeAgence" type="text" name="codeAgence" size="30" maxlength="45" value="<?php echo $leCodeAgence;?>"/>
     </p>
    <p class="row span6">
        <label for="dateDebut">Date de prise du véhicule </label>
        <input class="border-0 col-auto badge-primary" id="dateDebut" type="text" name="dateDebut" size="30" maxlength="45"/>
    </p>
    <p class="row span6">
        <label for="dateFin">Date de retour du véhicule </label>
        <input class="border-0 col-auto badge-primary" id="dateFin" type="text" name="dateFin" size="30" maxlength="45"/>
    </p>
     <p class="row span6">
        <label for="categorieVehicule" >Catégorie de véhicule souhaitée</label>
        <input class="border-0 col-auto badge-primary" id="categorieVehicule" type="text" name="categorieVehicule" size="30" maxlength="45"/>
    </p>
     <p class="row span6">
        <label for="civilite">Civilité</label>
        <input class="border-0 col-auto badge-primary" id="civilite" type="text" name="civilite" size="8" maxlength="8"/>
    </p>  
    <p class="row span6">
        <label for="nom">Nom devant figurer sur la location</label>
        <input class="border-0 col-auto badge-primary" id="nom" type="text" name="nom" size="30" maxlength="45"/>
    </p>
    <p class="row span6">
        <label for="email" class="col-4">Email pour l'envoi de la confirmation</label>
        <input class="border-0 col-auto badge-primary" id="email" type="text" name="email" size="50" maxlength="70"/>
    </p>
    
    <p class="row span6 align-items-center m-5">     
        <button class="btn btn-warning mb-2 col-4" type="reset" >Annuler</button> 
    <span class="col-4"> </span>
        <button class="btn btn-success mb-2 col-4" type="submit">Réserver</button>
     </p>
</div>
</form>
 </div>
</div>   