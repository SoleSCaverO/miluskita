<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\State;
use App\TypeProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class TestController extends Controller
{

    public function test()
    {
        $products = Product::with('type_product')->get();
        dd($products);
    }

    public function setJson()
    {
        $products = Product::with('type_product')->get();
        $path = public_path().'/out';
        File::put($path.'/products_out.json',$products);
    }

    public function getJson()
    {
        $path = public_path().'/out';
        $fileContent = File::get($path.'/products_out.json');
        //$json = json_decode($fileContent); Convert to array of objects

        $path = public_path().'/in';
        File::put($path.'/products_in.json',$fileContent );
    }

    public function seconds()
    {
        $today = Carbon::now('America/Lima');
        dd('Miluska Geraldine, Burgos Gonzales eres un chikita feita casi bonita y gordita XD XD :v')
        dd(strtotime($today) - strtotime('TODAY'));
    }
}
