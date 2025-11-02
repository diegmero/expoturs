<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $currentSlide = 0;
    
    public $slides = [
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-05_p5i16a.jpg',
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-11_rdsqzy.jpg',
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-08_ffrb2e.jpg',
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-07_fcmjpl.jpg',
    ];

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function previousSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function render()
    {
        return view('livewire.image-slider');
    }
}
