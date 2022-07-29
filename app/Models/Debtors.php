<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debtors extends Model
{
    use HasFactory;
    protected $table = 'debtors';
    protected $primaryKey = 'id';
    protected $fillable = ['accountno','client','debtor_first_name', 'debtor_surname','service','title','cell','totalbalance','initials','idnumber','email',  'lastpaymentdate','lastamount','address1','address2','address3','postalcode','cell_phone1', 'emp','empaddress','empcontacts','interest_rate'];

}
