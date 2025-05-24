<div>
    <header class="bg-white shadow-sm">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $slot }}</h1>
            <div class="flex-row">
                <h1 class="text-xl font-bold tracking-tight text-gray-900">{{ now()->format('l, F jS') }}</h1>
                <h1 id="live-clock" class="text-xl font-bold tracking-tight text-gray-900">{{ now()->format('h:i:s A') }}</h1>
            </div>
        </div>
    </header>
</div>

<script>
    // Update the clock every second
    function updateClock() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const ampm = hours >= 12 ? 'PM' : 'AM';
        
        // Format: 12-hour time with AM/PM
        const formattedTime = `${hours % 12 || 12}:${minutes}:${seconds} ${ampm}`;
        
        document.getElementById('live-clock').textContent = formattedTime;
    }

    // Update immediately and then every second
    updateClock();
    setInterval(updateClock, 1000);
</script>