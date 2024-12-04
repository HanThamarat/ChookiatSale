<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACS extends Model
{
    use HasFactory;
    protected $table = 'accessorys';
    protected $fillable = ['Car_ID', 'AccessorySource', 'AccessoryDetail'];
}
