<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashIn extends Model
{
    use HasFactory;

    function agentName()
      {
      return $this->hasOne('App\Models\User','id','agent_user');
      }

      function toUser()
      {
      return $this->hasOne('App\Models\User','id','to_user');
      }
}
