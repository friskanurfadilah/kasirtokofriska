<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'nomor_tlp',
        'status_member',
        'poin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Metode untuk menambah poin
    public function tambahPoin($jumlah)
    {
        $this->update(['poin' => $this->poin + $jumlah]);
    }

    // Metode untuk mengurangi poin
    public function kurangiPoin($jumlah)
    {
        $this->update(['poin' => $this->poin - $jumlah]);
    }

    
}
