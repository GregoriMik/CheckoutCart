<?php

namespace App\Http\Livewire;
use App\Models\Product;

use App\Models\Payment;

use App\Models\Delivery;

use Livewire\Component;

class CheckoutComponent extends Component
{
   
    public function render()
    {   
        $delivery= Delivery::all();
        $payment=Payment::all();
        $product=Product::all();
        return view('livewire.checkout-component',['delivery'=>$delivery,'payment'=>$payment])->layout('layouts.basee');
    }
    public function store(){
        
    }
}
