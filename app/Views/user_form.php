<!doctype html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>Login form</title>
		<link rel="stylesheet" href="<?= base_url('css/login.css')?>">
    	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    	<!-- Bootstrap core CSS -->
 		<link href="<?= base_url('bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" >

	 	<!-- Bootstrap core JS -->
		<link href="<?= base_url('bootstrap/js/bootstrap.min.js')?>" rel="stylesheet" >
		<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
		<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
		<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
		<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#563d7c">
		
		<!-- Favicons -->
  </head>
  
  <body>
    <form class="form-signin card card-primary" method="POST" action="<?= base_url('login/login_action');?>">
  		<div class=" text-center mb-4">
    		<img class="mb-4" src="<?= base_url('img/logo.png')?>" alt="" width="72" height="72"><br>
    		<h1 class="h3 mb-3 font-weight-normal">Universitas Ahmad Dahlan</h1>
   
  		</div>
		
  		<div class="form-label-group">
    		<input type="email" id="email" class="form-control" name="email" holder="Email address" required autofocus>
    		<label for="inputEmail">Email address</label>
  		</div>
		
  		<div class="form-label-group">
    		<input type="password" id="password" name="password" class="form-control" placeholder="assword" required>
    		<label for="inputPassword">Password</label>
  		</div>

  		<div class="text-right p-t-8 p-b-31">
			<a href="#">
				Forgot password?
			</a>
 		</div>

  		<div class="checkbox mb-3">
    		<label>
      		<input type="checkbox" value="remember-me"> Remember me
    		</label>
		  </div>
		<br>  
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<br>
		
	<p>
		<?php if(!empty(session()->getFlashdata('gagal'))){?>
		<div class="alert alert-warning">
			<?php echo session()->getFlashdata('gagal') ?>
		</div>
	<?php } ?>

	</p>
</body>
</html>
