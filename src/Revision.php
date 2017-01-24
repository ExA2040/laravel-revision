<?php

namespace ExA2040\LaravelRevision;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model {

  protected $table = 'revisions';
  protected $fillable = array('class_name', 'object_id', 'attr');

  protected $casts = [
      'attr' => 'array', // Will convarted to (Array)
  ];

}
