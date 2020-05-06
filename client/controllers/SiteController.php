<?php
namespace client\controllers;

use client\models\SignupForm;
use common\helpers\UserHelpers;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use common\models\db\User;


/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index','registration','verify-email'],
                        'allow' => true,
                        'roles' => ['?'],
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
                'view' => '@common/views/error/index'
            ],
        ];
    }



    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionError()
    {

        $exception = Yii::$app->errorHandler->exception;
//        var_dump($exception->getMessage());

        if ($exception !== null) {
            return $this->renderPartial('@common/views/error/index', [
                'exception' => $exception,
            ]);
        }
    }

    public function actionRegistration()
    {
        if (!Yii::$app->user->isGuest) {
            return UserHelpers::redirectToLoggedInUsersMod();
        }
        $registration = new SignupForm();

        if($registration->load(Yii::$app->request->post()) && $registration->signup())
        {
            Yii::$app->session->setFlash("success", "Thank You for registration.");
            Url::to('/');
        }

        $this->layout = 'auth-main';
        $registration->password = '';
        return $this->render('registration', [
            'registration' => $registration
        ]);
    }

    public function actionVerifyEmail()
    {
        $token = $_GET['token'];
        $model= User::findOne(array(

            'email_activation_code' => $token

        ));

        $this->layout='auth-main';

        if($model == null)
        {

            return $this->render('verify-email', [
                'message' => "Something went wrong!!"
            ]);
//            throw new CHttpException(404, 'Not found');
        }else{
            $model->email_verified = 1;
            $model->save();
            return $this->render('verify-email', [
//                'model' => $model,
                'message' => "Your email is verified!!"
            ]);
        }


    }





    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return UrlHelpers::redirectToAuthUrl();
    }
}
