<?php namespace App\Src\Comment;

use App\Core\BaseModel;

class Comment extends BaseModel {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
