<!--  start table-content  -->

<?php slot('title', 'Bonjour '.$utilisateur->getUtilisateurPrenom().' - Tableau de bord'); ?>

<div id="table-content">

	<!--  start related-activities -->
	<div id="related-activities">

		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->

		<!--  start related-act-bottom -->
		<div id="related-act-bottom">

			<!--  start related-act-inner -->
			<div id="related-act-inner">

				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Vos projets en cours</h5>
                                        <br><ul class="greyarrow">
                                         <?php  foreach($projetsUtilisateur as $projet)
                                             {
                                                ?><li><a href="<?php echo url_for('projets/indexProjet?id='.$projet->getProjet()->getId());?>"><?php echo $projet->getProjet()->getProjet_nom();?></a></li><?
                                             }
                                             ?>
					</ul>
				</div>
				
				<div class="clear"></div>

			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
                </div>
        </div>
    
    </div>
<!--  end content-table  -->