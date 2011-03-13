<?php

/**
 * ProjetType form.
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProjetTypeForm extends BaseProjetTypeForm
{
  public function configure()
  {
      //On commence par supprimé les champs invisible
      unset($this["created_at"]);
      unset($this["updated_at"]);

   
     $this->disableLocalCSRFProtection();
      //On configure les différents champs
      $this->setWidgets(array(
        'projet_type_nom' => new sfWidgetFormInput(),
        'projet_type_couleur' => new sfWidgetFormInput(),
        'projet_type_code' => new sfWidgetFormInput()
      ));

      $this->validatorSchema['projet_type_nom'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['projet_type_couleur'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['projet_type_code'] = new sfValidatorString(array('required' => true));
      
      $this->widgetSchema->setNameFormat('projetType[%s]');
  
    
  }
}
