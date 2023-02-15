<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $table = 'tbincome';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at	'
    ];
}
