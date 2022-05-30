<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $product->update($data);
        return redirect()->route('product.show', compact('product'));
    }
}
