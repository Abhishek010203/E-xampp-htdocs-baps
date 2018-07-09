
	<div class="login-box">
		<div class="logo-top-box">
			<img src="img/logo-1.png" alt="logo"/>
		</div>
		<form action="index.php?r=site/resetpassword" method="post">
			<input type="hidden" name="_csrf" value="PrhGASKStcnn4QuKhvZKnPjVc_Y3G9q3H4ghdYAwOhkJ8hRHePHUi9KjbPrjxxzPvaxBnnorjsRJ0BcWsUhbUg==">
			<div class="login-box-body">
				<div class="text-center" style="margin-top: 20px;">
					<div class="text-center">
						<p class="already"><a href="javascript:void(0)"></a></p>
					</div>
				</div>
				<div class="form-group ">
				<?php foreach($result as $results): ?>
				<input type="hidden" value="<?php echo $results['id'] ?>" id="login" name="User[id]"class="form-control">
				<?php endforeach ?>
			  </div>
			  <div class="form-group ">
				<input type="password" value="" id="login" name="User[newpassword]"class="form-control" placeholder="New password" required>
			  </div>
			  <div class="form-group ">
				<input type="password" value="" id="login" name="User[conformpassword]"class="form-control" placeholder="Conform password" required>
			  </div>
			  
			</div>
			  <div class="" style="">
				<div class="">
				 <button type="submit" class="btn btn-primary btn-block btn-flat">Continue</button>
				</div><!-- /.col -->
			  </div>
		</form>
	</div>