<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CONST\TB_CarYears;
use App\Models\CONST\TB_CarColors;
use App\Models\CONST\TB_CarModels;

use App\Models\DATA\CAR_SALES;

class CARS extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['Model_ID', 'Year_ID', 'Color_ID', 'CarDetail', 'Active'];

    public function ToCarModel() {
        return $this->hasOne(TB_CarModels::class, 'id', 'Model_ID');
    } 

    public function ToCarColor() {
        return $this->hasOne(TB_CarColors::class, 'id', 'Color_ID');
    }  

    public function ToCarYear() {
        return $this->hasOne(TB_CarYears::class, 'id', 'Year_ID');
    }   

    public function ToSalePrice() {
        return $this->hasMany(CAR_SALES::class, 'CarID', 'id');
    }
}
