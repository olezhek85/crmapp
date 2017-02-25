<?php

use yii\db\Migration;

class m170225_102644_init_customer_table extends Migration
{
    public function up()
    {
      $this->createTable(
        'customer',
        [
          'id' => 'pk',
          'name' => 'string',
          'birth_date' => 'date',
          'notes' => 'text'
        ],
        'ENGINE=InnoDB'
      );
    }

    public function down()
    {
        $this->dropTable('customer');
    }

}
