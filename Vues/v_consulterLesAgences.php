<div id="contenu">

<fieldset>
     <legend>Nos agences </legend>

        <table class="table">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Adresse</th>
				<th></th>
              </tr>
            </thead>
            <tbody>
                <?php	
                foreach($lesAgences as $lAgence) {
                ?>
                    <tr>
                        <td>
                            <?php echo "<a href='index.php?controleur=gestionAgence&action=consulterLesHoraires&agence=";
                                  echo $lAgence['CODEAGENCE']."'>". $lAgence['NOM']."</a>";?></td>
                        
                        <td><?php echo $lAgence['RUE']."<br/>". $lAgence['CODEPOSTAL']." ". $lAgence['VILLE'];?></td>
                        <td>
                            <?php echo "<a href='index.php?controleur=gestionLocation&action=faireUneLocation&agence=".$lAgence['CODEAGENCE']."'>";?>        
                                <button class="btn btn-success" type="button">Louer un véhicule</button>
 
                            </a>
                        </td>
                  
                    </tr>
                <?php
                }
                ?>
            </tbody>
      </table>	
</fieldset> 
</div>