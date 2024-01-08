<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    protected $table = "sanpham";
    // protected $hidden = ['loai_sp_id'];
    public function ListAnh(){
        return $this->hasMany(HinhAnhSanPham::class);
    }
}
