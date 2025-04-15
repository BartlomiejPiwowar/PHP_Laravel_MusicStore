<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Zgłoszenia Konkursowe') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 mb-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Zgłoszenia do Konkursu</h1>

        <div class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Lista zgłoszeń</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead>
                    <tr class="border-b bg-gray-100">
                        <th class="px-6 py-4 text-left text-gray-700">Imię i Nazwisko</th>
                        <th class="px-6 py-4 text-left text-gray-700">Email</th>
                        <th class="px-6 py-4 text-left text-gray-700">Odpowiedź na pytanie</th>
                        {{--//<th class="px-6 py-4 text-left text-gray-700">Załączone zdjęcia</th>--}}
                        <th class="px-6 py-4 text-left text-gray-700">Data Zgłoszenia</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($konkurs as $zgloszenie)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $zgloszenie->name }}</td>
                            <td class="px-6 py-4">{{ $zgloszenie->email }}</td>
                            <td class="px-6 py-4">{{ $zgloszenie->answer }}</td>
                            {{--<td class="px-6 py-4">
                                @if($zgloszenie->images)
                                    @php
                                        $images = json_decode($zgloszenie->images, true); // Dekodowanie JSON ze ścieżkami
                                    @endphp
                                    @foreach($images as $image)
                                        <a href="/{{ $image }}" target="_blank" class="text-blue-500">Zobacz zdjęcie</a><br>
                                    @endforeach
                                @else
                                    <p class="text-gray-600">Brak zdjęć</p>
                                @endif


                            </td>--}}
                            <td class="px-6 py-4">{{ $zgloszenie->created_at?->format('d-m-Y H:i') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f9fafb;
        }

        tr:hover {
            background-color: #f3f4f6;
        }

        .text-blue-500:hover {
            text-decoration: underline;
        }
    </style>
</x-app-layout>
