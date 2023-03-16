<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepaymentandDebtCollection extends Model
{
	use HasFactory;

	protected $table = 'tbrepaymentanddebtcollection';

	protected $guarded = ['id','created_at','update_at'];

}
