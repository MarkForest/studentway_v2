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
    <meta name="description" content="Обучение в институтах Австрии">
    <meta name="keywords" content="Австрия, Обучение, Туры в Австрию">

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : 'your-app-id',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "https://connect.facebook.net/es_LA/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
</script>

<?= $content ?>
<!-- Footer Section -->
<div class="footer" id="contact">
    <div class="container">
        <div class="col-md-6 contact">
            <h1>About Trainer</h1>
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <br>
                vel illum dolore eu feugiat nulla facilisis at vero Duis autem vel eum iriure dolor in <br>
                hendrerit in vulputate velit esse eros et accumsan.</p>
            <p>Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl,<br>
                molestie sed egestas bibendum, varius eu diam.</p>
        </div>
        <div class="col-md-3 contact footer-menu">
            <h1>Social</h1>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Pinterest</a></li>
                <li><a href="#">Google Plus</a></li>
            </ul>
        </div>
        <div class="col-md-3 contact">
            <h1>Contact Us</h1>
            <p> Contact our 24/7 customer support if you have any questions. We'll help you out. </p>
            <a href="mailto:support@gmail.com">contact@iland.com</a> </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
