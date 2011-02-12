<?php slot('title', 'Liste des idées'); ?>

<div id="table-content">
    <form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a>	</th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Description</a></th>
		<th class="table-header-repeat line-left"><a href="">Utilisateur</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>
            <?php
    $i = 0;
    if(sizeof($liste_note) > 0)
    {
        foreach ($liste_note as $note):
    ?>
                <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
                    <td><input  type="checkbox"/></td>
                    <td><?php echo $note->getNoteNom() ?></td>
                    <td><?php echo $note->getNoteDescription()?></td>
                    <td><?php echo $note->getUtilisateur() ?></td>

                    <td class="options-width">
                        <a href="" title="Edit" class="icon-1 info-tooltip"></a>
                        <a href="" title="Edit" class="icon-2 info-tooltip"></a>
                    </td>
                </tr>
    <?php
        $i++;
        endforeach;
    }
    else
    {
        ?>
           <tr class="alternate-row">
                    <td colspan="5" align="center">Aucune note </td>
                </tr>
       <?
  

   
}
?>
	</table>

    <!--  start list-table ..................................................................................... -->

</div>