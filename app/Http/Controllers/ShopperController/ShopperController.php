<?php

namespace App\Http\Controllers\ShopperController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopperController extends Controller {

    public function getIndex(){
    	return view('shopping.index', ['namepage' => 'shopping.content.content-right']);
    }

    public function getBlog(){
    	return view('shopping.index', ['namepage' => 'shopping.content.blog']);
    }

    public function getBlogSingle(){
    	return view('shopping.index', ['namepage' => 'shopping.content.blog-single']);
    }

    public function getCart(){
    	return view('shopping.index', ['namepage' => 'shopping.content.cart', 'nl' => '-nl']);
    }

    public function getCheckout(){
    	return view('shopping.index', ['namepage' => 'shopping.content.checkout', 'nl' => '-nl']);
    }

    public function getContactUs(){
    	return view('shopping.index', ['namepage' => 'shopping.content.contact-us', 'nl' => '-nl']);
    }

    public function getProductDetail(){
    	return view('shopping.index', ['namepage' => 'shopping.content.product-details']);
    }

    public function getShop(){
    	return view('shopping.index', ['namepage' => 'shopping.content.shop']);
    }


}
