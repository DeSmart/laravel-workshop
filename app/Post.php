<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_post');
    }

}
