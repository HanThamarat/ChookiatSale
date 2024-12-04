<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\ACS;

class AccessoryPromo extends Model
{
    use HasFactory;
    protected $table = 'accessoryPromoPrice';
    protected $fillable = ['accessoryID','AccessoryPromoPrice','AccessoryCom','AccessoryComAmount','StartDate','EndDate'];

    public function ToAcs() {
        return $this->hasOne(ACS::class, 'id', 'accessoryID');
    }
}
