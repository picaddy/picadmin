<?php use_javascript('utilisateur.js') ?>

<?php echo slot("title","Gestion des Utilisateurs")?>
<div id="table-content">
  
    <b>Liste des groupes</b><?php echo image_tag('forms/icon_plus.gif',array('width'=>'12px','height'=>'12px','onClick'=>"ajout_groupe_form();")) ?><br><br>

    <div id="groupe_form" style="display:none;">
        <br>

         <span style="margin-left:10px"><b>Ajout d'un groupe</b></span><br><br>
        <table style="margin-left:10px" id="id-form">
        <tr>
           <td>
                <b>Libellé :</b><?php echo $groupe_form['groupe_nom']->render(array('class' =>'inp-form')) ?>
           </td>
        
           <td align="left"><input type="submit" value="Ajouter" class="form-submit"/>
           </td>
        </tr>
        </table>
         <br>
    </div>

    <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a> </th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>

            <?php
                $i=0;
                foreach($liste_groupe as $groupe)
                {
                    ?>
                       <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
                         <td><input type="checkbox"/></td>
                        <td><?php echo $groupe->getGroupeNom();?></td>
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
    
       <b>Liste des utilisateurs</b><br><br>


    <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
            <tr>
                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                <th class="table-header-options line-left"><a href="">Pseudo</a></th>
                <th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a> </th>
                <th class="table-header-options line-left"><a href="">Prénom</a></th>
                <th class="table-header-options line-left"><a href="">Email</a></th>
                <th class="table-header-options line-left"><a href="">Groupe</a></th>
                <th class="table-header-options line-left"><a href="">Options</a></th>
            </tr>

            <?php
                $i=0;
                foreach($liste_utilisateur as $user)
                {
                    ?>
                       <tr <?php if(($i % 2) != 0) echo 'class="alternate-row"'; ?>>
                         <td><input type="checkbox"/></td>
                        <td><?php echo $user->getUtilisateurPseudo();?></td>
                        <td><?php echo $user->getUtilisateurNom();?></td>
                        <td><?php echo $user->getUtilisateurPrenom();?></td>
                        <td><?php echo $user->getUtilisateurEmail();?></td>
                        <td><?php 
                        foreach($user->getUtilisateurToGroupe() as $groupeUser)
                        {
                               echo $groupeUser->getGroupe()->getGroupeNom();
                        }
                        ?>
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
