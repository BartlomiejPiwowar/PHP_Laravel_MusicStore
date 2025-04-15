<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test07_KoszykCest
{
    public function test(AcceptanceTester $I): void
    {
        $this->login($I);
        $this->verifyEmptyCart($I);

        $this->addToCart($I, 'Gitara akustyczna');
        $this->verifyCartContent($I, 'Gitara akustyczna', '800.00 PLN');

        $this->removeFromCart($I);
        $this->verifyEmptyCart($I);

        $this->addToCart($I, 'Gitara akustyczna');
        $this->verifyCartContent($I, 'Gitara akustyczna', '800.00 PLN');

        $I->click('Zamów');
    }

    private function login(AcceptanceTester $I): void
    {
        $I->amOnPage('/login');
        $I->fillField('email', 'kaczor.donald@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');
    }

    private function verifyEmptyCart(AcceptanceTester $I): void
    {
        $I->amOnPage('/dashboard');
        $I->see('Twój koszyk jest pusty.');
    }

    private function addToCart(AcceptanceTester $I, string $productName): void
    {
        $I->amOnPage('/products');
        $I->click($productName);
        $I->see('DODAJ DO KOSZYKA');
        $I->click('Dodaj do koszyka');
    }

    private function verifyCartContent(AcceptanceTester $I, string $productName, string $price): void
    {
        $I->amOnPage('/dashboard');
        $I->see($productName, 'h3');
        $I->see($price);
    }

    private function removeFromCart(AcceptanceTester $I): void
    {
        $I->click('Usuń');
    }
}
