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
	<div class="container-fluid">
		<div class="row fb_head">
		<form action="<?php echo base_url().'index.php/LoginC/loginController'; ?>" method="POST">
			<div class="col-md-offset-1 col-md-12 col-xs-offset-1 col-xs-12 ">
				<div class="col-md-2 col-xs-2 hed">
					facebook
				</div>
				<div class="col-md-offset-2 col-md-2 col-xs-offset-2 col-xs-3">
					Email or Phone:					
					<input type="textbox" name="email"  class="form-control">
					<input type="checkbox"> keep me logged in
				</div>
				<div class="col-md-2 col-xs-3">
				   	Password:
					<input type="textbox" name="password" class="form-control">
					Forgotten your Psassword?
				</div>
					<br>
	         	<div class="col-md-1 col-xs-1">	
					<input type="submit" value="Log In"  class="form-control" div id="button">
				</div>
				</div>	
    		</div>
    	</form>
    	</div>
		<div class="row fb_back">
			<div class="col-md-14 col-xs-14">
				<div class="col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
					<div class="col-md-11 col-xs-11 para">
	            		<br><b>Facebook helps you connect and share with the people in your life.</b></p>         
	              	</div>
					<div class="col-md-11 col-xs-5">
	              		<img src="<?php echo base_url().'image/img.png';?>"class="img img-responsive"></src>
	                </div>
	            </div>
	            <div class="col-md-5 col-xs-6">	
	            	<div class="col-md-9 col-xs-12">
		            	<div class="col-md-12 col-xs-12 free"><b>Create an account</b></div>
		            	<div class="col-md-12 col-xs-12 you">It's free and always will be.</div>
		            	<div class="col-md-6 col-xs-6">
		            		<input type="text" name="firstname" placeholder="First Name"  class="form-control tx" ><br>
		            	</div>
		            	<div class="col-md-6 col-xs-6">
		            		<input type="text" name="lastname" placeholder="Last Name" class="form-control tx"><br>
		            	</div>
			        	<div class="col-md-12 col-xs-12">
			        		<input type="text" name="email" placeholder="Your Email" value="" class="form-control tx" ><br>
			        	</div>
						<div class="col-md-12 col-xs-12">	     
							<input type="text" name="remail" placeholder="Re-enter Email" class="form-control tx"><br>
			     		</div>
			     		<div class="col-md-12 col-xs-12">	     
			        		<input type="password"  name="password" placeholder="New Password" class="form-control tx"><br>
			        	</div>
			        	<div class="col-md-12 col-xs-12 you" >	     
		    				Birthday
		    	    	</div>
		    			<div class="col-md-2 col-xs-2">
		    				<select div class="txd">
		    					<option>Day</option>
				      				<?php 
				      				for ($i=1; $i <= 12; $i++) { 
				      				echo "<option>$i</option>";
				      				}
				       				?>
					  		</select>
						</div>
						<div class="col-md-2 col-xs-2 ">
							<select div class="txd">
		    					<option>Month</option>
						      		<?php 
						      		for ($i=1; $i <= 12; $i++) { 
						      			echo "<option>$i</option>";
						      		}
						       		?>	  			  
					  		</select>
						</div>
						<div class="col-md-2 col-xs-3">
							<select div class="txd">
		    					<option>Year</option>
						      		<?php 
						      		for ($i=1; $i <= 12; $i++) { 
						      			echo "<option>$i</option>";
						      		}
						       		?>	  			  
					  		</select>
						</div>
						<div class="col-md-4 col-xs-4">
							<a href="">why do i need to provide my
					  		date of birth?</a><br><br>
						</div>
						<div class="col-md-12  col-xs-12 gndr">
							<input type="radio" name="gender" value="Female"div id="btn"><b>Female</b>			
							<input type="radio" name="gender" value="male" div id="btn"><b>Male</b><br><br>
						</div>
				
						<div class="col-md-12 col-xs-12 p">
							By clicking Sign Up, you agree to our <a href="">Terms</a> and that <br>you have read our <a href="">Data Policy</a>, including our <a href="">Cookie Use.</a><br><br>
		        		</div>
						<div class="col-md-6 col-xs-7">
							<input type="submit" value="Create an account"class="btn-success form-control tx">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
