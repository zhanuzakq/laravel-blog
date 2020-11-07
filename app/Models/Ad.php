<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $guarded = [];

    public function save(array $options = [])
    {
        if(!$this->user_id && Auth::user())
        {
            $this->user_id = Auth::user()->id;
        }

        parent::save();
    }

    public function scopeCurrentUser($query)
    {
        if(Auth::user()->hasRole('admin'))
        {
            return $this;
        }
        return $query->where('user_id', Auth::user()->id);
    }
}
