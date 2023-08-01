<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';

	protected $fillable = [
    	'name', 'phone', 'message'
    ];

    protected $primaryKey = 'id';
}
