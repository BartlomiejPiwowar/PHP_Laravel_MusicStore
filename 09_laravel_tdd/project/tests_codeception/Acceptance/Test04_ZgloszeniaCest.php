<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test04_ZgloszeniaCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->wantTo('Zweryfikować listę zgłoszeń konkursowych');

        $I->amOnPage('/login');
        $I->fillField('email', 'john.doe@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');

        $I->amOnPage('/zgloszenia');

        $I->see('Zgłoszenia do Konkursu', 'h1');
        $I->see('Lista zgłoszeń', 'h2');

        $I->see('Imię i Nazwisko', 'th');
        $I->see('Email', 'th');
        $I->see('Odpowiedź na pytanie', 'th');
        $I->see('Data Zgłoszenia', 'th');

    }
}
