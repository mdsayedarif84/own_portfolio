<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table    =   'homes';
    protected $fillable = [
        'name',
        'work_experience',
        'description',
        'status',
        'profile_img',
    ];
}
