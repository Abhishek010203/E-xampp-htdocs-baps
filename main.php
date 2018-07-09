<?php
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    
    <title><?= Html::encode($this->title) ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
    <?php //$this->head() ?>
    <style>
    body .modal.in .modal-dialog {
		-webkit-transform: auto !important;
		-ms-transform: auto !important;
		-o-transform: auto !important;
		transform: auto !important;
	}
	
	.error {
		text-align: center;
		color: red;
		margin-bottom: 10px;
		display: none;
	}
	
	.success {
		text-align: center;
		color: green;
		margin-bottom: 10px;
		display: none;
	}
    </style>
</head>
<body>
<?php $this->beginBody() ?>
	<div class="top dashboard-body">
		<div class="main-top-bar">
			<div class="top-log">
		      <div class="back-logo-top">
				 <img src="img/logo.png" alt="" class="img-thumbnail" height="100" width="100">
			  </div>
				<div class="pull-left">
					<h4><?= Html::encode($this->title) ?></h4>
				</div> 
				<div class="pull-right">
					<span class="glyphicon glyphicon-user"></span>
					<div class="user-view text-center">
						<img class="" src="img/default-user.png" alt="logo">
						<div class=" user-in">
							<h5><?php echo Yii::$app->session->get('name'); ?></h5>
							<p><?php echo Yii::$app->session->get('email'); ?></p>
							<p><?php echo Yii::$app->session->get('phone'); ?></p>
							<button class="btn log-user" data-toggle="modal" data-target="#myModal-edit">Edit</button>
						</div>
					</div>
				 <a href="index.php?r=site/signout"><span class="glyphicon glyphicon-log-out"></span></a>
				</div>
			</div>
		</div>
		<div class="dashboard-menu-mobile">
			<p><span class="glyphicon glyphicon-align-justify"></span></p>
		</div>
	</div>
	<div id="dashboard-options-menu" class="side-menu dashboard left">

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="">
				<div class="outer-ring">
					<img src="img/logo-1.png" alt="" width="100" height="100" class="img-thumbnail" />
				</div>
				</a>
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<ul class="dropdown dark hover-effect interactive">
			<!-- DROPDOWN ITEM -->
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/homedashboard") ? "
active " : ""; ?>dropdown-item">
				<a href="index.php?r=site/homedashboard">
                    Dashboard/Reports</a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/dashboard") ? "
active " : ""; ?>dropdown-item">
				<a href="index.php?r=site/dashboard">
                    Manage Users</a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/region") ? "
active " : ""; ?>dropdown-item">
				<a href="index.php?r=site/region">
                    Manage Regions
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/center") ? "
active " : ""; ?>dropdown-item">
				<a href="index.php?r=site/center">
                    Manage Center
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/accessmatrix") ? "
active " : ""; ?>dropdown-item">
				<a href="index.php?r=site/accessmatrix">
                    Manage Access Matrix
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/quotes") ? "
active " : ""; ?>dropdown-item">
				<a href="javascript:void(0);">
                    Manage Quotes
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/production") ? "
active " : ""; ?>dropdown-item">
				<a href="javascript:void(0);">
                    View Production
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/pricing-matrix") ? "
active " : ""; ?>dropdown-item">
				<a href="manage-pricing-matrix.php">
                    Manage Pricing Matrix
                </a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/prod-matrix") ? "
active " : ""; ?>dropdown-item up_last">
				<a href="manage-prod-matrix.php">
                    Manage Prod Matrix</a>
			</li>
            <li class="<?php echo ($_SERVER['QUERY_STRING'] == "r=site/settings") ? "
