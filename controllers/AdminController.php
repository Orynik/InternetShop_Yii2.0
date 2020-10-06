<?php


namespace app\controllers;

use app\models\Sites;
use yii\base\Controller;
use yii\web\request;

class AdminController extends Controller
{
    public $layout = "admin";

    public function actionIndex(){
        $sites = Sites::find()->orderBy('Name')->all();

        return $this->render("index",[
            'sites' => $sites,
        ]);
    }

    public function actionDetails(){
        $site = Sites::findOne($_GET['id']);
        return $this->render("details",[
            'site' => $site,
        ]);
    }

    public function actionEdit(){
        $site = Sites::findOne($_GET['id']);
        return $this->render("edit",[
            'site' => $site,
        ]);
    }

    public function actionCreate(){
        return $this->render("create");
    }

    public function actionDelete(){
        $site = Sites::findOne($_GET['id']);
        return $this->render("delete",[
            'site' => $site ,
        ]);
    }
}