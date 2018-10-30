<?php
  namespace app\assets;

  use yii\web\AssetBundle;
  class ToursAsset extends AssetBundle
  {
      public $basePath = '@webroot';
      public $baseUrl = '@web';
      public $css = [
          'tours/css/style.css',
          'tours/bootstrap/css/bootstrap-theme.min.css',
          'tours/bootstrap/css/bootstrap.min.css',
          'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
      ];
      public $js = [

      ];
      public $depends = [
          'yii\web\YiiAsset',
      ];
  }
