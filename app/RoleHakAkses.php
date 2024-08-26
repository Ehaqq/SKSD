<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleHakAkses extends Model
{
    protected $fillable = ['role_id', 'hak_akses_id'];

    public function hakAkses()
    {
        return $this->belongsTo(HakAkses::class, 'hak_akses_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
