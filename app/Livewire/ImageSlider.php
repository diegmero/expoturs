<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $currentSlide = 0;
    
    public $slides = [
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-05_p5i16a.jpg',
            'text_es' => 'Aventura',
            'text_en' => 'Adventure'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-08_ffrb2e.jpg',
            'text_es' => 'Bienestar',
            'text_en' => 'Wellness'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/Web_Site-Expotur2026_20251030-10_uslwxp.jpg',
            'text_es' => 'Bodas y Lunas de miel',
            'text_en' => 'Weddings and honey moon programs'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-07_fcmjpl.jpg',
            'text_es' => 'Cultura',
            'text_en' => 'Culture'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762491119/Ecoturismo_gux6yw.jpg',
            'text_es' => 'Ecoturismo',
            'text_en' => 'Ecoturism'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-15_zbzqez.jpg',
            'text_es' => 'Estudiantes - Voluntariado',
            'text_en' => 'Students - Volunteers'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109291/Web_Site-Expotur2026_20251030-14_zdeb6e.jpg',
            'text_es' => 'Nómadas digitales',
            'text_en' => 'Digital nomads'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-11_rdsqzy.jpg',
            'text_es' => 'Observación de aves',
            'text_en' => 'Birdwatching'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-12_o1l5zv.jpg',
            'text_es' => 'Parques Nacionales',
            'text_en' => 'National Parks'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-06_e54iov.jpg',
            'text_es' => 'Sol y playa',
            'text_en' => 'Sun and beaches'
        ],

        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109290/Web_Site-Expotur2026_20251030-13_nztmkg.jpg',
            'text_es' => 'Turismo de reuniones',
            'text_en' => 'MICE'
        ],
        [
            'image' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/Web_Site-Expotur2026_20251030-09_p9m5hi.jpg',
            'text_es' => 'Turismo rural y rural comunitario',
            'text_en' => 'Rural Tourism'
        ],
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
