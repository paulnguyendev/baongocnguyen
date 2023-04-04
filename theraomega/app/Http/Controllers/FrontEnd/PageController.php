<?php

namespace App\Http\Controllers\FrontEnd;

use App\Helpers\User;
use App\Http\Controllers\Controller;
#Request
#Model
use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
use App\Models\ProductsRealModel;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class PageController extends Controller
{
    private $pathViewController     = "frontend.pages.page.";
    private $controllerName         = "page";
    private $model;
    private $params                 = [];
    private $supplierModel;
    private $taxonomyModel;
    private $productGroupModel;
    private $ProductsRealModel;
    private $productModel;
    private $youtubeModel;
    function __construct()
    {
        // $this->model = new UserModel();
        View::share('controllerName', $this->controllerName);
        $this->ProductsRealModel = new ProductsRealModel();
    }
    public function index(Request $request)
    {
        return view(
            "{$this->pathViewController}index",
            []
        );
    }
    public function policy(Request $request)
    {
        $products_real = $this->ProductsRealModel->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];
        return view(
            "{$this->pathViewController}policy",
            [
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
    public function aboutUs(Request $request)
    {
        $products_real = $this->ProductsRealModel->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];
        return view(
            "{$this->pathViewController}about-us",
            [
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
    public function faq(Request $request)
    {
        $products_real = $this->ProductsRealModel->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];
        return view(
            "{$this->pathViewController}faq",
            [
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
    public function contactUs(Request $request)
    {
        $products_real = $this->ProductsRealModel->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];
        return view(
            "{$this->pathViewController}contact-us",
            [
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
}
