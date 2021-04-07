<?php

namespace App\View\Components;

use Illuminate\View\Component;

class apiCall extends Component
{
    public $searchData;

    public function __construct($searchData)
    {
        $this->searchData = $searchData;
    }

    public function render()
    {
        return view('components.apiCall');
    }
}
