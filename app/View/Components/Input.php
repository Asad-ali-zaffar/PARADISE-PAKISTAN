<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $label;
    public $id;
    public $placeholder;
    public $value;
    // public $pattern;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$label,$id,$placeholder,$value)
    {
        $this->type=$type;
        $this->name=$name;
        $this->label=$label;
        $this->id=$id;
        $this->placeholder=$placeholder;
        $this->value=$value;
        // $this->pattern=$pattern;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
