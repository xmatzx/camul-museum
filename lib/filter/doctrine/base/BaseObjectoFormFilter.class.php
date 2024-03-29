<?php

/**
 * Objecto filter form base class.
 *
 * @package    museu
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseObjectoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'overview'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'obs'               => new sfWidgetFormFilterInput(),
      'designation'       => new sfWidgetFormFilterInput(),
      'image'             => new sfWidgetFormFilterInput(),
      'denomination'      => new sfWidgetFormFilterInput(),
      'finality'          => new sfWidgetFormFilterInput(),
      'history'           => new sfWidgetFormFilterInput(),
      'buy_date'          => new sfWidgetFormFilterInput(),
      'years'             => new sfWidgetFormFilterInput(),
      'price'             => new sfWidgetFormFilterInput(),
      'specification'     => new sfWidgetFormFilterInput(),
      'bibliography'      => new sfWidgetFormFilterInput(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'super_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SuperCategoria'), 'add_empty' => true)),
      'owner_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'local_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'incorporation_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Incorporacao'), 'add_empty' => true)),
      'featured'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'             => new sfValidatorPass(array('required' => false)),
      'overview'          => new sfValidatorPass(array('required' => false)),
      'obs'               => new sfValidatorPass(array('required' => false)),
      'designation'       => new sfValidatorPass(array('required' => false)),
      'image'             => new sfValidatorPass(array('required' => false)),
      'denomination'      => new sfValidatorPass(array('required' => false)),
      'finality'          => new sfValidatorPass(array('required' => false)),
      'history'           => new sfValidatorPass(array('required' => false)),
      'buy_date'          => new sfValidatorPass(array('required' => false)),
      'years'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'specification'     => new sfValidatorPass(array('required' => false)),
      'bibliography'      => new sfValidatorPass(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categoria'), 'column' => 'id')),
      'super_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SuperCategoria'), 'column' => 'id')),
      'owner_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Owner'), 'column' => 'id')),
      'local_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'incorporation_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Incorporacao'), 'column' => 'id')),
      'featured'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('objecto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Objecto';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'title'             => 'Text',
      'overview'          => 'Text',
      'obs'               => 'Text',
      'designation'       => 'Text',
      'image'             => 'Text',
      'denomination'      => 'Text',
      'finality'          => 'Text',
      'history'           => 'Text',
      'buy_date'          => 'Text',
      'years'             => 'Number',
      'price'             => 'Number',
      'specification'     => 'Text',
      'bibliography'      => 'Text',
      'category_id'       => 'ForeignKey',
      'super_category_id' => 'ForeignKey',
      'owner_id'          => 'ForeignKey',
      'local_id'          => 'ForeignKey',
      'incorporation_id'  => 'ForeignKey',
      'featured'          => 'Boolean',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
