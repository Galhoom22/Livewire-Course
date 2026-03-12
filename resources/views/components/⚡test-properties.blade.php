<?php

use Livewire\Component;

new class extends Component
{
    public $name;
    public $name2;
    public $name3;

    public function mount(){
        $this->fill([
        'name' => 'Abdelrahman',
        'name2' => 'Mahmoud',
        'name3' => 'Anwar'
    ]);
    $this->resetExcept('name2');
    }
};
?>

<div>
    {{ $name }}
    <hr>
    {{ $name2 }}
    <hr>
    {{ $name3 }}
</div>  