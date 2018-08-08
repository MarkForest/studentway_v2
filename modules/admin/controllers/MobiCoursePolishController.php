<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\models\MobiHome;
use app\modules\admin\models\MobiHomeForm;
use app\models\MobiExplore;
use app\models\MobiExploreList;
use app\models\MobiExploreLevels;
use app\models\MobiAsWellAs;
use app\models\MobiConditons;
use app\models\MobiConditonsList;
use app\models\MobiPrice;

class MobiCoursePolishController extends controller
{
  public function actionIndex($reg='dp'){
    if($reg=='dp')$drop = 'Днепр';
    if($reg=='ky')$drop = 'Киев';
    if($reg=='kh')$drop = 'Харьков';
    if($reg=='vn')$drop = 'Винница';
    if($reg=='kv')$drop = 'Кропивницькый';
    if($reg=='km')$drop = 'Кременчук';
    if($reg=='iz')$drop = 'Измаил';
    if($reg=='od')$drop = 'Одесса';
    if($reg=='bc')$drop = 'Белая Церковь';
    if($reg=='sl')$drop = 'Cловянск';
    //MobiHome
    $mobiHome = MobiHome::findOne(['region_key'=>$reg]);
    $mobiHomeForm = new MobiHomeForm;
    //MobiExplore
    $mobiExplore = MobiExplore::findOne(['region_key'=>$reg]);
    $mobiExploreLists = MobiExploreList::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();
    $mobiExploreLevels = MobiExploreLevels::find()->where(['MobiExplore_id'=>$mobiExplore['id']])->all();

    //mobiAsWellAs
    $mobiAsWellAs = MobiAsWellAs::findOne(['region_key'=>$reg]);

    //mobiConditions
    $mobiConditions = MobiConditons::findOne(['region_key'=>$reg]);
    $mobiConditionsLists = MobiConditonsList::find()->where(['MobiConditions_id'=>$mobiConditions['id']])->all();

    //MobiPrice
    $mobiPrice = MobiPrice::findOne(['region_key'=>$reg]);
    return $this->render('index',[
      'drop'=>$drop,
      'reg'=>$reg,
      'mobiHome'=>$mobiHome,
      'mobiHomeForm'=>$mobiHomeForm,
      'mobiExplore'=>$mobiExplore,
      'mobiExploreLists' =>$mobiExploreLists,
      'mobiExploreLevels'=>$mobiExploreLevels,
      'mobiAsWellAs'=>$mobiAsWellAs,
      'mobiConditions'=>$mobiConditions,
      'mobiConditionsLists'=>$mobiConditionsLists,
      'mobiPrice' => $mobiPrice,
    ]);
  }
}
 ?>
