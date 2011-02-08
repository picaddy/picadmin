<?php

/**
 * connexion actions.
 *
 * @package    adminpicaddy
 * @subpackage connexion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class connexionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }

  public function executeLogin(sfWebRequest $request) {
    $this->form = new LoginForm();

    if ($request->isMethod('post')) {
          $this->form->bind($request->getParameter('login'));
          if ($this->form->isValid()) {

             $values = $this->form->getValues();
             //$this->getUser()->setFlash('error', print_r($values));
             // $this->forward404Unless($request->isMethod('post'));
              $User = new Utilisateur();
              $this->userInfo = $User->getUserByEmail($this->form->getValue('email'));

              if(sizeof($this->userInfo) > 0) {
                  foreach($this->userInfo as $u) {
                    $user = $u;
                  }

                if($this->form->getValue('pass') == $user->getUtilisateurMotdepasse()) {
                    $this->getUser()->setAuthenticated(true);
                    $this->getUser()->addCredential('admin');
                    $this->getUser()->setAttribute('idUtilisateur', $user->getId());

                    $this->getUser()->setFlash('notice', 'Vous êtes maintenant connecté');
                    $this->redirect($this->generateUrl('main'));
                } else {
                    $this->getUser()->setFlash('error', 'Vos identifiants sont incorrects');
                    $this->redirect($this->generateUrl('connexion'));
                }
              }
          } else {
               $this->getUser()->setFlash('error', 'Vos identifiants sont incorrects');
               $this->redirect($this->generateUrl('connexion'));
          }
      }
  }

  public function executeLogout(sfWebRequest $request) {
    $this->getUser()->removeCredential('admin');
    $this->getUser()->setAuthenticated(false);
    $this->getUser()->removeAttribute('idUtilisateur');
    $this->getUser()->setFlash('notice', 'Vous êtes maintenant déconnecté');
    $this->redirect($this->generateUrl('connexion'));
  }
}
