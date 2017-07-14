<?php 
   class home 
   {
       public function  index($data="",$data2=""){
       				
if($data2=="out"){
	header("location:http://localhost/ProtectNature/ItsOwers/Profile/");
}
         $x = celebs::skip(($data2-1)*4)->take("4")->get();
         $g =  celebs::find("1");
         $background= backgrounds::orderByRaw("RAND()")->take("1")->get();

                  require_once "Views/index.php";

         if( $_REQUEST['Password']==$_REQUEST["Confirm"]  && !empty($_REQUEST['Password'])){
         	$pass = password_hash($_REQUEST['Password'],PASSWORD_DEFAULT);
            $mail= $_REQUEST["mail"];
                   $user =   	theUser::create([
                "email"=>$mail,
                "password"=>$pass 
         		]);
                   		$_SESSION['mail']=$mail;
         }
           else{
        	$_SESSION['theErrors']="Dear, the password doesn't Match";
        }

         if($_REQUEST['correo']){
        $v = $_REQUEST['correo'];
        $contra =$_REQUEST['contra'];
        // $ps = password_hash($contra,PASSWORD_DEFAULT);
       $us=	theUser::selectRaw("email,password")->get();
foreach ($us as $key => $value) {
	$g= $value['email'];
		$contrasena= $value['password'];
        $newPass= password_verify($contra,$contrasena);
if($g==$v && $newPass){
			$_SESSION['mail']=$v;
			
		}
        else{
        	$_SESSION['error']="Dear, We are sorry either you password or userName is incorrect";
        }
	}
      
      
	}
 if($data2=="out"){
 session_destroy(); }

	

  if($_FILES['image']){
  	$name = $_FILES['image']['name'];
  	$tmp = $_FILES['image']['tmp_name'];
  	$location= $_SERVER['DOCUMENT_ROOT'].'/ProtectNature/public/images/';
  	$upload= move_uploaded_file($tmp, $location.$name);
  	$session = $_SESSION['mail'];
  	$id= theUser::selectRaw("id")->where("email",$session)->get();
foreach ($id as $key => $values) {
      $theId= 	$values['id'];
    imagenes::create([
       "image"=>$name,
       "user_id"=>$theId
    	]);
  }
  						}
$session = $_SESSION['mail'];
$xy = theUser::with("imagen")->where("email",$session)->get();
$image="";
foreach ($xy as $key => $value) {
	foreach ($value['imagen'] as $key => $value1) {
		$_SESSION['im']= $value1['image'];

	}
}



	}}



		   
         

