<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
	use HasFactory;

	protected $table = 'tbexpenses';

	protected $guarded = ['id','created_at','update_at'];

}
