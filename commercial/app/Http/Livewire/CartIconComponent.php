<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartIconComponent extends Component
{
// This line of code is part of a Laravel Livewire component.
// It defines a `$listeners` property, which is an array that maps event names to component methods.
// In this case, the `refreshComponent` event is mapped to the `$refresh` method.
// When the `refreshComponent` event is emitted, it will trigger the `$refresh` method on the component. 
 //The `$refresh` method is a built-in Livewire method that refreshes the component by re-rendering it.
    protected $listeners = ['refreshComponent' => '$refresh' ];
    public function render()
    {
        return view('livewire.cart-icon-component');
    }
}
