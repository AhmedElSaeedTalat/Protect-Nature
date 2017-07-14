<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;
  class theUser extends Eloquent
  {
       public $table = "theUser";
       public $fillable = ["email","password"];
       public $timestamps = false;
       public function imagen(){
       	return $this->hasMany(imagenes::class,"user_id");

       }
  }