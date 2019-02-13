# PHP Solution For The [Gilded Rose Refectoring Kata](https://github.com/emilybache/GildedRose-Refactoring-Kata)

 1. [Download repo here](https://github.com/danherd/gilded-rose/archive/master.zip)
 2. Unzip and enter folder
 3. `composer install`
 5. `./vendor/bin/phpunit`

## Criteria Met:

 * Original 'Item' class is untouched, apart from being moved to it's own PHP file.
 * Original $items property is also untouched.
 * All tests pass - including tests for new 'Conjured' item.

## Changes Made:

 * Separated out all the logic into individual classes
 * Used inheritance to keep things DRY

## Potential Improvements:

 * Make Item an abstract class.
 * Create an ItemInterface interface and make Item implement this.
