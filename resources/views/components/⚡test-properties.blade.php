<?php

use Livewire\Component;

new class extends Component
{
    public $name = 'Mahmoud';
    // public $name2;
    // public $name3;

    // public function mount(){
    //     $this->fill([
    //     'name' => 'Abdelrahman',
    //     'name2' => 'Mahmoud',
    //     'name3' => 'Anwar'
    // ]);
    // $this->resetExcept('name2');
    // }

    public function search(){

    }
};
?>

<div>
    {{ $name }}
    <hr>
    <input type="text" value="{{$name}}" style="border:1px solid red" wire:model.defer="name">
    <button wire:click="search" style="background-color: red; color: white; padding: 10px; border: none; cursor: pointer;">Search</button>
</div>  