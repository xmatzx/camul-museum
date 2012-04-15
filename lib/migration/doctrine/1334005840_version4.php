<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version4 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('news', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '4',
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '5',
             ),
             'image' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'featured' => 
             array(
              'type' => 'boolean',
              'default' => '0',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('news_translation', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '4',
              'primary' => '1',
             ),
             'title' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '100',
             ),
             'resume' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'overview' => 
             array(
              'type' => 'clob',
              'notnull' => '1',
              'length' => '',
             ),
             'lang' => 
             array(
              'fixed' => '1',
              'primary' => '1',
              'type' => 'string',
              'length' => '2',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
              1 => 'lang',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('news');
        $this->dropTable('news_translation');
    }
}