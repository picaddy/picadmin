<?php echo slot("title","Gestion des types de projets")?>
<div id="table-content">
    <b>Ajout d'un type de projet</b><br><br>
        Formulaire d'ajout de type de projet<br><br>


    <b>Liste des types de projet</b><br><br>


    <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Libellé</a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Code</a></th>
                <th class="table-header-repeat line-left"><a href="">Couleur</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>

            <?php
                $i=0;
                foreach($liste_type as $type)
                {
                    ?>
                       <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
                         <td><input type="checkbox"/></td>
                        <td><?php echo $type->getProjetTypeNom();?></td>
                        <td><?php echo $type->getProjetTypeCode();?></td>
                        <td><?php echo $type->getProjetTypeCouleur();?></td>
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
