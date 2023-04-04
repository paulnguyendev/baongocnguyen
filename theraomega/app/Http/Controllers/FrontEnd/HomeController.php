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
use App\Mail\NewUserMail;
#Helper
class HomeController extends Controller
{
    private $pathViewController     = "frontend.pages.";
    private $controllerName         = "home";
    private $model;
    private $params                 = [];
    private $supplierModel;
    private $taxonomyModel;
    private $productGroupModel;
    private $ProductsRealModel;
    private $youtubeModel;
    function __construct()
    {
        // $this->model = new UserModel();
        View::share('controllerName', $this->controllerName);
        $this->ProductsRealModel = new ProductsRealModel();
    }
    public function index(Request $request)
    {
        $products_real = $this->ProductsRealModel->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];
        return view(
            "{$this->pathViewController}index",
            [
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
}
