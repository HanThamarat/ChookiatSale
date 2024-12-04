<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessorySales extends Model
{
    use HasFactory;
    protected $table = 'accessorySale';
    protected $fillable = ['SaleID','AccessoryID','AccessoryType','AccessoryPaidSource','AccessoryPrice','AccessoryCom'];
}
