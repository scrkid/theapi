<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = array(
        'title',
        'user_id',
        'body',
        'published_at',
        'excerpt'
    );

    /**
     * an article is owned by user
     *
     * @return mixed
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
