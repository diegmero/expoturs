<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $currentSlide = 0;
    
    public $slides = [
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1761612387/header_Beabuyer_gzh5xg.webp',
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1761612387/header_Expotur_kgtuzw.webp',
        'https://res.cloudinary.com/dspoaxmvn/image/upload/v1761612387/header_SellersInfo_r48bxw.webp',
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
