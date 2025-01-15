<?php


 function autoload_0faeb5daf931fffccff617b19f6e47da($class)
{
    $classes = array(
        'Clases\GateCustom2' => __DIR__ .'/GateCustom2.php',
        'Clases\ExchangeRatesDSCustom2' => __DIR__ .'/ExchangeRatesDSCustom2.php',
        'Clases\ExchangeRatesCustom2' => __DIR__ .'/ExchangeRatesCustom2.php',
        'Clases\ISOCodesCustom2' => __DIR__ .'/ISOCodesCustom2.php',
        'Clases\ExchangeRatesByRangeCustom2' => __DIR__ .'/ExchangeRatesByRangeCustom2.php',
        'Clases\ISOCodesDetailedCustom2' => __DIR__ .'/ISOCodesDetailedCustom2.php',
        'Clases\ISOCodesDetailedResponseCustom2' => __DIR__ .'/ISOCodesDetailedResponseCustom2.php',
        'Clases\ISOCodesDetailedResultCustom2' => __DIR__ .'/ISOCodesDetailedResultCustom2.php',
        'Clases\ISOCodesResponseCustom2' => __DIR__ .'/ISOCodesResponseCustom2.php',
        'Clases\ArrayOfStringCustom2' => __DIR__ .'/ArrayOfStringCustom2.php',
        'Clases\ExchangeRatesLatestByISOCustom2' => __DIR__ .'/ExchangeRatesLatestByISOCustom2.php',
        'Clases\ExchangeRatesLatestByISOResponseCustom2' => __DIR__ .'/ExchangeRatesLatestByISOResponseCustom2.php',
        'Clases\ArrayOfExchangeRateCustom2' => __DIR__ .'/ArrayOfExchangeRateCustom2.php',
        'Clases\ExchangeRateCustom2' => __DIR__ .'/ExchangeRateCustom2.php',
        'Clases\ExchangeRatesByDateByISOCustom2' => __DIR__ .'/ExchangeRatesByDateByISOCustom2.php',
        'Clases\ExchangeRatesByDateByISOResponseCustom2' => __DIR__ .'/ExchangeRatesByDateByISOResponseCustom2.php',
        'Clases\ExchangeRatesByDateCustom2' => __DIR__ .'/ExchangeRatesByDateCustom2.php',
        'Clases\ExchangeRatesByDateResponseCustom2' => __DIR__ .'/ExchangeRatesByDateResponseCustom2.php',
        'Clases\ExchangeRatesLatestCustom2' => __DIR__ .'/ExchangeRatesLatestCustom2.php',
        'Clases\ExchangeRatesLatestResponseCustom2' => __DIR__ .'/ExchangeRatesLatestResponseCustom2.php',
        'Clases\ExchangeRatesByDateRangeByISOCustom2' => __DIR__ .'/ExchangeRatesByDateRangeByISOCustom2.php',
        'Clases\ExchangeRatesByDateRangeByISOResponseCustom2' => __DIR__ .'/ExchangeRatesByDateRangeByISOResponseCustom2.php',
        'Clases\ExchangeRatesByDateRangeByISOResultCustom2' => __DIR__ .'/ExchangeRatesByDateRangeByISOResultCustom2.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_0faeb5daf931fffccff617b19f6e47da');

// Do nothing. The rest is just leftovers from the code generation.
{
}
