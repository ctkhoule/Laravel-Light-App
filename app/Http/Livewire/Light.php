<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    // la methode off()
    public function off(){
        $this->brightness = 0;
    }

    // La methode on()
    public function on(){
        $this->brightness = 100;
    }

    // la methode increment()
    public function increment(){
        if($this->brightness <= 90){
            $this->brightness += 10;
        }
    }

    // la methode decrement()
    public function decrement(){
        if($this->brightness >= 10){
            $this->brightness -= 10;
        }
    }

    public function render()
    {
        return view('livewire.light');
    }
}
