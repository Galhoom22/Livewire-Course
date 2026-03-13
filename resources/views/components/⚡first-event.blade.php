<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component
{
    #[On('fire')]
    public function ambulance(){
        dd('first event');
    }
};
?>

<div>
    <button wire:click="$dispatchSelf('fire')">Fire</button>
</div>