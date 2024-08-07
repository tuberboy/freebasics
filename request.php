<?php
$baseUrl = 'https://api.internet.org/method/';
$queryParams = [
    'override_carrier_id' => 'AS24389',
    'force_eligibility' => '1',
    'force_discover_eligibility' => '0',
    'dogfood_password' => 'secret',
    'use_staging' => '1',
    'dogfood_subno_id' => '67890',
    'dogfood_subno_id_type' => 'type',
    'tester_phone_number' => '01723436244',
    'bsid' => '622809159',
    'accepted_tos' => 'true',
    'access_token' => '|',
    'locale' => 'en_US'
];

$queryString = http_build_query($queryParams);
$url = $baseUrl . '?' . $queryString;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if ($response === false) {
    echo 'cURL Error: ' . curl_error($ch);
}
curl_close($ch);

echo $response;
?>

<?php
function generateUrl($serverTier) {
    $serverTier = trim($serverTier);
    if (!empty($serverTier)) {
        $serverTier .= ".";
    }
    return sprintf("https://0.%sfreebasics.com/dogfood?app=true", $serverTier);
}

function performRequest($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    } else {
        echo 'Response: ' . $response;
    }
    curl_close($ch);
}

$serverTier = 'bdmusic24.mobi';
$url = generateUrl($serverTier);
performRequest($url);
?>
