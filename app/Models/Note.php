<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	use HasFactory;

	protected $table = 'tbnotes';

	protected $guarded = ['id','created_at','update_at'];

}
