<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - Bootstrap</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light d-flex align-items-center min-vh-100 py-4">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5">
                
                <!-- Bootstrap Card -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    
                    <!-- Card Body / Header Profil -->
                    <div class="card-body p-4 text-center">
                        
                        <!-- Foto Profil (Nice Nature) -->
                        <div class="mb-3">
                            <img 
                                src="{{ asset('nice-nature.jpg') }}" 
                                alt="Foto Profil {{ $nama }}" 
                                class="rounded-circle img-thumbnail shadow-sm object-fit-cover"
                                style="width: 110px; height: 110px;"
                            >
                        </div>

                        <!-- Status Badge -->
                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 mb-2">
                            <i class="bi bi-circle-fill me-1 small"></i> Mahasiswa Aktif
                        </span>

                        <!-- Nama Mahasiswa -->
                        <h4 class="card-title fw-bold text-dark mb-1">
                            {{ $nama }}
                        </h4>
                        
                        <!-- Jurusan -->
                        <p class="text-secondary small mb-0">
                            Program Studi Sistem Informasi
                        </p>
                    </div>

                    <!-- List Informasi Mahasiswa -->
                    <ul class="list-group list-group-flush border-top">
                        <!-- NIM -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 bg-transparent">
                            <span class="text-secondary small">
                                <i class="bi bi-person-vcard text-primary me-2 fs-6"></i>NIM
                            </span>
                            <span class="fw-semibold text-dark font-monospace">{{ $nim }}</span>
                        </li>

                        <!-- Kelas -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 bg-transparent">
                            <span class="text-secondary small">
                                <i class="bi bi-building text-primary me-2 fs-6"></i>Kelas
                            </span>
                            <span class="fw-semibold text-dark">{{ $kelas }}</span>
                        </li>

                        <!-- Semester -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 bg-transparent">
                            <span class="text-secondary small">
                                <i class="bi bi-mortarboard text-primary me-2 fs-6"></i>Semester
                            </span>
                            <span class="fw-semibold text-dark">Semester {{ $semester }}</span>
                        </li>

                        <!-- Mata Kuliah -->
                        <li class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 bg-transparent">
                            <span class="text-secondary small">
                                <i class="bi bi-journal-code text-primary me-2 fs-6"></i>Mata Kuliah
                            </span>
                            <span class="fw-semibold text-dark">{{ $mata_kuliah ?? 'Rekayasa Web' }}</span>
                        </li>
                    </ul>

                    <!-- Card Footer (Simpel & Rapi) -->
                    <div class="card-footer bg-light border-0 py-3 text-center">
                        <small class="text-muted">
                            <i class="bi bi-shield-check text-success me-1"></i> Data Terverifikasi Akademik
                        </small>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>