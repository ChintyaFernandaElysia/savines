<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
	use HasFactory;

	protected $table = 'tbgoals';

	protected $guarded = ['id','created_at','update_at'];
}
