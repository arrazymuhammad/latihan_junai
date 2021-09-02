<table class="table table-bordered">
    <thead class="bg-info">
        <th class="text-white" width="80px">No</th>
        <th class="text-white" width="150px">Aksi</th>
        @foreach ($headers as $header)
            <th class="text-white">{{ $header }}</th>
        @endforeach
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
