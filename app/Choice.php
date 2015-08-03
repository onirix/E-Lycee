<?php

namespace ELycee;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'choices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content', 'class_level', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function question()
    {
        return $this->belongsTo('ELycee\Question');
    }
}
