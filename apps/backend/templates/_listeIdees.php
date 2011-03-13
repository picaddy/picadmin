  <form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Idée</a>	</th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Description</a></th>
		<th class="table-header-repeat line-left"><a href="">Utilisateur</a></th>
		<th class="table-header-repeat line-left"><a href="">Projet</a></th>
		<th class="table-header-repeat line-left"><a href="">Statut</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>
            <?php
    $i = 0;
    foreach ($listeIdees as $idee):
?>
            <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
		<td><input  type="checkbox"/></td>
		<td><?php echo $idee->getIdeeNom() ?></td>
		<td><?php echo $idee->getIdeeDescription()?></td>
		<td><?php echo $idee->getUtilisateur()->getUtilisateurNom(); ?></td>

                <td><?php echo $idee->getProjet()->getProjetNom(); ?></td>
                <td>
                    <span style="color:#<?php echo $idee->getStatut()->getStatutCouleur(); ?>">
                        <?php echo $idee->getStatut()->getStatutNom(); ?>
                    </span>
                </td>

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
  
