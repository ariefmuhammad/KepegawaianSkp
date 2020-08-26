<table id="tabeldata" width="100%" class="table table-striped table-lightfont">
    <thead>
        <tr>
            <th>NO</th>
            <th>Ruangan</th>
            <th>Aksi</th>
        </tr>
    <tbody>
        @foreach ( $ruangan as $no => $data )
            <tr>
                <td id="{{ $data->id }}">{{ $no+1 }}</td>
                    <td>{{ $data->ruangan }}</td>
                    <td>
                        <button class="mr-2 mb-2 btn btn-warning editButton" type="button" data="{{ $data }}">Ubah</button>
                        |
                        <button class="mr-2 mb-2 btn btn-danger deleteButton" type="button" data="{{ $data }}">Hapus</button>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>
