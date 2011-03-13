
    <?php include_partial('global/flash')?>
 
<?php echo slot("title","Gestion des statuts")?>

<b>Ajout d'un statut</b><br><br>
 <form action="<?php echo url_for('@statut') ?>" method="POST">
         <table style="margin-left:10px" id="id-form">
        <tr>
            <td><b>Libellé :</b><?php echo $form['statut_nom']->render(array('class' =>'inp-form')) ?></td>
            <td><b>Couleur :</b><?php echo $form['statut_couleur']->render(array('class'=>'inp-form')) ?></td>
        </tr>
        <tr>
            <td><b>Code :</b><?php echo $form['statut_code']->render(array('class'=>'inp-form')) ?></td>
            <td><b>Type :</b><?php echo $form['statut_type']->render(array('class'=>'styledselect_form_1')) ?></td>
          <td>
        <input type="submit" value="Ajouter" class="form-submit"/>
        </td>
        </tr>
        </table>
        </form>

    <b>Liste des Statuts</b><br><br>


    <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Libellé</a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Code</a></th>
                <th class="table-header-repeat line-left"><a href="">Couleur</a></th>
                <th class="table-header-repeat line-left"><a href="">Association</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>

            <?php
                $i=0;
                foreach($liste_statut as $statut)
                {
                    ?>
                       <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
                         <td><input type="checkbox"/></td>
                        <td>
                            <span style="display:none;" class="row_edit_<?php echo $statut->getId()?>">
                                <input type="text" class="inp-form" name="statut[statut_nom]" id="statut_nom_<?php echo $statut->getId()?>" value="<?php echo $statut->getStatutNom();?>"/>
                            </span>
              
                            <span class="row_<?php echo $statut->getId()?>" style="color:#<?php echo $statut->getStatutCouleur(); ?>">
                             <?php echo $statut->getStatutNom(); ?>
                            </span>
                        </td>
                        <td>
                             <span style="display:none;" class="row_edit_<?php echo $statut->getId()?>">
                                <input type="text" class="inp-form" name="statut[statut_code]" id="statut_code_<?php echo $statut->getId()?>" value="<?php echo $statut->getStatutCode();?>"/>
                            </span>
                            <span class="row_<?php echo $statut->getId()?>">
                            <?php echo $statut->getStatutCode();?>
                            </span>
                        </td>

                        <td>
                                 <span style="display:none;" class="row_edit_<?php echo $statut->getId()?>">
                                <input type="text" class="inp-form" name="statut[statut_couleur]" id="statut_couleur_<?php echo $statut->getId()?>" value="<?php echo $statut->getStatutCouleur();?>"/>
                            </span>
                            <span class="row_<?php echo $statut->getId()?>">
                                <?php echo $statut->getStatutCouleur();?>
                            </span>
                        </td>
                        <td>
                          <?php
                            if($statut->getStatutIdee() == 1)
                            {
                                $idee_selected = "selected";
                                $tache_selected = "";
                               $bug_selected = "";
                               $projet_selected = "";
                                $name = "Idée";
                            }
                            if($statut->getStatutBug() == 1)
                            {
                                $bug_selected = "selected";
                                $tache_selected = "";
                               $projet_selected = "";
                               $idee_selected = "";
                               $name = "Bug";
                            }
                            if($statut->getStatutTache() == 1)
                            {
                                $tache_selected = "selected";
                               $projet_selected = "";
                               $bug_selected = "";
                               $idee_selected = "";
                                $name = "Tache";
                            }
                            if($statut->getStatutProjet() == 1)
                            {
                               $projet_selected = "selected";
                               $tache_selected = "";
                               $bug_selected = "";
                               $idee_selected = "";
                               $name = "Projet";
                            }
                            ?>
                            <span style="display:none;" class="row_edit_<?php echo $statut->getId()?>">
                            <select name="statut[statut_type]" class="styledselect_form_1" id="statut_type_<?php echo $statut->getId();?>">
                                <option value="0" <?php echo $tache_selected?>>Tâche</option>
                                <option value="1" <?php echo $projet_selected?>>Projet</option>
                                <option value="2" <?php echo $idee_selected?>>Idée</option>
                                <option value="3" <?php echo $bug_selected?>>Bug</option>
                             </select>
                           </span>
                            <span class="row_<?php echo $statut->getId()?>">
                                <?php echo $name;?>
                            </span>
                        </td>
                         <td class="options-width">
                           <span style="display:block" class="row_<?php echo $statut->getId()?>">
                               <a title="Modifier" onclick="edition(<?php echo $statut->getId()?>);" class="icon-1 info-tooltip"></a>
                           </span>
                           <span style="display:none" class="row_edit_<?php echo $statut->getId()?>">
                               <a title="Modifier" onclick="validation_statut(<?php echo $statut->getId()?>);" class="icon-5 info-tooltip"></a>
                           </span>
                             <a title="Suppression" onclick="suppression_statut(<?php echo $statut->getId()?>);" class="icon-2 info-tooltip"></a>
                        </td>
                       </tr>
                     <?
                     $i++;
                 }
            ?>
        </table>
    </form>