<?php slot('title', 'Liste des projets'); ?>
<!-- start table-content -->
<div id="table-content">
    <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th class="table-header-check"><a id="toggle-all" ></a> </th>
            <th class="table-header-repeat line-left minwidth-1"><a href="">Nom du projet</a> </th>
            <th class="table-header-repeat line-left minwidth-1"><a href="">Type de projet</a></th>
            <th class="table-header-repeat line-left"><a href="">Statut</a></th>
            <th class="table-header-repeat line-left"><a href="">Date de début</a></th>
            <th class="table-header-repeat line-left"><a href="">Date de fin</a></th>
            <th class="table-header-options line-left"><a href="">Options</a></th>
        </tr>
        <?php
            $i = 0;
            foreach ($objet_projet->getListeProjetAll() as $projet):
        ?>
        <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
            <td><input type="checkbox"/></td>
            <td><a href="<?php echo url_for('projets/indexProjet?id='.$projet->getId());?>"><?php echo $projet->getProjetNom(); ?></a></td>
            <td>
            <span style="color:#<?php echo $projet->getProjetType()->getProjetTypeCouleur(); ?>">
            <?php echo $projet->getProjetType()->getProjetTypeNom(); ?>
            </span>
            </td>
            <td>
            <span style="color:#<?php echo $projet->getStatut()->getStatutCouleur(); ?>">
            <?php echo $projet->getStatut()->getStatutNom(); ?>
            </span>
            </td>
            <td><?php echo $projet->getProjetDateDebut(); ?></td>
            <td><?php echo $projet->getProjetDateFin(); ?></td>
                <td class="options-width">
            <a href="" title="Edit" class="icon-1 info-tooltip"></a>
            <a href="" title="Edit" class="icon-2 info-tooltip"></a>
            </td>
        </tr>
        <?php
            $i++;
            endforeach;
        ?>
        </table>
    <!-- end list table................................... -->
    </form>
</div>
<!-- end content-table -->
