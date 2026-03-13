<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component
{
    #[On('fire')]
    public function ambulance(){
        dd('ambulance');
    }
};
?>

<div>
    {{-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius --}}
</div>