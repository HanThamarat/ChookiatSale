<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\SaleCars;

class CAR_SALES extends Model
{
    use HasFactory;
    protected $table = 'carsaleprice';
    protected $fillable = ['CarID', 'CarSalePrice', 'StartDate', 'EndDate'];

    public function ToCar() {
        return $this->hasOne(CARS::class, 'id', 'CarID');
    }
}
