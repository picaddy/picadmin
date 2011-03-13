<?php

/**
 * Statut form base class.
 *
 * @method Statut getObject() Returns the current form's model object
 *
 * @package    picadmin
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStatutForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'statut_nom'     => new sfWidgetFormInputText(),
      'statut_code'    => new sfWidgetFormInputText(),
      'statut_couleur' => new sfWidgetFormInputText(),
      'statut_bug'     => new sfWidgetFormInputText(),
      'statut_idee'    => new sfWidgetFormInputText(),
      'statut_tache'   => new sfWidgetFormInputText(),
      'statut_projet'  => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'statut_nom'     => new sfValidatorString(array('max_length' => 255)),
      'statut_code'    => new sfValidatorString(array('max_length' => 1)),
      'statut_couleur' => new sfValidatorString(array('max_length' => 6)),
      'statut_bug'     => new sfValidatorInteger(),
      'statut_idee'    => new sfValidatorInteger(),
      'statut_tache'   => new sfValidatorInteger(),
      'statut_projet'  => new sfValidatorInteger(),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('statut[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Statut';
  }

}
