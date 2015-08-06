<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('site/about');
$I->dontSee('garlic');
$I->see('Dracula');
$I->fillField('#monsterName', 'Frankenstein');
$I->click('#monsterSubmit');
$I->waitForElement('.monster-name');
$I->see('Frankenstein', '.monster-name');
