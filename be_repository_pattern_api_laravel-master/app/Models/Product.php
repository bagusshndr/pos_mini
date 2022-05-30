<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "tbl_produk";
    
    protected $fillable = [
        'id','nama_produk', 'deskripsi_produk', 'harga_produk', 'kategori_id', 'gambar_produk', 'status', 'created_at', 'updated_at'
    ];

    public function category(){
        return $this->belongsTo('tbl_kategori');
    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
