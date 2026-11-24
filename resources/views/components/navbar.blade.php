
<nav class="relative z-50 w-full bg-white border-b border-slate-100">

    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-14">

        <div class="h-[68px] grid grid-cols-[1fr_auto] xl:grid-cols-[auto_1fr_auto] items-center gap-6">

            <!-- ================================= -->
            <!-- LOGO -->
            <!-- ================================= -->

            <a href="/" class="flex items-center gap-2.5 shrink-0">

                <div class="w-10 h-10 rounded-xl bg-indigo-600
                    flex items-center justify-center
                    shadow-md shadow-indigo-200">

                    <svg class="w-6 h-6 text-white"
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

                <div class="leading-tight">

                    <h1 class="text-[13px] font-extrabold
                        tracking-tight text-slate-900 whitespace-nowrap">

                        INVENTARIS
                        <span class="text-indigo-600">SEKOLAH</span>

                    </h1>

                    <p class="text-[9px] text-slate-400
                        tracking-wide mt-0.5 whitespace-nowrap">

                        SISTEM INVENTARIS TERINTEGRASI

                    </p>

                </div>

            </a>



            <!-- ================================= -->
            <!-- DESKTOP NAVIGATION -->
            <!-- ================================= -->

            <div class="hidden xl:flex items-center justify-center gap-7">

                <a href="/"
                   class="relative text-[12px] font-semibold
                   text-indigo-600 whitespace-nowrap
                   py-2">

                    Beranda

                    <span class="absolute -bottom-[2px]
                        left-0 right-0 h-[2px]
                        bg-indigo-600 rounded-full">
                    </span>

                </a>


                <a href="#fitur"
                   class="text-[12px] font-medium
                   text-slate-500 hover:text-indigo-600
                   transition whitespace-nowrap">

                    Fitur Utama

                </a>


                <a href="#katalog"
                   class="text-[12px] font-medium
                   text-slate-500 hover:text-indigo-600
                   transition whitespace-nowrap">

                    Katalog & Kategori

                </a>


                <a href="#peminjaman"
                   class="text-[12px] font-medium
                   text-slate-500 hover:text-indigo-600
                   transition whitespace-nowrap">

                    Alur Peminjaman

                </a>


                <a href="#status"
                   class="text-[12px] font-medium
                   text-slate-500 hover:text-indigo-600
                   transition whitespace-nowrap">

                    Lacak Status

                </a>

            </div>



            <!-- ================================= -->
            <!-- RIGHT ACTIONS -->
            <!-- ================================= -->

            <div class="flex items-center justify-end gap-3">

                <!-- SEARCH -->
                <div class="hidden md:block relative">

                    <input
                        type="text"
                        placeholder="Cari sarana lab..."
                        class="w-[155px] h-9
                        pl-9 pr-3
                        text-[11px] text-slate-700
                        placeholder:text-slate-400
                        bg-slate-50
                        border border-slate-200
                        rounded-lg outline-none
                        focus:bg-white
                        focus:border-indigo-400
                        focus:ring-2 focus:ring-indigo-100
                        transition"
                    >

                    <svg class="absolute left-3 top-1/2
                        -translate-y-1/2
                        w-4 h-4 text-slate-400"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24">

                        <circle cx="11" cy="11" r="7"
                                stroke-width="1.8"/>

                        <path d="m16 16 4 4"
                              stroke-width="1.8"
                              stroke-linecap="round"/>

                    </svg>

                </div>



                <!-- ADMIN BUTTON -->

                <a href="/admin"
                   class="inline-flex items-center
                   justify-center gap-2
                   h-10 px-4
                   bg-indigo-700 hover:bg-indigo-800
                   text-white rounded-lg
                   text-[11px] font-semibold
                   shadow-sm shadow-indigo-200
                   transition whitespace-nowrap">

                    <svg class="w-4 h-4"
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
                              d="M20 8v6m3-3h-6"/>

                    </svg>

                    Dashboard Admin

                </a>



                <!-- MOBILE MENU BUTTON -->

                <button
                    type="button"
                    id="menu-toggle"
                    class="xl:hidden w-10 h-10
                    flex items-center justify-center
                    rounded-lg border border-slate-200
                    hover:bg-slate-50 transition"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="mobile-menu">

                    <svg id="menu-icon"
                         class="w-5 h-5 text-slate-700"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         stroke-width="2">

                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M4 6h16M4 12h16M4 18h16"/>

                    </svg>

                </button>

            </div>

        </div>



        <!-- ================================= -->
        <!-- MOBILE NAVIGATION -->
        <!-- ================================= -->

        <div id="mobile-menu"
             class="hidden xl:hidden
             border-t border-slate-100
             py-5 space-y-4">

            <a href="/"
               class="block text-sm font-semibold text-indigo-600">

                Beranda

            </a>

            <a href="#fitur"
               class="block text-sm font-medium text-slate-600 hover:text-indigo-600">

                Fitur Utama

            </a>

            <a href="#katalog"
               class="block text-sm font-medium text-slate-600 hover:text-indigo-600">

                Katalog & Kategori

            </a>

            <a href="#peminjaman"
               class="block text-sm font-medium text-slate-600 hover:text-indigo-600">

                Alur Peminjaman

            </a>

            <a href="#status"
               class="block text-sm font-medium text-slate-600 hover:text-indigo-600">

                Lacak Status

            </a>


            <!-- MOBILE SEARCH -->

            <div class="relative pt-2">

                <input
                    type="text"
                    placeholder="Cari sarana lab..."
                    class="w-full h-10 pl-9 pr-3
                    text-xs bg-slate-50
                    border border-slate-200
                    rounded-lg outline-none
                    focus:border-indigo-400"
                >

                <svg class="absolute left-3 top-1/2
                    translate-y-1
                    w-4 h-4 text-slate-400"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">

                    <circle cx="11" cy="11" r="7"
                            stroke-width="1.8"/>

                    <path d="m16 16 4 4"
                          stroke-width="1.8"
                          stroke-linecap="round"/>

                </svg>

            </div>


            <!-- MOBILE ADMIN BUTTON -->

            <a href="/admin"
               class="flex items-center justify-center
               gap-2 w-full h-10
               bg-indigo-700 hover:bg-indigo-800
               text-white rounded-lg
               text-xs font-semibold transition">

                Dashboard Admin

            </a>

        </div>

    </div>

</nav>


<!-- ================================= -->
<!-- MOBILE MENU SCRIPT -->
<!-- ================================= -->

<script>

    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function () {

        const isHidden = mobileMenu.classList.toggle('hidden');

        this.setAttribute('aria-expanded', !isHidden);

    });

</script>
