<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version13 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('objecto', 'owner_id', 'integer', '4', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('objecto', 'owner_id');
    }
}