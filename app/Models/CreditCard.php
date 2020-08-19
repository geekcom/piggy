<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
  protected $guarded = [];

  public function client()
  {
    return $this->belongsTo(Client::class);
  }
}
