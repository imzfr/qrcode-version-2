<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <h1>Create Your QR Code</h1>

    <div class="container">
        {!! QrCode::size(180)->generate('https://www.utm.my/') !!}
        {!! QrCode::format('svg')->size(180)->generate('https://www.utm.my/', storage_path('qrcode/utm.svg')) !!}
    </div>

    <textarea cols="50" rows="2" placeholder="Paste your url link here">https://www.utm.my/</textarea>

    <div class="buttons">
    <button type="submit">Generate</button> <button type="download">Download</button>
    </div>
</body>

</html>