active " : ""; ?>dropdown-item">
			<li class="dropdown-item set">
				<a href="javascript:void(0)">
                    Settings<span class="glyphicon glyphicon-play"></span>
                </a>
				<ul class="sec-show">
					<li class="thir-show1" data-toggle="modal" data-target="#myModal-qty">
					<a href="javascript:void(0);" class="mod-1">QTY Type <span class="glyphicon glyphicon-play"></span></a>
					</li>
					<li class="thir-show2" data-toggle="modal" data-target="#myModal-ser">
					<a href="javascript:void(0);" class="mod-1">Serving Utensils<span class="glyphicon glyphicon-play"></span></a>
					</li>
					<li class="thir-show3" data-toggle="modal" data-target="#myModal-chafter">
					<a href="javascript:void(0);" class="mod-1">Chafer Type<span class="glyphicon glyphicon-play"></span></a>
					</li>
					<li class="thir-show4" data-toggle="modal" data-target="#myModal-por">
					<a href="javascript:void(0);" class="mod-1">	Portion Sizing<span class="glyphicon glyphicon-play"></a>
					</button>
					</li>
					<li><a href="">Order Channel</a></li>
					<li><a href="">Table Cloths</a></li>
					<li><a href="">Mandap</a></li>
					<li><a href="">Meal Type</a></li>
					<li><a href="">Status</a></li>
					<li class="thir-show5" data-toggle="modal" data-target="#myModal-qty">
					<a href="javascript:void(0);" class="mod-1">Center Settings<span class="glyphicon glyphicon-play"></a>
					</button>
						<!-- <ul class="thir-bar5"> -->
							<!-- <li class="menu-main">Center Settings<span>PARAMETER</span></li> -->
							<!-- <li><a href="">Center Name</a></li> -->
							<!-- <li><a href="">Center Address</a></li> -->
							<!-- <li><a href="">Delivery Fee    <span>$ 0.00</span></a></li> -->
							<!-- <li><a href="">Delivery Maximum Miles   <span>000</span></a></li> -->
							<!-- <li><a href="">Rate per mile exceeding maximum range</a></li> -->
							<!-- <li><a href="">Tax on all Catering  <span>Yes/No</span></a></li> -->
							<!-- <li><a href="">Tax only on On Site Catering   <span>Yes/No</span></a></li> -->
							<!-- <li><a href="">Tax on Rental  <span>Yes/No</span></a></li> -->
							<!-- <li><a href="">Local Tax  <span>0.00 %</span></a></li> -->
							<!-- <li><a href="">State Tax  <span>0.00 %</span></a></li> -->
						<!-- </ul> -->
					</li>
					<li class="thir-show6" data-toggle="modal" data-target="#myModal-rental">
						<a href="javascript:void(0);" class="mod-1">Rental Items<span class="glyphicon glyphicon-play"></a>
						</button>
												</li>
					<li><a href="">Service Fee Rates</a></li>
					<li class="thir-show7" data-toggle="modal" data-target="#myModal-dis">
						<a href="javascript:void(0);" class="mod-1">Discount Rates<span class="glyphicon glyphicon-play"></span>
						</a>
						
					</li>
				</ul>
			</li>
		</ul>

	</div>
	<!-- /SIDE MENU -->

    
    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
	
<?php $this->endBody() ?>
</body>
<div id="myModal-qty" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">QTY Type</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">Tray</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">PC</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Gallons</p><input class="enter-name-input1 hide" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Lbs</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- service-utensile -->
<div id="myModal-ser" class="modal fade in" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Serving Utensils</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">Tongs</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Cradle</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Serving spoon Large</p><input class="enter-name-input1 hide" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Serving Spoon Small</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class="glyphicon glyphicon-pencil"></span><span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- chafter-type -->
<div id="myModal-chafter" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chafer Type</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">Standard</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">round</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">1/3</p><input class="enter-name-input1 hide" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">1/2</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Split</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  
    </div>
  </div>
</div>
<!-- potion-sizing -->
<div id="myModal-por" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Portion Sizing</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">Portion</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Piece</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">LBS</p><input class="enter-name-input1 hide" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Bowl</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Spoon</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Glass 10 oz</p><input class="enter-name-input1 hide" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Glass 12 oz</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Glass 8 oz</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right"><span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  
    </div>
  </div>
