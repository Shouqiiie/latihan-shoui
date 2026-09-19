<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa - {{ $nama }}</title>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>

    <style>
        @media print {
            body { background: white !important; padding: 0 !important; color: black !important; }
            .no-print { display: none !important; }
            .print-card { 
                box-shadow: none !important; 
                border: 1px solid #cbd5e1 !important; 
                background: white !important;
                color: black !important;
            }
        }
    </style>
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased selection:bg-indigo-500 selection:text-white transition-colors duration-300 font-sans flex items-center justify-center p-4 sm:p-6 lg:p-10 relative overflow-x-hidden">

    <!-- Ambient Gradient Blobs (Background Aesthetic) -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden no-print">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-600/20 dark:bg-indigo-600/25 rounded-full blur-[128px] animate-pulse-slow"></div>
        <div class="absolute top-1/2 -right-40 w-96 h-96 bg-emerald-500/15 dark:bg-emerald-500/20 rounded-full blur-[128px] animate-pulse-slow" style="animation-delay: 2s;"></div>
        <div class="absolute -bottom-40 left-1/3 w-96 h-96 bg-blue-600/15 dark:bg-blue-600/20 rounded-full blur-[128px] animate-pulse-slow" style="animation-delay: 3s;"></div>
    </div>

    <!-- Main Container -->
    <div class="w-full max-w-2xl relative z-10">

        <!-- Top Bar with Quick Actions (Theme Switcher, Status & Print) -->
        <div class="flex items-center justify-between mb-4 px-1 no-print">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border border-slate-200 dark:border-slate-800 text-xs font-semibold text-slate-700 dark:text-slate-300 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span>Sistem Informasi Akademik</span>
            </div>

            <div class="flex items-center gap-2">
                <!-- Print Button -->
                <button onclick="window.print()" class="p-2.5 rounded-xl bg-white/80 dark:bg-slate-900/80 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white border border-slate-200 dark:border-slate-800 transition-all shadow-sm flex items-center gap-1.5 text-xs font-semibold" title="Cetak Profil">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                    <span class="hidden sm:inline">Cetak</span>
                </button>

                <!-- Dark / Light Mode Toggle -->
                <button id="themeToggle" class="p-2.5 rounded-xl bg-white/80 dark:bg-slate-900/80 hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white border border-slate-200 dark:border-slate-800 transition-all shadow-sm" title="Ubah Tema">
                    <!-- Sun Icon (Active when dark mode) -->
                    <svg id="sunIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <!-- Moon Icon (Active when light mode) -->
                    <svg id="moonIcon" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Student Profile Card -->
        <div class="print-card bg-white dark:bg-slate-900/85 backdrop-blur-2xl border border-slate-200/90 dark:border-slate-800/90 rounded-3xl overflow-hidden shadow-2xl shadow-slate-200/50 dark:shadow-indigo-950/40 transition-all">
            
            <!-- Card Banner with Background Aesthetics & Badges -->
            <div class="relative h-44 sm:h-52 bg-gradient-to-tr from-slate-900 via-indigo-950 to-slate-950 overflow-hidden text-white">
                <!-- Subtle grid background pattern -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff0a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff0a_1px,transparent_1px)] bg-[size:24px_24px]"></div>

                <!-- Artistic blurred glow from the Nice Nature image in the banner -->
                <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full overflow-hidden opacity-30 blur-2xl pointer-events-none">
                    <img src="{{ asset('nice-nature.jpg') }}" alt="Ambient Banner Decor" class="w-full h-full object-cover">
                </div>

                <!-- Banner Header Info -->
                <div class="absolute inset-0 p-5 sm:p-6 flex flex-col justify-between">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-xl bg-white/10 border border-white/20 backdrop-blur-md flex items-center justify-center text-indigo-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                </svg>
                            </div>
                            <span class="text-xs uppercase tracking-widest font-extrabold text-indigo-200">KTM DIGITAL</span>
                        </div>

                        <!-- Active Status Badge -->
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 backdrop-blur-md">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            Mahasiswa Aktif
                        </span>
                    </div>

                    <!-- Decorative Chip / NFC Indicator -->
                    <div class="flex items-center justify-between text-slate-300 text-xs">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-amber-400/80" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4 4h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 16h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4z" opacity="0.75"/>
                            </svg>
                            <span class="font-mono tracking-wider text-[11px] opacity-80 uppercase">Student Identity Card</span>
                        </div>
                        <span class="font-mono text-[11px] text-indigo-200/80 font-semibold uppercase">Semester {{ $semester }}</span>
                    </div>
                </div>
            </div>

            <!-- Card Body -->
            <div class="px-6 pb-8 pt-0 relative">
                
                <!-- Avatar & Action Area -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between -mt-16 sm:-mt-20 gap-4 mb-6">
                    <!-- Photo Container with Nice Nature Plushie Image -->
                    <div class="relative group mx-auto sm:mx-0">
                        <div class="relative w-32 h-32 sm:w-36 sm:h-36 rounded-2xl p-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 shadow-xl shadow-indigo-900/30">
                            <div class="w-full h-full rounded-[14px] bg-slate-100 dark:bg-slate-900 overflow-hidden relative flex items-center justify-center">
                                <img 
                                    src="{{ asset('nice-nature.jpg') }}" 
                                    alt="Foto Profil {{ $nama }}" 
                                    class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-110"
                                    onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name={{ urlencode($nama) }}&background=6366f1&color=fff&size=256';"
                                >
                            </div>
                        </div>

                        <!-- Online Status Indicator Dot -->
                        <div class="absolute bottom-2 right-2 w-5 h-5 rounded-full bg-emerald-500 border-4 border-white dark:border-slate-900 shadow-md flex items-center justify-center" title="Status: Online">
                            <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                        </div>
                    </div>

                    <!-- Quick Action Chips (Salin NIM & Bagikan) -->
                    <div class="flex items-center justify-center sm:justify-end gap-2 no-print">
                        <button onclick="copyNIM('{{ $nim }}')" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 active:scale-95 text-slate-700 dark:text-slate-200 text-xs font-semibold border border-slate-200 dark:border-slate-700 transition-all shadow-sm" id="copyBtn">
                            <svg class="w-3.5 h-3.5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span id="copyText">Salin NIM</span>
                        </button>

                        <button onclick="shareProfile()" class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 active:scale-95 text-white text-xs font-semibold transition-all shadow-md shadow-indigo-600/25">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                            </svg>
                            <span>Bagikan</span>
                        </button>
                    </div>
                </div>

                <!-- Student Identity Details -->
                <div class="text-center sm:text-left mb-6">
                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-1">
                        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                            {{ $nama }}
                        </h1>
                        <span class="inline-flex items-center text-blue-500 dark:text-blue-400" title="Mahasiswa Terverifikasi">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </div>
                    <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">
                        Program Studi Sistem Informasi &bull; Jenjang Strata 1 (S1)
                    </p>
                </div>

                <!-- Academic Progress Bar -->
                @php
                    $totalSemester = 8;
                    $currentSemester = is_numeric($semester) ? (int)$semester : 3;
                    $percent = min(100, max(0, round(($currentSemester / $totalSemester) * 100)));
                @endphp
                <div class="mb-6 p-4 rounded-2xl bg-slate-50 dark:bg-slate-950/50 border border-slate-200 dark:border-slate-800/80">
                    <div class="flex items-center justify-between text-xs font-semibold mb-2">
                        <span class="text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-indigo-500 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Progres Studi Sarjana
                        </span>
                        <span class="text-indigo-600 dark:text-indigo-400 font-mono font-bold">{{ $percent }}% (Semester {{ $currentSemester }} dari {{ $totalSemester }})</span>
                    </div>
                    <div class="w-full h-2.5 bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden p-0.5">
                        <div class="h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-full transition-all duration-1000 ease-out" style="width: {{ $percent }}%"></div>
                    </div>
                </div>

                <!-- Key Information Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 mb-6">
                    
                    <!-- Tile 1: NIM -->
                    <div class="p-4 rounded-2xl bg-slate-50/80 dark:bg-slate-800/40 border border-slate-200/90 dark:border-slate-800 hover:border-indigo-400 dark:hover:border-slate-700 transition-all group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Nomor Induk Mahasiswa</p>
                                <p class="text-base font-bold text-slate-900 dark:text-white tracking-wide font-mono truncate">{{ $nim }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tile 2: Kelas -->
                    <div class="p-4 rounded-2xl bg-slate-50/80 dark:bg-slate-800/40 border border-slate-200/90 dark:border-slate-800 hover:border-purple-400 dark:hover:border-slate-700 transition-all group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Ruang & Kelas</p>
                                <p class="text-base font-bold text-slate-900 dark:text-white tracking-wide font-mono truncate">{{ $kelas }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tile 3: Semester -->
                    <div class="p-4 rounded-2xl bg-slate-50/80 dark:bg-slate-800/40 border border-slate-200/90 dark:border-slate-800 hover:border-emerald-400 dark:hover:border-slate-700 transition-all group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Semester Berjalan</p>
                                <p class="text-base font-bold text-slate-900 dark:text-white tracking-wide">Semester {{ $semester }} <span class="text-xs font-normal text-slate-500 dark:text-slate-400">(Tingkat 2)</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Tile 4: Status Akademik -->
                    <div class="p-4 rounded-2xl bg-slate-50/80 dark:bg-slate-800/40 border border-slate-200/90 dark:border-slate-800 hover:border-amber-400 dark:hover:border-slate-700 transition-all group">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Tahun Akademik</p>
                                <p class="text-base font-bold text-slate-900 dark:text-white tracking-wide">2024/2025 Genap</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Footer Info & Digital Security Barcode / Hash Simulation -->
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500 dark:text-slate-400">
                    <div class="flex items-center gap-2">
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span>Terverifikasi secara digital &bull; Kartu Mahasiswa Elektronik</span>
                    </div>
                    <div class="font-mono text-[11px] text-slate-500 dark:text-slate-400 tracking-wider">
                        SEC-ID: {{ substr(md5($nim ?? 'shouqi'), 0, 10) }}
                    </div>
                </div>

            </div>
        </div>

        <!-- Toast Notification (Hidden by default) -->
        <div id="toast" class="fixed bottom-6 right-6 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none z-50">
            <div class="flex items-center gap-2.5 px-4 py-3 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-indigo-500/40 text-slate-900 dark:text-slate-100 shadow-2xl backdrop-blur-xl">
                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span id="toastMsg" class="text-xs font-semibold">NIM berhasil disalin!</span>
            </div>
        </div>

    </div>

    <!-- Scripts for Interactivity (Copy, Theme Toggle, Share) -->
    <script>
        // Copy NIM function
        function copyNIM(nim) {
            navigator.clipboard.writeText(nim).then(() => {
                showToast('NIM (' + nim + ') berhasil disalin!');
                const copyText = document.getElementById('copyText');
                if (copyText) {
                    copyText.innerText = 'Tersalin!';
                    setTimeout(() => { copyText.innerText = 'Salin NIM'; }, 2000);
                }
            }).catch(err => {
                showToast('Gagal menyalin NIM');
            });
        }

        // Toast feedback
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toastMsg');
            if (toast && toastMsg) {
                toastMsg.innerText = message;
                toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
                setTimeout(() => {
                    toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
                }, 3000);
            }
        }

        // Share Profile
        function shareProfile() {
            if (navigator.share) {
                navigator.share({
                    title: 'Profil Mahasiswa - {{ $nama }}',
                    text: 'Profil Mahasiswa {{ $nama }} (NIM: {{ $nim }}) - {{ $kelas }}',
                    url: window.location.href,
                }).catch(() => {});
            } else {
                navigator.clipboard.writeText(window.location.href);
                showToast('Tautan profil disalin!');
            }
        }

        // Dark / Light Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');

        function setTheme(isDark) {
            if (isDark) {
                document.documentElement.classList.add('dark');
                document.body.classList.remove('bg-slate-100', 'text-slate-900');
                document.body.classList.add('bg-slate-950', 'text-slate-100');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                document.body.classList.remove('bg-slate-950', 'text-slate-100');
                document.body.classList.add('bg-slate-100', 'text-slate-900');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
                localStorage.setItem('theme', 'light');
            }
        }

        themeToggle?.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            setTheme(!isDark);
        });

        // Initialize theme based on preference
        if (localStorage.getItem('theme') === 'light') {
            setTheme(false);
        } else {
            setTheme(true);
        }
    </script>
</body>
</html>