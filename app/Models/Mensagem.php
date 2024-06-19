<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = 'mensagens';

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}

