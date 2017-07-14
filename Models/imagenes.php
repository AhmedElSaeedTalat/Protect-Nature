<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;
  class imagenes extends Eloquent
  {
       public $table = "imagenes";
       public $timestamps =false;
       public $fillable=["user_id","image"];
  }