<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Да потърсим ДДС фактура</h1>

            <x-forms.form action="/public/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="1000000010234..." />
            </x-forms.form>
        </section>
        
        <section class="pt-10">

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
            
                @foreach($vatinvoices as $vatinvoice)
                    <x-vatinvoice-card :$vatinvoice />
                @endforeach
                
                <x-pagination :paginator="$vatinvoices" />
                
            </div>
        </section>
    </div>
</x-layout>


