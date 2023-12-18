<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%invent}}`.
 */
class m231218_191352_create_invent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%invent}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%invent}}');
    }
}
