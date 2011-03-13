<?php slot('title', 'Liste des bugs'); ?>
<div id="table-content">
    <?php include_partial('global/listeBugs',array('bugs' =>
$bugs))?>
</div>
<!--  end content-table  -->