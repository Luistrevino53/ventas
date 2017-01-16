<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
	protected $table 	= 'productos';
    protected $fillable	= [];
    public $timestamps	= false;

    public function comentario(){
    	return $this->hasMany('App\Comentarios');
    }
}
