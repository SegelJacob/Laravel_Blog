<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryMainDropdown extends Component
{
    public function render()
    {
        return view('components.category-main-dropdown', [
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }
}
