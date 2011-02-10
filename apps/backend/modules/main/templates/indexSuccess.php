<!--  start table-content  -->
<div id="table-content">

    <!--  start list-table ..................................................................................... -->
   <?php  foreach($utilisateur as $projet)
    {
        echo $projet->getProjet()->getProjet_nom();

    }?>

</div>
<!--  end content-table  -->