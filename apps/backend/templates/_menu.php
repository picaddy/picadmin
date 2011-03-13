<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $tab_request = $sf_request->getRequestParameters();
    $module = $tab_request['module'];
    $action = $tab_request['action'];



    if($module=="main") $mainSelected="current";
    else $mainSelected="select";

     if($module=="projets" && $action != 'index')
     {
          switch($action)
          {
              case "indexProjet":
                  $projet_class = "class='sub_show'";
                  $taches_class = "";
                  $idees_class = "";
                  $bugs_class = "";
                break;
              case "indexTaches":
                  $taches_class = "class='sub_show'";
                  $projet_class = "";
                  $idees_class = "";
                  $bugs_class = "";
                break;
              case "indexIdees":
                  $idees_class = "class='sub_show'";
                  $projet_class = "";
                  $taches_class = "";
                  $bugs_class = "";
               break;
              case "indexBugs":
                  $bugs_class = "class='sub_show'";
                  $taches_class = "";
                  $idees_class = "";
                  $projet_class = "";
               break;
          }

        //Si on est dans la partie d'un projet
         $id = $sf_request->getParameter('id');
         
          $url_projet = url_for('/projets/'.$id);
          $url_taches = url_for('/projets/'.$id.'/taches/');
          $url_idees = url_for('/projets/'.$id.'/idees/');
          $url_bugs = url_for('/projets/'.$id.'/bugs/');
            

         
         $projetSelected="current";
         $projetShow = "show";
     }
     else
     {
         $projetSelected="select";
         $projetShow = "";
         $url_projet = "";
         $url_taches = '';
          $url_idees = "";
          $url_bugs = "";
     }

     if($module=="bugs") $bugsSelected="current";
    else $bugsSelected="select";

     if($module=="idees") $ideesSelected="current";
    else $ideesSelected="select";

     if($module=="notes") $notesSelected="current";
    else $notesSelected="select";

     if($module=="parametrages"){
        $paramSelected="current";
        $paramShow = "show";
     }else{
        $paramShow = "";
        $paramSelected="select";
     }

     if($action == "indexProjetType")
     {
         $paramSubType = "class='sub_show'";
         $paramSubStatut = "";
         $paramSubUtilisateur = "";
         $paramProfil = '';
        
     }

     if($action == "indexStatut")
     {
         $paramSubType = "";
         $paramSubStatut = "class='sub_show'";
         $paramSubUtilisateur = "";
         $paramProfil = '';
      }

     if($action == "indexUtilisateur")
     {
         $paramSubType = "";
         $paramProfil = '';
         $paramSubStatut = "";
         $paramSubUtilisateur = "class='sub_show'";
     }

     if($action == "profil")
     {
         $paramProfil = "class='sub_show'";
         $paramSubType = "";
         $paramSubStatut = "";
         $paramSubUtilisateur = "";
     }

   
?>
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">
<!--  start nav-outer -->
<div class="nav-outer">

        <!--  start nav -->
		<div class="nav">
		<div class="table">

		<ul class="<?php echo $mainSelected?>"><li><a href="<?php echo url_for("@main")?>"><b>Accueil</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul class="<?php echo $projetSelected?>"><li><a href="<?php echo url_for("@projets")?>"><b>Projets</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub  <? echo $projetShow?>">
                    <?php if($projetShow != ''):?>
                    <ul class="sub">
			<li <?php echo $projet_class?>><a href="<?php echo $url_projet?>">Accueil</a></li>
			<li <?php echo $taches_class?>><a href="<?php echo $url_taches?>">Taches</a></li>
			<li <?php echo $bugs_class?>><a href="<?php echo $url_bugs?>">Bugs</a></li>
                        <li <?php echo $idees_class?>><a href="<?php echo $url_idees?>">Idées</a></li>
                    </ul>
                    <?php endif;?>
                </div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul class="<?php echo $bugsSelected?>"><li><a href="<?php echo url_for("@bugs")?>"><b>Bugs</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul class="<?php echo $ideesSelected?>"><li><a href="<?php echo url_for("@idees")?>"><b>Idées</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul class="<?php echo $notesSelected?>"><li><a href="<?php echo url_for("@notes")?>"><b>Notes</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">

                </div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

                <div class="nav-divider">&nbsp;</div>

		<ul class="<?php echo $paramSelected?>"><li><a href="<?php echo url_for("@parametrages")?>"><b>Paramétrages</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub <? echo $paramShow?>">
                    <ul class="sub">
			<li <?php echo $paramProfil?>><a href="<?php echo url_for("@profil")?>">Mon profil</a></li>
			<li <?php echo $paramSubStatut?>><a href="<?php echo url_for('@statut')?>">Statuts</a></li>
			<li <?php echo $paramSubUtilisateur?>><a href="<?php echo url_for('@utilisateur')?>">Utilisateurs</a></li>
                        <li <?php echo $paramSubType?>><a href="<?php echo url_for('@typeprojet')?>">Types de projet</a></li>
                    </ul>
                </div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

                <?php if($sf_user->isAuthenticated()): ?>
                <div class="nav-divider">&nbsp;</div>

		<ul class="select"><li><a href="<?php echo url_for("@deconnexion")?>"><b>Deconnexion</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">

                </div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
                <?php endif; ?>

		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

