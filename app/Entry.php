<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'description', 'value', 'id_category',
    ];

    protected $primaryKey = 'id_entry';

    protected $casts = [
        'user_id' => 'int',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}
