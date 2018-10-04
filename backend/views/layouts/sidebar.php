<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\NewAppAsset;
use app\models\User;
use ramosisw\CImaterial\web\MaterialAsset;

MaterialAsset::register($this);
$this->registerJsFile("@web/js/notification-node.js", ['depends' => 'yii\web\JqueryAsset']); //depends -> loaded after jquery.js
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js");
function ActiveTest($route)
{
    if (strpos(Yii::$app->requestedRoute, $route) !== false ) {
        return 'class="active"';
    } else return null;
}

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class="wrap wrapper">
    <?php if(!Yii::$app->user->isGuest): ?>
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
					Developer Creative
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li <?= ActiveTest('site') ?>>
	                    <a href="<?= Url::to(['site/index']) ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
					</li>
					
					<li <?= ActiveTest('order') ?>>
	                    <a href="<?= Url::to(['order/index']) ?>">
	                        <i class="material-icons">library_books</i>
	                        <p>Order</p>
	                    </a>
					</li>

	                <li <?= ActiveTest('inventory') ?>>
	                    <a href="<?= Url::to(['inventory/index']) ?>">
	                        <i class="material-icons">person</i>
	                        <p>Inventory</p>
	                    </a>
	                </li>
					
					<li <?= ActiveTest('check') ?>>
	                    <a href="<?= Url::to(['check/index']) ?>">
	                        <i class="material-icons">library_books</i>
	                        <p>Check Order</p>
	                    </a>
					</li>
	       
					<li <?= ActiveTest('request') ?>>
	                    <a href="<?= Url::to(['request/index']) ?>">
	                        <i class="material-icons">notifications</i>
	                        <p>Request Barang</p>
	                    </a>
	                </li>
					<li <?= ActiveTest('laporan') ?>>
	                    <a href="<?= Url::to(['laporan/index']) ?>">
	                        <i class="material-icons">content_paste</i>
	                        <p>Laporan Order</p>
	                    </a>
	                </li>
	                <li <?= ActiveTest('pengiriman') ?>>
	                    <a href="<?= Url::to(['pengiriman/index']) ?>">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Pengiriman</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
        </div>
        
    <?php endif; ?>
    <div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= Url::to(['site/index']) ?>">MY INVENTORY</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?= Url::to(['site/index']) ?>" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">dashboard</i>
						<p class="hidden-lg hidden-md">Dashboard</p>
					</a>
				</li>
				
				<li class="dropdown">
					<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">person</i>
						<p class="hidden-lg hidden-md">Profile</p>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        echo '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                        ?>
						
					</ul>
				</li>
			</ul>

			<form class="navbar-form navbar-right" role="search">
				<div class="form-group  is-empty">
					<input type="text" class="form-control" placeholder="Search">
					<span class="material-input"></span>
				</div>
				<button type="submit" class="btn btn-white btn-round btn-just-icon">
					<i class="material-icons">search</i><div class="ripple-container"></div>
				</button>
			</form>
		</div>
	</div>
</nav>

        <div class="content">
            <div class="container-fluid">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                
                <?= $content ?>
            </div>
        <div class="content">

        <footer class="footer">
            <div class="container-fluid">
                <p class="pull-left">&copy; SIMADANG <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>
    </div>
    
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
