
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inventaris Sekolah - Beranda</title>

    <!-- TAILWIND CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- TAILWIND CONFIG -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

</head>


<body class="bg-white font-sans text-slate-900">


    <!-- ===================================== -->
    <!-- NAVBAR -->
    <!-- ===================================== -->

    @include('components.navbar')



    <!-- ===================================== -->
    <!-- HERO SECTION -->
    <!-- ===================================== -->

    <main class="relative overflow-hidden
        bg-gradient-to-br from-indigo-50 via-white to-blue-50
        min-h-[calc(100vh-64px)] flex items-center">


        <!-- BACKGROUND DECORATION -->

        <div class="absolute -top-32 right-0
            w-[550px] h-[550px]
            bg-indigo-200/30 blur-3xl rounded-full">
        </div>

        <div class="absolute -bottom-32 left-1/4
            w-[450px] h-[450px]
            bg-blue-100/40 blur-3xl rounded-full">
        </div>



        <!-- MAIN CONTAINER -->

        <div class="relative z-10 w-full
            max-w-[1440px] mx-auto
            px-6 lg:px-12 xl:px-16
            py-16 lg:py-20">


            <div class="grid grid-cols-1
                lg:grid-cols-[1.15fr_0.85fr]
                gap-12 xl:gap-16
                items-center">



                <!-- ===================================== -->
                <!-- LEFT CONTENT -->
                <!-- ===================================== -->

                <div class="relative z-10">


                    <!-- BADGE -->

                    <div class="inline-flex items-center gap-2
                        px-3.5 py-2
                        bg-blue-100/80
                        border border-blue-200/70
                        rounded-full mb-6">

                        <span class="w-1.5 h-1.5
                            bg-blue-600 rounded-full">
                        </span>

                        <span class="text-[10px]
                            font-bold tracking-wide
                            text-blue-700 uppercase">

                            Sistem Inventaris Laboratorium Komputer

                        </span>

                    </div>



                    <!-- MAIN HEADING -->

                    <h1 class="text-4xl md:text-5xl
                        lg:text-[48px] xl:text-[54px]
                        leading-[1.08]
                        font-extrabold tracking-tight
                        text-slate-900">

                        Sistem Inventaris
                        <span class="text-indigo-950">
                            Laboratorium
                        </span>

                        <br class="hidden xl:block">

                        Komputer yang Modern,

                        <br class="hidden xl:block">

                        <span class="text-indigo-950">
                            Akurat & Terintegrasi
                        </span>

                    </h1>



                    <!-- DESCRIPTION -->

                    <p class="mt-5 max-w-xl
                        text-base lg:text-[17px]
                        leading-relaxed text-slate-500">

                        Kelola, pantau, dan dokumentasikan seluruh
                        inventaris laboratorium komputer dalam satu
                        sistem yang terintegrasi.

                    </p>



                    <!-- ACTION BUTTONS -->

                    <div class="flex flex-wrap
                        items-center gap-3 mt-7">


                        <!-- BUTTON PINJAM -->

                        <a href="#peminjaman"
                           class="inline-flex items-center gap-2
                           px-5 py-3.5
                           bg-blue-800 hover:bg-blue-900
                           text-white rounded-xl
                           text-sm font-semibold
                           shadow-lg shadow-blue-200
                           transition">

                            Pinjam Unit

                            <svg class="w-4 h-4"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M5 12h14m-7-7 7 7-7 7"/>

                            </svg>

                        </a>



                        <!-- BUTTON FITUR -->

                        <a href="#fitur"
                           class="inline-flex items-center gap-2
                           px-5 py-3.5
                           bg-white hover:bg-slate-50
                           text-slate-700
                           border border-slate-200
                           rounded-xl text-sm font-semibold
                           transition">

                            Eksplorasi Fitur

                            <svg class="w-4 h-4"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m9 18 6-6-6-6"/>

                            </svg>

                        </a>

                    </div>



                    <!-- DIVIDER -->

                    <div class="border-t border-slate-200/80 mt-9">
                    </div>



                    <!-- ===================================== -->
                    <!-- STATISTICS -->
                    <!-- ===================================== -->

                    <div class="grid grid-cols-3 gap-4 lg:gap-6 mt-7">


                        <!-- STATISTIC 1 -->

                        <div>

                            <h2 class="text-3xl lg:text-4xl
                                font-extrabold text-slate-900">

                                1,240+

                            </h2>

                            <p class="text-xs text-slate-500 mt-2">
                                Aset Inventaris
                            </p>

                        </div>



                        <!-- STATISTIC 2 -->

                        <div>

                            <h2 class="text-3xl lg:text-4xl
                                font-extrabold text-blue-700">

                                99.8%

                            </h2>

                            <p class="text-xs text-slate-500 mt-2">
                                Akurasi Status Stok
                            </p>

                        </div>



                        <!-- STATISTIC 3 -->

                        <div>

                            <h2 class="text-3xl lg:text-4xl
                                font-extrabold text-slate-900">

                                24 Jam

                            </h2>

                            <p class="text-xs text-slate-500 mt-2">
                                Layanan Mandiri
                            </p>

                        </div>


                    </div>

                </div>




                <!-- ===================================== -->
                <!-- RIGHT CONTENT : COMPUTER CARD -->
                <!-- ===================================== -->

                <div class="relative z-10
                    flex justify-center lg:justify-end
                    mt-8 lg:mt-0">


                    <!-- MAIN CARD -->

                    <div class="relative w-full
                        max-w-[520px]
                        bg-white rounded-3xl
                        p-5 lg:p-6
                        shadow-2xl shadow-slate-300/70
                        border border-slate-100">


                        <!-- CARD HEADER -->

                        <div class="flex items-center
                            justify-between gap-2 mb-5">


                            <!-- WINDOW DOTS -->

                            <div class="flex items-center gap-1.5">

                                <span class="w-2 h-2
                                    bg-red-500 rounded-full">
                                </span>

                                <span class="w-2 h-2
                                    bg-yellow-400 rounded-full">
                                </span>

                                <span class="w-2 h-2
                                    bg-green-500 rounded-full">
                                </span>

                                <span class="ml-2
                                    text-[10px] text-slate-400">

                                    Lab Inventory System

                                </span>

                            </div>



                            <!-- STATUS -->

                            <span class="flex items-center gap-1.5
                                px-3 py-1.5
                                bg-emerald-50
                                border border-emerald-200
                                rounded-full
                                text-[10px] font-semibold
                                text-emerald-700 whitespace-nowrap">

                                <span class="w-1.5 h-1.5
                                    bg-emerald-500 rounded-full">
                                </span>

                                Unit Siap Digunakan

                            </span>

                        </div>




                        <!-- ===================================== -->
                        <!-- COMPUTER ILLUSTRATION -->
                        <!-- ===================================== -->

                        <div class="bg-slate-50
                            rounded-2xl p-3
                            border border-slate-100">


                            <div class="bg-white
                                rounded-xl
                                h-52 lg:h-60
                                flex items-center
                                justify-center
                                overflow-hidden">


                                <!-- SVG COMPUTER -->

                                <svg viewBox="0 0 400 240"
                                     class="w-full h-full
                                     max-w-md"
                                     xmlns="http://www.w3.org/2000/svg">


                                    <!-- BACKGROUND -->

                                    <rect width="400" height="240"
                                          rx="15" fill="#f1f5f9"/>



                                    <!-- PLANT -->

                                    <path d="M38 185 Q25 140 48 128 Q62 145 48 180"
                                          fill="#65a30d"/>

                                    <path d="M48 185 Q50 145 73 143 Q78 166 48 185"
                                          fill="#84cc16"/>

                                    <path d="M48 185 L48 195"
                                          stroke="#64748b"
                                          stroke-width="3"/>

                                    <path d="M30 195 H68"
                                          stroke="#94a3b8"
                                          stroke-width="3"/>



                                    <!-- MONITOR -->

                                    <rect x="90" y="65"
                                          width="170" height="115"
                                          rx="7" fill="#334155"/>

                                    <rect x="97" y="72"
                                          width="156" height="101"
                                          rx="3" fill="#1e293b"/>



                                    <!-- SCREEN -->

                                    <rect x="102" y="77"
                                          width="146" height="91"
                                          rx="2" fill="#60a5fa"/>

                                    <path d="M102 150 L170 77 H248 V168 H102Z"
                                          fill="#3b82f6"
                                          opacity=".35"/>

                                    <path d="M102 140 Q170 95 248 125 V168 H102Z"
                                          fill="#2563eb"
                                          opacity=".25"/>



                                    <!-- MONITOR STAND -->

                                    <path d="M165 180 H185 L190 198 H160Z"
                                          fill="#475569"/>

                                    <rect x="143" y="198"
                                          width="65" height="5"
                                          rx="2" fill="#64748b"/>



                                    <!-- CPU -->

                                    <rect x="275" y="78"
                                          width="85" height="125"
                                          rx="7" fill="#334155"/>

                                    <rect x="282" y="85"
                                          width="71" height="111"
                                          rx="4" fill="#475569"/>



                                    <!-- QR CODE -->

                                    <rect x="296" y="105"
                                          width="43" height="43"
                                          rx="3" fill="#0f172a"/>

                                    <rect x="302" y="111"
                                          width="31" height="31"
                                          fill="white"/>

                                    <rect x="306" y="115"
                                          width="8" height="8"
                                          fill="#0f172a"/>

                                    <rect x="321" y="115"
                                          width="8" height="8"
                                          fill="#0f172a"/>

                                    <rect x="306" y="130"
                                          width="8" height="8"
                                          fill="#0f172a"/>

                                    <rect x="318" y="127"
                                          width="5" height="5"
                                          fill="#0f172a"/>



                                    <!-- CPU INDICATOR -->

                                    <circle cx="337" cy="183"
                                            r="3" fill="#22c55e"/>



                                    <!-- KEYBOARD -->

                                    <path d="M95 210 L250 210 L263 225 L82 225Z"
                                          fill="#475569"/>

                                    <path d="M103 213 H245"
                                          stroke="#94a3b8"
                                          stroke-width="2"/>



                                    <!-- MOUSE -->

                                    <ellipse cx="280" cy="220"
                                             rx="12" ry="7"
                                             fill="#64748b"/>


                                </svg>

                            </div>

                        </div>




                        <!-- ===================================== -->
                        <!-- PRODUCT INFORMATION -->
                        <!-- ===================================== -->

                        <div class="flex items-center
                            justify-between gap-3 mt-5">


                            <!-- PRODUCT NAME -->

                            <div>

                                <h3 class="text-base
                                    font-bold text-slate-900">

                                    Unit PC-01

                                </h3>

                                <p class="text-[10px]
                                    text-slate-400 mt-1">

                                    SKU: INV-PC-2024-D091

                                </p>

                            </div>



                            <!-- CONDITION -->

                            <span class="flex items-center
                                gap-1.5 px-2.5 py-1.5
                                bg-blue-50 rounded-lg
                                text-[10px] font-semibold
                                text-blue-700 whitespace-nowrap">

                                <span class="w-1.5 h-1.5
                                    bg-green-500 rounded-full">
                                </span>

                                Kondisi: Sangat Baik

                            </span>


                        </div>


                    </div>




                    <!-- ===================================== -->
                    <!-- FLOATING NOTIFICATION -->
                    <!-- ===================================== -->

                    <div class="absolute
                        -bottom-5 -left-2
                        sm:-left-5 lg:-left-7
                        bg-white rounded-2xl
                        shadow-xl shadow-slate-300/60
                        border border-slate-100
                        p-3 flex items-center gap-3">


                        <!-- ICON -->

                        <div class="w-9 h-9
                            bg-emerald-100 rounded-xl
                            flex items-center justify-center">

                            <svg class="w-5 h-5
                                text-emerald-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m9 12 2 2 4-4"/>

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 3 4 7v5c0 5 3.5 7.5 8 9 4.5-1.5 8-4 8-9V7l-8-4Z"/>

                            </svg>

                        </div>



                        <!-- NOTIFICATION TEXT -->

                        <div>

                            <h4 class="text-xs
                                font-bold text-slate-800">

                                QR Check-in Siap

                            </h4>

                            <p class="text-[10px]
                                text-slate-400 mt-1">

                                Scan & langsung bawa alat

                            </p>

                        </div>


                    </div>


                </div>


            </div>

        </div>

    </main>

    
