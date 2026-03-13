<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component
{
    #[On('fire')]
    public function ambulance(){
        dd('ambulance from third event');
    }
};
?>

<div>
    {{-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin --}}
</div>