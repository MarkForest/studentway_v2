<?php

namespace app\modules\admin\controllers;

use app\models\Askquestion;
use app\models\ILevelMessage;
use app\models\IMessageContact;
use app\models\Question;
use app\models\Records;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{

    public function actionQuestionMove(){
        if(\Yii::$app->request->isPost){
            $question = Askquestion::findOne($_POST['status']);
            $question->status=1;
            $question->save(false);
        }
        $questions = Askquestion::find()->where(['status'=>0])->all();
        $record = Records::find()->where(['status'=>0])->all();
        $level = ILevelMessage::find()->where(['status'=>0])->all();
        $message = IMessageContact::find()->where(['status'=>0])->all();


        return $this->render('index',[
            'questions'=>$questions,
            'records'=>$record,
            'level'=>$level,
            'message'=>$message,
        ]);

    }


    public function actionRecordMove(){
        if(\Yii::$app->request->isPost){
            $record = Records::findOne($_POST['status']);
            $record->status=1;
            $record->save(false);
        }
        $questions = Askquestion::find()->where(['status'=>0])->all();
        $record = Records::find()->where(['status'=>0])->all();
        $level = ILevelMessage::find()->where(['status'=>0])->all();
        $message = IMessageContact::find()->where(['status'=>0])->all();


        return $this->render('index',[
            'questions'=>$questions,
            'records'=>$record,
            'level'=>$level,
            'message'=>$message,
        ]);

    }

    public function actionLevelMove(){
        if(\Yii::$app->request->isPost){
            $record = ILevelMessage::findOne($_POST['status']);
            $record->status=1;
            $record->save(false);
        }
        $questions = Askquestion::find()->where(['status'=>0])->all();
        $record = Records::find()->where(['status'=>0])->all();
        $level = ILevelMessage::find()->where(['status'=>0])->all();
        $message = IMessageContact::find()->where(['status'=>0])->all();


        return $this->render('index',[
            'questions'=>$questions,
            'records'=>$record,
            'level'=>$level,
            'message'=>$message,
        ]);

    }

    public function actionMessageMove(){
        if(\Yii::$app->request->isPost){
            $record = IMessageContact::findOne($_POST['status']);
            $record->status=1;
            $record->save(false);
        }
        $questions = Askquestion::find()->where(['status'=>0])->all();
        $record = Records::find()->where(['status'=>0])->all();
        $level = ILevelMessage::find()->where(['status'=>0])->all();
        $message = IMessageContact::find()->where(['status'=>0])->all();


        return $this->render('index',[
            'questions'=>$questions,
            'records'=>$record,
            'level'=>$level,
            'message'=>$message,
        ]);

    }


    public function actionIndex()
    {
        $questions = Askquestion::find()->where(['status'=>0])->all();
        $record = Records::find()->where(['status'=>0])->all();
        $level = ILevelMessage::find()->where(['status'=>0])->all();
        $message = IMessageContact::find()->where(['status'=>0])->all();



        return $this->render('index',[
            'questions'=>$questions,
            'records'=>$record,
            'message'=>$message,
            'level'=>$level,
        ]);
    }


}
