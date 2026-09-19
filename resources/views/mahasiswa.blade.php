<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex items-center justify-center p-4">

    <!-- Card Profil Simpel & Modern -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm max-w-md w-full p-6 sm:p-8">
        
        <!-- Header Profil -->
        <div class="flex flex-col sm:flex-row items-center gap-5 pb-6 border-b border-gray-100">
            <!-- Foto Profil -->
            <img 
                src="{{ asset('nice-nature.jpg') }}" 
                alt="Foto Profil {{ $nama }}" 
                class="w-24 h-24 rounded-full object-cover border border-gray-200 shadow-sm shrink-0"
            >

            <!-- Info Utama -->
            <div class="text-center sm:text-left">
                <span class="inline-block px-2.5 py-0.5 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full border border-emerald-200 mb-2">
                    Mahasiswa Aktif
                </span>
                <h1 class="text-xl font-bold text-gray-900 leading-snug">
                    {{ $nama }}
                </h1>
                <p class="text-sm text-gray-500">
                    Sistem Informasi
                </p>
            </div>
        </div>

        <!-- Detail Informasi Mahasiswa -->
        <div class="pt-5 space-y-3.5 text-sm">
            <div class="flex justify-between items-center py-1">
                <span class="text-gray-500">NIM</span>
                <span class="font-semibold text-gray-800 font-mono">{{ $nim }}</span>
            </div>
            
            <div class="flex justify-between items-center py-1">
                <span class="text-gray-500">Kelas</span>
                <span class="font-semibold text-gray-800">{{ $kelas }}</span>
            </div>

            <div class="flex justify-between items-center py-1">
                <span class="text-gray-500">Semester</span>
                <span class="font-semibold text-gray-800">Semester {{ $semester }}</span>
            </div>
        </div>

    </div>

</body>
</html>