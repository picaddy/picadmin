  
    <?php include_partial('global/flash')?>
    
      
    <?php echo slot("title","Gestion des types de projets")?>

        <?php echo $form->renderGlobalErrors()?>
    <b>Ajout d'un type de projet</b><br><br>
       <form action="<?php echo url_for('@typeprojet') ?>" method="POST">
         <table style="margin-left:10px" id="id-form">
        <tr>
            <td><b>Libellé :</b><?php echo $form['projet_type_nom']->render(array('class' =>'inp-form')) ?></td>
            <td><b>Couleur :</b><?php echo $form['projet_type_couleur']->render(array('class'=>'inp-form')) ?></td>
            <td><b>Code :</b><?php echo $form['projet_type_code']->render(array('class'=>'inp-form')) ?></td>
            <td></td>
            <td>
        <input type="submit" value="Ajouter" class="form-submit"/>
        </td>
        </tr>
        </table>
        </form>
    <br><br><b>Liste des types de projet</b><br><br>

    <form id="mainform" action="">
        <table style="margin-left:10px" border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Libellé</a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Code</a></th>
                <th class="table-header-repeat line-left"><a href="">Couleur</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>
            <?php
                $i=0;
                foreach($liste as $type)
                {
                    if(($i % 2) != 0) $row = 'class="alternate-row"';
                    else $row = ''?>
                       <tr <?php echo $row?>>
                         <td><input type="checkbox"/></td>
                        <td>
                            <span style="display:none;" class="row_edit_<?php echo $type->getId()?>">
                                <input type="text" class="inp-form" name="projetType[projet_type_nom]" id="projet_type_nom_<?php echo $type->getId()?>" value="<?php echo $type->getProjetTypeNom();?>"/>
                            </span>
                            <span class="row_<?php echo $type->getId()?>" style="color:#<?php echo $type->getProjetTypeCouleur()?>;visibility:visible;display:block"><?php echo $type->getProjetTypeNom();?>
                            </span>
                        </td>
                        <td>
                            <span style="display:none;" class="row_edit_<?php echo $type->getId()?>">
                               <input type="text" class="inp-form" name="projetType[projet_type_code]" id="projet_type_code_<?php echo $type->getId()?>" value="<?php echo $type->getProjetTypeCode();?>"/>
                            </span>
                            <span class="row_<?php echo $type->getId()?>" style="visibility:visible;display:block"><?php echo $type->getProjetTypeCode();?>
                            </span>
                        </td>
                        <td>
                            <span style="display:none;" class="row_edit_<?php echo $type->getId()?>">
                                <input type="text" class="inp-form" name="projetType[projet_type_couleur]" id="projet_type_couleur_<?php echo $type->getId()?>" value="<?php echo $type->getProjetTypeCouleur();?>"/>
                            </span>
                             <span class="row_<?php echo $type->getId()?>" style="visibility:visible;display:block"><?php echo $type->getProjetTypeCouleur();?>
                             </span>
                        </td>
                       <td class="options-width">
                           <span style="display:block" class="row_<?php echo $type->getId()?>">
                               <a title="Modifier" onclick="edition(<?php echo $type->getId()?>);" class="icon-1 info-tooltip"></a>
                           </span>
                           <span style="display:none" class="row_edit_<?php echo $type->getId()?>">
                               <a title="Modifier" onclick="validation_type(<?php echo $type->getId()?>);" class="icon-5 info-tooltip"></a>
                           </span>
                             <a title="Suppression" onclick="suppression_type(<?php echo $type->getId()?>);" class="icon-2 info-tooltip"></a>
                        </td>
                       </tr>
                     <?
                     $i++;
                 }
            ?>
        </table>
      
    </form>
