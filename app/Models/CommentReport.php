<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReport extends Model
{
    use HasFactory;

    protected $table = 'comment_report';

    protected $fillable = [
        'report_id',
        'user_id',
        'comment_parent_id',
    ];

    public function commentParent()
    {
        return $this->morphTo();
    }
}
