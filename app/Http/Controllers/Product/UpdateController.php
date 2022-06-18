<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        if (!$request->has('is_published'))
        {
            $data['is_published'] = false;
        }
        else $data['is_published'] = true;

        $product->update($data);
        return redirect()->route('product.show', compact('product'));
    }
}
