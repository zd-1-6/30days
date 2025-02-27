<!-- resources/views/airbnb_reservations/search.blade.php -->
<x-layout>
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Да потърсим резервация</h1>

        <div class="max-w-2xl mx-auto mt-6">
            <form action="{{ route('reservations.search') }}" method="GET">
                <input 
                    type="text"
                    name="q"
                    placeholder="Търсене..."
                    class="w-full rounded-xl bg-white/10 border border-white/10 px-5 py-4"
                    value="{{ request('q') }}"
                >
            </form>
        </div>
    </section>

    @if(request('q'))
        <section class="pt-10">
            <h2 class="text-2xl font-bold mb-6">Резултати</h2>
            
            @if($reservations->count())
                <div class="space-y-4">
                    @foreach($reservations as $reservation)
                        <x-reservation-card :reservation="$reservation" />
                    @endforeach
                </div>
                
                <div class="mt-8">
                    {{ $reservations->links() }}
                </div>
            @else
                <p class="text-center text-gray-400">Няма намерени резервации.</p>
            @endif
        </section>
    @endif
</x-layout>