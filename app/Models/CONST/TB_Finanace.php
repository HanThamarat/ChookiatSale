<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Finanace extends Model
{
    use HasFactory;
    protected $table = 'finances';
    protected $fillable = ['id' ,'FinanceCompany', 'Active'];
}
