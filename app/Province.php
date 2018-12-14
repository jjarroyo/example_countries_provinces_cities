<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  public $timestamps = false;
  protected $fillable = ['id','id_country', 'name'];
}
