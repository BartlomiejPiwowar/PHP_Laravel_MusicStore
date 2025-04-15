<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Ulubione produkty') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Sekcja ulubionych produktów -->
                    <div id="favorites-content">
                        @if ($favorites->isEmpty())
                            <!-- Komunikat dla pustej listy ulubionych -->
                            <div class="text-center">
                                <p class="text-xl text-gray-600">Nie masz jeszcze żadnych ulubionych produktów.</p>
                                <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-700 text-lg mt-4 inline-block">
                                    Przeglądaj produkty
                                </a>
                            </div>
                        @else
                            @foreach ($favorites as $item)
                                <div class="bg-gray-100 p-4 m-2 rounded-lg shadow-md flex items-center">
                                    <!-- Obrazek produktu -->
                                    @if (filter_var($item->image, FILTER_VALIDATE_URL))
                                        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-48 h-48 object-cover mb-4 rounded">
                                    @else
                                        <img src="{{ asset('/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover mb-4 rounded">
                                    @endif

                                    <!-- Informacje o produkcie -->
                                    <div class="flex-1 m-2">
                                        <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                                        <p class="text-gray-500">{{ $item->description }}</p>
                                        <p class="text-gray-700 font-bold">{{ number_format($item->price, 2) }} PLN</p>
                                        <a href="{{ route('products.show', $item->id) }}" class="mt-4 text-gray-500 hover:text-gray-700">Zobacz szczegóły</a>
                                    </div>

                                    <!-- Usuwanie produktu z ulubionych -->
                                    <div class="ml-4">
                                        <form action="{{ route('favorites.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Usuń</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
