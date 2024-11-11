<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.products.index', [
            'title' => 'Daftar Produk',
            'products' => Product::options(request(Product::$allowedParams))
                ->paginate($this->validateAndGetLimit(request('limit'), 10)),
            'sortables' => Product::$sortables,
            'allowedParams' => Product::$allowedParams,
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeImage($request->file('image'), 'products');
        }

        Product::create($data);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'title' => 'Ubah Produk',
            'product' => $product,
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $this->deleteFile($product->image);
            $data['image'] = $this->storeImage($request->file('image'), 'products', true);
        }

        $product->update($data);
        return redirect($request->previous_url ?? route('dashboard.products.index'))->with('success', 'Produk berhasil diubah');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            $this->deleteFile($product->image);
        }
        $product->delete();
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }
}
