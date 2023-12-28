<?php

namespace App\Models;

use App\Models\Jabatan;

use App\Http\Controllers\JabatanController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'tb_pegawai';
    protected $guarded = [];

    public function funcJabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jab', 'id');
    }
}
