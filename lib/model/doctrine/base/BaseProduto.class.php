<?php

/**
 * BaseProduto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $overview
 * 
 * @method integer getId()       Returns the current record's "id" value
 * @method string  getTitle()    Returns the current record's "title" value
 * @method clob    getOverview() Returns the current record's "overview" value
 * @method Produto setId()       Sets the current record's "id" value
 * @method Produto setTitle()    Sets the current record's "title" value
 * @method Produto setOverview() Sets the current record's "overview" value
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('produto');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('overview', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}