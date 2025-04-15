
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Konkurs') }}
        </h2>
    </x-slot>

    <div class="relative">
        <!-- Sekcja z opisem konkursu -->
        <div class="bg-cover bg-center h-screen w-full mb-8" style="background-image: url('https://images.pexels.com/photos/351265/pexels-photo-351265.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
            <div class="flex flex-col items-center justify-center h-full w-full space-y-8">
                <!-- Pierwszy box -->
                <div class="bg-white shadow-md rounded-lg p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <h1 class="text-4xl mt-4 font-bold text-gray-800 text-center">Weź udział w naszym niesamowitym konkursie!</h1>
                    <h1 class="text-2xl mt-2 mb-4 text-gray-700 text-center">Odpowiedz na pytanie konkursowe i załącz swoje zdjęcia, aby mieć szansę na wygranie atrakcyjnych nagród! Sprawdź szczegóły poniżej.</h1>
                    <div class="flex justify-center mt-4">
                        <a href="/konkurs" id="scroll-to-form">
                            <x-primary-button>Weź udział</x-primary-button>
                        </a>

                    </div>
                </div>

                <!-- Drugi box -->
                <div class="bg-white shadow-md rounded-lg p-6 max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
                    <h1 class="text-4xl mt-4 font-bold text-gray-800 text-center">Jak wziąć udział w konkursie?</h1>
                    <h1 class="text-2xl mt-2 mb-4 text-gray-700 text-center">W naszym konkursie liczy się pasja do muzyki oraz chęć dzielenia się swoimi talentami! Aby zwiększyć swoje szanse na wygraną, wystarczy, że odpowiedziesz na pytanie konkursowe i załączysz zdjęcia związane z Twoją pasją do muzyki. Pamiętaj, że każda dodatkowa fotografia to większa szansa na zdobycie jednej z niesamowitych nagród!
                        Zasady są proste, a nagrody fantastyczne! Dowiedz się, jak wziąć udział i przekonaj się, jak łatwo można wygrać sprzęt muzyczny, który pozwoli Ci rozwijać swoją pasję!<br> Nie czekaj, zgłoś się już teraz!
                    </h1>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 mb-8">
            <h1 class="text-2xl font-bold mb-4 text-center">Do wygrania:</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kwadrat 1 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="gitara.jpg" alt="Gitara akustyczna" class="zoom-image w-full h-full object-cover">
                </div>
                <!-- Kwadrat 2 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="perkusja.jpg" alt="Perkusja" class="zoom-image w-full h-full object-cover">
                </div>
                <!-- Kwadrat 3 -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <img src="skrzypce.jpg" alt="Skrzypce" class="zoom-image w-full h-full object-cover">
                </div>
            </div>
        </div>


        <style>
            .zoom-image {
                width: 100%; /* Szerokość obrazu */
                height: 100%; /* Wysokość obrazu */
                object-fit: cover; /* Wyrównanie obrazu */
            }

            .zoom-image:hover {
                transform: scale(1.2); /* Powiększ zdjęcie */
                transition: transform 0.3s ease;
            }
        </style>

        <!-- Sekcja z zasadami -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="relative z-10 max-w-7xl px-8 lg:px-12 text-center">
                    <h1 class="text-2xl font-bold mb-4 text-center">Zasady:</h1>

                    <!-- Lista zasad -->
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-500 text-white rounded-full text-2xl font-bold mr-6">
                            1
                        </div>
                        <p class="text-2xl mt-2 mb-4 text-gray-700 text-justify">
                            Kup instrument muzyczny w naszym sklepie.
                        </p>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-500 text-white rounded-full text-2xl font-bold mr-6">
                            2
                        </div>
                        <p class="text-2xl mt-2 mb-4 text-gray-700 text-justify">
                            Odpowiedz na pytanie: Gdyby muzyka była jedzeniem, jaki smak by miała?.
                        </p>
                    </div>
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-500 text-white rounded-full text-2xl font-bold mr-6">
                            3
                        </div>
                        <p class="text-2xl mt-2 mb-4 text-gray-700 text-justify">
                            Wygraj nagrody i ciesz się muzyką!
                        </p>
                    </div>

                    <!-- Informacja o zgłoszeniach -->
                    <p class="text-gray-700 text-left">
                        Na zgłoszenia czekamy do 15.02.2025 r. Szczegóły w
                        <a href="{{ route('regulamin') }}" class="text-green-500 font-bold">regulaminie</a>.
                    </p>

                </div>
            </div>
        </div>

        <div class="py-12">
            <!-- Sekcja z formularzem konkursowym -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div id="form-content" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Formularz -->
                        <div id="form-container">
                            <h3 class="text-2xl font-bold mb-4">Weź udział w konkursie</h3>
                            <form method="POST" action="{{ route('konkurs.submit') }}" id="contest-form" enctype="multipart/form-data">
                                @csrf
                                <!-- Pola formularza -->
                                <div class="mb-4">
                                    <x-input-label for="name" :value="__('Imię i nazwisko')" class="text-xl" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                                </div>
                                <div class="mb-4">
                                    <x-input-label for="email" :value="__('Email')" class="text-xl" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                                </div>
                                <div class="mb-4">
                                    <x-input-label for="answer" :value="__('Odpowiedź na pytanie konkursowe')" class="text-xl" />
                                    <x-text-input id="answer" class="block mt-1 w-full" type="text" name="answer" required />
                                </div>
                                {{--<div class="mb-4">
                                    <x-input-label for="images" :value="__('Załącz zdjęcia (maks. 5 zdjęć)')" class="text-xl" />
                                    <input type="file" name="images[]" id="images" class="block mt-1 w-full" multiple accept="image/*" />
                                </div>--}}
                                <div>
                                    <x-primary-button class="text-2xl py-4 px-8" type="submit">Wyślij zgłoszenie</x-primary-button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <!-- Podziękowanie -->
                    <div id="thank-you-message" class="hidden flex flex-col items-center justify-center h-[400px]">
                        <h3 class="text-4xl font-bold mb-6">Dziękujemy za zgłoszenie!</h3>
                        <p class="text-2xl mb-6">Twoje zgłoszenie zostało zapisane. Trzymamy kciuki!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- Skrypt do obsługi wysłania -->
        <script>
            document.getElementById('scroll-to-form').addEventListener('click', function (event) {
                event.preventDefault(); // Zatrzymaj domyślne przejście do linku

                document.getElementById('form-content').scrollIntoView({ behavior: 'smooth' }); // Płynne przewijanie do formularza
            });

            document.querySelector('#contest-form').addEventListener('submit', function (event) {
                event.preventDefault();

                // Pobierz dane z formularza
                const form = event.target;
                const formData = new FormData(form);

                // Wyślij dane do serwera
                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                })
                    .then(response => {
                        if (response.ok) {
                            // Ukryj formularz i wyświetl podziękowanie
                            document.getElementById('form-content').classList.add('hidden');
                            document.getElementById('thank-you-message').classList.remove('hidden');
                        } else {
                            alert('Wystąpił błąd podczas wysyłania zgłoszenia.');
                        }
                    })
                    .catch(error => {
                        console.error('Błąd:', error);
                        alert('Wystąpił problem. Proszę spróbować ponownie później.');
                    });
            });
        </script>
    </div>
</x-app-layout>
