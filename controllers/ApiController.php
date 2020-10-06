<?php


namespace app\controllers;

use Yii;
use yii\base\Controller;
use app\models\Sites;
use yii\helpers\Url;

class ApiController extends Controller
{
    public function actionEdit(){
         Sites::updateAll([
            'Name' => $_POST['name'],
            'Price' => $_POST['price'],
            'Description' => $_POST['description'],
            'Grid' => $_POST['type']
        ],'id = ' . $_POST['id']);

        Yii::$app->response->redirect(Url::to(['admin/index'], true));
    }

    public function actionCreate(){
        $site = new Sites();
        $site -> Name = $_POST["name"];
        $site -> Price = $_POST["price"];
        $site -> Description = $_POST["description"];
        $site -> Grid = $_POST["type"];
        $site->save();

        Yii::$app->response->redirect(Url::to(['admin/index'], true));
    }

    public function actionDelete(){
        Sites::findOne($_POST["id"])->delete();
        Yii::$app->response->redirect(Url::to(['admin/index'], true));
    }
}