<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Mobi|Edit'
 ?>
<header role="banner" id="fh5co-header">
    <div class="fluid-container hidden">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html"><img src="/images/logo_bell.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-nav-section="home"><span>Головна | Главная</span></a></li>
                    <li><a href="#" data-nav-section="explore"><span>Переваги | Преймущества</span></a></li>
                    <li><a href="#" data-nav-section="testimony"><span>Відгуки | Отзывы</span></a></li>
                    <li><a href="#" data-nav-section="pricing"><span>Ціни | Цены</span></a></li>
                    <li><a href="#" data-nav-section="team"><span>Наші спеціолісти | Наши специолисты</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="drop hidden-xs">
        <button class="dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=$drop?>
            <span class="caret"></span></button>
        <ul class="dropdown-menu" style="margin-left: -50px;">
            <li><?= Html::a('Днепр', ['mobi-course-polish/index?reg=dp']) ?></li>
            <li><?= Html::a('Киев', ['mobi-course-polish/index?reg=ky']) ?></li>
            <li><?= Html::a('Харьков', ['mobi-course-polish/index?reg=kh']) ?></li>
            <li><?= Html::a('Винница', ['mobi-course-polish/index?reg=vn']) ?></li>
            <li><?= Html::a('Кропивницкий', ['mobi-course-polish/index?reg=kv']) ?></li>
            <li><?= Html::a('Кременчук', ['mobi-course-polish/index?reg=km']) ?></li>
            <li><?= Html::a('Измаил', ['mobi-course-polish/index?reg=iz']) ?></li>
            <li><?= Html::a('Одесса', ['mobi-course-polish/index?reg=od']) ?></li>
            <li><?= Html::a('Белая Церковь', ['mobi-course-polish/index?reg=bc']) ?></li>
            <li><?= Html::a('Славянск', ['mobi-course-polish/index?reg=sl']) ?></li>
        </ul>
    </div>
</header>
<!-- Mobi Home -->
<div class="mobi__home--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiHome.png" class="img-responsive img-rounded " alt="mobiHome.png">
        <div class="row">
          <?php $form = ActiveForm::begin(['id'=>'MobiHomeForm'])?>
          <?= $form->field($mobiHomeForm, 'reg')->textInput(['value'=>$reg, 'class'=>'hidden'])->label(false)?>
          <div class="col-xs-6">
            <?=$form->field($mobiHomeForm, 'desc_ru')->textarea(['value'=>$mobiHome['desc_ru']])?>
            <?=$form->field($mobiHomeForm, 'header_ru')->textarea(['value'=>$mobiHome['header_ru']])?>
            <?=$form->field($mobiHomeForm, 'address_ru')->textarea(['value'=>$mobiHome['address_ru']])?>
            <?=$form->field($mobiHomeForm, 'contact_one')->textarea(['value'=>$mobiHome['contact_one']])?>
          </div>
          <div class="col-xs-6">
            <?=$form->field($mobiHomeForm, 'desc_uk')->textarea(['value'=>$mobiHome['desc_uk']])?>
            <?=$form->field($mobiHomeForm, 'header_uk')->textarea(['value'=>$mobiHome['header_uk']])?>
            <?=$form->field($mobiHomeForm, 'address_uk')->textarea(['value'=>$mobiHome['address_uk']])?>
            <?=$form->field($mobiHomeForm, 'contact_two')->textarea(['value'=>$mobiHome['contact_two']])?>
          </div>
        </div>
        <input type="submit" class="btn btn-lg btn-success" value="Сохранить">
        <?php ActiveForm::end() ?>
      </div>
    </div>
  </div>
</div>

<div class="mobi__explore--admin">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <img src="/images/mobiExplore.jpg" alt="mobiExplore.jpg" class="img-responsive img-rounded">
      </div>
    </div>
  </div>
</div>
