 <?php if($data=="Profile"):?>
<section name="Login">	
<div class="row gigi">
	<div class="col-sm-4 col-sm-offset-1">
		<div class="Register">
			<div ><span class="log btn btn-success">Login</span>
				<div class="signs btn btn-success">
					<p class="pa " @click="sign" v-if="<?php if(!empty($_SESSION['mail'])){echo "false";} ;?>"><a class="link" >Sign-up</a></p>
					<p class="pa" @click="log"  v-if="<?php if(!empty($_SESSION['mail'])){echo "false";} ;?>"><a  class="link">Sign-in</a></p>
					<p class="pa"   v-if="<?php if(!empty($_SESSION['mail'])){echo "true";}else{echo "false";} ;?>"><a href="http://localhost/ProtectNature/ItsOwers/Profile/out" class="link">Sign-out</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container-fluid Login " v-if="<?php if(!empty($_SESSION['mail'])){echo "false";} ;?>" v-show="mary">
	<form method="post"  action="http://localhost/ProtectNature/ItsOwers/Profile/usuario">
		<div class="row" style="margin-top: 51px;" >
	
		   <div class="col-sm-5 col-sm-offset-3"  >
				
				
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="mail" required>
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password" required>
				  </div>
				   <div class="form-group">
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="confirm Password" name="Confirm" required>
				  </div>
			</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-5" >
					<button type="submit" class="btn btn-success bot" >Sign up</button>
					<!-- <input type="submit"> -->
				</div>
			</div>	
				</form>
				<div class="alert alert-danger alert-dismissible alert1" role="alert" v-if="<?php if(!empty($_SESSION['theErrors']) && $data2=="up"){echo "true";}else{
					echo "false";
					} ;?>">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $_SESSION['theErrors'];?>
					
				</div>
	</div>

	<div class="container-fluid Login " v-show="login">
	<form method="post" action="http://localhost/ProtectNature/ItsOwers/Profile/sign">
		<div class="row" style="margin-top: 51px;" >
	
		   <div class="col-sm-5 col-sm-offset-3"  >
				
				
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="correo" required>
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contra" required>
			</div>
			</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-5" >
					<button type="submit" class="btn btn-success bot"  >Sign in</button>
					<!-- <input type="submit"> -->
				</div>
			</div>	
				</form>
				<div class="alert alert-danger alert-dismissible alert1" role="alert" v-if="<?php if(!empty($_SESSION['error']) && $data2=="user"){echo "true";}else{
					echo "false";
					} ;?>">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $_SESSION['error'];?>
					
				</div>

	</div>
<div class="container profileContent" v-if="<?php if(empty($_SESSION['mail'])){echo "false";} ;?>">
	<div class="row gogo">
		<div class="col-sm-4  col-sm-offset-2">
			<img v-if="<?php if(empty($_SESSION['im'])){echo "false";} ;?>" src="http://localhost/ProtectNature/public/images/<?php echo $_SESSION['im'] ;?>" alt="" class="img-responsive img-thumbnail prImage">
			<img v-if="<?php if(empty($_SESSION['im'])){echo "true";}else{echo "false";} ;?>" src="http://localhost/ProtectNature/public/images/profile.jpg" alt="" class="img-responsive img-thumbnail prImage">
		</div>
	</div>
</div>
<div class="container xv">
	<div class="row gogo">
		<div class="col-sm-4  col-sm-offset-2">
			<form method="post" enctype="multipart/form-data" action="http://localhost/ProtectNature/ItsOwers/Profile/upload">
			   
				<input type="file" class="file" name="image" onchange="this.form.submit()">
				<div class="btn btn-success file1">upload image</div>
			</form>
		</div>
	</div>
</div>


</section>
<?php endif;?>