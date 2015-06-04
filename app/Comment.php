<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    public $timestamps = false;

}
