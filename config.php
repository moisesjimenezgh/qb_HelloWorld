<?php
/*

  Quickbooks produciton API

Client ID: ABqM3JVyXLNcqOOWJVxwZkQC2UhreBmpiV4rw12rjxR0X5rDxI
Client Secrete: dcYlA3fXsNSlvCJgQhJOrB83VabTuLz4cLhL6IBU

Autorizaiton code: AB11684367884YsMXiiTPD4wCgpeL5ujlBn5RerosKUKms6Vds
Realm ID: 9130356631056256
*/

return array(
    'authorizationRequestUrl' => 'https://appcenter.intuit.com/connect/oauth2',
    'tokenEndPointUrl' => 'https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer',
    'client_id' => 'ABqM3JVyXLNcqOOWJVxwZkQC2UhreBmpiV4rw12rjxR0X5rDxI',
    'client_secret' => 'dcYlA3fXsNSlvCJgQhJOrB83VabTuLz4cLhL6IBU',
    'oauth_scope' => 'com.intuit.quickbooks.accounting openid profile email phone address',
    'oauth_redirect_uri' => 'https://sugarstage.solimarsystems.com/solimar/qb/qb_HelloWorld/callback.php',
)
?>
