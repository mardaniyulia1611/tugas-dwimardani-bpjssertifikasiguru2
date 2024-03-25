<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export PDF</title>
</head>
<body>
    <h2>Pengajuan Detail</h2>
    <hr>

    <table class="table table-striped" style="width: 100%" border="2">

        <hr>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Pengajuan</th>
                <th>Tanggal Pengajuan</th>
                <th>Keterangan</th>
                <th>Nominal</th>
            </tr>
        </thead>
           @foreach($data->detail as $detail)
            <tr>
                <th>{{ $data->id }}</th>
                <th>{{ $data->nomor_pengajuan }}</th>
                <th>{{ $data->tanggal_pengajuan }}</th>
                <th>{{ $data->keterangan}}</th>
                <td>{{ $detail->nominal }}</td>

            </tr>
            @endforeach
            </table>

</body>
</html>
