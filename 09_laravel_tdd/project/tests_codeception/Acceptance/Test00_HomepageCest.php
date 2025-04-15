<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test00_HomepageCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->amOnPage('/');

        $I->seeInTitle('Wszystko gra');

        $I->see('Już teraz sprawdź ofertę w naszym sklepie! Nasza szeroka gama produktów czeka na Ciebie.', 'p');
        $I->see("Poznaj naszą ofertę już teraz!", 'a[href="/products"]');

        $I->see('Nowości', 'h2');

        $I->see('Fortepian koncertowy');
        $I->see('Akordeon');
        $I->see('Gitara elektryczna');
        $I->see('Harmonijka ustna');

        $I->see('Konkurs', 'h2');
        $I->see('Weź udział w naszym konkursie i wygraj kupon do naszego sklepu na 1000zł!', 'p');
        $I->see('Weź udział', 'a[href="/konkurs"]');

        $I->see('Opinie naszych klientów', 'h2');

        $I->see('Anna N.');
        $I->see('Świetna obsługa, szybka dostawa i produkty najwyższej jakości');
        $I->see('Piotr W.');
        $I->see('Wasza specjalistka jest niesamowicie pomocna');

        $I->seeElement('.prev');
        $I->seeElement('.next');
    }
}
