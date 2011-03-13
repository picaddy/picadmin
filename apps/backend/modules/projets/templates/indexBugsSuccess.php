<?php slot('title',$projet->getProjetNom().' - Bugs'); ?>
<div id="table-content">
    <?php include_partial('global/listeBugs',array('bugs' =>
$bugs))?>
</div>