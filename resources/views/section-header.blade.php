<header>
    <nav
        id="main-navbar"
        class="fixed bg-transparent border-gray-200 px-4 lg:px-8 py-6 w-full z-50 transition-all duration-500 ease-in-out"
    >
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-7xl">
            <a href="#" class="flex items-center">
                <img src="{{ asset("img/logo-kemenhub.png") }}" class="mr-1 h-7 sm:h-11" alt="Kemenhub Logo" />
                <div class="flex flex-col">
                    <span class="text-sm font-semibold whitespace-nowrap dark:text-white">
                        Kantor Otoritas Bandar Udara
                    </span>
                    <span class="text-sm font-semibold whitespace-nowrap dark:text-white">Wilayah XII - Bandung</span>
                </div>
            </a>
            <div class="flex items-center lg:order-2">
                <a
                    href="#"
                    class="flex gap-1 bg-blue-600 rounded-xl text-xs text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium px-2 lg:px-4 py-1 lg:py-1.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="size-4"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                        />
                    </svg>

                    <p>Login Pegawai</p>
                </a>
                <button
                    data-collapse-toggle="mobile-menu-2"
                    type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="text-xs flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a
                            href="/"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors"
                            aria-current="page"
                        >
                            Beranda
                        </a>
                    </li>

                    <!-- Profil Dropdown -->
                    <li class="relative dropdown-item">
                        <button
                            class="flex items-center justify-between w-full py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors dropdown-toggle"
                            data-dropdown="dropdown-profil"
                        >
                            Profil
                            <svg
                                class="w-4 h-4 ml-1 transition-transform duration-200 dropdown-arrow"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div
                            id="dropdown-profil"
                            class="dropdown-menu hidden lg:absolute lg:top-full lg:left-0 lg:mt-2 w-full lg:w-48 z-50"
                        >
                            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a
                                            href="/profil"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 transition-colors"
                                        >
                                            Profil
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/profil/sejarah"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 transition-colors"
                                        >
                                            Sejarah
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/profil/visi-misi"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 transition-colors"
                                        >
                                            Visi & Misi
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/profil/struktur-organisasi"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 transition-colors"
                                        >
                                            Struktur Organisasi
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="/profil/tugas-fungsi"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 transition-colors"
                                        >
                                            Tugas & Fungsi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!-- Layanan Dropdown -->
                    <li class="relative dropdown-item">
                        <a href="/#layanan">
                            <button
                                class="flex items-center justify-between w-full py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors dropdown-toggle"
                                data-dropdown="dropdown-layanan"
                            >
                                Layanan
                            </button>
                        </a>
                    </li>

                    <li>
                        <a
                            href="/berita"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors"
                        >
                            Berita
                        </a>
                    </li>
                    <li>
                        <a
                            href="/#wilayah-kerja"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors"
                        >
                            Wilayah Kerja
                        </a>
                    </li>
                    <li>
                        <a
                            href="/galeri"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors"
                        >
                            Galeri
                        </a>
                    </li>

                    <!-- PPID Dropdown -->
                    <li class="relative dropdown-item">
                        <a href="/ppid">
                            <button
                                class="flex items-center justify-between w-full py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white hover:text-blue-600 transition-colors dropdown-toggle"
                                data-dropdown="dropdown-ppid"
                            >
                                PPID
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Dropdown animations */
    .dropdown-menu {
        opacity: 0;
        transform: translateY(-10px);
        transition:
            opacity 0.2s ease,
            transform 0.2s ease;
        pointer-events: none;
    }

    .dropdown-menu.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    @media (max-width: 1023px) {
        .dropdown-menu {
            transform: none;
        }
    }
</style>

