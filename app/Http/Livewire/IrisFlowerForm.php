<?php

namespace App\Http\Livewire;

use App\Models\IrisFlower;
use Livewire\Component;

class IrisFlowerForm extends Component
{
    public IrisFlower $flower;

    protected $rules = [
        'flower.petal_width' => 'required|numeric',
        'flower.petal_length' => 'required|numeric',
        'flower.sepal_width' => 'required|numeric',
        'flower.sepal_length' => 'required|numeric',
    ];

    public function mount()
    {
        $this->flower = new IrisFlower();
        $this->flower->petal_width = rand(0, 30) / 10;
        $this->flower->petal_length = rand(0, 70) / 10;
        $this->flower->sepal_width = rand(0, 50) / 10;
        $this->flower->sepal_length = rand(0, 80) / 10;
    }

    public function render()
    {
        $this->flower->species = $this->flower->predict('species');

        return view('livewire.iris-flower-form');
    }
}
