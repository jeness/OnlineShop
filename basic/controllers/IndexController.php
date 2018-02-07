<?php
namespace app\controllers;

use yii\web\Controller;

//use app\models\Test;

class IndexController extends Controller
{
    public function actionIndex()
    {
//        echo "index/index";
        //views/index/index.php
//        $model = new Test();
//        $data = $model->find()->one();
//        return $this->render("index",array("row"=>$data));
        $this->layout = 'layout1'; //去掉yii2模板默认的header和footer
//        return $this->renderPartial("index");//或者直接把return写成这样
        return $this->render("index");
    }
}