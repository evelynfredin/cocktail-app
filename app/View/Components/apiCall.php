<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ApiCall extends Component
{
    public $searchData;
    public $text;
    public $visible;

    public function __construct($searchData, $text, $visible)
    {
        $this->searchData = $searchData;
        $this->text = $text;
        $this->visible = $visible;
    }

    public function render()
    {
        return view('components.apiCall');
    }
}
