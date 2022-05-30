<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] = Storage::disk('public')->put('/images',$data['preview_image']);
        $tags = $data['tags'];
        $colors = $data['colors'];
        unset($data['tags'],$data['colors']);

        $product = Product::firstOrCreate([
            'title' => $data['title']
        ], $data);


        foreach ($tags as $tag)
        {
            ProductTag::firstOrCreate([
                'product_id' => $product->id,
                'tag_id' => $tag,
            ]);
        }

        foreach ($colors as $color)
        {
            ColorProduct::firstOrCreate([
                'product_id' => $product->id,
                'color_id' => $color,
            ]);
        }

        Product::firstOrCreate($data);

        return redirect()->route('product.index');
    }
}
