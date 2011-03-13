<?php

/**
 * UtilisateurToGroupe filter form base class.
 *
 * @package    picadmin
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUtilisateurToGroupeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('utilisateur_to_groupe_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UtilisateurToGroupe';
  }

  public function getFields()
  {
    return array(
      'utilisateur_id' => 'Number',
      'groupe_id'      => 'Number',
    );
  }
}
