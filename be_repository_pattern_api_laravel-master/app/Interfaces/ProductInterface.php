<?php

namespace App\Interfaces;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

interface ProductInterface
{
    /**
     * Get all users
     * 
     * @method  GET api/users
     * @access  public
     */
    public function getAllProduct();

    /**
     * Get User By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/users/{id}
     * @access  public
     */
    public function getProductById($id);

    /**
     * Create | Update Product
     * 
     * @param   \App\Http\Requests\ProductRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/Products       For Create
     * @method  PUT     api/Products/{id}  For Update     
     * @access  public
     */
    public function requestProduct(ProductRequest $request, $id = null);

    /**
     * Delete user
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/users/{id}
     * @access  public
     */
    public function deleteProduct($id);
}