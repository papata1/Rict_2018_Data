<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_collection extends Model
{
    public $timestamps = false;
    protected $table="type_collection";
    protected $fillable=['name','remark'] ;
    protected $guarded=['id',] ;
}
 