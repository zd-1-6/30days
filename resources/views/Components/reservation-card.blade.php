@props(['reservation'])

<x-panel class="flex gap-x-6">

    <div class="flex-1 flex flex-col">
        
        <p class="text-sm text-gray-400 mt-auto">
            <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300 group-hover:text-blue-800">{{  $reservation->confirmation_code }}</a>
            {{ $reservation->guest_name }}
            {{ $reservation->contact_details }} 
            {{ $reservation->listing_name }} 
            {{ $reservation->reservation_status }}
            {{ $reservation->booked }}
            {{ $reservation->earnings }}
        </p>
    </div>

</x-panel>

