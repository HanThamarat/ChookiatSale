<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_InterestCampaignType extends Model
{
    use HasFactory;
    protected $table = 'TB_IntestCampaignTYP';
    protected $fillable = ['id', 'Name_TH', 'Name_EN', 'Active'];
}
