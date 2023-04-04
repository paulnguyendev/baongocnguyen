<?php

namespace App\Http\Controllers\FrontEnd;

use App\Helpers\User;
use App\Http\Controllers\Controller;
use App\Models\ProductRealModel;
#Request
#Model
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class CartController extends Controller
{
    private $pathViewController     = "frontend.pages.cart.";
    private $controllerName         = "cart";
    private $model;
    private $params                 = [];
    private $supplierModel;
    private $taxonomyModel;
    private $productGroupModel;
    private $productModel;
    private $youtubeModel;
    function __construct()
    {
        $this->model = new ProductRealModel();
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {

        return view(
            "{$this->pathViewController}index",
            []
        );
    }
    public function add(Request $request)
    {
        $params = $request->all();
        $id = $params['pid'] ?? $request->id;
        $type = $params['type'] ?? "course";
        $item = $this->model->getItem(['id' => $id], ['task' => 'id']);
        $price = $item['sale_price'] ? $item['sale_price'] : $item['regular_price'];
        //$price = Product::getPriceDiscount($price);
        // if ($type == 'course') {
        //     $item = $this->courseModel->getItem(['id' => $id], ['task' => 'id']);
        // } else {
        //     $item = $this->comboModel->getItem(['id' => $id], ['task' => 'id']);
        // }
        $slug = $item['slug'] ?? "";
        #_Check Course In Cart
        // if (!$this->searchCartById($id)) {
        // }
        Cart::instance('frontend')->add([
            'id' => $id,
            'name' => $item['title'],
            'qty' => '1',
            'price' => $price,
            'options' => [
                'thumbnail' => $item['thumbnail'],
                'type' => $type,
                'slug' => $slug,
            ]
        ]);
        $number = $request->number;
        $cartData = Cart::instance('frontend')->content();
        $cartTotal = Cart::instance('frontend')->count();
        $content = view('frontend.pages.ajax.cart_list', ['cartData' => $cartData, 'cartTotal' => $cartTotal, 'test' => $cartTotal])->render();
        $result = [
            'result' => true,
            'content' => $content,
            'totalCount' => $cartTotal,
            'cartData' => $cartData,
            'cartTotal' => $cartTotal,

        ];
        return response()->json($result);
    }
}
