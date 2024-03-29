<?php

/**
 * BaseCommentEstampagem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $estampagem_id
 * @property clob $comment
 * @property boolean $aproved
 * @property Estampagem $Estampagem
 * @property sfGuardUser $User
 * 
 * @method integer           getId()            Returns the current record's "id" value
 * @method integer           getUserId()        Returns the current record's "user_id" value
 * @method integer           getEstampagemId()  Returns the current record's "estampagem_id" value
 * @method clob              getComment()       Returns the current record's "comment" value
 * @method boolean           getAproved()       Returns the current record's "aproved" value
 * @method Estampagem        getEstampagem()    Returns the current record's "Estampagem" value
 * @method sfGuardUser       getUser()          Returns the current record's "User" value
 * @method CommentEstampagem setId()            Sets the current record's "id" value
 * @method CommentEstampagem setUserId()        Sets the current record's "user_id" value
 * @method CommentEstampagem setEstampagemId()  Sets the current record's "estampagem_id" value
 * @method CommentEstampagem setComment()       Sets the current record's "comment" value
 * @method CommentEstampagem setAproved()       Sets the current record's "aproved" value
 * @method CommentEstampagem setEstampagem()    Sets the current record's "Estampagem" value
 * @method CommentEstampagem setUser()          Sets the current record's "User" value
 * 
 * @package    museu
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCommentEstampagem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment_estampagem');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 5, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('estampagem_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('comment', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             ));
        $this->hasColumn('aproved', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Estampagem', array(
             'local' => 'estampagem_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}