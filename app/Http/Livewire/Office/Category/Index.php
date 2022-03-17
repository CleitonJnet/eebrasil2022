<?php

namespace App\Http\Livewire\Office\Category;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public $collum = 'categories.name';
    public $search;

    public function search_clear()
    {
        $this->search = null;
    }

    public function render()
    {
        $categories = Category::where($this->collum,'like','%'.$this->search.'%')
        ->orderBy('name')->get();
        return view('livewire.office.category.index', compact('categories'))->layout('layouts.app_office');
    }
}
