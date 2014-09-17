<?php

use Carbon\Carbon;
class Post extends \Eloquent
{
    protected $fillable = [];

    public function comment()
    {
        return $this->hasMany('Comment');
    }

    public function getCreatedAtAttribute($attr)
    {
        return Carbon::parse($attr)->format('d/m/Y');
    }
}