<?php

/**
 * ProjetType filter form base class.
 *
 * @package    adminpicaddy
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProjetTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'projet_type_nom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'projet_type_code'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'projet_type_couleur' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'projet_type_nom'     => new sfValidatorPass(array('required' => false)),
      'projet_type_code'    => new sfValidatorPass(array('required' => false)),
      'projet_type_couleur' => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('projet_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjetType';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'projet_type_nom'     => 'Text',
      'projet_type_code'    => 'Text',
      'projet_type_couleur' => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
