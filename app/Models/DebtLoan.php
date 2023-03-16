<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebtLoan extends Model
{
	use HasFactory;

	protected $table = 'tbdebtandloan';

	protected $guarded = ['id','created_at','update_at'];

}
