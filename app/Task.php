<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  // public static function incomplete()
  // {
  //   return static::where('completed', 0)->get();
  // }

  //query scopes:
  public function scopeIncomplete($query) 
  // lets us do Task::incomplete()->get()
  {
    return $query->where('completed', 0);
  }
}
