@extends('apps')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                Data Mahasiswa
            </div>
        </div>
        <div class="card body">
            <table class="table table-bordered">
                <thead class="bg-info">
                    <th class="text-white">No</th>
                    <th class="text-white">Aksi</th>
                    <th class="text-white">Nama</th>
                    <th class="text-white">NIM</th>
                    <th class="text-white">Alamat</th>
                </thead>
                <tbody>
                    @foreach ($list_mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('mahasiswa') }}/{{ $id }}" class="btn btn-info"><i
                                            class="fa fa-info"></i></a>
                                    <a href="{{ url('mahasiswa') }}/{{ $id }}/edit" class="btn btn-warning"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ url('mahasiswa') }}/{{ $id }}/delete" class="btn btn-danger"><i
                                            class="fa fa-remove"></i></a>
                                </div>
                            </td>
                            <td>{{ $mahasiswa['nim'] }}</td>
                            <td>{{ $mahasiswa['nama'] }}</td>
                            <td>{{ $mahasiswa['alamat'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
