<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_CampaignTYP extends Model
{
    use HasFactory;
    protected $table = 'TB_CampaignTYP';
    protected $fillable = ['Name_TH', 'Name_EN', 'Active'];
}
