<?php

use Livewire\Component;

new class extends Component
{
    public $count = 0;
    public $active = true;

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }
};
?>

<div style="width:50%; margin:auto;">
    <h1 style="text-align: center;">{{ $active }}</h1>

    <div style="text-align: center;">
        <button wire:click="$toggle('active')" style="border: 1px solid blue; padding: 0px 5px;"> + </button>
        <button wire:click="$set('count', 0)" style="border: 1px solid blue; padding: 0px 5px;"> - </button>
    </div>
    </div>
</div>