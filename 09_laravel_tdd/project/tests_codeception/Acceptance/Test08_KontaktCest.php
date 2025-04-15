<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test08_KontaktCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->amOnPage('/kontakt');

        $I->see('Kontakt', 'h2');
        $I->see('Zadzwoń', 'h3');
        $I->see('+48 123 123 123');
        $I->see('Napisz do nas', 'h3');
        $I->see('kontakt@wszystkogra.pl');

        $I->fillField('name', 'Jan Kowalski');
        $I->fillField('email', 'jan.kowalski@example.com');
        $I->fillField('message', 'Mam pytanie dotyczące gitary.');

        $I->click('Wyślij');
        $I->see('Dziękujemy za wiadomość!');
    }
}
