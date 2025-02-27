<!-- resources/views/airbnb_reservations/reservations.blade.php -->
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

    <section class="pt-10">
        <p class="text-sm">......резервация.....гост .............. контакт ................... обект..................................................................................... статус .................... дата ...................... сума</p>
        <div class="grid lg:grid-cols-4 gap-8 mt-6">
            @if($reservations->count())
                @foreach($reservations as $reservation)
                    <x-reservation-card :reservation="$reservation" />
                @endforeach
                
                <div class="col-span-4">
                    {{ $reservations->links() }}
                </div>
            @else
                <p class="col-span-4 text-center text-gray-400">Няма намерени резервации.</p>
            @endif
        </div>
    </section>
</x-layout>