<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Formularz zgłoszeniowy do konkursu') }}
        </h2>
    </x-slot>

    <div class="relative max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 mb-8">
        <!-- Formularz zgłoszeniowy -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-bold text-center mb-4">Wypełnij formularz konkursowy</h3>

            <form method="POST" action="{{ route('konkurs.submit') }}" enctype="multipart/form-data" id="contact-form">
                @csrf

                <!-- Pole na imię i nazwisko -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Imię i nazwisko')" id="name" class="text-xl" />
                    <x-text-input id="name" class="block mt-1 w-full focus:border-gray-300 focus:bg-gray-100 focus:ring-1 focus:ring-gray-300 text-xl" type="text" name="name" placeholder="Wpisz swoje imię i nazwisko" required />
                </div>

                <!-- Pole na e-mail -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" id="email" class="text-xl" />
                    <x-text-input id="email" class="block mt-1 w-full focus:border-gray-300 focus:ring-1 focus:ring-gray-300 text-xl" type="email" name="email" placeholder="Wpisz swój email" required />
                </div>

                <!-- Pole na odpowiedź konkursową -->
                <div class="mb-4">
                    <x-input-label for="answer" :value="__('Odpowiedź na pytanie konkursowe')" id="answer" class="text-xl" />
                    <x-text-input id="answer" class="block mt-1 w-full focus:border-gray-300 focus:ring-1 focus:ring-gray-300 text-xl" name="answer" placeholder="Odpowiedz na pytanie..." required />
                </div>

                <!-- Pole na zdjęcia -->
                <div class="mb-4">
                    <x-input-label for="images" :value="__('Załącz zdjęcia (maks. 5 zdjęć)')" id="images[]" class="text-xl" />
                    <input type="file" name="images[]" id="images" class="block mt-1 w-full text-xl" multiple accept="image/*" />
                </div>

                <!-- Przycisk wysyłania -->
                <div>
                    <x-primary-button class="text-2xl py-4 px-8" type="submit">
                        Wyślij zgłoszenie
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
