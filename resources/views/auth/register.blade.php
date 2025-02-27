<x-layout>
    <x-page-heading>Регистрация</x-page-heading>

    <x-forms.form method="POST" action="/public/register" enctype="multipart/form-data">
        <x-forms.input label="Име" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Парола" name="password" type="password" />
        <x-forms.input label="Парола - потвърждение" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Работодател" name="employer" />
        <x-forms.input label="Лого на работодателя" name="logo" type="file" />

        <x-forms.button>Създай потребител</x-forms.button>
    </x-forms.form>
</x-layout>