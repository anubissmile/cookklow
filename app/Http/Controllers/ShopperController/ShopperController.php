<?php

namespace App\Http\Controllers\ShopperController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopperController extends Controller {

    protected $shop_content = "shopping.content.";

    public function getIndex(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'content-right']);
    }

    public function getBlog(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'blog']);
    }

    public function getBlogSingle(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'blog-single']);
    }

    public function getCart(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'cart', 'nl' => '-nl']);
    }

    public function getCheckout(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'checkout', 'nl' => '-nl']);
    }

    public function getContactUs(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'contact-us', 'nl' => '-nl']);
    }

    public function getProductDetail(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'product-details']);
    }

    public function getShop(){
    	return view('shopping.index', ['namepage' => $this->shop_content . 'shop']);
    }


}
