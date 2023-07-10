<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'nim', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'alamat'];
}
