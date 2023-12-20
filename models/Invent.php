<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invent".
 *
 * @property int $id
 * @property string $hostname
 * @property string $username
 * @property string $ipaddr
 * @property string $macaddr
 * @property string $platform
 * @property string $motherboard
 * @property int $opmemory
 * @property string $hard
 * @property string $cpu
 * @property string $os
 */
class Invent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hostname', 'username', 'ipaddr', 'macaddr', 'platform', 'motherboard', 'opmemory', 'hard', 'cpu', 'os'], 'required'],
            [['hostname', 'username', 'ipaddr', 'macaddr', 'platform', 'motherboard', 'hard', 'cpu', 'os'], 'string'],
            [['opmemory'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hostname' => 'Hostname',
            'username' => 'Username',
            'ipaddr' => 'Ipaddr',
            'macaddr' => 'Macaddr',
            'platform' => 'Platform',
            'motherboard' => 'Motherboard',
            'opmemory' => 'Opmemory',
            'hard' => 'Hard',
            'cpu' => 'Cpu',
            'os' => 'Os',
        ];
    }
}
