<?php

/**
 * UtilisateurToGroupe form base class.
 *
 * @method UtilisateurToGroupe getObject() Returns the current form's model object
 *
 * @package    adminpicaddy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurToGroupeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'utilisateur_id' => new sfWidgetFormInputHidden(),
      'groupe_id'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'utilisateur_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('utilisateur_id')), 'empty_value' => $this->getObject()->get('utilisateur_id'), 'required' => false)),
      'groupe_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('groupe_id')), 'empty_value' => $this->getObject()->get('groupe_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('utilisateur_to_groupe[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UtilisateurToGroupe';
  }

}
