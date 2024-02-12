<div x-data="{ isSelecting: false, startX: null, endX: null }" x-on:mousedown="startSelecting($event)" x-on:mousemove="updateSelecting($event)" x-on:mouseup="stopSelecting()">
    {{-- Your calendar and time slots --}}
    <h2>Calendar</h2>
</div>

<!---<script>
    function startSelecting(event) {
        Livewire.dispatch('startSelecting', {
            startX: event.clientX
        });
    }

    function updateSelecting(event) {
        Livewire.dispatch('updateSelecting', {
            endX: event.clientX
        });
    }

    function stopSelecting() {
        Livewire.dispatch('stopSelecting');
    }
</script>-->