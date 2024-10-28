<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'last_job_date',
        'description',
        'obs',
        'work_count',
        'is_client',
    ];

}

// $table->id();
// $table->string('name');
// $table->string('email')->unique();
// $table->string('phone');
// $table->string('last_date_job');
// $table->text('description');
// $table->text('obs');
// $table->integer('amount_of_work');
// $table->boolean('is_client');
// $table->rememberToken();
// $table->timestamps();
// $table->timestamps();
