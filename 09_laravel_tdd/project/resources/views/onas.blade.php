<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('O nas') }}
        </h2>
    </x-slot>

{{--
    <div class="py-12" style="background-image: url('/tlo.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
--}}

    <div class="py-12 ">
        <!-- Sekcja nagłówkowa -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h2 class="text-4xl font-bold mb-4 text-gray-800">Kim jesteśmy?</h2>
                    <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                        Witamy w sklepie Wszystko Gra! W miejscu, gdzie muzyka łączy się z pasją. Naszym celem jest dostarczanie najlepszych produktów i usług dla miłośników muzyki. Dowiedz się więcej o tym, co nas wyróżnia!
                    </p>
                </div>
            </div>
        </div>

        <!-- Sekcja Historia -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Nasza Historia</h2>
                <p class="text-gray-600 text-lg mb-6">
                    Nasza działalność powstała w 1950 roku z pasji do muzyki. Zaczynaliśmy jako mały sklep z instrumentami muzycznymi, a dziś jesteśmy jednym z największych dostawców sprzętu muzycznego w Polsce! Nasz zespół składa się z muzyków, którzy doskonale rozumieją potrzeby artystów.
                </p>
                <div class="mt-6 flex justify-center gap-4">
                    <img src="stary.jpg" alt="Historia firmy" class="rounded-lg shadow-lg object-cover h-52 w-1/2">
                </div>
            </div>
        </div>

        <!-- Sekcja Zespół -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Poznaj nasz zespół</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4" src="https://scontent-waw2-2.xx.fbcdn.net/v/t39.30808-6/386600894_1838260366605667_8554140731783486645_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=NP-HUzTUxOYQ7kNvgFx5Fuk&_nc_zt=23&_nc_ht=scontent-waw2-2.xx&_nc_gid=Ar0lZmcdJqAH4lAmN_Abp6j&oh=00_AYDGgZ80s1SgWe95dRDw8PBaSznQZtjDN41hVfOBB6chbg&oe=679DA24F" alt="Członek zespołu">
                        <h4 class="text-xl font-semibold text-gray-800">Julia Janczyk</h4>
                        <p class="text-gray-600">Specjalistka ds. instrumentów smyczkowych</p>
                        <p class="text-gray-600 text-sm mt-2">Potrzebujesz perfekcyjnie brzmiącego instrumentu smyczkowego? Nasza specjalistka ds. instrumentów smyczkowych zadba o to, by Twoje skrzypce, altówka, wiolonczela czy kontrabas były w doskonałej kondycji!</p>
                    </div>

                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4" src="jelitka.jpg" alt="Członek zespołu">
                        <h4 class="text-xl font-semibold text-gray-800">Julita Skorzycka</h4>
                        <p class="text-gray-600">Specjalistka ds. instrumentów klawiszowych</p>
                        <p class="text-gray-600 text-sm mt-2">Chcesz, by Twój fortepian, keyboard czy organ brzmiały jak nigdy dotąd? Nasza specjalistka ds. instrumentów klawiszowych zapewni im perfekcyjną konserwację i fachowe doradztwo!</p>
                    </div>

                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4" src="filecik.jpg" alt="Członek zespołu">
                        <h4 class="text-xl font-semibold text-gray-800">Julia Filewicz</h4>
                        <p class="text-gray-600">Specjalistka ds. instrumentów strunowych szarpanych</p>
                        <p class="text-gray-600 text-sm mt-2">Marzysz o brzmieniu idealnym z gitary, harfy czy mandoliny? Nasza specjalistka ds. instrumentów strunowych szarpanych zapewni im perfekcyjną konserwację i doradztwo!</p>
                    </div>

                    <div class="text-center">
                        <img class="w-32 h-32 rounded-full mx-auto mb-4" src="bartus.jpg" alt="Członek zespołu">
                        <h4 class="text-xl font-semibold text-gray-800">Bartłomiej Piwowar</h4>
                        <p class="text-gray-600">Specjalista ds. audio i zaopatrzenia</p>
                        <p class="text-gray-600 text-sm mt-2">Szukasz niezawodnego wsparcia w zakresie sprzętu audio? Nasz specjalista ds. audio i zaopatrzenia zapewni Ci dostęp do najwyższej jakości urządzeń!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sekcja Sociale -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">I ty możesz zostać jednym z nas! Wpadnij na nasze Social Media i wesprzyj naszą działalność!</h2>
                <div class="flex justify-center gap-6 mt-6">
                    <a href="#" class="w-12 h-12 bg-gray-200 rounded-full flex justify-center items-center shadow-lg">
                        <img src="facebook.png" alt="Facebook" class="w-8 h-8">
                    </a>
                    <a href="#" class="w-12 h-12 bg-gray-200 rounded-full flex justify-center items-center shadow-lg">
                        <img src="instagram.png" alt="Instagram" class="w-8 h-8">
                    </a>
                    <a href="#" class="w-12 h-12 bg-gray-200 rounded-full flex justify-center items-center shadow-lg">
                        <img src="youtube.png" alt="YouTube" class="w-8 h-8">
                    </a>
                </div>
            </div>
        </div>

        <footer class="py-16 text-center text-sm text-white">
            <p> &copy; 2025 <em>Wszystko Gra</em></p>
        </footer>
    </div>
</x-app-layout>
