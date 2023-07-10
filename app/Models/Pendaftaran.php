<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'nim', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'email', 'foto'];
}
