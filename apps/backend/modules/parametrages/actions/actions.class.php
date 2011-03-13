<?php

/**
 * parametrages actions.
 *
 * @package    picadmin
 * @subpackage parametrages
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class parametragesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
  }



  public function executeIndexStatut(sfWebRequest $request)
  {
      //On va lister tous les status selon leur type
      $statut = new Statut();
      $this->liste_statut = $statut->getStatutAll();

      $this->form = new StatutForm();

      if ($request->isMethod('post'))
      {
          $this->ajoutStatut($request,$this->form);
      }
  }

  public function ajoutStatut(sfWebRequest $request, sfForm $form)
  {
        //On recupère nos valeurs
        $bind = $request->getParameter('statut');
         
         //On regarde de quel type de statut il s'agit
         if($bind['statut_type'] == 0) $bind['statut_tache']=1;
         if($bind['statut_type'] == 1) $bind['statut_projet']=1;
         if($bind['statut_type'] == 2) $bind['statut_idee']=1;
         if($bind['statut_type'] == 3) $bind['statut_bug']=1;
         

          //On fait le bind
          $form->bind($bind);

          if ($form->isValid())
          {
              $form->save();
              $this->getUser()->setFlash('notice','Ajout du statut effectué');
          }
          else
          {
              $this->getUser()->setFlash('error','Echec de l\'ajout');
          }

         $this->redirect('@statut');
  }

  /* Actions liées aux types de projet */
  public function executeIndexProjetType(sfWebRequest $request)
  {
      //On va lister tous les types de projets
      $type_projet = new ProjetType();
      $this->liste_type = $type_projet->getProjetTypeAll();

      $this->form = new ProjetTypeForm();
      
      if ($request->isMethod('post'))
      {
          $this->ajoutForm($request,$this->form);
      }

  }

  protected function ajoutForm(sfWebRequest $request, sfForm $form)
  {

            //print_r($request);
            $form->bind($request->getParameter('projetType'));
            
            if ($form->isValid())
            {
                $form->save();
                $this->getUser()->setFlash('notice','Ajout du type de projet effectué');
            }
            else
            {
                 $this->getUser()->setFlash('error','Echec de l\'ajout');
            }

           
              $this->redirect('@typeprojet');
            //}
           //  exit('terminée');
  }

  public function executeSuppressiontype(sfWebRequest $request)
  {
    if($request->isXmlHttpRequest())
      {
        $this->form = new ProjetTypeForm();
      
        //  print_r($request);
          //A refactoriser
          $type = Doctrine::getTable('projetType')->findById($request->getParameter('typeId'));
          $type->delete();
      $type_projet = new ProjetType();
      $this->liste_type = $type_projet->getProjetTypeAll();

          $this->getUser()->setFlash('notice','Type de projet supprimé');

          return $this->renderPartial('parametrages/listeProjetType',array('liste'=>$this->liste_type,"form"=>$this->form));
      }
  }

  public function executeSuppressionstatut(sfWebRequest $request)
  {
    if($request->isXmlHttpRequest())
      {

          $type = Doctrine::getTable('statut')->findById($request->getParameter('statutId'));
          $type->delete();
      
          $statut_all = new Statut();
          $this->liste_statut = $statut_all->getStatutAll();

          $form = new StatutForm();
          
          $this->getUser()->setFlash('notice','Statut supprimé');

          return $this->renderPartial('parametrages/listeStatut',array('liste_statut'=>$this->liste_statut,'form'=>$form));
      }
  }


  public function executeEditiontype(sfWebRequest $request)
  {
      if($request->isXmlHttpRequest())
      {
            //On va créer un formulaire d'édition pour l'objet en param
             $type = new ProjetType();
             $type_projet = $type->getProjetTypeById($request->getParameter('projet_type_id'));
             $form_edit = new ProjetTypeForm($type_projet);

             //Configuration jsson
       //      $this->getResponse()->setHttpHeader('Content-type', 'application/json');

             if ($request->isMethod('post'))
                {
                    $form_edit->bind($request->getParameter('projetType'));

                    if($form_edit->isValid())
                    {
                           $form_edit->save();
                           $this->getUser()->setFlash('notice','Type de projet modifié');
                    }
                    else
                    {
                         $form_edit->renderGlobalErrors();
                         $this->getUser()->setFlash('error','Erreur lors de la modification');
                    }
                }
         $type_projet = new ProjetType();
          $this->liste_type = $type_projet->getProjetTypeAll();
           $form_new = new ProjetTypeForm();

          return $this->renderPartial('parametrages/listeProjetType',array('liste'=>$this->liste_type,"form"=>$form_new));

      }

  }

  public function executeEditionstatut(sfWebRequest $request)
  {
      if($request->isXmlHttpRequest())
      {
            //On va créer un formulaire d'édition pour l'objet en param
             $statut = Statut::getStatutById($request->getParameter('statut_id'));
             $form_edit = new StatutForm($statut);
           
             if ($request->isMethod('post'))
                {

                     //On recupère nos valeurs
                    $bind = $request->getParameter('statut');

                     //On regarde de quel type de statut il s'agit
                     if($bind['statut_type'] == 0) $bind['statut_tache']=1;
                     if($bind['statut_type'] == 1) $bind['statut_projet']=1;
                     if($bind['statut_type'] == 2) $bind['statut_idee']=1;
                     if($bind['statut_type'] == 3) $bind['statut_bug']=1;

                     $form_edit->bind($bind);

                    if($form_edit->isValid())
                    {
                           $form_edit->save();
                           $this->getUser()->setFlash('notice','Type de projet modifié');
                    }
                    else
                    {
                         $form_edit->renderGlobalErrors();
                         $this->getUser()->setFlash('error','Erreur lors de la modification');
                    }
                }

           $this->liste_statut = Statut::getStatutAll();
           $form_new = new StatutForm();

          return $this->renderPartial('parametrages/listeStatut',array('liste_statut'=>$this->liste_statut,"form"=>$form_new));
     
      }

  }
  
  
  public function executeIndexUtilisateur(sfWebRequest $request)
  {
      //On va aller chercher tous les utilisateurs
      $utilisateur = new Utilisateur();
      $this->liste_utilisateur = $utilisateur->getUserAll();
      
      //Ainsi que les groupes
      $groupe = new Groupe();
      $this->liste_groupe = $groupe->getGroupeAll();

      $this->groupe_form = new GroupeForm();
  }

  public function executeProfil(sfWebRequest $request)
  {
      
  }
}
