<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'branch',
        'account_name',
        'account_no',
    ];

}
