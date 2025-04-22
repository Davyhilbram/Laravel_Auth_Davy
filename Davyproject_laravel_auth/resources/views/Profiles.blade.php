<!DOCTYPE html>
<html>
<head>
    <title>Profile Mahasiswa</title>
</head>
<body>
    <div class="container mt-4"> 
        <h1 class="mb-4">Profile Mahasiswa Telkom University <a href="{{ asset('download.png') }}" download>
            <img src="{{ asset('download.png') }}"width="150">
        </a>
        </h1>
    
        @if($profiles->count() > 0)
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Organisasi</th>
                        <th>Kampus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $index => $profile)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $profile->Nama }}</td>
                            <td>{{ $profile->NIM }}</td>
                            <td>{{ $profile->Jurusan }}</td>
                            <td>{{ $profile->Organisasi }}</td>
                            <td>{{ $profile->Kampus }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-warning">Tidak ada data profile.</div>
        @endif
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>
</html>
