<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-11-08 11:41:00
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\CheckoutOneBuy\Http\Controllers\Web;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function demo(Request $request) {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "Demo";
        return view('CheckoutOneBuy::demo', compact("data"));
    }
}