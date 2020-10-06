<?php


namespace app\models;

use yii\db\ActiveRecord;


class Sites extends ActiveRecord
{
    //Возврат нужной нам таблицы
    static function Sites(){
        return "Sites";
    }
}