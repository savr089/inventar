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
            'hostname' => $this->text()->notNull(),
            'username' => $this->text()->notNull(),
            'ipaddr' => $this->text()->notNull(),
            'macaddr' => $this->text()->notNull(),
            'platform' => $this->text()->notNull(),
            'motherboard' => $this->text()->notNull(),
            'opmemory' => $this->integer()->notNull(),
            'hard' => $this->text()->notNull(),
            'cpu' => $this->text()->notNull(),
            'os' => $this->text()->notNull()
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
