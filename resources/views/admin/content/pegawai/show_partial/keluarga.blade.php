<div class="text-center masariuman-titleTable">Data keluarga kandung</div>
@if ($ketersediaanKandung === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data keluarga kandung</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluarga_kandung as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->hubungan}}</td>
                        <td class="text-center">{{$item->pekerjaan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_kandung_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif


<div class="text-center masariuman-titleTable">Data keluarga kandung</div>
@if ($ketersediaanKandung === 0)
    <div class="text-center masariuman-titleTable">Tidak Ada Data keluarga kandung</div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="width40 text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Hubungan</th>
                    <th class="text-center">Pekerjaan</th>
                    <th class="width100px text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluarga_kandung as $no => $item)
                    <tr>
                        <th class="text-center">{{$no+1}}</th>
                        <td class="text-center">{{$item->nama}}</td>
                        <td class="text-center">{{$item->hubungan}}</td>
                        <td class="text-center">{{$item->pekerjaan}}</td>
                        <td class="text-center">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info" title="Lihat Data" data-toggle="modal" data-target="#keluarga_kandung_show_{{$item->id}}"><i class="fa fa-eye"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

