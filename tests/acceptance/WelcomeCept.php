<?php 
#$I = new AcceptanceTester($scenario);
#$I->wantTo('perform actions and see result');
  $I = new AcceptanceTester($scenario);
  $I->wantTo('ensure that frontpage works');
  $I->amOnPage('/');
  $I->see('WelcomeCept.php');
  $I->click('Create Post');
  $I->fillField('text');
?>