<!--  start table-content  -->
<div id="table-content">

    <!--  start message-yellow
    <div id="message-yellow">
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
		<td class="yellow-right"><a class="close-yellow"><img src="../images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
	</table>
    </div>
    <!--  end message-yellow -->

    <!--  start message-red
    <div id="message-red">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
		<td class="red-left">Error. <a href="">Please try again.</a></td>
                <td class="red-right"><a class="close-red"><img src="../images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
    	</table>
    </div>
    <!--  end message-red -->

    <!--  start message-blue
    <div id="message-blue">
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
		<td class="blue-left">Welcome back. <a href="">View my account.</a> </td>
                <td class="blue-right"><a class="close-blue"><img src="../images/table/icon_close_blue.gif"   alt="" /></a></td>
            </tr>
    	</table>
    </div>
    <!--  end message-blue -->

    <!--  start message-green
    <div id="message-green">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
		<td class="green-left">Product added sucessfully. <a href="">Add new one.</a></td>
                <td class="green-right"><a class="close-green"><img src="../images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
	</table>
    </div>
    <!--  end message-green -->


    <!--  start list-table ..................................................................................... -->
    <form id="mainform" action="">
	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
		<th class="table-header-check"><a id="toggle-all" ></a> </th>
		<th class="table-header-repeat line-left minwidth-1"><a href="">Nom du projet</a>	</th>
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
		<td><input  type="checkbox"/></td>
		<td><?php echo $projet->getProjetNom(); ?></td>
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
                    <a href="" title="Edit" class="icon-3 info-tooltip"></a>
                    <a href="" title="Edit" class="icon-4 info-tooltip"></a>
                    <a href="" title="Edit" class="icon-5 info-tooltip"></a>
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