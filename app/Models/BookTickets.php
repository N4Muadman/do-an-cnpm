<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTickets extends Model
{
    protected $table='ve';
    protected $fillable = [
        'KhachHangId',
        'LichChieuId',
        'MaQR',
        'MoTa',
        'ThoiGiaDat',
        'total',
    ];
    use HasFactory;
}
