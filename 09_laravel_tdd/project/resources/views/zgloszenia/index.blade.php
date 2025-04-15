<!-- resources/views/zgloszenia/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Zgłoszenia konkursowe') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 mb-8">
        <h1 class="text-2xl font-bold text-center mb-4">Lista zgłoszeń</h1>

        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <div class="grid grid-cols-1 gap-6">
                    @foreach ($zgloszenia as $zgloszenie)
                        <div class="bg-gray-50 border p-4 rounded-md">
                            <h3 class="text-lg font-semibold">{{ $zgloszenie->name }} ({{ $zgloszenie->email }})</h3>
                            <p><strong>Odpowiedź:</strong> {{ $zgloszenie->answer }}</p>

                            @if ($zgloszenie->images)
                                <p><strong>Załączone zdjęcia:</strong></p>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    @foreach ($zgloszenie->images as $image)
                                        <img src="{{ Storage::url($image) }}" alt="Zdjęcie konkursowe" class="w-full h-32 object-cover rounded-md">
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