<!-- ===================================== -->
<!-- SECTION FITUR INVENTARIS -->
<!-- ===================================== -->

<section id="fitur" class="bg-white py-20 lg:py-24">

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-16">

        <!-- SECTION HEADER -->
        <div class="text-center max-w-3xl mx-auto">

            <!-- BADGE -->
            <div class="inline-flex items-center
                px-3 py-1.5
                bg-blue-50 border border-blue-100
                rounded-full mb-4">

                <span class="text-[10px] font-bold
                    tracking-wide text-blue-600 uppercase">

                    Fitur Inventaris Lab

                </span>

            </div>


            <!-- HEADING -->
            <h2 class="text-2xl md:text-3xl lg:text-[34px]
                font-extrabold tracking-tight
                text-slate-900 leading-tight">

                Kelola Inventaris Laboratorium Komputer
                dengan Mudah

            </h2>


            <!-- DESCRIPTION -->
            <p class="mt-3 text-sm text-slate-500
                leading-relaxed">

                Pendataan, peminjaman, verifikasi, dan pemantauan
                seluruh aset laboratorium komputer dalam satu
                sistem yang terintegrasi.

            </p>

        </div>



        <!-- ===================================== -->
        <!-- FEATURE CARDS -->
        <!-- ===================================== -->

        <div class="grid grid-cols-1 sm:grid-cols-2
            lg:grid-cols-4 gap-5 mt-10">


            <!-- ================================= -->
            <!-- CARD 1 : PENDATAAN & QR CODE -->
            <!-- ================================= -->

            <div class="group flex flex-col
                bg-slate-50/80
                border border-slate-200/80
                rounded-2xl p-5
                hover:bg-white
                hover:border-blue-200
                hover:shadow-xl hover:shadow-blue-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- ICON -->
                <div class="w-11 h-11
                    flex items-center justify-center
                    bg-blue-100 rounded-xl
                    text-blue-600">

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         stroke-width="1.8">

                        <rect x="5" y="3" width="14" height="18"
                              rx="2"/>

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 3v3h6V3M9 11h6M9 15h6M9 18h3"/>

                    </svg>

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-4">

                    Pendataan & QR Code

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-2">

                    Pendataan seluruh perangkat laboratorium
                    komputer dengan QR Code unik untuk memudahkan
                    identifikasi, pencarian, dan pelacakan aset.

                </p>


                <!-- LINK -->
                <a href="#pendataan"
                   class="inline-flex items-center
                   gap-1 mt-auto pt-6
                   text-[11px] font-semibold
                   text-blue-600
                   group-hover:text-blue-700 transition">

                    Generate QR Code

                    <svg class="w-3.5 h-3.5
                        group-hover:translate-x-1 transition"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-7-7 7 7-7 7"/>

                    </svg>

                </a>

            </div>




            <!-- ================================= -->
            <!-- CARD 2 : PEMINJAMAN UNIT -->
            <!-- ================================= -->

            <div class="group flex flex-col
                bg-slate-50/80
                border border-slate-200/80
                rounded-2xl p-5
                hover:bg-white
                hover:border-violet-200
                hover:shadow-xl hover:shadow-violet-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- ICON -->
                <div class="w-11 h-11
                    flex items-center justify-center
                    bg-violet-100 rounded-xl
                    text-violet-600">

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         stroke-width="1.8">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>

                        <circle cx="10" cy="7" r="4"/>

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M20 8v6m-3-3h6"/>

                    </svg>

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-4">

                    Peminjaman Unit

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-2">

                    Ajukan peminjaman komputer atau perangkat
                    laboratorium secara mudah. Riwayat
                    peminjaman dan pengembalian tercatat
                    secara otomatis.

                </p>


                <!-- LINK -->
                <a href="#peminjaman"
                   class="inline-flex items-center
                   gap-1 mt-auto pt-6
                   text-[11px] font-semibold
                   text-violet-600
                   group-hover:text-violet-700 transition">

                    Proses Cepat

                    <svg class="w-3.5 h-3.5
                        group-hover:translate-x-1 transition"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-7-7 7 7-7 7"/>

                    </svg>

                </a>

            </div>




            <!-- ================================= -->
            <!-- CARD 3 : MANAJEMEN INVENTARIS -->
            <!-- ================================= -->

            <div class="group flex flex-col
                bg-slate-50/80
                border border-slate-200/80
                rounded-2xl p-5
                hover:bg-white
                hover:border-sky-200
                hover:shadow-xl hover:shadow-sky-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- ICON -->
                <div class="w-11 h-11
                    flex items-center justify-center
                    bg-sky-100 rounded-xl
                    text-sky-600">

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         stroke-width="1.8">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M12 3 5 6v5c0 4.5 3 7.5 7 10 4-2.5 7-5.5 7-10V6l-7-3Z"/>

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="m9 12 2 2 4-4"/>

                    </svg>

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-4">

                    Manajemen Inventaris

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-2">

                    Kelola data perangkat, status penggunaan,
                    kondisi, lokasi penyimpanan, dan jadwal
                    perawatan dalam satu dashboard.

                </p>


                <!-- LINK -->
                <a href="#manajemen"
                   class="inline-flex items-center
                   gap-1 mt-auto pt-6
                   text-[11px] font-semibold
                   text-sky-600
                   group-hover:text-sky-700 transition">

                    Data Terintegrasi

                    <svg class="w-3.5 h-3.5
                        group-hover:translate-x-1 transition"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-7-7 7 7-7 7"/>

                    </svg>

                </a>

            </div>




            <!-- ================================= -->
            <!-- CARD 4 : LAPORAN INVENTARIS -->
            <!-- ================================= -->

            <div class="group flex flex-col
                bg-slate-50/80
                border border-slate-200/80
                rounded-2xl p-5
                hover:bg-white
                hover:border-emerald-200
                hover:shadow-xl hover:shadow-emerald-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- ICON -->
                <div class="w-11 h-11
                    flex items-center justify-center
                    bg-emerald-100 rounded-xl
                    text-emerald-600">

                    <svg class="w-5 h-5"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         stroke-width="1.8">

                        <rect x="4" y="12" width="4" height="8"
                              rx="1"/>

                        <rect x="10" y="8" width="4" height="12"
                              rx="1"/>

                        <rect x="16" y="4" width="4" height="16"
                              rx="1"/>

                    </svg>

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-4">

                    Laporan Inventaris

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-2">

                    Lihat laporan jumlah aset, riwayat peminjaman,
                    kondisi perangkat, dan statistik penggunaan
                    yang dapat diunduh kapan saja.

                </p>


                <!-- LINK -->
                <a href="#laporan"
                   class="inline-flex items-center
                   gap-1 mt-auto pt-6
                   text-[11px] font-semibold
                   text-emerald-600
                   group-hover:text-emerald-700 transition">

                    Ekspor PDF & Excel

                    <svg class="w-3.5 h-3.5
                        group-hover:translate-x-1 transition"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-7-7 7 7-7 7"/>

                    </svg>

                </a>

            </div>


        </div>

    </div>

