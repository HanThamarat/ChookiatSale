<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\ACS;

class AccessoryCosts extends Model
{
    use HasFactory;
    protected $table = 'accessoryCosts';
    protected $fillable = ['accessoryID','accessoryCost','AccessoryCom','AccessoryComAmount','StartDate','EndDate'];

    public function ToAcs() {
        return $this->hasOne(ACS::class, 'id', 'accessoryID');
    }
}
