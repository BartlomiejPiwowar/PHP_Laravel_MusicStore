<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodawanie nowego produktu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Formularz do tworzenia nowego produktu -->
                    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Nazwa produktu -->
                        <div>
                            <x-input-label for="name" :value="__('Product Name')"/>
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <!-- Cena produktu -->
                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Price')"/>
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" step="0.01" :value="old('price')"/>
                            <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                        </div>

                        <!-- Opis produktu -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')"/>
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"/>
                            <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                        </div>

                        <!-- Typ produktu -->
                        <div class="mt-4">
                            <x-input-label for="type" :value="__('Product Type')"/>
                            <select id="type" name="type" class="block mt-1 w-full">
                                <option value="Instrumenty smyczkowe" {{ old('type') == 'Instrumenty smyczkowe' ? 'selected' : '' }}>Instrumenty smyczkowe</option>
                                <option value="Instrumenty klawiszowe" {{ old('type') == 'Instrumenty klawiszowe' ? 'selected' : '' }}>Instrumenty klawiszowe</option>
                                <option value="Instrumenty strunowe" {{ old('type') == 'Instrumenty strunowe' ? 'selected' : '' }}>Instrumenty strunowe</option>
                                <option value="Instrumenty dęte" {{ old('type') == 'Instrumenty dęte' ? 'selected' : '' }}>Instrumenty dęte</option>
                                <option value="Instrumenty perkusyjne" {{ old('type') == 'Instrumenty perkusyjne' ? 'selected' : '' }}>Instrumenty perkusyjne</option>
                                <option value="Płyty" {{ old('type') == 'Płyty' ? 'selected' : '' }}>Płyty</option>
                                <option value="Śpiewniki" {{ old('type') == 'Śpiewniki' ? 'selected' : '' }}>Śpiewniki</option>
                                <option value="Inne" {{ old('type') == 'Inne' ? 'selected' : '' }}>Inne</option>
                            </select>
                            <x-input-error :messages="$errors->get('type')" class="mt-2"/>
                        </div>

                        <!-- Przesyłanie obrazu -->
                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Product Image')"/>
                            <input type="file" id="image" name="image" class="form-input mt-1 block w-full"/>
                            <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                        </div>

                        <!-- Przycisk do zapisania produktu -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button type="submit" class="ms-4">
                                Utwórz
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