</div>
<!-- rental item -->
<div id="myModal-rental" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Rental Items</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">Hall A Full Day</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">0000.00<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">Hall B Full Day</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">0000.00<span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- discount -->
<div id="myModal-dis" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Discount Rates</h4>
      </div>
      <div class="modal-body">
			<div class="mod-li"><p class="pull-left">0 - 49</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">1.10<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">50 – 100</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">1<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">101-200</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.97<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">201-350</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.95<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">350-500</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.93<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">501-750</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.93<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">750-1000</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.93<span class=" glyphicon glyphicon-remove"></span></p></div>
			<div class="mod-li"><p class="pull-left">1000-9999</p><input class="hide enter-name-input1" type="text" placeholder="enter text"><p class="pull-right">.93<span class=" glyphicon glyphicon-remove"></span></p></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
/* edit user */
<div class="modal fade in" id="myModal-edit" role="dialog">
	<div class="modal-dialog">
		<form action="index.php?r=site/addregion" method="post">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				  <h4 class="modal-title">Edit Profile</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" id="loggedin-userid" name="loggedin-userid" value="<?php echo Yii::$app->session->get('userid'); ?>">
					<!--<input name="_csrf" value="8uvL7sgO6m161Y8m4w78knU9EOv3ya_IPm4xO_KnU42avI6FqTaDBRXj6VyxRZjUQWhckcKc2-VMD1xhm-Qh_w==" type="hidden">-->
					<input class="enter-name-input" placeholder="Name" id="edit-name" name="edit-name" type="text" value="<?php echo Yii::$app->session->get('name'); ?>">
					<input class="enter-name-input" placeholder="Email" id="edit-email" name="edit-email" type="text" value="<?php echo Yii::$app->session->get('email'); ?>">
					<input class="enter-name-input" placeholder="Phone" id="edit-phone" name="edit-phone" type="text" value="<?php echo Yii::$app->session->get('phone'); ?>">
					<!--<input class="enter-name-input" placeholder="Password" name="User[password]" type="text">-->
					<div class="modal-footer text-center">
						<div class="error edit-profile-error"></div>
						<div class="success edit-profile-success"></div>
						<button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
						<button type="button" id="edit-user-profile" class="btn btn-default pull-right">Save</button>
					</div>
				</div>
				<div class="modal-body">
					<div class="ch">
						<h4 class="modal-title">Change Password</h4>
					</div>
					<input class="enter-name-input" placeholder="New Password" id="edit-password" name="edit-password" type="text">
					<input class="enter-name-input" placeholder="Confirm Password" id="edit-confirm-password" name="edit-confirm-password" type="text">
					<div class="modal-footer text-center">
						<div class="error edit-password-error"></div>
						<div class="success edit-password-success"></div>
						<button type="button" class="btn pull-left" data-dismiss="modal">Cancel</button>
						<button type="button" id="change-password-button" class="btn btn-default pull-right">Change Password</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/editregion.js"></script>
	
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/managecenter.js"></script>
	<script src="js/editprofile.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
	$(".glyphicon-user").click(function(){
    $(".user-view").toggle();
	return false;	
	});
	$(window).click(function(){
	 if ($(".user-view").is(":visible")){
	 $(".user-view").toggle();
	 }
		});
	});
		$(".dropdown-item").click(function(){
		$(".dropdown-item").addClass("active"); 
	}); 
	$(".glyphicon-pencil , .acess-mat-add").click(function(){
    $(".open").toggle();
	});		
	// $(window).on("resize",function(){
			// $(".modal-body").height($(this).height() / 2 );
		// }).resize();
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".dashboard-menu-mobile").on("click", function(){
		$(".side-menu .dropdown").addClass("show");
		return false;
		}); 
		$(window).click( function(){
		$(".side-menu .dropdown").removeClass("show");
		});
		$('#example').DataTable();
	});
</script>
</html>
<?php $this->endPage() ?>
