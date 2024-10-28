<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'is_client',
        'address',
        'description',
        'datetime_avaliable',
        'budget_progress',
    ];
}
