<?php
/**
 * Created by PhpStorm.
 * User: 余灏然
 * Date: 2018/1/21
 * Time: 22:39
 */
namespace app\modules\controllers;

use yii\web\Controller;
use Yii;
use app\modules\models\Admin;
use yii\data\Pagination;



class ManageController extends Controller
{
    public function actionMailchangepass()
    {
        $this->layout = false;
        $time = Yii::$app->request->get("timestamp");
        $adminuser = Yii::$app->request->get("adminuser");
        $token = Yii::$app->request->get("token");
        $model = new Admin;
        $myToken = $model->createToken($adminuser, $time);
        if ($token != $myToken) {
            $this->redirect(['public/login']);
            Yii::$app->end();
        }
        if (time() - $time > 300) { //超过五分钟，链接失效，重定向到主页
            $this->redirect(['public/login']);
            Yii::$app->end();
        }

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            if ($model->changePass($post)) {
                //$this -> redirect(['public/login']); //跳转到登录界面
                Yii::$app->session->setFlash('info', '密码修改成功');
            }
        }


        $model->adminuser = $adminuser;
        return $this->render("mailchangepass", ['model' => $model]);
    }

    public function actionManagers()
    {
        $this->layout="layout1";
        $model = Admin::find();
        $count = $model->count();
        $pageSize = Yii::$app->params['pageSize']['manage'];
        $pager = new Pagination(['totalCount'=>$count, 'pageSize'=>$pageSize]);
        $managers = $model->offset($pager->offset)->limit($pager->limit)->all();
        return $this->render("managers",['managers'=>$managers,'pager'=>$pager]);
    }

    public function actionReg()
    {
        $this->layout = 'layout1';
        $model = new Admin;
        if(Yii::$app->request->isPost) {
            $post=Yii::$app->request->post();
            if ($model->reg($post)) {
                    Yii::$app->session->setFlash('info', '添加成功');
                } else {
                    Yii::$app->session->setFlash('info', '添加失败');
                }
        }

        $model->adminpass = '';
        $model->repass = '';
        return $this->render('reg',['model' => $model]);
    }

}