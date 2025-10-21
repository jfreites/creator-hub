<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="font-display bg-background-light dark:bg-background-dark">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="flex h-full grow flex-col">
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-background-dark/10 dark:border-background-light/10 px-10 py-4">
                <div class="flex items-center gap-10">
                    <div class="flex items-center gap-3 text-background-dark dark:text-background-light">
                        <div class="size-6 text-primary">
                            <span class="material-symbols-outlined"> token </span>
                        </div>
                        <h1 class="text-xl font-bold">Creator Hub</h1>
                    </div>
                    <nav class="flex items-center gap-8">
                        <a class="text-sm font-medium text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Home</a>
                        <a class="text-sm font-medium text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Explore</a>
                        <a class="text-sm font-medium text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Create</a>
                        <a class="text-sm font-medium text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Learn</a>
                    </nav>
                </div>
                <div class="flex items-center gap-4">
                    <div class="relative hidden lg:block">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-background-dark/40 dark:text-background-light/40">search</span>
                        <input
                            class="h-10 w-64 rounded-lg bg-background-light dark:bg-background-dark border border-background-dark/10 dark:border-background-light/10 pl-10 pr-4 text-sm text-background-dark dark:text-background-light placeholder-background-dark/40 dark:placeholder-background-light/40 focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="Search" value="" />
                    </div>
                    <button
                        class="flex h-10 items-center justify-center rounded-lg px-6 text-sm font-bold bg-primary text-white transition-all hover:opacity-90">
                        <span>Sign in</span>
                    </button>
                    <div class="size-10 rounded-full bg-cover bg-center"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD76d14Qm2d6yCt3BADPwVJUU2qJW3wTGylRCNof673GvC0HtakiN6tVMaARaIcVAMKe71ZBHnIcZmaiMd_OiuFF0DuQEQ0SRo0XsJwWiC-o0yLRUDkxUiJfu4Pet-k4nHX-RYIUiCWRnahhDHShP9vfZPY4NS6JTw_zhl4JZE9K7w4DqHbOY6OYFk_Q4tYCugIozQv-bGw-CeWsL4fkgglr-4JJMUm2iBIIJaR8qowxGeg8WKgMpQujause3IsTlM0fKqsG0hrIaE");'>
                    </div>
                </div>
            </header>
            <main class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="flex flex-col items-center text-center mb-12">
                    <h1
                        class="text-4xl md:text-5xl font-extrabold text-background-dark dark:text-background-light tracking-tighter mb-4">
                        Find Your Next Creation</h1>
                    <p class="max-w-2xl text-lg text-background-dark/60 dark:text-background-light/60">Discover a world
                        of digital products, insightful courses, expert mentorship, and professional services.</p>
                </div>
                <div class="mb-12">
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-xl text-background-dark/40 dark:text-background-light/40">search</span>
                        <input
                            class="h-14 w-full rounded-xl bg-background-light dark:bg-background-dark border border-background-dark/10 dark:border-background-light/10 pl-12 pr-4 text-base text-background-dark dark:text-background-light placeholder:text-background-dark/40 dark:placeholder:text-background-light/40 focus:outline-none focus:ring-2 focus:ring-primary/50"
                            placeholder="Search for digital products, courses, mentorships, and services" />
                    </div>
                </div>
                <div class="border-b border-background-dark/10 dark:border-background-light/10 mb-10">
                    <div class="flex space-x-8">
                        <a class="relative flex items-center justify-center py-4 text-sm font-bold text-primary"
                            href="#">
                            Digital Products
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary"></span>
                        </a>
                        <a class="flex items-center justify-center py-4 text-sm font-bold text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Courses</a>
                        <a class="flex items-center justify-center py-4 text-sm font-bold text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Mentorships</a>
                        <a class="flex items-center justify-center py-4 text-sm font-bold text-background-dark/60 dark:text-background-light/60 hover:text-primary dark:hover:text-primary transition-colors"
                            href="#">Services</a>
                    </div>
                </div>
                <section class="mb-16">
                    <h2 class="text-2xl font-bold text-background-dark dark:text-background-light mb-6">Trending Digital
                        Products</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <div class="flex flex-col gap-4 group">
                            <div class="w-full aspect-square bg-cover bg-center rounded-xl overflow-hidden transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDTW6jCP1kDTLUTDwr3dQQegmjKbUVIUp7LhO8-NKPh6-FljcyjnrFqBQiZtHPIXvQwIdcCELtq3Q8jwGxEHfswZQJH-sWNX_QrPOLUmvF6FCGofQaqUc9Tl-WIsSyYTmQ0LMAgCpxvYUVd8WRyEm9ZG9_JH5X4W24u2Wv_fmEYUu1IiPxU0aExDPCjYV12AQGHOzhcuR93KCb8ScsepNFVRvtzGwP71Fi0PBG6jQEN47nwP1cLAqQ1WRp5GAhiM6qnfIbFyJ1eGBU");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">
                                    Abstract Art Collection</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">By Sarah Miller
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 group">
                            <div class="w-full aspect-square bg-cover bg-center rounded-xl overflow-hidden transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC7xw1aUApDaYQkmS-hDZIz7mhXIaPL0b0So6qf8lXQawxye5__idYnH21njIw2v6BPSFIVNDgUfG8nNRgMA5NAXqg_1wyFyvdf9DFqLY5xkk6u7xvd8bXE2K7429ERE7Aa5DSMCsO4VIZb5zISc9E8FEbq6GdGG8CATuLa0zqkkmCdrXL0MJqg2cFnRzRyEYuPzfLm-dnT0A1UVa6-uorjr5Jsk7BxV4RIFpKL0fuYjLoZbtZ3V1tfK2mL5h1f46rGK7CIWiowoRI");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">
                                    Geometric Patterns Pack</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">By Alex Turner
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 group">
                            <div class="w-full aspect-square bg-cover bg-center rounded-xl overflow-hidden transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2YBAfoAj4xCyHcNXZNUmxSCZhyx5F5VkSfWzkLqfOAUD9z4nyz_GPjAgxMHI7pWDXRQaaWx3vIP6ppu480D3MX5J1tg8sKJ0T_oZZCsS0B-F0650Bgv_dM1yiuq8nGQUOxjqZwUEOzliYk_3xO3kf6i_NbgIPLw8iZVMbFK0NkUWGtbf3aO8difvEJRxGXyRaGjSpEOC1-MPWp1EgE6v2VIe3nPgj4oYkjNgL7OhGhWdiYDQzX7J0F1_iTKckq4NxZQdgpX8gQNU");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">
                                    Modern Design Templates</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">By Emily Carter
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 group">
                            <div class="w-full aspect-square bg-cover bg-center rounded-xl overflow-hidden transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9RmTBSlxBE7agzpe35vcj-zx5WehB9j1A_cMzxOuNvdNiQIVjGSSKAORS3aQjlZl_wYzXGmZxdUm3kjveySA7MUq9O97XfXIG9MHTu83AMPnzoEN8f5Ibioil0iibVmgum1_7YSWxhhbz50yFIvjtg0PDBzCCFLHkTyBgULSGk8Tagstzdhu2MPRT0aCDNR0wygVrpNh6luUd1Yq7fY9dG8di6P_3_iTwfIS3tUh_sGPqRVYfoPa6UAvX2018Bt9ArmLbZ8zdP50");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">
                                    Minimalist Illustrations Set</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">By David Lee
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="text-2xl font-bold text-background-dark dark:text-background-light mb-6">Featured
                        Creators</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-8">
                        <div class="flex flex-col gap-4 items-center text-center group">
                            <div class="size-32 bg-cover bg-center rounded-full transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuGtJrhos28lgrbp_tKSemaZ0DmlAoe8jmTLsYwXen-7rS_tu2WNXIskQ53pFePurzwCUc-z1PRHdGq4u2e4vVt07tUiu3RUP4UhIxnARmyl_s-AB2uPfg8AzN_ntpZieO0Wr2hFF0Wxxz1rgrpovj15zW1_1QQkkXpvjf3BkILz0OoSnWFlY_fVSrCSt5-thj8lOYKPC6xhQivUAl1DlXRiKVFB8KKNJV1J3_dLFB16OqBGrO142oDPTfwPMIMNDP3bN1VaPkOsY");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">Sarah
                                    Miller</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">Digital Artist
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 items-center text-center group">
                            <div class="size-32 bg-cover bg-center rounded-full transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCCff6miMotn-4771qaLihDK3COUPuSMexLBzOc4ka4MwduoR6TUGowGBPjC_wxMWt_do42UtjV4pFDAGZukMnUS8Twg971T3iRxFzXx9Md4K3n8900WmwMblYpr8aKEyp0Ayz9bNScTjdvpMAHNwDSQQPpqJn76pNnm5DK8LNY12SbUd7ewB6hoaslmtxpv3PciAOxTgWHS5Xx3-S9FAZS-8UCNC2kfvrkYHYTmW776mNLPSqQDdC3pjV6cBQ_TihhqKumYdoW5HI");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">Alex
                                    Turner</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">Graphic
                                    Designer</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 items-center text-center group">
                            <div class="size-32 bg-cover bg-center rounded-full transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAfWmVU_zwMPJmoLZDUKk5PZoG8en4d3AJLEevZyND1fCKT1_c2E0oCWOMki5YgDuO1JPIAbybTOXP4wL86a4knkb8Lb_3u0kSvbscewwbxWR6ua48cV5byjmKsKyRJ7dTIrsBuvsTGIk2cRLHEQZCVufeOE7Q3aOfz5NQyNiLQETj56EI3LHiXtIRBiXCdgl4bcrpEX9B3t91S7E9YyYli_-Ciz_qwSz82exqzRvpczKNvLcNT4iTCgwd-Z6gDAAZ5yQpeLVVPObE");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">Emily
                                    Carter</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">Illustrator</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 items-center text-center group">
                            <div class="size-32 bg-cover bg-center rounded-full transform transition-transform duration-300 group-hover:scale-105"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDoqWdOq0bS0v8mQl9rDaLDTnNwmryY88U4wb4RrWH0qPhA6zVbYttHOdTtKmojyRc30Sc4-jrm9q4afffpAMuSeJ7-YZB0DgpDWpj3qesmfaDmOgQnVCQqp4cUKylhUsZNx6_Cliy4gFn4KfN91tRjnrDIw2o_LGUQuN_gsP9c67YmQQIi5uHtbffp67V_CSiRUnx1-a9WJm_VYK-_yNfvtPKEph3fq4RgLYnCHiaH7xq3dSTM9_rxp50NMZHvU-J3RQg9kFnnDiQ");'>
                            </div>
                            <div>
                                <p class="text-base font-semibold text-background-dark dark:text-background-light">David
                                    Lee</p>
                                <p class="text-sm text-background-dark/60 dark:text-background-light/60">Design
                                    Consultant</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer class="bg-background-dark text-background-light mt-16">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="col-span-2 md:col-span-1">
                            <a class="flex items-center space-x-2" href="#">
                                <span class="material-symbols-outlined text-secondary text-3xl"> token </span>
                                <span class="text-xl font-bold">Creator Hub</span>
                            </a>
                            <p class="mt-4 text-sm text-background-light/60">A marketplace for creators to thrive.</p>
                        </div>
                        <div>
                            <h4 class="font-bold tracking-wider uppercase text-background-light/80">Explore</h4>
                            <ul class="mt-4 space-y-2 text-sm text-background-light/60">
                                <li><a class="hover:text-primary" href="#">Downloads</a></li>
                                <li><a class="hover:text-primary" href="#">Mentorships</a></li>
                                <li><a class="hover:text-primary" href="#">Courses</a></li>
                                <li><a class="hover:text-primary" href="#">Services</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold tracking-wider uppercase text-background-light/80">Resources</h4>
                            <ul class="mt-4 space-y-2 text-sm text-background-light/60">
                                <li><a class="hover:text-primary" href="#">Blog</a></li>
                                <li><a class="hover:text-primary" href="#">Help Center</a></li>
                                <li><a class="hover:text-primary" href="#">Terms of Service</a></li>
                                <li><a class="hover:text-primary" href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold tracking-wider uppercase text-background-light/80">Follow Us</h4>
                            <div class="flex mt-4 space-x-4">
                                <a class="text-background-light/60 hover:text-primary" href="#"><svg
                                        aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path clip-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            fill-rule="evenodd"></path>
                                    </svg></a>
                                <a class="text-background-light/60 hover:text-primary" href="#"><svg
                                        aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                        </path>
                                    </svg></a>
                                <a class="text-background-light/60 hover:text-primary" href="#"><svg
                                        aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path clip-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm4.927 8.177c.287.464.453.98.453 1.519 0 .227-.024.448-.07.666a5.023 5.023 0 01-2.14 3.63c-.57.443-1.254.747-2.008.895a.6.6 0 01-.252.044c-1.07 0-2.012-.42-2.73-1.121a.6.6 0 01.378-1.037c.328-.158.747-.03 1.01.268.618.68 1.51.9 2.33.342.18-.12.334-.265.46-.432.222-.29.356-.633.356-1.002 0-.417-.148-.813-.42-1.115-.22-.249-.5-.44-.817-.577-1.134-.483-2.36-.084-3.084.942a.6.6 0 01-1.008-.475c.012-.663.26-1.273.687-1.748.454-.508 1.05-.838 1.713-.94.975-.15 1.882.26 2.473.97Z"
                                            fill-rule="evenodd"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mt-12 border-t border-primary/20 dark:border-primary/30 pt-8 text-center text-sm text-background-light/60">
                        <p>© 2024 Creator Hub. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
