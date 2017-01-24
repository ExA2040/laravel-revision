<?php

namespace ExA2040\LaravelRevision;

trait RevisionTrait {

  public function revisions()
  {
    return $this->hasMany('\ExA2040\LaravelRevision\Revision', 'object_id')->where('class_name', snake_case(get_class($this)));
  }

  public static function bootRevisionTrait()
  {
    static::updated(function($model){
      $attr = $model->getAttributes();

      $class_name = snake_case(get_class($model));
      \ExA2040\LaravelRevision\Revision::create(array('class_name' => $class_name, 'object_id' => $attr['id'], 'attr' => $attr));

    });
  }


}
