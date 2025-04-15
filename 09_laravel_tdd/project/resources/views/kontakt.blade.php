<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Kontakt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Sekcja nagłówkowa -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Telefon -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mx-auto mb-4">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-2xl font-bold mb-2">Zadzwoń</h3>
                    <p class="text-gray-700 text-xl">Porozmawiaj z nami, aby uzyskać szybką pomoc!</p>
                    <p class="text-blue-700 mt-2 font-semibold text-xl">+48 123 123 123</p>
                </div>

                <!-- Email -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mx-auto mb-4">
                        <path d="M19.5 22.5a3 3 0 0 0 3-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 1 1-.712 1.321l-5.683-3.06a1.5 1.5 0 0 0-1.422 0l-5.683 3.06a.75.75 0 0 1-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 0 0 3 3h15Z" />
                        <path d="M1.5 9.589v-.745a3 3 0 0 1 1.578-2.642l7.5-4.038a3 3 0 0 1 2.844 0l7.5 4.038A3 3 0 0 1 22.5 8.844v.745l-8.426 4.926-.652-.351a3 3 0 0 0-2.844 0l-.652.351L1.5 9.589Z" />
                    </svg>
                    <h3 class="text-2xl font-bold mb-2">Napisz do nas</h3>
                    <p class="text-gray-700 text-xl">Masz pytania? Skontaktuj się z nami za pośrednictwem e-maila!</p>
                    <p class="text-blue-700 mt-2 font-semibold text-xl">kontakt@wszystkogra.pl</p>
                </div>

                <!-- Godziny otwarcia -->
                <div class="bg-white shadow-md rounded-lg p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mx-auto mb-4">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-2xl font-bold mb-2">Godziny otwarcia</h3>
                    <p class="text-gray-700 text-xl">Zapraszamy w godzinach pracy naszego biura.</p>
                    <p class="text-gray-700 text-xl mt-2">Pn - Pt: 9:00 - 17:00</p>
                </div>
            </div>
        </div>

        <!-- Sekcja Adres i Mapa -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col md:flex-row gap-6 items-start">
                <!-- Tekst z adresem -->
                <div class="md:w-1/2">
                    <h3 class="text-2xl font-bold mb-4">Chcesz nas odwiedzić?</h3>
                    <p class="text-xl">Zobacz nasz asortyment na żywo i porozmawiaj z naszymi ekspertami.</p>
                    <p class="mt-4 font-semibold text-xl">Znajdziesz nas pod adresem:</p>
                    <p class="mt-2 text-xl">Ul. Muzyczna 12, 02-862 Warszawa, Polska</p>
                </div>
                <!-- Mapa -->
                <div class="md:w-auto ml-auto" style="width: 550px; height: 350px; border-radius: 8px; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2254.5673328057496!2d21.012245212338218!3d52.12845697930878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4719327282a5e5df%3A0xfe46fd5d51ba519a!2sMuzyczna%2012%2C%2002-862%20Warszawa!5e0!3m2!1spl!2spl!4v1737562070488!5m2!1spl!2spl"
                        width="600" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <!-- Sekcja z formularzem -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <div id="form-content" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Formularz -->
                    <div id="form-container">
                        <h3 class="text-2xl font-bold mb-4">Napisz do nas wiadomość</h3>
                        <form method="POST" action="/submit-form" id="contact-form">
                            @csrf
                            <div class="mb-4">
                                <x-input-label for="name" :value="__('Imię i nazwisko')" class="text-xl" />
                                <x-text-input id="name" class="block mt-1 w-full focus:border-gray-300 focus:bg-gray-100 focus:ring-1 focus:ring-gray-300 text-xl" type="text" name="name" placeholder="Wpisz swoje imię i nazwisko" required />
                            </div>
                            <div class="mb-4">
                                <x-input-label for="email" :value="__('Email')" class="text-xl" />
                                <x-text-input id="email" class="block mt-1 w-full focus:border-gray-300 focus:ring-1 focus:ring-gray-300 text-xl" type="email" name="email" placeholder="Wpisz swój email" required />
                            </div>
                            <div class="mb-4">
                                <x-input-label for="message" :value="__('Wiadomość')" class="text-xl" />
                                <textarea id="message" name="message" rows="4" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-gray-300 focus:ring-1 focus:ring-gray-300 text-xl" placeholder="Napisz swoją wiadomość" required></textarea>
                            </div>
                            <div>
                                <x-primary-button class="text-2xl py-4 px-8">
                                    Wyślij
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    <!-- Pomoc -->
                    <div id="help-text">
                        <h3 class="text-2xl font-bold mb-4">Potrzebujesz pomocy?</h3>
                        <p class="text-xl">Jeśli masz problem z zamówieniem lub potrzebujesz pomocy technicznej, jesteśmy tutaj, aby Ci pomóc. Skontaktuj się z nami, a znajdziemy rozwiązanie!</p>
                    </div>
                </div>

                <!-- Podziękowanie -->
                <div id="thank-you-message" class="hidden flex flex-col items-center justify-center h-[400px]">
                    <h3 class="text-4xl font-bold mb-6">Dziękujemy za wiadomość!</h3>
                    <p class="text-2xl mb-6">Twoja wiadomość została wysłana. Skontaktujemy się z Tobą wkrótce.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                    </svg>
                </div>
            </div>
        </div>


        <footer class="py-16 text-center text-sm text-black">
            <p> &copy; 2025 <em>Wszystko Gra</em></p>
        </footer>
    </div>

    <!-- Skrypt do obsługi wysłania -->
    <script>
        document.querySelector('#contact-form').addEventListener('submit', function (event) {
            event.preventDefault();
            document.getElementById('form-content').classList.add('hidden');
            document.getElementById('thank-you-message').classList.remove('hidden');
        });
    </script>
</x-app-layout>
