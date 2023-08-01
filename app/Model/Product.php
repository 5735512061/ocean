<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	protected $fillable = [
    	'product_name','product_name_eng', 'price', 'price_eng', 'detail', 'detail_eng', 'image'
    ];

    protected $primaryKey = 'id';
}
