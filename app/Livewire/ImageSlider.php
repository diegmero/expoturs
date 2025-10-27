<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $currentSlide = 0;
    
    public $slides = [
        [
            'image' => 'URL_IMAGEN_AVENTURA',
            'title' => 'AVENTURA | ADVENTURE'
        ],
        [
            'image' => 'URL_IMAGEN_PLAYA',
            'title' => 'PLAYA | BEACH'
        ],
        [
            'image' => 'URL_IMAGEN_NATURALEZA',
            'title' => 'NATURALEZA | NATURE'
        ],
        [
            'image' => 'URL_IMAGEN_CULTURA',
            'title' => 'CULTURA | CULTURE'
        ],
        [
            'image' => 'URL_IMAGEN_GASTRONOMIA',
            'title' => 'GASTRONOMÍA | GASTRONOMY'
        ],
    ];

    public function mount()
    {
        $this->currentSlide = 0;
    }

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function previousSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function goToSlide($index)
    {
        $this->currentSlide = $index;
    }

    public function render()
    {
        return view('livewire.image-slider');
    }
}
