<?php echo slot("title","Gestion des statuts")?>
<div id="table-content">
    <b>Ajout d'un statut</b><br><br>
        Formulaire d'ajout de statut<br><br>

    
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
                        <td><?php echo $statut->getStatutNom();?></td>
                        <td><?php echo $statut->getStatutCode();?></td>
                        <td><?php echo $statut->getStatutCouleur();?></td>
                        <td><?php
                            if($statut->getStatutIdee() == 1) echo "Idée";
                            if($statut->getStatutBug() == 1) echo "Bug";
                            if($statut->getStatutTache() == 1) echo "Tache";
                            if($statut->getStatutProjet() == 1) echo "Projet";
                            ?></td>
                        <td class="options-width">
                           <a href="" title="Edit" class="icon-1 info-tooltip"></a>
                            <a href="" title="Edit" class="icon-2 info-tooltip"></a>
                        </td>
                       </tr>
                     <?
                     $i++;
                 }
            ?>
        </table>
    </form>
</div>
