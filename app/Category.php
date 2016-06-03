<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    protected $casts = [
        'user_id' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function entry()
    {
        return $this->hasMany('App\Entry');
    }
}