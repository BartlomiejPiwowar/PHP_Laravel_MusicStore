<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Skrzypce',
            'description' => 'Wysokiej jakości skrzypce dla profesjonalistów.',
            'price' => 1500.00,
            'quantity' => 5,
            'type' => 'Instrumenty smyczkowe',
            'image' => 'https://riff.net.pl/164192/m-tunes-skrzypce-44-no180-zestaw.jpg'
        ]);

        Product::create([
            'name' => 'Fortepian koncertowy',
            'description' => 'Elegancki i wyrafinowany fortepian koncertowy.',
            'price' => 20000.00,
            'quantity' => 2,
            'type' => 'Instrumenty klawiszowe',
            'image' => 'https://riff.net.pl/54970/fortepian-akustyczny-boston-gp-178-pe.jpg',
            ]);

        Product::create([
            'name' => 'Gitara elektryczna',
            'description' => 'Profesjonalna gitara elektryczna z wyjątkowym brzmieniem.',
            'price' => 3000.00,
            'quantity' => 10,
            'type' => 'Instrumenty strunowe',
            'image' => 'https://riff.net.pl/63423/vintage-v100pbb.jpg',
        ]);

        Product::create([
            'name' => 'Trąbka',
            'description' => 'Trąbka o wyjątkowej jakości dźwięku.',
            'price' => 1200.00,
            'quantity' => 4,
            'type' => 'Instrumenty dęte',
            'image' => 'https://riff.net.pl/168584-large_default/j-michael-tr-300sa-trabka-riffolution.jpg',
        ]);

        Product::create([
            'name' => 'Akordeon',
            'description' => 'Wielofunkcyjny akordeon idealny do gry ludowej.',
            'price' => 2500.00,
            'quantity' => 3,
            'type' => 'Instrumenty klawiszowe',
            'image' => 'https://riff.net.pl/14860/weltmeister-cassotta-41120iv115-black.jpg',
            ]);

        Product::create([
            'name' => 'Bębenek',
            'description' => 'Tradycyjny bębenek o świetnym brzmieniu.',
            'price' => 300.00,
            'quantity' => 15,
            'type' => 'Instrumenty perkusyjne',
            'image' => 'https://riff.net.pl/157564-large_default/club-salsa-tamburyn-6-f836500-hand-drum.jpg',
        ]);

        Product::create([
            'name' => 'Tamburyn',
            'description' => 'Lekki i wytrzymały tamburyn do użytku plażowego.',
            'price' => 150.00,
            'quantity' => 20,
            'type' => 'Instrumenty perkusyjne',
            'image' => 'https://riff.net.pl/136231/meinl-htbk.jpg',
        ]);

        Product::create([
            'name' => 'Gitara akustyczna',
            'description' => 'Gitara akustyczna dla początkujących i zaawansowanych.',
            'price' => 800.00,
            'quantity' => 12,
            'type' => 'Instrumenty strunowe',
            'image' => 'https://riff.net.pl/99388/fender-cd-60-dreadnought-v3-wn-nat.jpg',
            ]);

        Product::create([
            'name' => 'Flet poprzeczny',
            'description' => 'Profesjonalny flet poprzeczny z metalu.',
            'price' => 2200.00,
            'quantity' => 5,
            'type' => 'Instrumenty dęte',
            'image' => 'https://yago-music.pl/wp-content/uploads/2023/01/FL2410.png',
        ]);

        Product::create([
            'name' => 'Pianino cyfrowe',
            'description' => 'Nowoczesne pianino cyfrowe z bogatym brzmieniem.',
            'price' => 4000.00,
            'quantity' => 8,
            'type' => 'Instrumenty klawiszowe',
            'image' => 'https://riff.net.pl/119458/casio-ap-270-bk-pianino-cyfrowe-czarne.jpg',
        ]);

        Product::create([
            'name' => 'Ukulele',
            'description' => 'Małe i poręczne ukulele z drewna mahoniowego.',
            'price' => 250.00,
            'quantity' => 30,
            'type' => 'Instrumenty strunowe',
            'image' => 'https://riff.net.pl/108298/flight-duc323-mahmah-ukulele-koncertowe.jpg',
        ]);

        Product::create([
            'name' => 'Kazoo',
            'description' => 'Prosty i zabawny instrument dla dzieci i dorosłych.',
            'price' => 20.00,
            'quantity' => 50,
            'type' => 'Inne',
            'image' => 'https://riff.net.pl/92064-large_default/flight-kzsv-kazoo-srebrne.jpg',
        ]);

        Product::create([
            'name' => 'Płyta CD: Muzyka klasyczna',
            'description' => 'Najlepsze utwory muzyki klasycznej na jednej płycie.',
            'price' => 50.00,
            'quantity' => 100,
            'type' => 'Płyty',
            'image' => 'https://baisel.pl/8142-home_default/heartbeat-piano-works.jpg',
        ]);

        Product::create([
            'name' => 'Płyta winylowa: Jazz',
            'description' => 'Winylowa płyta z najlepszymi jazzowymi standardami.',
            'price' => 120.00,
            'quantity' => 40,
            'type' => 'Płyty',
            'image' => 'https://ecsmedia.pl/c/a-jazz-portrait-of-frank-sinatra-plyta-winylowa-b-iext160161177.jpg',
        ]);


        Product::create([
            'name' => 'Marakasy',
            'description' => 'Para marakasów wykonanych z wysokiej jakości drewna.',
            'price' => 40.00,
            'quantity' => 25,
            'type' => 'Instrumenty perkusyjne',
            'image' => 'https://riff.net.pl/105560/meinl-msm4-marakasy-outlet.jpg',
        ]);

        Product::create([
            'name' => 'Ksylofon',
            'description' => 'Ksylofon edukacyjny dla dzieci i młodzieży.',
            'price' => 120.00,
            'quantity' => 15,
            'type' => 'Instrumenty perkusyjne',
            'image' => 'https://www.prodrum.pl/dane/editor/images/Ksylofon%20instrument%20sklep%20producent%201.jpg',
        ]);

        Product::create([
            'name' => 'Harmonijka ustna',
            'description' => 'Harmonijka diatoniczna w tonacji C.',
            'price' => 80.00,
            'quantity' => 18,
            'type' => 'Instrumenty dęte',
            'image' => 'https://riff.net.pl/14988/fender-blues-deluxe-harmonica-a.jpg',
        ]);

        Product::create([
            'name' => 'Gitara basowa',
            'description' => 'Elektryczna gitara basowa o głębokim brzmieniu.',
            'price' => 2500.00,
            'quantity' => 7,
            'type' => 'Instrumenty strunowe',
            'image' => 'https://riff.net.pl/162207/aria-igb-std5-mbk-gitara-basowa.jpg',
        ]);
    }
}
