<x-app page-title="Data Mahasiswa">
    <x-com.card card-title="Data Mahasiswa">
        <x-com.table :headers="['NIM', 'Nama', 'Alamat']">
            @foreach ($list_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <x-com.table.action id="{{ $mahasiswa['nim'] }}" />
                    </td>
                    <td>{{ $mahasiswa['nim'] }}</td>
                    <td>{{ $mahasiswa['nama'] }}</td>
                    <td>{{ $mahasiswa['alamat'] }}</td>
                </tr>
            @endforeach
        </x-com.table>
    </x-com.card>
</x-app>
