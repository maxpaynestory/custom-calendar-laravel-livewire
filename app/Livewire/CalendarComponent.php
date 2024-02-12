<?php

namespace App\Livewire;

use Livewire\Component;

class CalendarComponent extends Component
{
    public $selectedTimeRange = [];
    public $isSelecting = false;
    public $startX = null;
    public $endX = null;

    protected $listeners = [
        'startSelecting' => 'startSelecting',
        'updateSelecting' => 'updateSelecting',
        'stopSelecting' => 'stopSelecting',
    ];

    public function startSelecting($startX)
    {
        $this->isSelecting = true;
        $this->startX = $startX;
        $this->endX = $startX;
    }

    public function updateSelecting($endX)
    {
        if ($this->isSelecting) {
            $this->endX = $endX;
        }
    }

    public function stopSelecting()
    {
        $this->isSelecting = false;
        $this->selectedTimeRange = [$this->startX, $this->endX];

        // Handle the logic for selecting the time range
        // You can perform additional actions or emit further Livewire events as needed
    }

    public function render()
    {
        return view('livewire.calendar-component');
    }
}
