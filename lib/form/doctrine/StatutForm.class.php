<?php

/**
 * Statut form.
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class StatutForm extends BaseStatutForm
{
  public function configure()
  {
      unset($this['created_at']);
      unset($this['updated_at']);
      unset($this['statut_projet']);
      unset($this['statut_tache']);
      unset($this['statut_idee']);
      unset($this['statut_bug']);
      
       $this->disableLocalCSRFProtection();
      //On configure les différents champs
      $this->setWidgets(array(
        'statut_nom' => new sfWidgetFormInput(),
        'statut_couleur' => new sfWidgetFormInput(),
        'statut_code' => new sfWidgetFormInput(),
        'statut_type' =>  new sfWidgetFormChoice(
                array('choices' =>
                    array('Tâche', 'Projet', 'Idée','Bug')))
      ));

  
     
      $this->validatorSchema['statut_nom'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['statut_couleur'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['statut_code'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['statut_type'] = new sfValidatorString(array('required' => true));
      $this->validatorSchema['statut_projet'] = new sfValidatorString(array('required' => false));
      $this->validatorSchema['statut_tache'] = new sfValidatorString(array('required' => false));
      $this->validatorSchema['statut_bug'] = new sfValidatorString(array('required' => false));
      $this->validatorSchema['statut_idee'] = new sfValidatorString(array('required' => false));

      $this->widgetSchema->setNameFormat('statut[%s]');

    
  }
}
