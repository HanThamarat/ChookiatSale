<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\ACS;

class AccessorySalePrice extends Model
{
    use HasFactory;
    protected $table = 'accessorySalePrice';
    protected $fillable = ['AccessoryID','AccessorySalePrice','AccessoryCom','AccessoryComAmount','StartDate','EndDate'];

    public function ToAcs() {
        return $this->hasOne(ACS::class, 'id', 'accessoryID');
    }
}
