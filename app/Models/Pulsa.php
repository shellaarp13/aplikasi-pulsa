<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pulsa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pulsa';

    protected $fillable = [
        'No_Hp',
        'Nominal'
    ];

    protected $hidden = [];
}
