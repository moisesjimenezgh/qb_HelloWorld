<?php

require_once(__DIR__ . '/vendor/autoload.php');
use QuickBooksOnline\API\DataService\DataService;

session_start();

function makeAPICall()
{

    // Create SDK instance
    $config = include('config.php');
    $dataService = DataService::Configure(array(
        'auth_mode' => 'oauth2',
        'ClientID' => $config['client_id'],
        'ClientSecret' =>  $config['client_secret'],
        'RedirectURI' => $config['oauth_redirect_uri'],
        'scope' => $config['oauth_scope'],
        'baseUrl' => "production"
    ));

    /*
     * Retrieve the accessToken value from session variable
     */
    $accessToken = $_SESSION['sessionAccessToken'];

    /*
     * Update the OAuth2Token of the dataService object
     */
    $dataService->updateOAuth2Token($accessToken);
    $companyInfo = $dataService->getCompanyInfo();
    //$customers = $dataService->getCustomers();
    $query = "SELECT * FROM Customer";
    $customers = $dataService->Query($query);

    $customer_return = array();
    if ($customers && count($customers) > 0) {
        foreach ($customers as $customer) {
            // Access customer properties
            $customerId = $customer->Id;
            $customerName = $customer->DisplayName;
            //$customer_return[$customerId] = print_r($customerId,true);
            // Do something with customer data
            echo '<pre>';
            print_r($customers);
            echo '</pre>';
        }
        return $customers;
    }
    else{

    }
    $address = "QBO API call Successful!! Response Company name: " . $companyInfo->CompanyName . " Company Address: " . $companyInfo->CompanyAddr->Line1 . " " . $companyInfo->CompanyAddr->City . " " . $companyInfo->CompanyAddr->PostalCode;
    print_r($address);
    return $companyInfo;
}

$result = makeAPICall();

?>
