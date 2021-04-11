<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ApiCall extends Component
{
    public $searchData;
    public $text;
    public $visible;
    public $favorites;

    public function __construct($searchData, $text, $visible, $favorites)
    {
        $this->searchData = $searchData;
        $this->text = $text;
        $this->visible = $visible;
        $this->favorites = $favorites;
    }

    public function render()
    {
        return view('components.apiCall');
    }
}
