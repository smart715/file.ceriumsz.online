<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = ['name','group','location', 'contacts'];

    public function debtors_count(){
        return $this->hasMany(Debtors::class, 'client', 'id')->count();

    }

}
