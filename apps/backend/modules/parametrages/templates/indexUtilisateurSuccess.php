<?php echo slot("title","Gestion des Utilisateurs")?>
<div id="table-content">
  
    <b>Liste des groupes</b><br><br>


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
