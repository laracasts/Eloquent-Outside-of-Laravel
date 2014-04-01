<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//Capsule::schema()->create('orders', function($table)
//{
//    $table->increments('id');
//    $table->string('title');
//});

//Order::create(['title' => 'Wii U']);
//
//dd(Order::first()->toArray());

$order = Order::first();
$order->title = 'Playstation 4';
$order->save();

dd(Order::first()->toArray());