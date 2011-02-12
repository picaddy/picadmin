<?php slot('title', 'Liste des bugs'); ?>
<div id="table-content">

<!--  start list-table ..................................................................................... -->
    <form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Url du bug</a>	</th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Projet</a></th>
		<th class="table-header-repeat line-left"><a href="">Statut</a></th>
		<th class="table-header-repeat line-left"><a href="">Auteur</a></th>
		<th class="table-header-repeat line-left"><a href="">Référent</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>
<?php
    $i = 0;
    foreach ($bugs as $bug):
?>
            <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
		<td><input  type="checkbox"/></td>
		<td>
                    <a target="_blank" href="<?php echo $bug->getBugUrl(); ?>"><?php echo $bug->getBugUrl(); ?></a>
                </td>
		<td>
                    <?php echo $bug->getProjet()->getProjetNom(); ?>
                </td>
		<td>
                    <span style="color:#<?php echo $bug->getStatut()->getStatutCouleur(); ?>">
                        <?php echo $bug->getStatut()->getStatutNom(); ?>
                    </span>
                </td>
		<td><?php echo $bug->getUtilisateur()->getUserObjectById($bug->getBugAuteurId()); ?></td>
		<td><?php echo $bug->getUtilisateur()->getUserObjectById($bug->getBugReferentId()); ?></td>
                <td class="options-width">
                    <a href="" title="Edit" class="icon-1 info-tooltip"></a>
                    <a href="" title="Delete" class="icon-2 info-tooltip"></a>
                </td>
            </tr>
<?php
    $i++;
    endforeach;
?>
	</table>
        <!--  end list table................................... -->
    </form>
</div>
<!--  end content-table  -->