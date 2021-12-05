<?php

class HomeCest
{
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/');

        # Assert the presence of the welcome message
        $welcome= 'ZipFoods is your one-stop-shop for convenient online grocery shopping in the greater Boston area.';

        $I->see($welcome,'[test=welcome]');
        
    }
}