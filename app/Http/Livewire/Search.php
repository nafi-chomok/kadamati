<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Property;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {


        return view('livewire.search',
        ['props'=>Property::whereRaw("address_address LIKE \"%$this->search%\"")->get()]
    );
//     return view('livewire.search',

//     ['props'=>Property::where("address_address" , $this->search)->get(),

//     ]

// );



    }
}
