<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DATA\CARS;

class CAR_COSTS extends Model
{
    use HasFactory;
    protected $table = 'carcosts';
    protected $fillable = ['CarID', 'CarCost', 'StartDate', 'EndDate'];

    public function ToCar() {
        return $this->hasOne(CARS::class, 'id', 'CarID');
    }
}
