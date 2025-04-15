<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test01_OnasCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->amOnPage('/');
        $I->click('O nas');

        $I->see('O nas', 'h2');

        $I->see('Kim jesteśmy?', 'h2');
        $I->see('Witamy w sklepie Wszystko Gra!', 'p');
        $I->see('Naszym celem jest dostarczanie najlepszych produktów i usług dla miłośników muzyki.');
        $I->see('Nasza Historia', 'h2');
        $I->see('Nasza działalność powstała w 1950 roku z pasji do muzyki.');
        $I->seeElement('img', ['src' => 'stary.jpg']);

        $I->see('Poznaj nasz zespół', 'h2');
        $I->see('Julia Janczyk', 'h4');
        $I->see('Specjalistka ds. instrumentów smyczkowych');
        $I->seeElement('img', ['alt' => 'Członek zespołu']);

        $I->see('Julita Skorzycka', 'h4');
        $I->see('Specjalistka ds. instrumentów klawiszowych');
        $I->seeElement('img', ['src' => 'jelitka.jpg']);

        $I->see('Julia Filewicz', 'h4');
        $I->see('Specjalistka ds. instrumentów strunowych szarpanych');
        $I->seeElement('img', ['src' => 'filecik.jpg']);

        $I->see('Bartłomiej Piwowar', 'h4');
        $I->see('Specjalista ds. audio i zaopatrzenia');
        $I->seeElement('img', ['src' => 'bartus.jpg']);


        $I->see('I ty możesz zostać jednym z nas!', 'h2');
        $I->seeElement('img', ['src' => 'facebook.png']);
        $I->seeElement('img', ['src' => 'instagram.png']);
        $I->seeElement('img', ['src' => 'youtube.png']);

        /*$I->wantTo('see comments from DB displayed on page');

        $I->seeNumRecords(0, "comments");

        $randomNumber = rand();

        $title = "Title $randomNumber";
        $text = "Some text $randomNumber with **bold** text";

        $id = $I->haveInDatabase('comments', ['title' => $title, 'text' => $text]);

        $I->amOnPage('/comments');
        $I->see('Comments');
        $I->seeLink($title, "/comments/$id");

        $I->click($title);
        $I->seeCurrentUrlEquals("/comments/$id");

        $I->see($title);
        $textOnPage = str_replace("**bold**", "bold", $text);
        $I->see($textOnPage, 'p');
        $I->see("bold", 'p > strong');*/
    }
}
