<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $random_str = 0;
    
    public function increment()
    {
        $this->count++;
    }
    
    public function decrement()
    {
        $this->count--;
    }

    public function change()
    {
        $this->random_str = base64_encode(rand(0, 2000));
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
