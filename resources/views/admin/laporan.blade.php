<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arsip Data Warkah</title>
    <link rel="icon" href="{{ URL::asset('assets/img/logo-bpn.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col text-center">
            <br><h2>DATA WARKAH <br> KANTOR TANAH KABUPATEN BANYUASIN </h2><br>
            <img src="{{ URL::asset('assets/img/logobpn.png') }}" alt="logo" width="15%">
           <br><br>
            <table border="1" class="table table-bordered text-center table-responsive">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Nomor Buku Tanah</th>
                    <th scope="col">Kode Rak</th>
                  </tr>
                </thead>
                @php $i=1 @endphp
                @foreach($laporan as $a)
                <tbody>
                  <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $a->kecamatan }}</td>
                    <td>{{ $a->kelurahan }}</td>
                    <td>{{ $a->bukutanah }}</td>
                    <td>{{ $a->rak }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script type="text/javascript">
    window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>