<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount = 1;

    public function addToCart(int $productId){

        if(Auth::check()){

            if($this->product->where('id',$productId)->where('status','0')->exists())
            {

                if($this->product->quantity > 0)
                {
                    if($this->product->quantity > $this->quantityCount)
                    {
    
                    }else{
                        $this->dispatchBrowserEvent('message', [
                            'text' => 'only'.$this->product->quantity.'Quantity Available',
                            'type' => 'warning',
                            'status' => 404
                        ]);
                    }

                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'out of stock',
                        'type' => 'warning',
                        'status' => 404
                    ]);
                }

            }
            else
            {
                $this->dispatchBrowserEvent('message', [
                    'text' => 'product dose not exist',
                    'type' => 'warning',
                    'status' => 404
                ]);
            }

        }else{

            $this->dispatchBrowserEvent('message', [
                'text' => 'Please login to add to cart',
                'type' => 'info',
                'status' => 404
            ]);
            
        }

    }

    public function mount($category, $product){

        $this->category = $category;
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.frontend.product.view', [
            'category' => $this->category,
            'product' => $this->product
        ]);
    }
}
