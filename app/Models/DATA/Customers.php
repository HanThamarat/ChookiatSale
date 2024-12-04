<?php

namespace App\Models\DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\DATA\SaleCars;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['id', 'PrefixName', 'FirstName','MiddleName','LastName','IDNumber','NewCardDate','ExpireCard','Brideday','Gender',	'Nationality',	'religion',	'LineID',	'FacebookName',	'RelationST',	'FirstNameofRelation',	'LastNameofRelation',	'PhoneofRelation',	'Note',	'Address',	'PostAddress',	'Mobilephone1',	'Mobilephone2'];

    public function ToSaleCar() {
        return $this->hasMany(SaleCars::class, 'CusID', 'id');
    }
}
