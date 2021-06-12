<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Data Dokter</title>
<style>
table{
    border-collapse: collapse;
    border-spacing: 0;
    width: 50%;
    border: 1px solid #ddd;
}
thead {
    background-color : #FF1493;
}
th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #FFDAB9}
.tambah{
    padding: 8px 16px;
    text-decoration: none;
}
</style>
<head>

<body>
    <div style="overflow-x: auto">
    <button>
    <a href="{{route('dokter.create')}}" class="button button">Import Data Dokter</a>
    </button>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nama</th>
                <th>Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($dokter as $sw)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $sw->nama }}</td>
                <td>{{ $sw->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <img src="https://img.pikbest.com/png-images/qiantu/cartoon-doctor-couple-original-elements_2532862.png!c1024wm0/compress/true/progressive/true/format/webp/fw/1024" width=20%>
    </div>
</body>