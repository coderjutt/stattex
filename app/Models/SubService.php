<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
   protected $fillable = ['service_id', 'name', 'icon', 'description'];

   public function service(){
    return $this->belongsTo(Services::class);
   }
}
