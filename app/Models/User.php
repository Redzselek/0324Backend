<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Task;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
