<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
  public function index() {
    $orders = Order::all();
    return $orders;
  }

  public function show($id) {
    $order = Order::find($id);
    return $order;
  }
}
