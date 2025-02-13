<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\Constraint\Count;

class ExchangeController extends Controller {

    function symbols() {
        return [
            ["code" => "AED", "name" => "United Arab Emirates dirham", "symbol" => ""],
            ["code" => "AFN", "name" => "Afghan afghani", "symbol" => ""],
            ["code" => "ALL", "name" => "Albanian lek", "symbol" => ""],
            ["code" => "AMD", "name" => "Armenian dram", "symbol" => ""],
            ["code" => "ANG", "name" => "Netherlands Antillean guilder", "symbol" => ""],
            ["code" => "AOA", "name" => "Angolan kwanza", "symbol" => ""],
            ["code" => "ARS", "name" => "Argentine peso", "symbol" => ""],
            ["code" => "AUD", "name" => "Australian dollar", "symbol" => ""],
            ["code" => "AWG", "name" => "Aruban florin", "symbol" => ""],
            ["code" => "AZN", "name" => "Azerbaijani manat", "symbol" => ""],
            ["code" => "BAM", "name" => "Bosnia and Herzegovina convertible mark", "symbol" => ""],
            ["code" => "BBD", "name" => "Barbados dollar", "symbol" => ""],
            ["code" => "BDT", "name" => "Bangladeshi taka", "symbol" => ""],
            ["code" => "BGN", "name" => "Bulgarian lev", "symbol" => ""],
            ["code" => "BHD", "name" => "Bahraini dinar", "symbol" => ""],
            ["code" => "BIF", "name" => "Burundian franc", "symbol" => ""],
            ["code" => "BMD", "name" => "Bermudian dollar", "symbol" => ""],
            ["code" => "BND", "name" => "Brunei dollar", "symbol" => ""],
            ["code" => "BOB", "name" => "Boliviano", "symbol" => ""],
            ["code" => "BRL", "name" => "Brazilian real", "symbol" => ""],
            ["code" => "BSD", "name" => "Bahamian dollar", "symbol" => ""],
            ["code" => "BTN", "name" => "Bhutanese ngultrum", "symbol" => ""],
            ["code" => "BWP", "name" => "Botswana pula", "symbol" => ""],
            ["code" => "BYN", "name" => "New Belarusian ruble", "symbol" => ""],
            ["code" => "BYR", "name" => "Belarusian ruble", "symbol" => ""],
            ["code" => "BZD", "name" => "Belize dollar", "symbol" => ""],
            ["code" => "CAD", "name" => "Canadian dollar", "symbol" => ""],
            ["code" => "CDF", "name" => "Congolese franc", "symbol" => ""],
            ["code" => "CHF", "name" => "Swiss franc", "symbol" => ""],
            ["code" => "CLF", "name" => "Unidad de Fomento", "symbol" => ""],
            ["code" => "CLP", "name" => "Chilean peso", "symbol" => ""],
            ["code" => "CNY", "name" => "Renminbi|Chinese yuan", "symbol" => ""],
            ["code" => "COP", "name" => "Colombian peso", "symbol" => ""],
            ["code" => "CRC", "name" => "Costa Rican colon", "symbol" => "₡"],
            ["code" => "CUC", "name" => "Cuban convertible peso", "symbol" => ""],
            ["code" => "CUP", "name" => "Cuban peso", "symbol" => ""],
            ["code" => "CVE", "name" => "Cape Verde escudo", "symbol" => ""],
            ["code" => "CZK", "name" => "Czech koruna", "symbol" => ""],
            ["code" => "DJF", "name" => "Djiboutian franc", "symbol" => ""],
            ["code" => "DKK", "name" => "Danish krone", "symbol" => ""],
            ["code" => "DOP", "name" => "Dominican peso", "symbol" => ""],
            ["code" => "DZD", "name" => "Algerian dinar", "symbol" => ""],
            ["code" => "EGP", "name" => "Egyptian pound", "symbol" => ""],
            ["code" => "ERN", "name" => "Eritrean nakfa", "symbol" => ""],
            ["code" => "ETB", "name" => "Ethiopian birr", "symbol" => ""],
            ["code" => "EUR", "name" => "Euro", "symbol" => "€"],
            ["code" => "FJD", "name" => "Fiji dollar", "symbol" => ""],
            ["code" => "FKP", "name" => "Falkland Islands pound", "symbol" => ""],
            ["code" => "GBP", "name" => "Pound sterling", "symbol" => "£"],
            ["code" => "GEL", "name" => "Georgian lari", "symbol" => ""],
            ["code" => "GHS", "name" => "Ghanaian cedi", "symbol" => ""],
            ["code" => "GIP", "name" => "Gibraltar pound", "symbol" => ""],
            ["code" => "GMD", "name" => "Gambian dalasi", "symbol" => ""],
            ["code" => "GNF", "name" => "Guinean franc", "symbol" => ""],
            ["code" => "GTQ", "name" => "Guatemalan quetzal", "symbol" => ""],
            ["code" => "GYD", "name" => "Guyanese dollar", "symbol" => ""],
            ["code" => "HKD", "name" => "Hong Kong dollar", "symbol" => ""],
            ["code" => "HNL", "name" => "Honduran lempira", "symbol" => ""],
            ["code" => "HRK", "name" => "Croatian kuna", "symbol" => ""],
            ["code" => "HTG", "name" => "Haitian gourde", "symbol" => ""],
            ["code" => "HUF", "name" => "Hungarian forint", "symbol" => ""],
            ["code" => "IDR", "name" => "Indonesian rupiah", "symbol" => ""],
            ["code" => "ILS", "name" => "Israeli new shekel", "symbol" => "₪"],
            ["code" => "INR", "name" => "Indian rupee", "symbol" => "₹"],
            ["code" => "IQD", "name" => "Iraqi dinar", "symbol" => ""],
            ["code" => "IRR", "name" => "Iranian rial", "symbol" => ""],
            ["code" => "ISK", "name" => "Icelandic króna", "symbol" => ""],
            ["code" => "JMD", "name" => "Jamaican dollar", "symbol" => ""],
            ["code" => "JOD", "name" => "Jordanian dinar", "symbol" => ""],
            ["code" => "JPY", "name" => "Japanese yen", "symbol" => "¥"],
            ["code" => "KES", "name" => "Kenyan shilling", "symbol" => ""],
            ["code" => "KGS", "name" => "Kyrgyzstani som", "symbol" => ""],
            ["code" => "KHR", "name" => "Cambodian riel", "symbol" => ""],
            ["code" => "KMF", "name" => "Comoro franc", "symbol" => ""],
            ["code" => "KPW", "name" => "North Korean won", "symbol" => ""],
            ["code" => "KRW", "name" => "South Korean won", "symbol" => "₩"],
            ["code" => "KWD", "name" => "Kuwaiti dinar", "symbol" => ""],
            ["code" => "KYD", "name" => "Cayman Islands dollar", "symbol" => ""],
            ["code" => "KZT", "name" => "Kazakhstani tenge", "symbol" => ""],
            ["code" => "LAK", "name" => "Lao kip", "symbol" => ""],
            ["code" => "LBP", "name" => "Lebanese pound", "symbol" => ""],
            ["code" => "LKR", "name" => "Sri Lankan rupee", "symbol" => ""],
            ["code" => "LRD", "name" => "Liberian dollar", "symbol" => ""],
            ["code" => "LSL", "name" => "Lesotho loti", "symbol" => ""],
            ["code" => "LYD", "name" => "Libyan dinar", "symbol" => ""],
            ["code" => "MAD", "name" => "Moroccan dirham", "symbol" => ""],
            ["code" => "MDL", "name" => "Moldovan leu", "symbol" => ""],
            ["code" => "MGA", "name" => "Malagasy ariary", "symbol" => ""],
            ["code" => "MKD", "name" => "Macedonian denar", "symbol" => ""],
            ["code" => "MMK", "name" => "Myanmar kyat", "symbol" => ""],
            ["code" => "MNT", "name" => "Mongolian tögrög", "symbol" => ""],
            ["code" => "MOP", "name" => "Macanese pataca", "symbol" => ""],
            ["code" => "MRO", "name" => "Mauritanian ouguiya", "symbol" => ""],
            ["code" => "MUR", "name" => "Mauritian rupee", "symbol" => ""],
            ["code" => "MVR", "name" => "Maldivian rufiyaa", "symbol" => ""],
            ["code" => "MWK", "name" => "Malawian kwacha", "symbol" => ""],
            ["code" => "MXN", "name" => "Mexican peso", "symbol" => ""],
            ["code" => "MXV", "name" => "Mexican Unidad de Inversion", "symbol" => ""],
            ["code" => "MYR", "name" => "Malaysian ringgit", "symbol" => ""],
            ["code" => "MZN", "name" => "Mozambican metical", "symbol" => ""],
            ["code" => "NAD", "name" => "Namibian dollar", "symbol" => ""],
            ["code" => "NGN", "name" => "Nigerian naira", "symbol" => "₦"],
            ["code" => "NIO", "name" => "Nicaraguan córdoba", "symbol" => ""],
            ["code" => "NOK", "name" => "Norwegian krone", "symbol" => ""],
            ["code" => "NPR", "name" => "Nepalese rupee", "symbol" => ""],
            ["code" => "NZD", "name" => "New Zealand dollar", "symbol" => ""],
            ["code" => "OMR", "name" => "Omani rial", "symbol" => ""],
            ["code" => "PAB", "name" => "Panamanian balboa", "symbol" => ""],
            ["code" => "PEN", "name" => "Peruvian Sol", "symbol" => ""],
            ["code" => "PGK", "name" => "Papua New Guinean kina", "symbol" => ""],
            ["code" => "PHP", "name" => "Philippine peso", "symbol" => "₱"],
            ["code" => "PKR", "name" => "Pakistani rupee", "symbol" => ""],
            ["code" => "PLN", "name" => "Polish złoty", "symbol" => "zł"],
            ["code" => "PYG", "name" => "Paraguayan guaraní", "symbol" => "₲"],
            ["code" => "QAR", "name" => "Qatari riyal", "symbol" => ""],
            ["code" => "RON", "name" => "Romanian leu", "symbol" => ""],
            ["code" => "RSD", "name" => "Serbian dinar", "symbol" => ""],
            ["code" => "RUB", "name" => "Russian ruble", "symbol" => ""],
            ["code" => "RWF", "name" => "Rwandan franc", "symbol" => ""],
            ["code" => "SAR", "name" => "Saudi riyal", "symbol" => ""],
            ["code" => "SBD", "name" => "Solomon Islands dollar", "symbol" => ""],
            ["code" => "SCR", "name" => "Seychelles rupee", "symbol" => ""],
            ["code" => "SDG", "name" => "Sudanese pound", "symbol" => ""],
            ["code" => "SEK", "name" => "Swedish krona", "symbol" => ""],
            ["code" => "SGD", "name" => "Singapore dollar", "symbol" => ""],
            ["code" => "SHP", "name" => "Saint Helena pound", "symbol" => ""],
            ["code" => "SLL", "name" => "Sierra Leonean leone", "symbol" => ""],
            ["code" => "SOS", "name" => "Somali shilling", "symbol" => ""],
            ["code" => "SRD", "name" => "Surinamese dollar", "symbol" => ""],
            ["code" => "SSP", "name" => "South Sudanese pound", "symbol" => ""],
            ["code" => "STD", "name" => "São Tomé and Príncipe dobra", "symbol" => ""],
            ["code" => "SVC", "name" => "Salvadoran colón", "symbol" => ""],
            ["code" => "SYP", "name" => "Syrian pound", "symbol" => ""],
            ["code" => "SZL", "name" => "Swazi lilangeni", "symbol" => ""],
            ["code" => "THB", "name" => "Thai baht", "symbol" => "฿"],
            ["code" => "TJS", "name" => "Tajikistani somoni", "symbol" => ""],
            ["code" => "TMT", "name" => "Turkmenistani manat", "symbol" => ""],
            ["code" => "TND", "name" => "Tunisian dinar", "symbol" => ""],
            ["code" => "TOP", "name" => "Tongan paʻanga", "symbol" => ""],
            ["code" => "TRY", "name" => "Turkish lira", "symbol" => ""],
            ["code" => "TTD", "name" => "Trinidad and Tobago dollar", "symbol" => ""],
            ["code" => "TWD", "name" => "New Taiwan dollar", "symbol" => ""],
            ["code" => "TZS", "name" => "Tanzanian shilling", "symbol" => ""],
            ["code" => "UAH", "name" => "Ukrainian hryvnia", "symbol" => "₴"],
            ["code" => "UGX", "name" => "Ugandan shilling", "symbol" => ""],
            ["code" => "USD", "name" => "United States dollar", "symbol" => "$"],
            ["code" => "UYI", "name" => "Uruguay Peso en Unidades Indexadas", "symbol" => ""],
            ["code" => "UYU", "name" => "Uruguayan peso", "symbol" => ""],
            ["code" => "UZS", "name" => "Uzbekistan som", "symbol" => ""],
            ["code" => "VEF", "name" => "Venezuelan bolívar", "symbol" => ""],
            ["code" => "VND", "name" => "Vietnamese đồng", "symbol" => "₫"],
            ["code" => "VUV", "name" => "Vanuatu vatu", "symbol" => ""],
            ["code" => "WST", "name" => "Samoan tala", "symbol" => ""],
            ["code" => "XAF", "name" => "Central African CFA franc", "symbol" => ""],
            ["code" => "XCD", "name" => "East Caribbean dollar", "symbol" => ""],
            ["code" => "XOF", "name" => "West African CFA franc", "symbol" => ""],
            ["code" => "XPF", "name" => "CFP franc", "symbol" => ""],
            ["code" => "XXX", "name" => "No currency", "symbol" => ""],
            ["code" => "YER", "name" => "Yemeni rial", "symbol" => ""],
            ["code" => "ZAR", "name" => "South African rand", "symbol" => ""],
            ["code" => "ZMW", "name" => "Zambian kwacha", "symbol" => ""],
            ["code" => "ZWL", "name" => "Zimbabwean dollar", "symbol" => ""]
        ];
    }
    function setSymbol($currency) {
        $symbols = $this->symbols();
        $search = array_search($currency, array_column($symbols, 'code'));
        $symbol = $symbols[$search]['symbol'];

        if (strlen($symbol)) {
            return $symbol;
        } else {
            return $currency;
        }
    }

