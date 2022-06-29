<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Certificate";
        $URL = 'https://127.0.0.1/api/Server/Status';
        $FILE = 'certificate.pem';
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://127.0.0.1/api/Server/Status');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $resp = curl_exec($curl);
        curl_close($curl);
        var_dump($resp);

    ?>
</body>
</html>