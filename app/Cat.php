<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = [
    	'fullName',
    	'address',
    	'contactNumber',
    	'catName',
    	'desc'
    ];

    public function comments()
    {

    	return $this->hasMany(Comment::class);

    }

    public function addComment()
    {

    	Comment::create ([

    		'body' => $body,

    		''

    	]);

    }
}
