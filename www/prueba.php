<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.ddev.site/api.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"w\"\r\n\r\nfirmarXML\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"r\"\r\n\r\nfirmar\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"inXml\"\r\n\r\nPD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KICAgIDxUaXF1ZXRlRWxlY3Ryb25pY28KICAgIHhtbG5zPSJodHRwczovL2Nkbi5jb21wcm9iYW50ZXNlbGVjdHJvbmljb3MuZ28uY3IveG1sLXNjaGVtYXMvdjQuMy90aXF1ZXRlRWxlY3Ryb25pY28iCiAgICB4bWxuczp4c2Q9Imh0dHA6Ly93d3cudzMub3JnLzIwMDEvWE1MU2NoZW1hIgogICAgeG1sbnM6eHNpPSJodHRwOi8vd3d3LnczLm9yZy8yMDAxL1hNTFNjaGVtYS1pbnN0YW5jZSI+CiAgICA8Q2xhdmU+NTA2MDUwMTE5MDAwMjAzOTAwMTM3MDAxMDAwMDEwNDAwMDA5OTIwMTkxMDAwMDAwMzE8L0NsYXZlPgogICAgPENvZGlnb0FjdGl2aWRhZD43NTEzMDE8L0NvZGlnb0FjdGl2aWRhZD4KICAgIDxOdW1lcm9Db25zZWN1dGl2bz4wMDEwMDAwMTA0MDAwMDk5MjAxOTwvTnVtZXJvQ29uc2VjdXRpdm8+CiAgICA8RmVjaGFFbWlzaW9uPjIwMTktMDktMTFUMTI6MzA6MDAtMDY6MDA8L0ZlY2hhRW1pc2lvbj4KICAgIDxFbWlzb3I+CiAgICAgICAgPE5vbWJyZT5BbGZvbnNvIENydXogTW9yYWxlczwvTm9tYnJlPgogICAgICAgIDxJZGVudGlmaWNhY2lvbj4KICAgICAgICAgICAgPFRpcG8+MDE8L1RpcG8+CiAgICAgICAgICAgIDxOdW1lcm8+MjAzOTAwMTM3PC9OdW1lcm8+CiAgICAgICAgPC9JZGVudGlmaWNhY2lvbj4KICAgICAgICA8Tm9tYnJlQ29tZXJjaWFsPkFsZm9uc28gQ3J1eiBNb3JhbGVzPC9Ob21icmVDb21lcmNpYWw+CiAgICAgICAgPFViaWNhY2lvbj4KICAgICAgICAgICAgPFByb3ZpbmNpYT4xPC9Qcm92aW5jaWE+CiAgICAgICAgICAgIDxDYW50b24+MDI8L0NhbnRvbj4KICAgICAgICAgICAgPERpc3RyaXRvPjAzPC9EaXN0cml0bz48QmFycmlvPjAxPC9CYXJyaW8+CiAgICAgICAgICAgICAgICA8T3RyYXNTZW5hcz5GcmVudGUgYSBsYSBlc2N1ZWxhPC9PdHJhc1NlbmFzPgogICAgICAgICAgICA8L1ViaWNhY2lvbj4KICAgICAgICA8VGVsZWZvbm8+CiAgICAgICAgICAgIDxDb2RpZ29QYWlzPjUwNjwvQ29kaWdvUGFpcz4KICAgICAgICAgICAgPE51bVRlbGVmb25vPjY0MjA2MjA1PC9OdW1UZWxlZm9ubz4KICAgICAgICA8L1RlbGVmb25vPgogICAgICAgIDxGYXg+CiAgICAgICAgICAgIDxDb2RpZ29QYWlzPjUwNjwvQ29kaWdvUGFpcz4KICAgICAgICAgICAgPE51bVRlbGVmb25vPjAwMDAwMDAwPC9OdW1UZWxlZm9ubz4KICAgICAgICA8L0ZheD48Q29ycmVvRWxlY3Ryb25pY28+YWxmb25zb2NydXptb3JhbGVzQGdtYWlsLmNvbTwvQ29ycmVvRWxlY3Ryb25pY28+CiAgICA8L0VtaXNvcj4KICAgIDxDb25kaWNpb25WZW50YT4wMTwvQ29uZGljaW9uVmVudGE+CiAgICA8UGxhem9DcmVkaXRvPjA8L1BsYXpvQ3JlZGl0bz4KICAgIDxNZWRpb1BhZ28+MDE8L01lZGlvUGFnbz4KICAgIDxEZXRhbGxlU2VydmljaW8+CiAgICAgICAgPExpbmVhRGV0YWxsZT4KICAgICAgICAgICAgPE51bWVyb0xpbmVhPjE8L051bWVyb0xpbmVhPgogICAgICAgICAgICA8Q29kaWdvPjwvQ29kaWdvPgogICAgICAgICAgICA8Q2FudGlkYWQ+MTwvQ2FudGlkYWQ+CiAgICAgICAgICAgIDxVbmlkYWRNZWRpZGE+U3A8L1VuaWRhZE1lZGlkYT4KICAgICAgICAgICAgPFVuaWRhZE1lZGlkYUNvbWVyY2lhbD48L1VuaWRhZE1lZGlkYUNvbWVyY2lhbD4KICAgICAgICAgICAgPERldGFsbGU+SW1wcmVzb3JhPC9EZXRhbGxlPgogICAgICAgICAgICA8UHJlY2lvVW5pdGFyaW8+MTAwMDA8L1ByZWNpb1VuaXRhcmlvPiAgIAogICAgICAgICAgICA8TW9udG9Ub3RhbD4xMDAwMDwvTW9udG9Ub3RhbD48U3ViVG90YWw+MTAwMDA8L1N1YlRvdGFsPjxNb250b1RvdGFsTGluZWE+MTAwMDA8L01vbnRvVG90YWxMaW5lYT48L0xpbmVhRGV0YWxsZT48L0RldGFsbGVTZXJ2aWNpbz4KICAgIDxSZXN1bWVuRmFjdHVyYT4KICAgICAgICA8VG90YWxTZXJ2R3JhdmFkb3M+MDwvVG90YWxTZXJ2R3JhdmFkb3M+CiAgICAgICAgPFRvdGFsU2VydkV4ZW50b3M+MTAwMDA8L1RvdGFsU2VydkV4ZW50b3M+CiAgICAgICAgPFRvdGFsU2VydkV4b25lcmFkbz4wPC9Ub3RhbFNlcnZFeG9uZXJhZG8+CiAgICAgICAgPFRvdGFsTWVyY2FuY2lhc0dyYXZhZGFzPjA8L1RvdGFsTWVyY2FuY2lhc0dyYXZhZGFzPgogICAgICAgIDxUb3RhbE1lcmNhbmNpYXNFeGVudGFzPjA8L1RvdGFsTWVyY2FuY2lhc0V4ZW50YXM+CiAgICAgICAgPFRvdGFsTWVyY0V4b25lcmFkYT4wPC9Ub3RhbE1lcmNFeG9uZXJhZGE+CiAgICAgICAgPFRvdGFsR3JhdmFkbz4wPC9Ub3RhbEdyYXZhZG8+CiAgICAgICAgPFRvdGFsRXhlbnRvPjEwMDAwPC9Ub3RhbEV4ZW50bz4KICAgICAgICA8VG90YWxFeG9uZXJhZG8+MDwvVG90YWxFeG9uZXJhZG8+CiAgICAgICAgPFRvdGFsVmVudGE+MTAwMDA8L1RvdGFsVmVudGE+CiAgICAgICAgPFRvdGFsRGVzY3VlbnRvcz4wPC9Ub3RhbERlc2N1ZW50b3M+CiAgICAgICAgPFRvdGFsVmVudGFOZXRhPjEwMDAwPC9Ub3RhbFZlbnRhTmV0YT4KICAgICAgICA8VG90YWxJbXB1ZXN0bz4wPC9Ub3RhbEltcHVlc3RvPgogICAgICAgIDxUb3RhbElWQURldnVlbHRvPjA8L1RvdGFsSVZBRGV2dWVsdG8+PFRvdGFsT3Ryb3NDYXJnb3M+MDwvVG90YWxPdHJvc0Nhcmdvcz4KICAgICAgICA8VG90YWxDb21wcm9iYW50ZT4xMDAwMDwvVG90YWxDb21wcm9iYW50ZT4KICAgIDxSZXN1bWVuRmFjdHVyYT4KICAgIDxJbmZvcm1hY2lvblJlZmVyZW5jaWE+CiAgICAgICAgPFRpcG9Eb2M+MDwvVGlwb0RvYz4KICAgICAgICA8TnVtZXJvPjA8L051bWVybz4KICAgICAgICA8RmVjaGFFbWlzaW9uPjA8L0ZlY2hhRW1pc2lvbj4KICAgICAgICA8Q29kaWdvPjA8L0NvZGlnbz4KICAgICAgICA8UmF6b24+MDwvUmF6b24+CiAgICA8L0luZm9ybWFjaW9uUmVmZXJlbmNpYT4KICAgICAgICAgICAgICAgIDxPdHJvcz4KICAgICAgICAgICAgPE90cm9UZXh0bz5NdWNoYXMgZ3JhY2lhczwvT3Ryb1RleHRvPgogICAgICAgICAgICA8L090cm9zPgogICAgPC9UaXF1ZXRlRWxlY3Ryb25pY28+\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"p12Url\"\r\n\r\n1f8d93299048212b7425b256742a3710\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"pinP12\"\r\n\r\n9876\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 4641",
    "Content-Type: multipart/form-data; boundary=--------------------------854583653237232703797651",
    "Host: api.ddev.site",
    "Postman-Token: 9dd443a8-0ce3-4328-b1f4-0930244664e6,ea5f38fb-db96-4ef3-a77b-2420778fee06",
    "User-Agent: PostmanRuntime/7.17.1",
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}