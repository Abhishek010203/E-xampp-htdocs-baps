<div class="logo-top-box">
			<img src="img/logo-1.png" alt="logo"/>
</div>
<div class="login-box-body">
	<form action="index.php?r=site/login" method="post">
		<div class="text-center" style="margin-top: 20px;">
			<div class="text-center">
				<p class="already"><a href="javascript:void(0)"></a></p>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="_csrf" value="eD9Mfs90eQu_Fzuax-Kk_MV5TKG7VGC3Aui78PvLjm4-byUwpxZBcepISOOEocK99QAA7-JjC91Ejs-DiIL0Pw==">
			<input type="text" name="Admin[email]" id="login" class="form-control" value="<?php echo @$email; ?>" placeholder="Email">
		</div>
		<div class="open">
		  <div class="form-group">
			<input type="password" name="Admin[password]" id="password" class="form-control" value="<?php echo @$password; ?>" placeholder="Password">
		  </div>
		</div>
		
		<?php 
		//echo "======>".var_dump($email)."<========";
		if(!empty($error)) {
			echo '
		<div class="form-group login-error-message">
			<span class="login-error-message-span">'.$error.'</span>
		</div>
			';
		}
		?>
		<div class="" style="">
			<div class="">
				<a href="#"> <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button></a>
			</div>
			<p class="already text-center" style="margin-top:15px;"><a href="index.php?r=site/forgotpasw">Forgot Password?</a></p>
		</div>
	</form>
</div>




  