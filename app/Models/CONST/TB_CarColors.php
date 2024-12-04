<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_CarColors extends Model
{
    use HasFactory;
    protected $table = 'TB_CarColors';
    protected $fillable = ['Name_TH', 'Name_EN', 'Active'];
}
