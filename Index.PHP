<?php

$url = 'eyJhbGciOiJIUzI1NiIsImtpZCI6IkNhbnZhc1MyU0hNQUNQcm9kIiwidHlwIjoiSldUIn0.eyJhdWQiOiJjYW52YXMtY2FudmFzYXBpIiwiaXNzIjoiY2FudmFzLXMyc3Rva2VuIiwibmJmIjoxNjgwMDAzMjgxLCJzdWIiOiJiNTQyOTBiYS00NTIyLTQwYTAtYTZhNi0wYmMyYjg4M2RkOTV-UFJPRFVDVElPTn4zYTdjYjBjZi0zMTE0LTRlYzEtYmQyZi04ODIxNDM5ODgxNmYifQ.lcihR7whB9jxadJFQJ9C9LHic2va9GizH_eKbJ-NY0c';
$headers = [
  'Authorization: Bearer meowmeowmeow',
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if ($response === false) {
  echo 'Erreur Curl : ' . curl_error($ch);
} else {
  echo $response;
}

curl_close($ch);

?>

