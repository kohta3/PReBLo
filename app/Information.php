<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Information extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
 
    public function likes() {
        return $this->hasMany(Like::class, 'information_id');
    }

    public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }
    
}
