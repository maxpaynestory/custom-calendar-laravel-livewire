<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class CalendarComponent extends Component
{
    public $selectedTimeRange = [];
    public $isSelecting = "n";
    public $startX = null;
    public $endX = null;
    public $thisWeek = "This Week";
    public $timeSlots;

    public function mount()
    {
        $this->timeSlots = $this->generateTimeSlots();
        Log::info('Generated Time Slots:', ['timeSlots' => $this->timeSlots->toArray()]);
    }

    protected $listeners = [
        'startSelecting' => 'startSelecting',
        'updateSelecting' => 'updateSelecting',
        'stopSelecting' => 'stopSelecting',
    ];

    public function startSelecting($startX)
    {
        $this->isSelecting = "y";
        $this->startX = $startX;
        $this->endX = $startX;
    }

    public function updateSelecting($endX)
    {
        if ($this->isSelecting === "y") {
            $this->endX = $endX;
        }
    }

    public function stopSelecting()
    {
        $this->isSelecting = "n";
        $this->selectedTimeRange = [$this->startX, $this->endX];

        // Handle the logic for selecting the time range
        // You can perform additional actions or emit further Livewire events as needed
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
        return view('livewire.calendar-component');
    }
}
