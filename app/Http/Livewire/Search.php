<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search = '';
 
    public function render()
    {
        return view('livewire.search', [
            'data' => Product::where('title','like','%'.$this->search.'%')->get(),
            'query'=>$this->search
        ]);
    }
}
