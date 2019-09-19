<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

use Overtrue\LaravelFollow\Traits\CanBeLiked;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;
use Overtrue\LaravelFollow\Traits\CanBeVoted;



class Post extends Model
{
    use CanBeLiked, CanBeFavorited, CanBeVoted;
    // Table name
    protected $table = 'posts';
    // primary key 
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;


    public function user(){
        return $this->belongsTo('App\User');
    }
}
