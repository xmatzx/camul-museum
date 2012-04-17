<?php

/**
 * BaseObjecto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $overview
 * @property clob $obs
 * @property string $designation
 * @property string $image
 * @property clob $denomination
 * @property clob $finality
 * @property clob $history
 * @property date $buy_date
 * @property integer $years
 * @property float $price
 * @property clob $specification
 * @property clob $bibliography
 * @property integer $category_id
 * @property integer $owner_id
 * @property boolean $featured
 * @property CategoriaObjecto $Categoria
 * @property ProprietarioObjecto $Owner
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getTitle()         Returns the current record's "title" value
 * @method clob                getOverview()      Returns the current record's "overview" value
 * @method clob                getObs()           Returns the current record's "obs" value
 * @method string              getDesignation()   Returns the current record's "designation" value
 * @method string              getImage()         Returns the current record's "image" value
 * @method clob                getDenomination()  Returns the current record's "denomination" value
 * @method clob                getFinality()      Returns the current record's "finality" value
 * @method clob                getHistory()       Returns the current record's "history" value
 * @method date                getBuyDate()       Returns the current record's "buy_date" value
 * @method integer             getYears()         Returns the current record's "years" value
 * @method float               getPrice()         Returns the current record's "price" value
 * @method clob                getSpecification() Returns the current record's "specification" value
 * @method clob                getBibliography()  Returns the current record's "bibliography" value
 * @method integer             getCategoryId()    Returns the current record's "category_id" value
 * @method integer             getOwnerId()       Returns the current record's "owner_id" value
 * @method boolean             getFeatured()      Returns the current record's "featured" value
 * @method CategoriaObjecto    getCategoria()     Returns the current record's "Categoria" value
 * @method ProprietarioObjecto getOwner()         Returns the current record's "Owner" value
 * @method Objecto             setId()            Sets the current record's "id" value
 * @method Objecto             setTitle()         Sets the current record's "title" value
 * @method Objecto             setOverview()      Sets the current record's "overview" value
 * @method Objecto             setObs()           Sets the current record's "obs" value
 * @method Objecto             setDesignation()   Sets the current record's "designation" value
 * @method Objecto             setImage()         Sets the current record's "image" value
 * @method Objecto             setDenomination()  Sets the current record's "denomination" value
 * @method Objecto             setFinality()      Sets the current record's "finality" value
 * @method Objecto             setHistory()       Sets the current record's "history" value
 * @method Objecto             setBuyDate()       Sets the current record's "buy_date" value
 * @method Objecto             setYears()         Sets the current record's "years" value
 * @method Objecto             setPrice()         Sets the current record's "price" value
 * @method Objecto             setSpecification() Sets the current record's "specification" value
 * @method Objecto             setBibliography()  Sets the current record's "bibliography" value
 * @method Objecto             setCategoryId()    Sets the current record's "category_id" value
 * @method Objecto             setOwnerId()       Sets the current record's "owner_id" value
 * @method Objecto             setFeatured()      Sets the current record's "featured" value
 * @method Objecto             setCategoria()     Sets the current record's "Categoria" value
 * @method Objecto             setOwner()         Sets the current record's "Owner" value
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseObjecto extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('objecto');
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
        $this->hasColumn('overview', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('obs', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('designation', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('denomination', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('finality', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('history', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('buy_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('years', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('price', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('specification', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('bibliography', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('owner_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('featured', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('CategoriaObjecto as Categoria', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasOne('ProprietarioObjecto as Owner', array(
             'local' => 'owner_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}