<!-- resources/views/airbnb_reservations/reservations.blade.php -->
<x-layout>
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl"><a href='https://rentiera.com/public/public/airbnb_reservations/search?q=H'>Да потърсим резервация</a></h1>

        <div class="max-w-2xl mx-auto mt-6">
            <form action="{{ route('reservations.index') }}" method="GET">
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
            
            <div class="space-y-4">
                @if($reservations->count())
                    @foreach($reservations as $reservation)
                        <x-reservation-card :reservation="$reservation" />
                    @endforeach
                    
                    {{ $reservations->links() }}
                @else
                    <p class="text-center text-gray-400">Няма намерени резервации.</p>
                @endif
            </div>
        </section>
    @endif
</x-layout>