<script>
    let lastScrollTop = 0;
    let ticking = false;
    const mainNavbar = document.getElementById('main-navbar');
    let openDropdown = null;
    let closeTimeout = null;

    function updateNavbar(scrollTop) {
        if (scrollTop > 50) {
            mainNavbar.classList.remove('bg-transparent');
            mainNavbar.classList.add('bg-white', 'dark:bg-gray-800', 'shadow');
        } else {
            mainNavbar.classList.remove('bg-white', 'dark:bg-gray-800', 'shadow');
            mainNavbar.classList.add('bg-transparent');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        ticking = false;
    }

    window.addEventListener('scroll', function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (!ticking) {
            window.requestAnimationFrame(function () {
                updateNavbar(scrollTop);
            });
            ticking = true;
        }
    });

    // Modern Dropdown Management
    function showDropdown(dropdown) {
        if (closeTimeout) {
            clearTimeout(closeTimeout);
            closeTimeout = null;
        }

        // Close other dropdowns
        document.querySelectorAll('.dropdown-menu').forEach((menu) => {
            if (menu !== dropdown) {
                menu.classList.remove('show');
                menu.classList.add('hidden');
            }
        });

        // Show dropdown
        dropdown.classList.remove('hidden');
        setTimeout(() => {
            dropdown.classList.add('show');
        }, 10);

        // Rotate arrow
        const button = dropdown.previousElementSibling;
        if (button) {
            const arrow = button.querySelector('.dropdown-arrow');
            if (arrow) {
                arrow.style.transform = 'rotate(180deg)';
            }
        }

        openDropdown = dropdown;
    }

    function hideDropdown(dropdown) {
        if (!dropdown) return;

        dropdown.classList.remove('show');

        // Reset arrow
        const button = dropdown.previousElementSibling;
        if (button) {
            const arrow = button.querySelector('.dropdown-arrow');
            if (arrow) {
                arrow.style.transform = 'rotate(0deg)';
            }
        }

        setTimeout(() => {
            dropdown.classList.add('hidden');
        }, 200);

        if (openDropdown === dropdown) {
            openDropdown = null;
        }
    }

    function hideAllDropdowns() {
        document.querySelectorAll('.dropdown-menu').forEach((menu) => {
            hideDropdown(menu);
        });
    }

    // Desktop: Mouseenter/Mouseleave behavior
    if (window.innerWidth >= 1024) {
        document.querySelectorAll('.dropdown-item').forEach((item) => {
            item.addEventListener('mouseenter', function () {
                const button = this.querySelector('.dropdown-toggle');
                const dropdownId = button.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);

                if (dropdown) {
                    showDropdown(dropdown);
                }
            });

            item.addEventListener('mouseleave', function () {
                const button = this.querySelector('.dropdown-toggle');
                const dropdownId = button.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);

                if (dropdown) {
                    closeTimeout = setTimeout(() => {
                        hideDropdown(dropdown);
                    }, 200);
                }
            });

            // Keep dropdown open when hovering over it
            const button = item.querySelector('.dropdown-toggle');
            const dropdownId = button.getAttribute('data-dropdown');
            const dropdown = document.getElementById(dropdownId);

            if (dropdown) {
                dropdown.addEventListener('mouseenter', function () {
                    if (closeTimeout) {
                        clearTimeout(closeTimeout);
                        closeTimeout = null;
                    }
                });

                dropdown.addEventListener('mouseleave', function () {
                    closeTimeout = setTimeout(() => {
                        hideDropdown(this);
                    }, 200);
                });
            }
        });
    }

    // Mobile: Click behavior
    document.querySelectorAll('.dropdown-toggle').forEach((button) => {
        button.addEventListener('click', function (e) {
            const isMobile = window.innerWidth < 1024;

            if (isMobile) {
                e.preventDefault();
                const dropdownId = this.getAttribute('data-dropdown');
                const dropdown = document.getElementById(dropdownId);

                if (dropdown) {
                    if (dropdown.classList.contains('show')) {
                        hideDropdown(dropdown);
                    } else {
                        showDropdown(dropdown);
                    }
                }
            }
        });
    });

    // Handle mobile menu toggle
    const mobileMenuButton = document.querySelector('[data-collapse-toggle="mobile-menu-2"]');
    const mobileMenu = document.getElementById('mobile-menu-2');

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');

            // Toggle hamburger icon
            const hamburgerIcon = this.querySelector('svg:first-of-type');
            const closeIcon = this.querySelector('svg:last-of-type');

            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    // Close dropdowns and mobile menu when clicking outside
    document.addEventListener('click', function (event) {
        const isMobile = window.innerWidth < 1024;

        // Close dropdowns if clicking outside
        if (!event.target.closest('.dropdown-item')) {
            hideAllDropdowns();
        }

        // Close mobile menu if clicking outside
        if (isMobile && mobileMenu && !mobileMenu.classList.contains('hidden')) {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');

                const hamburgerIcon = mobileMenuButton.querySelector('svg:first-of-type');
                const closeIcon = mobileMenuButton.querySelector('svg:last-of-type');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');

                hideAllDropdowns();
            }
        }
    });

    // Re-initialize on window resize
    let resizeTimeout;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            hideAllDropdowns();
            location.reload(); // Reload to reinitialize event listeners for new screen size
        }, 250);
    });
</script>
