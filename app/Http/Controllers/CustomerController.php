<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
  public function index() {
    $customers = Customer::all();
    return $customers;
  }

  public function show($id) {
    $customer = Customer::find($id);
    echo $customer;
  }

  public function orders($id) {
    $customer = Customer::find($id);
    echo $customer->orders;
  }
}
