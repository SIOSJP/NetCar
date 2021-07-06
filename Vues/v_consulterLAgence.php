<div class="container">
<fieldset>
     <legend>L'agence <?php echo $lAgence['NOM'];?> </legend>

        <table class="table ">
            <thead>
              <tr>
                <th>Ses coordonnées :</th>
                <th>Ses horaires</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $lAgence['NOM']." (Code agence : ".$lAgence['CODEAGENCE'].") <BR/>";
                              echo $lAgence['RUE']."<BR/>". $lAgence['CODEPOSTAL']." ". $lAgence['VILLE'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            foreach ($sesHoraires as $unHoraire) {
                                echo $unHoraire['JOUR']." : ".$unHoraire['HORAIREOUVERTURE']."h à ";
                                echo $unHoraire['HORAIREFERMETURE']."h <BR/>";
                            }
                        ?>    
                    </td>
                </tr>
            </tbody>
      </table>	
</fieldset> 
</div>