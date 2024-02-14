<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Calendar extends Component
{
    public $selectedIds = [];
    public $startX = null;
    public $endX = null;
    public $thisWeek = "This Week";
    public $timeSlots;

    public function mount()
    {
        $this->timeSlots = $this->generateTimeSlots();
    }

    protected $listeners = [
        'stopSelecting' => 'stopSelecting',
    ];

    public function stopSelecting($selection)
    {
        $this->selectedIds = array_merge($this->selectedIds, $selection);
        $this->selectedIds = array_unique($this->selectedIds);
    }

    private function generateTimeSlots(): Collection
    {
        $startTime = Carbon::createFromTime(9, 0);
        $endTime = Carbon::createFromTime(12, 0);
        $interval = 15; // in minutes
        $colorClasses = ['pink', 'lightgreen']; // Add more colors as needed

        $timeSlots = collect();
        $colorIndex = 0;

        while ($startTime < $endTime) {
            $slotStartTime = $startTime->format('H:i');
            $slotEndTime = $startTime->addMinutes($interval)->format('H:i');

            $slot = [
                'title' => "{$slotStartTime} - {$slotEndTime}",
                'id' => hash('sha256', "{$slotStartTime}_{$slotEndTime}"),
                'classes' => ['b_time', 'available', $colorClasses[$colorIndex]],
            ];

            $timeSlots->push($slot);

            $colorIndex = ($colorIndex + 1) % count($colorClasses);
        }

        return $timeSlots;
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
