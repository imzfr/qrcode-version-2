<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR Check-In For Shop</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="/css/mystyle.css" rel="stylesheet">

    <style>
        #preview {
            width: 300px;
            height: 300px;
            margin: 0px;
            align-items: center;
        }
    </style>
</head>

<body>
    <div id="feedback-form">
        <h2 class="header"><b>QR Check-In For Shop</b></h2>

        <div>

            <form class="form-inline" action="{{ route('store') }}" method="POST">
                @csrf
                <input type="text" class="form-control" name="ownerName" placeholder="Owner name">
                <input type="text" class="form-control" name="businessName" placeholder="Business name">
                <input type="text" class="form-control" name="address" placeholder="Business address">

                <button type="submit">Register</button>

            </form>

            <div class="display">
                <!-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Owner</th>
                        <th scope="col">Business</th>
                        <th scope="col">Address</th>
                        <th scope="col">QR code</th>
                    </tr>
                </thead>
                <tbody> -->

                <!--@foreach ($data as $data)
                <tr>
                    <td>{{ $data->ownerName }}</td>
                    <td>{{ $data->businessName }}</td>
                    <td>{{ $data->address }}</td>
                    <td>
                        <a href="{{ route('generate',$data->id) }}" class="btn btn-primary">Generate</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>-->

                <a href="{{ route('generate',$data->id) }}" download>Download QR Code</a>
            </div>

            <div class="camera">
                <video id="preview"></video>
                <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                <script type="text/javascript">
                    let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview')
                    });
                    scanner.addListener('scan', function(content) {
                        window.alert(content);
                    });
                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            console.error('No cameras found.');
                        }
                    }).catch(function(e) {
                        console.error(e);
                    });
                </script>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>