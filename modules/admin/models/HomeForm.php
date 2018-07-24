<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 27.09.17
 * Time: 18:05
 */

namespace app\modules\admin\models;


use app\models\Home;
use app\models\ListHome;
use yii\base\Model;


class HomeForm extends Model
{


    public $stock_content_uk;
    public $stock_content_ru;
    public $title_uk;
    public $title_ru;
    public $cost;
    public $header_title_1_uk;
    public $header_title_1_ru;
    public $header_title_2_uk;
    public $header_title_2_ru;
    public $button_text_uk;
    public $button_text_ru;
    public $listHome=[];
    public $reg;


    public function rules()
    {
        return [
            [['stock_content_uk', 'stock_content_ru',
                'title_uk', 'title_ru', 'header_title_1_uk',
                'header_title_1_ru', 'header_title_2_uk',
                'header_title_2_ru', 'button_text_uk',
                'button_text_ru','reg',], 'string'],
            [['cost'], 'string', 'max' => 25],

            [['stock_content_uk', 'stock_content_ru',
                'title_uk', 'title_ru', 'header_title_1_uk',
                'header_title_1_ru', 'header_title_2_uk',
                'header_title_2_ru', 'button_text_uk',
                'button_text_ru'], 'string'],
            [['cost'], 'required'],
        ];
    }


    public function saveData(){
        $home = Home::findOne(['region_key'=>$this->reg]);
        $listHome = ListHome::find()->where(['home_id'=>$home->id])->all();

        $home->stock_content_uk = $this->stock_content_uk;
        $home->stock_content_ru = $this->stock_content_ru;
        $home->title_uk = $this->title_uk;
        $home->title_ru = $this->title_ru;
        $home->cost = $this->cost;
        $home->header_title_1_uk = $this->header_title_1_uk;
        $home->header_title_1_ru = $this->header_title_1_ru;
        $home->header_title_2_uk = $this->header_title_2_uk;
        $home->header_title_2_ru = $this->header_title_2_ru;
        $home->button_text_uk = $this->button_text_uk;
        $home->button_text_ru = $this->button_text_ru;

        $isSaved = false;

        foreach (array_keys($this->listHome) as $id){
            $list = ListHome::findOne(['id'=>$id]);
            $list->text_ru = $this->listHome[$id]['text_ru'];
            $list->text_uk = $this->listHome[$id]['text_uk'];
            $isSaved = $list->save();
        }


        return ($home->save(false)&&$isSaved);

    }

}