@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mt-5">
                <h1 class="text-center">Kartu HASIL STUDI (KHS)</h2>
            </div>
        </div>
    </div>

    <table class="mt-5 mr-auto" border="0" align="left">
        <thead>
            <tr>
                <td class="text-left">
                    <p class="text-dark font-weight-bold">Nama:</p>
                </td>
                <td>
                    <p class="text-dark">{{ $mahasiswa->nama }}</p>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <p class="text-dark font-weight-bold">NIM:</p>
                </td>
                <td>
                    <p class="text-dark">{{ $mahasiswa->nim }}</p>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <p class="text-dark font-weight-bold">Kelas:</p>
                </td>
                <td>
                    <p class="text-dark">{{ $mahasiswa->kelas->nama_kelas }}</p>
                </td>
            </tr>
        </thead>
    </table>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $list)
                <tr>
                    <td>{{ $list->matakuliah->nama_matkul }}</td>
                    <td>{{ $list->matakuliah->sks }}</td>
                    <td>{{ $list->matakuliah->semester }}</td>
                    <td>{{ $list->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
