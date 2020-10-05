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
use yii\web\request;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

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

//        if($sort == "name" || $sort == null){
//
//        }else if($sort == "price"){
//            $query->OrderBy("price");
//        }

        $pagination = new Pagination([
            'defaultPageSize' => 5,
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
