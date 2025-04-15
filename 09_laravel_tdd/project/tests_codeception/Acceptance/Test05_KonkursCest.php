<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test05_KonkursCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->wantTo('Zweryfikować stronę konkursu i przesłać zgłoszenie');

        $I->amOnPage('/login');
        $I->fillField('email', 'kaczor.donald@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');

        $I->amOnPage('/konkurs');
        $I->see('Konkurs', 'h2');
        $I->see('Weź udział w naszym niesamowitym konkursie!', 'h1');

        $I->click('Weź udział');
        $I->see("Weź udział w konkursie", 'h3');

        $I->click('regulaminie');
        $I->seeCurrentUrlEquals("/regulamin");
        $I->see("Regulamin Konkursu");
        $I->amOnPage('/konkurs');

        $I->fillField('name', 'Jan Testowy');
        $I->fillField('email', 'jan.testowy@example.com');
        $I->fillField('answer', 'Moja ciekawa odpowiedź');

        $I->click('Wyślij zgłoszenie');
    }
}
