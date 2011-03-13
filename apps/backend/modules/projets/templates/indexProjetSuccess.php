<?php slot('title',$projet->getProjetNom().' - Accueil'); ?>

<h2>Informations</h2>
    <div id="info_projet" style="margin-left:10px">
        <span class="label"><b>Nom :</b></span>
        <span class="contenu"><?php echo $projet->getProjetNom();?></span> 
        <br>
        <br>
        <span class="label"><b>Description :</b></span>
        <span class="contenu"> <?php echo $projet->getProjetDescription();?></span>
        <br>
        <br>
        <span class="label"><b>Statut :</b></span>
        <span class="contenu"> <?php echo $projet->getStatut()->getStatutNom();?></span>
        <br>
        <br>
        <b>Type de projet :</b> <?php echo $projet->getProjetType()->getProjetTypeNom()?>
        <br>
        <br>
        <b>Début :</b> <?php echo $projet->getProjetDateDebut()?>
        <b>Fin :</b> <?php echo $projet->getProjetDateFin()?>
        <br>
        <br>
        <b>Utilsateurs : </b><?php
            $collaborateurs = '';
        foreach($utilisateurs as $utilisateur)
            { 
                $collaborateurs.= $utilisateur->getUtilisateur().', ';
            }
            echo substr($collaborateurs,0,-2);
            ?>
    </div>
<br>
<h2>Tâches</h2>
<?php foreach($listeTaches as $tache)
{
    echo "<br>".$tache->getTacheNom();
}?>
<br><br>
<h2>Idées</h2>
<?php foreach($listeIdees as $idee)
{
    echo "<br>".$idee->getIdeeNom();
}?>
<br><br>
<h2>Bugs</h2>
<?php foreach($listeBugs as $bug)
{
    echo "<br>".$bug->getBugUrl();
}?>

<br><br>

<h2>Documents</h2>
<?php foreach($listeDocuments as $document)
{
    echo "<br>".$document->getDocumentNom();
}?>