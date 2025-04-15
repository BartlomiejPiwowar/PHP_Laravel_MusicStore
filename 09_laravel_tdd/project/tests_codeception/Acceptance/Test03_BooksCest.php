<?php

namespace TestsCodeception\Acceptance;

use TestsCodeception\Support\AcceptanceTester;

class Test03_BooksCest
{
    public function test(AcceptanceTester $I): void
    {
        $I->wantTo('add, edit and delete products on page');

        $I->click('Sklep');
        $I->amOnPage('/products');

        $I->amOnPage('/login');
        $I->fillField('email', 'john.doe@gmail.com');
        $I->fillField('password', 'secret');
        $I->click('Zaloguj się');
        $I->click('Sklep');
        $I->amOnPage('/products');

        $I->see('Sklep', 'h2');

        //$I->see('There are no books in the database.');

        $I->waitForNextPage(fn () => $I->click('Dodaj nowy'));

        $I->seeCurrentUrlEquals('/books/create');
        $I->fillField('Product Name', 'testowe');
        $I->fillField('Price', '200');
        $I->fillField('Description', 'fajny instrument');

        $I->waitForNextPage(fn () => $I->click('Utwórz'));
        $I->waitForNextPage(fn () => $I->click('testowe'));
        $I->waitForNextPage(fn () => $I->click('Edytuj'));

        $I->fillField('Product Name', 'poprawa');
        $I->fillField('Price', '10');
        $I->fillField('Description', 'super instrument');
        $I->waitForNextPage(fn () => $I->click('Zatwierdź'));

        $I->waitForNextPage(fn () => $I->click('poprawa'));
        $I->executeJS("window.confirm = () => true;");
        $I->waitForNextPage(fn () => $I->click('Usuń'));
        //$I->waitForNextPage(fn () => $I->click('OK'));

        /*$I->see('Creating new book', 'h2');

        $I->waitForNextPage(fn () => $I->click('Create'));

        $I->seeCurrentUrlEquals('/books/create');

        $I->see('The isbn field is required.');
        $I->see('The title field is required.');
        $I->see('The description field is required.');

        $bookIsbn = "1234512345123";
        $bookTitle = "SomeTitle";
        $bookDescriptionIntro = "SomeDescription with";
        $bookDescriptionFormatted = "formatting";
        $bookDescription = "$bookDescriptionIntro **$bookDescriptionFormatted**";

        $I->fillField('isbn', 'string');
        $I->fillField('title', $bookTitle);
        $I->fillField('description', $bookDescription);

        $I->waitForNextPage(fn () => $I->click('Create'));
        $I->seeCurrentUrlEquals('/books/create');

        $I->see('The isbn field must be 13 digits.');
        $I->dontSee('The name title is required.');
        $I->dontSee('The surname description is required.');

        $I->fillField('isbn', $bookIsbn);


        $I->dontSeeInDatabase('books', [
            'isbn' => $bookIsbn,
            'title' => $bookTitle,
            'description' => $bookDescription
        ]);

        $I->waitForNextPage(fn () => $I->click('Create'));

        $I->seeInDatabase('books', [
            'isbn' => $bookIsbn,
            'title' => $bookTitle,
            'description' => $bookDescription
        ]);

        /** @var string $id */
        /*$id = $I->grabFromDatabase('books', 'id', [
            'isbn' => $bookIsbn
        ]);

        $I->seeCurrentUrlEquals('/books/' . $id);

        $I->see("Viewing a book", 'h2');
        $I->see($bookIsbn);
        $I->see($bookTitle);
        $I->see($bookDescriptionIntro);
        $I->see($bookDescriptionFormatted, 'strong');

        $I->amOnPage('/books');

        $I->see("$bookIsbn", 'tr > td');
        $I->see("$bookTitle", 'tr > td');
        $I->dontSee("$bookDescription", 'tr > td');

        $I->waitForNextPage(fn () => $I->click('Details'));

        $I->seeCurrentUrlEquals('/books/' . $id);

        $I->waitForNextPage(fn () => $I->click('Edit'));

        $I->seeCurrentUrlEquals('/books/' . $id . '/edit');
        $I->see('Editing a book', 'h2');

        $I->seeInField('isbn', $bookIsbn);
        $I->seeInField('title', $bookTitle);
        $I->seeInField('description', $bookDescription);

        $I->fillField('description', "");

        $I->waitForNextPage(fn () => $I->click('Update'));

        $I->seeCurrentUrlEquals('/books/' . $id . '/edit');
        $I->see('The description field is required.', 'li');

        $bookNewDescription = 'NewBookDescription';

        $I->fillField('description', $bookNewDescription);
        $I->waitForNextPage(fn () => $I->click('Update'));

        $I->seeCurrentUrlEquals('/books/' . $id);

        $I->see($bookNewDescription);

        $I->dontSeeInDatabase('books', [
            'isbn' => $bookIsbn,
            'description' => $bookDescription
        ]);

        $I->seeInDatabase('books', [
            'isbn' => $bookIsbn,
            'description' => $bookNewDescription
        ]);

        $I->waitForNextPage(fn () => $I->click('Delete'));

        $I->seeCurrentUrlEquals('/books');

        $I->dontSeeInDatabase('books', [
            'isbn' => $bookIsbn,
            'description' => $bookNewDescription
        ]);*/
    }
}