</section>


<!-- ============================================= -->
<!-- SECTION: KATEGORI PERANGKAT LABORATORIUM -->
<!-- ============================================= -->

<section id="katalog" class="bg-slate-50 py-16 lg:py-20">

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-16">

        <!-- SECTION HEADER -->
        <div class="mb-8">

            <!-- BADGE -->
            <div class="inline-flex items-center px-3 py-1
                bg-blue-100 rounded-full mb-3">

                <span class="text-[10px] font-bold
                    text-blue-700 uppercase tracking-wide">

                    Kategori Inventaris

                </span>

            </div>


            <!-- TITLE -->
            <h2 class="text-2xl md:text-3xl
                font-extrabold tracking-tight
                text-slate-900">

                Kategori Perangkat Laboratorium

            </h2>


            <!-- DESCRIPTION -->
            <p class="text-xs md:text-sm
                text-slate-500 leading-relaxed
                mt-2 max-w-2xl">

                Jelajahi berbagai perangkat laboratorium komputer
                yang tersedia untuk mendukung kegiatan pembelajaran
                dan praktikum.

            </p>

        </div>



        <!-- ============================================= -->
        <!-- CATEGORY GRID -->
        <!-- ============================================= -->

        <div class="grid grid-cols-1 sm:grid-cols-2
            lg:grid-cols-3 gap-5">



            <!-- ================================= -->
            <!-- CARD 1: KOMPUTER & WORKSTATION -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=85"
                        alt="Komputer dan workstation"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >


                    <!-- DARK OVERLAY -->
                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <!-- UNIT BADGE -->
                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        45+ Unit Tersedia

                    </span>


                    <!-- CATEGORY LABEL -->
                    <span class="absolute bottom-3 left-3
                        bg-blue-600 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Laboratorium Komputer

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">


                    <!-- TITLE -->
                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Komputer & Workstation

                    </h3>


                    <!-- DESCRIPTION -->
                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Komputer desktop, CPU, monitor, dan workstation
                        yang digunakan untuk kegiatan praktikum
                        di laboratorium.

                    </p>


                    <!-- FOOTER -->
                    <div class="flex items-center
                        justify-between gap-2 mt-3">


                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-emerald-600">

                            <span class="w-1.5 h-1.5
                                bg-emerald-500 rounded-full">
                            </span>

                            Stok Melimpah

                        </span>


                        <a href="#detail-komputer"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>




            <!-- ================================= -->
            <!-- CARD 2: MONITOR & DISPLAY -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=85"
                        alt="Monitor dan display"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >

                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        28+ Unit Tersedia

                    </span>


                    <span class="absolute bottom-3 left-3
                        bg-violet-600 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Perangkat Display

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">

                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Monitor & Display

                    </h3>


                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Monitor LED/LCD, monitor IPS, monitor ultrawide,
                        dan perangkat display lainnya yang digunakan
                        untuk kegiatan pembelajaran dan praktikum.

                    </p>


                    <div class="flex items-center
                        justify-between gap-2 mt-3">

                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-emerald-600">

                            <span class="w-1.5 h-1.5
                                bg-emerald-500 rounded-full">
                            </span>

                            Tersedia Lengkap

                        </span>


                        <a href="#detail-monitor"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>




            <!-- ================================= -->
            <!-- CARD 3: KOMPUTER UTAMA -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=800&q=85"
                        alt="Komputer utama laboratorium"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >

                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        60+ Unit Tersedia

                    </span>


                    <span class="absolute bottom-3 left-3
                        bg-sky-600 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Komputer Utama

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">

                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Komputer & Workstation

                    </h3>


                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Desktop PC, workstation, CPU tower, dan
                        komputer praktikum yang digunakan untuk
                        kegiatan pembelajaran di laboratorium komputer.

                    </p>


                    <div class="flex items-center
                        justify-between gap-2 mt-3">

                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-emerald-600">

                            <span class="w-1.5 h-1.5
                                bg-emerald-500 rounded-full">
                            </span>

                            Siap Digunakan

                        </span>


                        <a href="#detail-pc"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>




            <!-- ================================= -->
            <!-- CARD 4: JARINGAN & INFRASTRUKTUR -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=800&q=85"
                        alt="Jaringan dan infrastruktur"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >

                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        35+ Paket Tersedia

                    </span>


                    <span class="absolute bottom-3 left-3
                        bg-blue-700 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Lab Jaringan

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">

                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Jaringan & Infrastruktur

                    </h3>


                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Switch, router, access point, kabel LAN,
                        rack server, dan perangkat jaringan lainnya
                        yang mendukung operasional laboratorium komputer.

                    </p>


                    <div class="flex items-center
                        justify-between gap-2 mt-3">

                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-emerald-600">

                            <span class="w-1.5 h-1.5
                                bg-emerald-500 rounded-full">
                            </span>

                            Siap Digunakan

                        </span>


                        <a href="#detail-jaringan"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>




            <!-- ================================= -->
            <!-- CARD 5: AUDIO & MULTIMEDIA -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=800&q=85"
                        alt="Audio dan multimedia"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >

                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        22+ Unit Tersedia

                    </span>


                    <span class="absolute bottom-3 left-3
                        bg-violet-600 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Perangkat Multimedia

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">

                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Audio & Multimedia

                    </h3>


                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Speaker aktif, headset, mikrofon, webcam,
                        dan perangkat multimedia lainnya yang
                        mendukung kegiatan pembelajaran dan praktikum.

                    </p>


                    <div class="flex items-center
                        justify-between gap-2 mt-3">

                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-emerald-600">

                            <span class="w-1.5 h-1.5
                                bg-emerald-500 rounded-full">
                            </span>

                            Tersedia

                        </span>


                        <a href="#detail-multimedia"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>




            <!-- ================================= -->
            <!-- CARD 6: KAMERA & WEBCAM -->
            <!-- ================================= -->

            <div class="group bg-white rounded-2xl
                overflow-hidden border border-slate-200/70
                shadow-sm hover:shadow-xl
                hover:-translate-y-1
                transition-all duration-300">


                <!-- IMAGE -->
                <div class="relative h-40 overflow-hidden">

                    <img
                        src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?auto=format&fit=crop&w=800&q=85"
                        alt="Kamera dan webcam"
                        class="w-full h-full object-cover
                        group-hover:scale-105 transition-transform duration-500"
                    >

                    <div class="absolute inset-0
                        bg-gradient-to-t from-slate-900/40
                        to-transparent">
                    </div>


                    <span class="absolute top-3 right-3
                        bg-white/95 backdrop-blur-sm
                        px-2.5 py-1 rounded-full
                        text-[9px] font-bold text-slate-800">

                        14+ Unit Tersedia

                    </span>


                    <span class="absolute bottom-3 left-3
                        bg-rose-600 text-white
                        px-2.5 py-1 rounded-md
                        text-[9px] font-semibold">

                        Perangkat Visual

                    </span>

                </div>



                <!-- CARD CONTENT -->
                <div class="p-4">

                    <h3 class="text-sm font-bold
                        text-slate-900">

                        Kamera & Webcam

                    </h3>


                    <p class="text-[11px] text-slate-500
                        leading-relaxed mt-2 min-h-[48px]">

                        Webcam, kamera digital, tripod, dan perangkat
                        dokumentasi untuk pembelajaran, praktikum,
                        dan kegiatan laboratorium.

                    </p>


                    <div class="flex items-center
                        justify-between gap-2 mt-3">

                        <span class="flex items-center gap-1.5
                            text-[10px] font-medium
                            text-amber-600">

                            <span class="w-1.5 h-1.5
                                bg-amber-500 rounded-full">
                            </span>

                            Kuota Terbatas

                        </span>


                        <a href="#detail-kamera"
                           class="text-[10px] font-bold
                           text-blue-600 hover:text-blue-800
                           whitespace-nowrap">

                            Lihat Detail →

                        </a>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ============================================= -->
