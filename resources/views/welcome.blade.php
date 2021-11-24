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
</head>

<body>
    <div id="feedback-form">
        <h2 class="header"><b>QR Check-In For Shop</b></h2>
        <div>


            <form class="form-inline" action="{{ route('store') }}" method="POST">
                @csrf
                <input type="text" class="form-control" name="ownerName" placeholder="Owner name">
                <input type="text" class="form-control" name="businessName" placeholder="Business name">
                <input type="text" class="form-control" name="address" placeholder="Business Address">

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

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>