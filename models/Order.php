<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent {

	protected $fillable = ['title'];

	public $timestamps = false;

}