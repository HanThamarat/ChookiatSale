<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CONST\TB_CarYears;

class TB_CarModels extends Model
{
    use HasFactory;
    protected $table = 'TB_CarModels';
    protected $fillable = ['Name_TH', 'Name_EN', 'Active'];

    public function ToCarYears() {
        return $this->hasMany(TB_CarYears::class, 'Model_ID', 'id');
    }
}
