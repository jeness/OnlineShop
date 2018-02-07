<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/19
 * Time: 22:03
 */
namespace  app\controllers;
use yii\web\Controller;

class MemberController extends Controller
{
    public function actionAuth()
    {
        $this -> layout = 'layout2';
        return $this->render("auth");
    }

}