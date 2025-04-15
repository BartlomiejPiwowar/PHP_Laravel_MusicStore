<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test06_FavoritesCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->amOnPage('/login');
        $I->fillField('email', 'kaczor.donald@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');

        $I->amOnPage('/favorites');
        $I->see('Ulubione produkty', 'h2');

        $I->see('Nie masz jeszcze żadnych ulubionych produktów.');
        $I->click('Przeglądaj produkty');

        $I->click('Gitara akustyczna');

        $I->see('DODAJ DO ULUBIONYCH');
        $I->click('Dodaj do ulubionych');

        $I->amOnPage('/favorites');

        $I->see('Gitara akustyczna', 'h3.text-lg.font-semibold');
        $I->see('Gitara akustyczna dla początkujących i zaawansowanych.', '.text-gray-500');
        $I->see('800.00 PLN', '.text-gray-700.font-bold');
        $I->see('Zobacz szczegóły');
        $I->see('Usuń', 'button');

        $I->click('Usuń');

        $I->see('Nie masz jeszcze żadnych ulubionych produktów.');
    }
}
