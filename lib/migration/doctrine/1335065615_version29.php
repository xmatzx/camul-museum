<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version29 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('objecto', 'objecto_super_category_id_super_categoria_objecto_id', array(
             'name' => 'objecto_super_category_id_super_categoria_objecto_id',
             'local' => 'super_category_id',
             'foreign' => 'id',
             'foreignTable' => 'super_categoria_objecto',
             ));
        $this->addIndex('objecto', 'objecto_super_category_id', array(
             'fields' => 
             array(
              0 => 'super_category_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('objecto', 'objecto_super_category_id_super_categoria_objecto_id');
        $this->removeIndex('objecto', 'objecto_super_category_id', array(
             'fields' => 
             array(
              0 => 'super_category_id',
             ),
             ));
    }
}