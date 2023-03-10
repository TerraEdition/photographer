<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UploadPayment extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $slug;
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.upload-payment');
    }
}
