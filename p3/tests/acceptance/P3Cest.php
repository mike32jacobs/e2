<?php

class P3Cest
{
    // tests
    public function initiateGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('[test=winning-number-input]',23);
        $I->fillField('[test=max-count-input]',3);
        $I->click('[test=submit-button]');

        $I->amOnPage('/game');

        $I->seeElement('[test=max-count]');
        $I->see('3','[test=max-count]');

        $I->seeElement('[test=winning-number]');
        $I->see('3','[test=winning-number]');

        // $errorMessage = 'The value for max-count must be less than or equal to 5';

        // // Confirm we see the error message on the page.
        // $I->see($errorMessage,'[test=errors]');


    }
    public function initiateGame2(AcceptanceTester $I)
    {
        //This function will attempt to initiate the game with bad input.
        $I->amOnPage('/');
        $I->fillField('[test=winning-number-input]',23);
        $I->click('[test=submit-button]');

        $I->amOnPage('/');

        // $I->seeElement('[test=errors]');
        $errorMessage = 'The value for max-count must be less than or equal to 5';

        // Confirm we see the error message on the page.
        $I->see($errorMessage,'[test=errors]');


    }
}