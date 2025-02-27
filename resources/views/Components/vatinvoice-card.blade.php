@props(['vatinvoice'])

<x-panel class="flex gap-x-6">

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $vatinvoice->invoice_number }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{ $vatinvoice->confirmation_code }}</h3>

        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->date_of_service }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->host_name }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->listing_id }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->listing_name }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->listing_address }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->vat_rate }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->net_amount }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->vat_amount }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->gross_amount }}</p>
        <p class="text-sm text-gray-400 mt-auto">{{ $vatinvoice->currency }}</p>
    </div>

</x-panel>