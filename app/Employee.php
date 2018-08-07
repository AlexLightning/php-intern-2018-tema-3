<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    public $timestamps = false;
    protected $guarded = [];
    public function human(){
        return $this->belongsTo(Company::class,'company_id');
    }
}