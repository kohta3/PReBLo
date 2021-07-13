<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Information;

class Like extends Model
{
    public function information()
  {
    return $this->belongsTo(Information::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  protected $fillable = ['information_id','user_id']; //保存したいカラム名が1つの場合
}
