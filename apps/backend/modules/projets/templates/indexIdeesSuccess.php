<?php slot('title',$projet->getProjetNom().' - Idées'); ?>

<div id="table-content">

    <?php include_partial('global/listeIdees',array('listeIdees' =>
$liste_idees))?>
</div>