<?php

use app\models\Order;

/* @var $this yii\web\View */
$this->title = 'MyInventory';
?>

<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="orange">
				<i class="material-icons">content_copy</i>
			</div>
			<div class="card-content">
				<p class="category">Total Order</p>
				<h3 class="title"><?php echo (Order::find()->count());?> <small>order</small></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<!-- <i class="material-icons text-danger">warning</i> <a href="#pablo">Get More Space...</a> -->
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="green">
				<i class="material-icons">store</i>
			</div>
			<div class="card-content">
				<p class="category">Order Tersedia</p>
				<h3 class="title"><?php echo (Order::find()->where('stok=1')->count()); ?><small>order</small></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<!-- <i class="material-icons">date_range</i> Last 24 Hours -->
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="red">
				<i class="material-icons">info_outline</i>
			</div>
			<div class="card-content">
				<p class="category">Order Belum Tersedia</p>
				<h3 class="title"><?php echo (Order::find()->where('stok=2')->count()); ?><small>order</small></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<!-- <i class="material-icons">local_offer</i> Tracked from Github -->
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6">
		<div class="card card-stats">
			<div class="card-header" data-background-color="blue">
				<i class="fa fa-twitter"></i>
			</div>
			<div class="card-content">
				<p class="category">Order Dikirim</p>
				<h3 class="title"><?php echo (Order::find()->where('status_kirim=1')->count()); ?><small>order</small></h3>
			</div>
			<div class="card-footer">
				<div class="stats">
					<!-- <i class="material-icons">update</i> Just Updated -->
				</div>
			</div>
		</div>
	</div>
</div>