<!-- SECTION: ALUR PEMINJAMAN INVENTARIS -->
<!-- ============================================= -->

<section id="peminjaman" class="bg-white py-16 lg:py-20">

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-16">

        <!-- SECTION HEADER -->
        <div class="text-center max-w-2xl mx-auto mb-10">

            <!-- BADGE -->
            <div class="inline-flex items-center
                px-3 py-1 rounded-full
                bg-blue-50 border border-blue-100 mb-3">

                <span class="text-[9px] font-bold
                    uppercase tracking-wide text-blue-600">

                    Alur Peminjaman

                </span>

            </div>


            <!-- TITLE -->
            <h2 class="text-2xl md:text-3xl
                font-extrabold tracking-tight
                text-slate-900">

                3 Langkah Peminjaman Inventaris Lab

            </h2>


            <!-- DESCRIPTION -->
            <p class="text-xs md:text-sm
                text-slate-500 leading-relaxed mt-3">

                Satu alur terintegrasi untuk mengelola peminjaman
                seluruh aset laboratorium secara transparan,
                cepat, dan dapat dipantau secara real-time.

            </p>

        </div>



        <!-- ================================= -->
        <!-- STEP CARDS -->
        <!-- ================================= -->

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">


            <!-- STEP 01 -->
            <div class="group bg-slate-50
                border border-slate-200/70
                rounded-2xl p-6
                hover:bg-white
                hover:border-indigo-200
                hover:shadow-lg hover:shadow-indigo-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- NUMBER -->
                <div class="w-9 h-9 rounded-xl
                    bg-blue-600 text-white
                    flex items-center justify-center
                    text-xs font-extrabold
                    shadow-md shadow-blue-200">

                    01

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-5">

                    Pilih Perangkat & Ajukan Peminjaman

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-3">

                    Pilih perangkat yang dibutuhkan melalui
                    katalog inventaris. Tentukan jumlah unit,
                    tanggal peminjaman, dan lengkapi formulir
                    pengajuan secara online.

                </p>

            </div>




            <!-- STEP 02 -->
            <div class="group bg-slate-50
                border border-slate-200/70
                rounded-2xl p-6
                hover:bg-white
                hover:border-indigo-200
                hover:shadow-lg hover:shadow-indigo-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- NUMBER -->
                <div class="w-9 h-9 rounded-xl
                    bg-indigo-600 text-white
                    flex items-center justify-center
                    text-xs font-extrabold
                    shadow-md shadow-indigo-200">

                    02

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-5">

                    Isi Formulir Peminjaman

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-3">

                    Lengkapi formulir peminjaman dengan
                    identitas, tujuan, dan tanggal penggunaan.
                    Setelah pengajuan dikirim, admin akan
                    melakukan verifikasi permintaan.

                </p>

            </div>




            <!-- STEP 03 -->
            <div class="group bg-slate-50
                border border-slate-200/70
                rounded-2xl p-6
                hover:bg-white
                hover:border-emerald-200
                hover:shadow-lg hover:shadow-emerald-100/50
                hover:-translate-y-1
                transition-all duration-300">


                <!-- NUMBER -->
                <div class="w-9 h-9 rounded-xl
                    bg-emerald-600 text-white
                    flex items-center justify-center
                    text-xs font-extrabold
                    shadow-md shadow-emerald-200">

                    03

                </div>


                <!-- TITLE -->
                <h3 class="text-base font-bold
                    text-slate-900 mt-5">

                    Scan QR & Ambil Perangkat

                </h3>


                <!-- DESCRIPTION -->
                <p class="text-xs text-slate-500
                    leading-relaxed mt-3">

                    Setelah pengajuan disetujui, lakukan
                    scan QR Code pada perangkat untuk
                    proses serah terima. Status peminjaman
                    tercatat secara otomatis.

                </p>

            </div>


        </div>



        <!-- ================================= -->
        <!-- CALL TO ACTION -->
        <!-- ================================= -->

        <div class="relative overflow-hidden
            mt-8 rounded-2xl
            bg-gradient-to-r from-blue-700 to-indigo-700
            p-6 md:p-8
            shadow-lg shadow-indigo-200/60">


            <!-- DECORATIVE CIRCLE -->
            <div class="absolute -right-10 -top-20
                w-56 h-56 rounded-full
                border border-white/10">
            </div>

            <div class="absolute right-20 -bottom-32
                w-56 h-56 rounded-full
                border border-white/10">
            </div>



            <!-- CONTENT -->
            <div class="relative z-10
                flex flex-col md:flex-row
                md:items-center
                justify-between gap-5">


                <!-- TEXT -->
                <div>

                    <h3 class="text-base md:text-lg
                        font-extrabold text-white">

                        Butuh meminjam beberapa perangkat
                        laboratorium sekaligus?

                    </h3>


                    <p class="text-xs text-blue-100
                        leading-relaxed mt-2 max-w-xl">

                        Ajukan peminjaman melalui sistem kami
                        dan pantau status permintaan secara langsung.

                    </p>

                </div>



                <!-- BUTTON -->
                <a href="/peminjaman"
                   class="inline-flex items-center
                   justify-center gap-2
                   bg-white hover:bg-blue-50
                   text-indigo-700
                   px-5 py-3 rounded-lg
                   text-xs font-bold
                   whitespace-nowrap
                   transition shadow-sm">

                    Hubungi Pengelola

                    <svg class="w-4 h-4"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M5 12h14m-7-7 7 7-7 7"/>

                    </svg>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- ============================================= -->
