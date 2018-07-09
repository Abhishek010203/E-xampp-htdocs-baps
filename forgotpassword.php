
	<div class="login-box">
		<div class="logo-top-box">
			<img src="img/logo-1.png" alt="logo"/>
		</div>
	<form action="index.php?r=site/mail" method="post">
		<input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
		<div class="login-box-body">
			<div class="text-center" style="margin-top: 20px;">
				<div class="text-center">
					<p class="already"><a href="javascript:void(0)"></a></p>
				</div>
			</div>
          <div class="form-group ">
            <input type="text" value="" id="login" name="User[email]"class="form-control" placeholder="Enter Email/Phone number">
          </div>
		  
        </div>
		<?php
			if(!empty(Yii::$app->session['errormessage'])) {
				echo '
			<div class="form-group login-error-message">
				<span class="login-error-message-span">'.Yii::$app->session['errormessage'].'</span>
			</div>
				';
			}
			?>
          <div class="" style="">
			<div class="">
			 <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
            </div><!-- /.col -->
          </div>
</div><!-- /.login-box-body -->
</form>
</div>