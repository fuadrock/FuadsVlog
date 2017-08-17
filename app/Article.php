<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable=[
        'user_id','content','live','post_on'
    ];
    protected $dates = ['post_on'];
    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (boolean)($value);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function setPostOnAttribute($value)
    {
        $this->attributes['post_on']= Carbon::parse($value);
    }
}
