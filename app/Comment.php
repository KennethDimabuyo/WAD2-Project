<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'catCardId','name', 'comment', 'user_id'];
}
