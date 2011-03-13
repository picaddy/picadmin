<?php

/**
 * Groupe form.
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GroupeForm extends BaseGroupeForm
{
  public function configure()
  {
      unset($this["created_at"]);
      unset($this["updated_at"]);

       $this->disableLocalCSRFProtection();
      //On configure les différents champs
      $this->setWidgets(array(
        'groupe_nom' => new sfWidgetFormInput(),
      ));

      $this->validatorSchema['groupe_nom'] = new sfValidatorString(array('required' => true));

      $this->widgetSchema->setNameFormat('groupe[%s]');
  
  }
}
