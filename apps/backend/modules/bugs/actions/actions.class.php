<?php

/**
 * bugs actions.
 *
 * @package    picadmin
 * @subpackage bugs
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class bugsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
      $this->objet_bugs = new Bug();
      $this->bugs = $this->objet_bugs->getListeBugAll();
  }
}
