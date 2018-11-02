<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	// 商品検索
	public function index(){
		return view('product_search');
	}
	// 商品デザイン管理
	public function product_detail(){
		return view('product');
	}
}
