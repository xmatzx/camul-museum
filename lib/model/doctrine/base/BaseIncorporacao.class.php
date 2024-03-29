<?php

/**
 * BaseIncorporacao
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property Doctrine_Collection $Estampagem
 * @property Doctrine_Collection $Objecto
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getTitle()      Returns the current record's "title" value
 * @method Doctrine_Collection getEstampagem() Returns the current record's "Estampagem" collection
 * @method Doctrine_Collection getObjecto()    Returns the current record's "Objecto" collection
 * @method Incorporacao        setId()         Sets the current record's "id" value
 * @method Incorporacao        setTitle()      Sets the current record's "title" value
 * @method Incorporacao        setEstampagem() Sets the current record's "Estampagem" collection
 * @method Incorporacao        setObjecto()    Sets the current record's "Objecto" collection
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIncorporacao extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('incorporacao');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Estampagem', array(
             'local' => 'id',
             'foreign' => 'incorporation_id'));

        $this->hasMany('Objecto', array(
             'local' => 'id',
             'foreign' => 'incorporation_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}