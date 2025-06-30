<?php

namespace App\Controllers;

use App\Database\Migrations\Transaction;
use App\Database\Migrations\TransactionDetail;
use App\Models\ProductModel;
use App\Models\TransactionModel;
use app\Models\TransactionDetailModel; 

class Home extends BaseController
{
    protected $product;
    protected $transaction;
    protected $transaction_detail;

    function __construct()
    {
        helper('form');
        helper('number');
        $this->product = new ProductModel();
        
    }
    
    public function index()
    {
        $product = $this->product->findAll();
        $data['product'] = $product;

        return view('v_home', $data);
    }
}
