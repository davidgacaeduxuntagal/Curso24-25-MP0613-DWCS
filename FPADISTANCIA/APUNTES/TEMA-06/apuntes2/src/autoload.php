<?php


 function autoload_a16902a6d49985cbeb5f51db2df84aeb($class)
{
    $classes = array(
        'Clases\ExchangeRates' => __DIR__ .'/ExchangeRates.php',
        'Clases\getListOfCurrencies' => __DIR__ .'/getListOfCurrencies.php',
        'Clases\getListOfCurrenciesResponse' => __DIR__ .'/getListOfCurrenciesResponse.php',
        'Clases\getListOfCurrenciesResult' => __DIR__ .'/getListOfCurrenciesResult.php',
        'Clases\getCurrentExchangeRate' => __DIR__ .'/getCurrentExchangeRate.php',
        'Clases\getCurrentExchangeRateResponse' => __DIR__ .'/getCurrentExchangeRateResponse.php',
        'Clases\getExchangeRate' => __DIR__ .'/getExchangeRate.php',
        'Clases\getExchangeRateResponse' => __DIR__ .'/getExchangeRateResponse.php',
        'Clases\getExchangeRatesByDate_XmlString' => __DIR__ .'/getExchangeRatesByDate_XmlString.php',
        'Clases\getExchangeRatesByDate_XmlStringResponse' => __DIR__ .'/getExchangeRatesByDate_XmlStringResponse.php',
        'Clases\getExchangeRatesByCurrency_XmlString' => __DIR__ .'/getExchangeRatesByCurrency_XmlString.php',
        'Clases\getExchangeRatesByCurrency_XmlStringResponse' => __DIR__ .'/getExchangeRatesByCurrency_XmlStringResponse.php',
        'Clases\getExchangeRatesByDate' => __DIR__ .'/getExchangeRatesByDate.php',
        'Clases\getExchangeRatesByDateResponse' => __DIR__ .'/getExchangeRatesByDateResponse.php',
        'Clases\getExchangeRatesByDateResult' => __DIR__ .'/getExchangeRatesByDateResult.php',
        'Clases\getExchangeRatesXmlSchema' => __DIR__ .'/getExchangeRatesXmlSchema.php',
        'Clases\getExchangeRatesXmlSchemaResponse' => __DIR__ .'/getExchangeRatesXmlSchemaResponse.php',
        'Clases\getExchangeRatesByCurrency' => __DIR__ .'/getExchangeRatesByCurrency.php',
        'Clases\getExchangeRatesByCurrencyResponse' => __DIR__ .'/getExchangeRatesByCurrencyResponse.php',
        'Clases\getExchangeRatesByCurrencyResult' => __DIR__ .'/getExchangeRatesByCurrencyResult.php',
        'Clases\getExchangeAvgRate' => __DIR__ .'/getExchangeAvgRate.php',
        'Clases\getExchangeAvgRateResponse' => __DIR__ .'/getExchangeAvgRateResponse.php',
        'Clases\getExchangeAvgRateResult' => __DIR__ .'/getExchangeAvgRateResult.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a16902a6d49985cbeb5f51db2df84aeb');

// Do nothing. The rest is just leftovers from the code generation.
{
}
