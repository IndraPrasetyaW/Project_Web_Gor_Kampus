<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user'; // Ganti dengan nama tabel Anda
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email', 'name'], 'required'],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => self::class],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            // Hash password sebelum disimpan
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
            return true;
        }
        return false;
    }
}
