<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "tbl_kategori";
    protected $fillable = [
        'id','nama_kategori', 'created_at', 'updated_at'
    ];

    public function product(){
        return $this->hasMany('tbl_product');
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
