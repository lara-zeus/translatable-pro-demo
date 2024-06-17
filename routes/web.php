<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    //    $p = Product::create(['price' => 3, 'name' => ['en'=>'testhhhhh','ar' => 'نعم']]);
    $p = Product::first();
    dd($p, $p->name);
});
