<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\ProductMetaModel;
#Request
#Model
use App\Models\ProductsRealModel as MainModel;
//use App\Models\SupplierModel;
use App\Models\TaxonomyModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class ProductsRealController extends Controller
{
    private $pathViewController     = "frontend.pages.products-real.";
    private $controllerName         = "products-real";
    private $model;
    //private $taxonomyModel;
    private $productMetaModel;
    private $supplierModel;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        //$this->taxonomyModel = new TaxonomyModel();
        //$this->productMetaModel = new ProductMetaModel();
        //$this->supplierModel = new SupplierModel();
        View::share('controllerName', $this->controllerName);
    }
    public function index(Request $request)
    {
        // $cart = session()->get('cart');
        // $products = $cart['products'] ?? [];

        // return view(
        //     "{$this->pathViewController}index",
        //     [
        //         'cart' => $cart,
        //         'products' => $products,
        //     ]
        // );
    }
    public function detail(Request $request)
    {
        // return 123;
        $products_real = $this->model->listItems([], ['task' => 'list']);
        $cart = session()->get('cart');
        $products = $cart['products'] ?? [];

        $id = $request->id;
        $item_products = $this->model->getItem(['id' => $id], ['task' => 'product']);
        if ($item_products) {
            $id = $item_products['id'];
            //$item_meta = $this->productMetaModel->getItem(['product_id' => $id], ['task' => 'product_id']);
            return view(
                "{$this->pathViewController}/detail",
                [
                    'item_products' => $item_products,
                    'products_real' => $products_real,
                    'cart' => $cart,
                    'products' => $products,
                    //'item_meta' => $item_meta,
                ]
            );
        } else {
            return redirect(route('home/index'));
        }
        return view(
            "{$this->pathViewController}detail",
            [
                'item' => $item,
                'item_meta' => $item_meta,
                'products_real' => $products_real,
                'cart' => $cart,
                'products' => $products,
            ]
        );
    }
    public function data(Request $request)
    {
    }
    public function category(Request $request)
    {
        $id = $request->id;
        $item = $this->taxonomyModel::find($id);
        $items = $item->product_ids()->get();
        $total = $item->product_ids()->count();
        return view(
            "{$this->pathViewController}/category",
            [
                'items' => $items,
                'item' => $item,
                'total' => $total,
            ]
        );
    }
    public function supplier(Request $request)
    {
        $id = $request->id;
        //$item = $this->supplierModel::find($id);
        $items = $item->products()->get();
        $total = $item->products()->count();
        return view(
            "{$this->pathViewController}/category",
            [
                'items' => $items,
                'item' => $item,
                'total' => $total,
            ]
        );
    }
}
