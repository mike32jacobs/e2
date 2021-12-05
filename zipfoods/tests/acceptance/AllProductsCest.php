<?php

class AllProductsCest
{
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/products');

        # Assert the correct title is set on the page
        $I->seeInTitle('All Products');

        # Assert the existence of certain text on the page
        $I->see('All Products','[test=all-products]');

        $productCount = count($I->grabMultiple('.product-link'));
        $I->assertGreaterThanOrEqual(10, $productCount);


    }
}