<?php

namespace ExA2040\LaravelRevision;

trait RevisionTrait {

  public function revisions()
  {
    return $this->hasMany('\ExA2040\LaravelRevision\Revision', 'object_id')->where('class_name', snake_case(get_class($this)));
  }

  public static function bootRevisionTrait()
  {
    static::updated(function($item){
      // Index the item
    });
  }

  protected static function boot(){
    parent::boot();
    static::updated(function ($model) {
      $changes = $model->isDirty() ? $model->getDirty() : false;
      if($changes)
      {
        foreach($changes as $attr => $value)
        {
          //Activity::log("updated product $attr from {$model->getOriginal($attr)} to {$model->$attr}");
        }
      }

    });

  }

}
