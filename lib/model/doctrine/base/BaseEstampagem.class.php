<?php

/**
 * BaseEstampagem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property string $intentario
 * @property string $designation
 * @property clob $overview
 * @property string $autor
 * @property float $price
 * @property string $rel_date
 * @property clob $material
 * @property clob $tecnique
 * @property string $colors
 * @property string $altura
 * @property string $largura
 * @property string $imagem
 * @property clob $obs
 * @property clob $bibliography
 * 
 * @method integer    getId()           Returns the current record's "id" value
 * @method string     getTitle()        Returns the current record's "title" value
 * @method string     getIntentario()   Returns the current record's "intentario" value
 * @method string     getDesignation()  Returns the current record's "designation" value
 * @method clob       getOverview()     Returns the current record's "overview" value
 * @method string     getAutor()        Returns the current record's "autor" value
 * @method float      getPrice()        Returns the current record's "price" value
 * @method string     getRelDate()      Returns the current record's "rel_date" value
 * @method clob       getMaterial()     Returns the current record's "material" value
 * @method clob       getTecnique()     Returns the current record's "tecnique" value
 * @method string     getColors()       Returns the current record's "colors" value
 * @method string     getAltura()       Returns the current record's "altura" value
 * @method string     getLargura()      Returns the current record's "largura" value
 * @method string     getImagem()       Returns the current record's "imagem" value
 * @method clob       getObs()          Returns the current record's "obs" value
 * @method clob       getBibliography() Returns the current record's "bibliography" value
 * @method Estampagem setId()           Sets the current record's "id" value
 * @method Estampagem setTitle()        Sets the current record's "title" value
 * @method Estampagem setIntentario()   Sets the current record's "intentario" value
 * @method Estampagem setDesignation()  Sets the current record's "designation" value
 * @method Estampagem setOverview()     Sets the current record's "overview" value
 * @method Estampagem setAutor()        Sets the current record's "autor" value
 * @method Estampagem setPrice()        Sets the current record's "price" value
 * @method Estampagem setRelDate()      Sets the current record's "rel_date" value
 * @method Estampagem setMaterial()     Sets the current record's "material" value
 * @method Estampagem setTecnique()     Sets the current record's "tecnique" value
 * @method Estampagem setColors()       Sets the current record's "colors" value
 * @method Estampagem setAltura()       Sets the current record's "altura" value
 * @method Estampagem setLargura()      Sets the current record's "largura" value
 * @method Estampagem setImagem()       Sets the current record's "imagem" value
 * @method Estampagem setObs()          Sets the current record's "obs" value
 * @method Estampagem setBibliography() Sets the current record's "bibliography" value
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEstampagem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('estampagem');
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
        $this->hasColumn('intentario', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('designation', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('overview', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('autor', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('price', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('rel_date', 'string', 125, array(
             'type' => 'string',
             'length' => 125,
             ));
        $this->hasColumn('material', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('tecnique', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('colors', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('altura', 'string', 125, array(
             'type' => 'string',
             'length' => 125,
             ));
        $this->hasColumn('largura', 'string', 125, array(
             'type' => 'string',
             'length' => 125,
             ));
        $this->hasColumn('imagem', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('obs', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('bibliography', 'clob', null, array(
             'type' => 'clob',
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