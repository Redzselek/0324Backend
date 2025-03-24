<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Task extends Model
{

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
