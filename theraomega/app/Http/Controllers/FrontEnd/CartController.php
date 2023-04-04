<?php

namespace App\Http\Controllers\FrontEnd;

use App\Helpers\URL;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
use App\Models\DepartmentModel;
use App\Models\ProductModel;
use App\Models\ProductsRealModel;
use App\Models\CourseModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class CartController extends Controller
{
    private $pathViewController     = "frontend.pages.cart.";
    private $controllerName         = "cart";
    private $model;
    private $params                 = [];
    function __construct()
    {
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];

        return view(
            "{$this->pathViewController}index",
            [
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
    // public function detail(Request $request)
    // {
    //     return "Trang chi tiết khóa học";
    // }
    public function add(Request $request)
    {
        $type = "products";
        $quantity = $request->quantity;
        $quantity = ($quantity) ? $quantity : 1;
        $id = $request->id;
        $cartItemInfo = ProductsRealModel::find($id) ?? "";
        // $price = ($cartItemInfo['sale_price']) ? $cartItemInfo['sale_price'] : $cartItemInfo['regular_price'];
        $price = $cartItemInfo['regular_price'];
        $price = ($price) ? $price : 0;
        $subTotal = $price * $quantity;
        $cart = session()->get('cart', []);
        if (isset($cart[$type][$id])) {
            $cart[$type][$id]['quantity'] = $cart[$type][$id]['quantity'] + $quantity;
        } else {
            $cart[$type][$id] = [
                "name" => $cartItemInfo->title,
                "quantity" => $quantity,
                "price" => $price,
                "image" => $cartItemInfo->thumbnail,
                "subTotal" => $subTotal,

            ];
        }
        $totalQuantity = 0;
        $totalPrice = 0;
        $totalItems = 0;
        foreach ($cart as $items) {
            foreach ($items as $cartItem) {
                $quantity = isset($cartItem['quantity']) ? $cartItem['quantity'] : 0;
                $price = isset($cartItem['price']) ? $cartItem['price'] : 0;
                $totalQuantity += $quantity;
                $totalItems++;
                $totalPrice += $quantity * $price;
            }
        }
        $cart['info']['totalQuantity'] = $totalQuantity;
        //$cart['info']['totalPrice'] = $totalPrice * $totalQuantity;
        $cart['info']['totalPrice'] = $totalPrice;
        echo $totalPrice;
        session()->put('cart', $cart);
        //return redirect()->route('cart/index');
        return redirect()->back();
        return $cart;
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return json_encode($cart);
        }
    }
    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        $id = $request->id;
        if ($id) {
            $totalQuantity =  $cart['info']['totalQuantity'] - $cart['products'][$request->id]['quantity'];
            $totalPrice =  $cart['info']['totalPrice'] - $cart['products'][$request->id]['subTotal'];
            $cart['info']['totalQuantity'] = $totalQuantity;
            $cart['info']['totalPrice'] = $totalPrice;
            $products = $cart['products'];
            foreach ($products as $item_id => $item) {
                if ($item_id == $id) {
                    $totalQuantity -= $item['quantity'];
                    $totalPrice -= $item['subTotal'];
                    unset($cart['products'][$item_id]);
                    break;
                }
            }
            if ($totalQuantity == 0) {
                $request->session()->flush();
            } else {
            }
            session()->put('cart', $cart);
        }
        return redirect()->back();
        //return redirect()->route('cart/index');
    }
    public function removeAll(Request $request)
    {
        $request->session()->flush();
        return redirect()->back();
    }
    public function saveOrder(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
    }
    public function checkout(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
    }
}
