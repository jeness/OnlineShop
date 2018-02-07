<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/19
 * Time: 11:50
 */
namespace app\models;
use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static function tableName()
    {
        //return "imooc_test";
        return "{{%admin}}";
    }
}