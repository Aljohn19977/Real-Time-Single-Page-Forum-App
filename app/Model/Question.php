<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::Class);
    }

    public function category()
    {
        return $this->belongsTo(Category::Class);
    }

    
}
