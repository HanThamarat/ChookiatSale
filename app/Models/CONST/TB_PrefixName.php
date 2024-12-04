<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_PrefixName extends Model
{
    use HasFactory;

    protected $table = 'TB_PrefixName';
    protected $fillable = ['Name_TH', 'Name_EN', 'Active'];
}