<!-- FOOTER -->
<!-- ============================================= -->

<footer class="bg-[#020817] text-white">

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-16">

        <!-- FOOTER CONTENT -->
        <div class="grid grid-cols-1 sm:grid-cols-2
            lg:grid-cols-4 gap-10 lg:gap-8
            py-12 lg:py-14">


            <!-- BRAND -->
            <div>

                <a href="/" class="flex items-center gap-2">

                    <div class="w-8 h-8 bg-indigo-600
                        rounded-lg flex items-center
                        justify-center">

                        <svg class="w-5 h-5"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            stroke-width="2">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 7.5 12 3l8 4.5v9L12 21l-8-4.5v-9Z"/>

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m4 7.5 8 4.5 8-4.5M12 12v9"/>

                        </svg>

                    </div>

                    <span class="text-xs font-bold">
                        INVENTARIS SEKOLAH
                    </span>

                </a>


                <p class="text-[11px] text-slate-400
                    leading-relaxed mt-4 max-w-xs">

                    Pusat sistem manajemen inventaris
                    laboratorium komputer yang terintegrasi.
                    Mendukung pendataan aset, peminjaman,
                    dan pelacakan inventaris secara efisien.

                </p>


                <div class="inline-flex items-center
                    gap-2 mt-5 px-3 py-2
                    bg-slate-900 border border-slate-800
                    rounded-lg">

                    <span class="w-1.5 h-1.5
                        bg-emerald-400 rounded-full"></span>

                    <span class="text-[9px] text-slate-400">
                        Sistem Aktif
                    </span>

                </div>

            </div>



            <!-- NAVIGASI CEPAT -->
            <div>

                <h4 class="text-[11px] font-bold
                    uppercase tracking-wider mb-5">

                    Navigasi Cepat

                </h4>

                <ul class="space-y-3 text-[11px] text-slate-400">

                    <li>
                        <a href="/" class="hover:text-indigo-400 transition">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="#fitur" class="hover:text-indigo-400 transition">
                            Fitur Utama
                        </a>
                    </li>

                    <li>
                        <a href="#katalog" class="hover:text-indigo-400 transition">
                            Katalog Inventaris
                        </a>
                    </li>

                    <li>
                        <a href="#peminjaman" class="hover:text-indigo-400 transition">
                            Alur Peminjaman
                        </a>
                    </li>

                    <li>
                        <a href="#status" class="hover:text-indigo-400 transition">
                            Lacak Status
                        </a>
                    </li>

                </ul>

            </div>



            <!-- KETENTUAN -->
            <div>

                <h4 class="text-[11px] font-bold
                    uppercase tracking-wider mb-5">

                    Ketentuan & SOP

                </h4>

                <ul class="space-y-3 text-[11px] text-slate-400">

                    <li>
                        <a href="#ketentuan"
                           class="hover:text-indigo-400 transition">
                            Ketentuan Peminjaman
                        </a>
                    </li>

                    <li>
                        <a href="#sop"
                           class="hover:text-indigo-400 transition">
                            Standar Operasional (SOP)
                        </a>
                    </li>

                    <li>
                        <a href="#kode-etik"
                           class="hover:text-indigo-400 transition">
                            Kode Etik Penggunaan
                        </a>
                    </li>

                    <li>
                        <a href="#privasi"
                           class="hover:text-indigo-400 transition">
                            Kebijakan Privasi
                        </a>
                    </li>

                </ul>

            </div>



            <!-- PUSAT BANTUAN -->
            <div>

                <h4 class="text-[11px] font-bold
                    uppercase tracking-wider mb-5">

                    Pusat Bantuan

                </h4>

                <ul class="space-y-3 text-[11px] text-slate-400">

                    <li>
                        <a href="#faq"
                           class="hover:text-indigo-400 transition">

                            <span class="text-indigo-400 mr-1">01.</span>
                            Pertanyaan Umum (FAQ)

                        </a>
                    </li>

                    <li>
                        <a href="#panduan"
                           class="hover:text-indigo-400 transition">

                            <span class="text-indigo-400 mr-1">02.</span>
                            Panduan Penggunaan

                        </a>
                    </li>

                    <li>
                        <a href="#pengelola"
                           class="hover:text-indigo-400 transition">

                            <span class="text-indigo-400 mr-1">03.</span>
                            Hubungi Pengelola

                        </a>
                    </li>

                </ul>

            </div>

        </div>



        <!-- COPYRIGHT -->
        <div class="border-t border-slate-800
            py-5 flex flex-col sm:flex-row
            justify-between items-center gap-3">

            <p class="text-[10px] text-slate-500">n;
                © {{ date('Y') }} Inventaris Sekolah.
                All rights reserved.
            </p>

            <p class="text-[10px] text-slate-500">
                Developed for
                <span class="text-indigo-400 font-semibold">
                    Laboratory Management System
                </span>
            </p>

        </div>

    </div>

</footer>


</body>
</html>
