<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMoney extends Model
{
    use HasFactory;
    function fromUser()
      {
      return $this->hasOne('App\Models\User','id','from_user');
      }

      function toUser()
      {
      return $this->hasOne('App\Models\User','id','to_user');
      }
}
