<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //use HasFactory;
    protected $fillable = ['name','project','business','email','phone','address','state','country','zip'];

    public function setProjectAttribute($value)
    {
        $this->attributes['project'] = json_encode($value);
    }

    public function getProjectAttribute($value)
    {
        return $this->attributes['project'] = json_decode($value);
    }
}
