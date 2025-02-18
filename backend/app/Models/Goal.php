<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = ['homeschooler_id', 'title', 'description', 'due_date', 'is_completed'];

    public function homeschooler()
    {
        return $this->belongsTo(Homeschooler::class);
    }
}
