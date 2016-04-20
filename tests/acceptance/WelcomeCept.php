<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that front page works');
$I->amOnPage('/');
$I->see('Welcome');


$J = new AcceptanceTester($scenario);
$J->wantTo('sign in');
$J->amOnPage('/register');
$J->fillField('name', 'pranay');
$J->fillField('email', 'drpranayaryal@gmail.com');
$J->fillField('password', '08051978');
$J->fillField('password_confirmation', '08051978');

$J->click('Register');
$J->see('pranay');