    public function exchange($amount, $from, $to) {

        $validator = Validator::make(
            [
                'amount' => $amount,
                'from' => $from,
                'to' => $to,
            ],
            [
                'amount' => 'required|numeric',
                'from' => 'required|max:3',
                'to' => 'required|max:3',
            ]
        );

        if (!$validator->fails()) {
            $query = getCall([
                'amount' => $amount,
                'from' => $from,
                'to' => $to,
            ]);

            if (isset($query['success'])) {
                $response = [
                    'exchangeValue' => $query['result'],
                    'exchangeSimbol' => $this->setSymbol($query['query']['to']),
                ];
            } else {
                $response = [
                    'error' => true,
                    'messages' => $query
                ];
            }
        } else {
            $response = [
                'error' => true,
                'messages' => $validator->failed()
            ];
        }

        return $response;
    }
}

function getCall($params) {
    $apiKey = 'pTJIcG2pHGWpAfUYHshP6AXsqaUABnqn';

    $url = "https://api.apilayer.com/exchangerates_data/convert?to=" . $params['to'] . "&from=" . $params['from'] . "&amount=" . $params['amount'];

    return Http::withHeaders([
        'apiKey' => 'pTJIcG2pHGWpAfUYHshP6AXsqaUABnqn',
    ])->get($url);
}
