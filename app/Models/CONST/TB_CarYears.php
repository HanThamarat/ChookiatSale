<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_CarYears extends Model
{
    use HasFactory;
    protected $table = 'TB_CarYears';
    protected $fillable = ['Model_ID', 'year', 'Active'];
}
