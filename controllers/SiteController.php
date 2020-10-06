<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Sites;
use yii\data\Pagination;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCatalog($sort, $order)
    {
        $query = Sites::find();

        if($order == "down"){
            $query->OrderBy([
                $sort => SORT_ASC
            ]);
        }else if ($order == "up"){
            $query->OrderBy([
                $sort => SORT_DESC
            ]);
        }

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $sites = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('catalog', [
            'sites' => $sites,
            'pagination' => $pagination,
        ]);
    }
}
