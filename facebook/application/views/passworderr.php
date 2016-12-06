<html>
<head>
	<?php $this->load->helper('url'); ?>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css';?>">
	<script type="text/javascript" src=" <?php echo base_url().'js/bootstrap.minjs';  ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'jquery_2.2.3.min.js' ?>"></script>
</head>
<body>
	<div class="container-fluid fb_back">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-9 col-xs-offset-1 col-xs-9">
				<div class="col-md-2  col-xs-2 hed"> 
					facebook  	
			    </div><br>
			    <div class="col-md-1  col-xs-2">
					<input type="button" value="SignUp" class="btn-success form-control">
			    </div>
			</div>
		</div>
		<div class="row">
		   			<br><br><br><br><br><br>
			<div class="col-md-offset-3 col-md-5 col-xs-offset-3 col-xs-7 err_box" >
				<div class="col-md-12  col-xs-12 hm_hd">
					<br><b>Facebook Login</b>		
				</div>
				<br><br><br><hr>
				<div class="col-md-12 col-xs-offset-2 col-xs-12">	
					<div class="col-md-2 col-xs-4">
					    <br><b>Login as:</b>
					</div>
					<div class="col-md-1 col-xs-2">
						<img src="<?php echo base_url().'image/img2.jpg';?>" class="hm_img"></src>
					</div>
					<div class="col-md-2 col-xs-4">
								<b>Haris np</b>	
								Harisnp@gmail.com								
					</div>	
				</div>
			
						<div class="col-md-offset-2 col-md-12 col-xs-offset-2 col-xs-12">
							<div class="col-md-offset-2 col-md-2 col-xs-offset-4 col-xs-4">
								<b>not haris?:</b><br><br>
							</div>
						</div>
						<div class="col-md-offset-2 col-md-12 col-xs-offset-2 col-xs-12">	
							<div class="col-md-2 col-xs-4">
					              	<b>Password:</b>
							</div>
							<div class="col-md-4 col-xs-4">
									<input type="textbox" class="form-control"><br>
							</div>
							<div class="col-md-offset-2 col-md-9 col-xs-offset-4 col-xs-9">
								<input type="checkbox"><b>keep me logged in</b><br><br>
							</div>
							<div class="col-md-offset-2 col-md-9 col-xs-offset-4 col-xs-9">
								<input type="button" value="Log In"> or <a href><b>Sign Up For Facebook</b></a><br><br>
							</div>
							<div class="col-md-offset-2 col-md-9 col-xs-offset-4 col-xs-9">
								<a href><b>Forgotten Password</b></a>
		                    </div>
                		</div>
			</div>	
		</div>		
</body>
</html>



