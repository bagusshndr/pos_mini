<?php

namespace App\Interfaces;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

interface CategoryInterface
{
    /**
     * Get all users
     * 
     * @method  GET api/users
     * @access  public
     */
    public function getAllCategory();

    /**
     * Get User By ID
     * 
     * @param   integer     $id
     * 
     * @method  GET api/users/{id}
     * @access  public
     */
    public function getCategoryById($id);

    /**
     * Create | Update Category
     * 
     * @param   \App\Http\Requests\CategoryRequest    $request
     * @param   integer                           $id
     * 
     * @method  POST    api/Categorys       For Create
     * @method  PUT     api/Categorys/{id}  For Update     
     * @access  public
     */
    public function requestCategory(CategoryRequest $request, $id = null);

    /**
     * Delete user
     * 
     * @param   integer     $id
     * 
     * @method  DELETE  api/users/{id}
     * @access  public
     */
    public function deleteCategory($id);
}