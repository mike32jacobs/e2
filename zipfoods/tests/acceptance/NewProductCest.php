<?php

class NewProductCest
{
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/products/new');

        # Assert the correct title is set on the page
        $I->seeInTitle('Add Product');

        # Assert the existence of certain text on the page
        $I->see('Add a new product','[test=instructions]');

        

    }

    public function AddProductTest(AcceptanceTester $I)
    {
        $I->amOnPage('/products/new');

        $name ='test-product';
        $I->fillField('[test=name-input]', $name);
        


        $sku = 'test-product-sku';
        $I->fillField('[test=sku-input]', $sku);

        $description='This is a generic product description. This is for testing purposes only. This test product is filled with flavor.';
        $I->fillField('[test=description-textarea]', $description);

        $price = 2;
        $I->fillField('[test=price-input]', $price);

        $weight = 3;
        $I->fillField('[test=weight-input]', $weight);

        $I->click('[test=new-product-submit-button]');

       
        // Confirm we are redirected to the product page for this new product.
        $I->amOnPage('/product?sku='.$sku);

    }

//     public function validateReviewFields(AcceptanceTester $I)
//     {
//         $I->amOnPage('/product?sku=driscolls-strawberries');

//         $name =null;
//         $I->fillField('[test=reviewer-name-input]', $name);

 

//         $I->click('[test=review-submit-button]');

//         $I->seeElement('[test=errors]');
//         $errorMessage = 'The value for name can not be blank';

//         // Confirm we see the error message on the page.
//         $I->see($errorMessage,'[test=errors]');

//  # Assert the existence of certain text on the page
//  $I->see('The value for available can not be blank','[test=new-product-errors]');


//     }
}