<div>
        <form action="{{ route('dokter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file">Pilih Excel</label><br><br>
            <input type="file" id="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

            <button type="submit" value="Submit">Import</button>
        </form>
    </div>