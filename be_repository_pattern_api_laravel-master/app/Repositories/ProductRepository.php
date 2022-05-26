<?php

namespace App\Repositories;

use App\Http\Requests\ProductRequest;
use App\Interfaces\ProductInterface;
use App\Traits\ResponseAPI;
use App\Models\Product;
use DB;

class ProductRepository implements ProductInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllProduct()
    {
        try {
            $product = Product::all();
            return $this->success("All Product", $product);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getProductById($id)
    {
        try {
            $product = Product::find($id);
            
            // Check the user
            if(!$product) return $this->error("No user with ID $id", 404);

            return $this->success("User Detail", $product);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestProduct(ProductRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If user exists when we find it
            // Then update the user
            // Else create the new one.
            $product = $id ? Product::find($id) : new Product;

            // Check the user 
            if($id && !$product) return $this->error("No Product with ID $id", 404);

            $product->nama_produk = $request->nama_produk;
            $product->deskripsi_produk = $request->deskripsi_produk;
            $product->harga_produk = $request->harga_produk;
            $product->kategori_id = $request->kategori_id;
            $product->gambar_produk = $request->gambar_produk;
            $product->status = $request->status;
            $product->save();

            DB::commit();
            return $this->success(
                $id ? "User updated"
                    : "User created",
                $product, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deleteProduct($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::find($id);

            // Check the user
            if(!$product) return $this->error("No Product with ID $id", 404);

            // Delete the Product
            $product->delete();

            DB::commit();
            return $this->success("Product deleted", $product);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}