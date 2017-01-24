<?php

namespace ExA2040\LaravelRevision;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model {

  protected $table = 'revisions';
  protected $fillable = array('class_name', 'object_id');

  protected $casts = [
      'top_products' => 'array', // Will convarted to (Array)
  ];
  
}
