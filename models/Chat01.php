<?php


namespace app\models;


use yii\db\ActiveRecord;

class Chat01 extends ActiveRecord
{

    public static function tableName()
    {
        return 'chat01';
    }

    public function getUsers()
    {
        return $this->hasOne(Users::class, ['id' => 'id_user']);
    }
}