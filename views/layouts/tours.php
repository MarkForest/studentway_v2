<?php
use app\assets\ToursAsset;
ToursAsset::register($this);
 ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>
    <section>
        <div id="footers">
            <p>© 2018  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, dignissimos.</p>
        </div>
    </section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
