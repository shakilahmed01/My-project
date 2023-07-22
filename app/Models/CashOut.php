<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOut extends Model
{
    use HasFactory;
    function fromUser()
      {
      return $this->hasOne('App\Models\User','id','from_user');
      }

      function agentUser()
      {
      return $this->hasOne('App\Models\User','id','agent_user');
      }
}
