<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/icons8-jazz-16.png" type="image/png">

    <title>Wszystko gra</title>

    <link rel="stylesheet" href="../css/app.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        .bg-cover-image {
            background-image: url('/tlo.jpg');
            background-position: center;
            background-size: cover;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .highlight-section {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/shop-background.jpg');
            background-size: cover;
            background-position: center;
            padding: 6rem 2rem;
            text-align: center;
            width: 100%;
            color: white;
        }
        .highlight-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .highlight-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .highlight-section a {
            font-size: 1.5rem;
            padding: 1rem 3rem;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 0.5rem;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }
        .highlight-section a:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
        .new-products-section {
            background-image: url('/products-background.jpg');
            background-size: cover;
            background-position: center;
            padding: 6rem 2rem;
            text-align: left;
            color: white;
        }
        .new-products-section h2 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
            margin-bottom: 2rem;
        }
        .new-products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            max-width: 100%;
            margin: 2rem auto;
        }
        .product-card {
            position: relative;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }
        .product-card h3 {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            width: 100%;
            text-align: center;
            margin: 0;
            padding: 1rem;
            font-size: 1.5rem;
        }
        .contest-section {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }
        .contest-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .contest-section p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .contest-section a {
            font-size: 1.2rem;
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 2rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s;
        }
        .contest-section a:hover {
            background-color: rgba(255, 255, 255, 0.4);
        }
        .reviews-section {
            background-color: white;
            padding: 4rem 0;
            overflow: hidden;
            position: relative;
        }
        .reviews-carousel {
            display: flex;
            gap: 2rem;
            overflow-x: auto;
            max-width: 100%;
            scroll-behavior: smooth;
        }
        .reviews-carousel::-webkit-scrollbar {
            display: none;
        }
        .review-card {
            flex: 0 0 300px;
            background: rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
        }
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .stars {
            font-size: 1.2rem;
            color: #888;
        }
        .carousel-navigation {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 1rem;
        }
        .carousel-navigation button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }
        .carousel-navigation button:hover {
            background: rgba(0, 0, 0, 0.7);
        }
    </style>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">

<header class="mb-8">
    @include('layouts.navigation')
</header>

<!-- Obrazek tło -->
<div class="bg-cover-image"></div>

<!-- Treść strony -->
<div class="fade-in">
    <div class="highlight-section">
        <h1>Wszystko gra?</h1>
        <p>
            Już teraz sprawdź ofertę w naszym sklepie! Nasza szeroka gama produktów czeka na Ciebie. <br>Zrób zakupy, które sprawią, że poczujesz się wyjątkowo.
        </p>
        <a href="/products">Poznaj naszą ofertę już teraz!</a>
    </div>
</div>

<div class="fade-in">
    <div class="new-products-section">
        <h2>Nowości</h2>
        <div class="new-products-grid">
            <div class="product-card">
                <a href="/products/2">
                    <img src="https://riff.net.pl/54970/fortepian-akustyczny-boston-gp-178-pe.jpg" alt="Fortepian koncertowy">
                    <h3>Fortepian koncertowy</h3>
                </a>
            </div>
            <div class="product-card">
                <a href="/products/5">
                    <img src='https://riff.net.pl/14860/weltmeister-cassotta-41120iv115-black.jpg' alt="Akordeon">
                    <h3>Akordeon</h3>
                </a>
            </div>
            <div class="product-card">
                <a href="/products/3">
                    <img src="https://riff.net.pl/63423/vintage-v100pbb.jpg" alt="Gitara elektryczna">
                    <h3>Gitara elektryczna</h3>
                </a>
            </div>
            <div class="product-card">
                <a href="/products/17">
                    <img src="https://riff.net.pl/14988/fender-blues-deluxe-harmonica-a.jpg" alt="Harmonijka ustna">
                    <h3>Harmonijka ustna</h3>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="fade-in">
    <div class="contest-section">
        <h2>Konkurs</h2>
        <p>Weź udział w naszym konkursie i wygraj kupon do naszego sklepu na 1000zł!</p>
        <a href="/konkurs">Weź udział</a>
    </div>
</div>

<!-- Opinie użytkowników -->
<div class="reviews-section">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-black mb-8">Opinie naszych klientów</h2>
        <div class="reviews-carousel">
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Anna N.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Świetna obsługa, szybka dostawa i produkty najwyższej jakości. Zdecydowanie polecam!"
                </p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Piotr W.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Wasza specjalistka jest niesamowicie pomocna, a rozmowa z nią byłą czystą przyjemnością ;)"
                </p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Jan K.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Produkty spełniły moje oczekiwania. Świetna jakość i szybka wysyłka."
                </p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Ewa M.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Fantastyczny wybór produktów i bardzo przystępne ceny. Polecam każdemu!"
                </p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Magda K.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Zakupy w tym sklepie to czysta przyjemność. Wszystko przebiegło sprawnie i bezproblemowo."
                </p>
            </div>
            <div class="review-card">
                <div class="review-header">
                    <p class="author text-xl font-bold text-gray-800">Tomasz Z.</p>
                    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p class="text-lg text-gray-600 mt-4">
                    "Rewelacyjny sklep, wszystko na czas, a obsługa na najwyższym poziomie!"
                </p>
            </div>
        </div>
        <div class="carousel-navigation">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </div>
</div>

<footer class="py-12 text-center text-sm text-white">
    <p> &copy; 2025 <em>Wszystko gra</em></p>
</footer>

<script>
    const reviewsCarousel = document.querySelector('.reviews-carousel');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    prevButton.addEventListener('click', () => {
        reviewsCarousel.scrollBy({ left: -300, behavior: 'smooth' });
    });

    nextButton.addEventListener('click', () => {
        reviewsCarousel.scrollBy({ left: 300, behavior: 'smooth' });
    });
</script>

</body>
</html>
