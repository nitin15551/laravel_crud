<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $fillable = ['name','phone','email'];

    public function setNameAttribute($value){
        $this->attributes['name'] = Ucwords($value);
    }
}
