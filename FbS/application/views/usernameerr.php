<html>
<head>
	<?php $this->load->helper('url'); ?>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css';?>">
	<script type="text/javascript" src=" <?php echo base_url().'js/bootstrap.minjs';  ?>"></script>
	<script type="text/javascript" src="<php echo base_url().'jquery_2.2.3.min.js' ?>"></script>
</head>
<body>
	<div class="container-fluid fb_back">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-9 col-xs-offset-2 col-xs-9">
				<div class="col-md-2 col-xs-2 hed"> 
				facebook  	
			    </div><br>
			    <div class="col-md-1  col-xs-2">
					<input type="button" value="SignUp" class="btn-success form-control">
			    </div>
			</div>
		</div>
		<div class="row">
		   		<br><br><br><br> <br><br>
			<div class="col-md-offset-3 col-md-5 col-xs-offset-4 col-xs-5 err_box" >
				<div class="col-md-4  hm_hd">
					<br><b>Facebook Login</b>		
				</div><br><br><br><hr><br>
				<div class="col-md-offset-1 col-md-3 hm_login">
					<b>Email or Phone:</b>
				</div>
				<div class="col-md-4">
					<input type="textbox" class="form-control">
			    </div> <br><br><br><br>
			    <div class="col-md-offset-1 col-md-3 hm_login">
			        <b>Passord</b>
			    </div>
			    <div class="col-md-4">
			    	<input type="textbox" class="form-control">
			    </div><br><br>
			    <div class="col-md-offset-4 col-md-3 hm_login">
			    <input type="checkbox"><b>Keep me logged in</b><br><br>
				</div>	
				<div class="col-md-offset-4 col-md-6 hm_login">
					<input type="button" value="Log In">&nbsp or <a href><b>Sign up for Facebook</b></a>
				</div>
				<div class="col-md-offset-4 col-md-6 hm_login"><br>
                 	<a href>Forgotten Password?</a>
				</div>
 		</div>
	</div>
</body>
</html>
