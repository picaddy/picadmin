<?php

/**
 * ProjetToUtilisateur form base class.
 *
 * @method ProjetToUtilisateur getObject() Returns the current form's model object
 *
 * @package    adminpicaddy
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjetToUtilisateurForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'projet_id'      => new sfWidgetFormInputHidden(),
      'utilisateur_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'projet_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('projet_id')), 'empty_value' => $this->getObject()->get('projet_id'), 'required' => false)),
      'utilisateur_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('utilisateur_id')), 'empty_value' => $this->getObject()->get('utilisateur_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('projet_to_utilisateur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjetToUtilisateur';
  }

}
