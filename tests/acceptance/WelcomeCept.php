<?php 
//$I = new AcceptanceTester($scenario);
//$I->wantTo('ensure that front page works');
//$I->amOnPage('/');
//$I->see('Welcome');


$I = new FunctionalTester($scenario);
$I->amOnPage('/login');
$I->click('Login');
$I->fillField('email', 'email@email.com');
$I->fillField('password', 'xxxxxx');
$I->click('Login');
$I->see('Users');
