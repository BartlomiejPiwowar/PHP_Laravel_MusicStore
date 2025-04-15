<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;
use App\Models\User;
use App\Models\Order;

class Test09_ZamowieniaCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->amOnPage('/login');
        $I->fillField('email', 'john.doe@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');

        $I->amOnPage('/zamowienia');
        $I->see('Zamówienia', 'h2');
        $I->see('ID', 'th');
        $I->see('Użytkownik', 'th');
        $I->see('Łączna kwota', 'th');
        $I->see('Gitara elektryczna', 'td');

        $I->selectOption('status', 'wysłane');
        $I->click('Zaktualizuj');
        $I->see('wysłane', 'td');
    }
}
