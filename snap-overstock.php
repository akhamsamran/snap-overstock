<?php
/**write a function to make a purchase in birtcoin cash and deduct from a user's bitcoin wallet
 * input:(float) price in bitcoin
 * input: (float) user's bitcoin wallet balance
 * input: (float) user's new bitcoin wallet balance
 * use case:
 * 0)user purchases an item and pays with bitcoin
 * 1)overstock only charges equivalent bitcoin cash
 * 2)user's wallet is deducted a lower amount in bitcoin
 **/
//const priceInBitcoin = float($priceInBitcoin);
//const priceInBitcoinCash = float($priceInBitcoin * 0.22)
/**
/**here's what I want to find:
 *
 *return($walletBalance - $btcPrice / $exchangeRate);
 *
 *below is how to turn it into a function:
**/
function buyBuyBuy(float $bitcoinPrice, float $initialWalletBalance, float $exchangeRate): float {
$actualBitcoinCashPrice = $bitcoinPrice / $exchangeRate;
$newWalletBalance = $initialWalletBalance - $actualBitcoinCashPrice;
return($newWalletBalance);
}
$exchangeRate = 6.69032212482337;
$actualBitcoinCashPrice = 2.29;
//$newWalletBalance = 118.43;
echo buyBuyBuy($actualBitoinCashPrice, $initialWalletBalance, $exchangeRate) . PHP+EOL;
// this is the anwer: $newWalletBalance = 118.43;
?>
