
	<div class="login-box">
		<div class="logo-top-box">
			<img src="img/logo-1.png" alt="logo"/>
		</div>
		<form action="index.php?r=site/matchotp" method="post">
			<input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
			<div class="login-box-body">
				<div class="text-center" style="margin-top: 20px;">
					<div class="text-center">
						<p class="already"><a href="javascript:void(0)"></a></p>
					</div>
				</div>
			  <div class="form-group ">
				<input type="text" value="<?php echo $toEmail ?>" id="login" name="User[email]"class="form-control" placeholder="Enter Email/Phone number" readonly>
			  </div>
			  
			</div>
			<div class="open">
			  <div class="text-center">
				<p class="already"><a href="javascript:void(0)">One time Password(OTP) has been sent to your
					Email<?php $result = substr($toEmail, 0, 3); echo "  ".$result."***"; ?>/Phone ***, please
						enter the same here to proceed.</a></p>
				</div>
			  <div class="form-group">
				<input type="password" name="User[otp]" value="" id="password" class="form-control" placeholder="Enter One-Time Password (OTP)">
			  </div>
			</div>
			  <div class="" style="">
				<div class="">
				 <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
				</div><!-- /.col -->
			  </div>
		</form>
	</div>