<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inesis Portfolio</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/img/icon.jpeg') }}?v=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">

    <!-- Custom CSS (Loaded first so Tailwind utilities can override them) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- External CSS and JS via Vite (Contains Tailwind) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased text-brand-espresso selection:bg-brand-terracotta selection:text-white min-h-screen relative overflow-x-hidden">

    <!-- Aesthetic Background Blobs -->
    <div class="fixed inset-0 z-[-1] pointer-events-none overflow-hidden">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-brand-latte/30 blur-[100px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-brand-terracotta/10 blur-[120px]"></div>
        <div class="absolute top-[40%] left-[60%] w-[30%] h-[30%] rounded-full bg-brand-mocha/5 blur-[100px]"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-brand-tukucream/80 backdrop-blur-lg border-b border-brand-latte/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="flex items-center gap-3 group">
                        <div class="relative">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-brand-terracotta/30 group-hover:border-brand-terracotta transition-all duration-500 shadow-md group-hover:shadow-brand-terracotta/20 relative z-10">
                                <img src="{{ asset('assets/img/1.jpeg') }}" alt="Yunita Inesis" class="w-full h-full object-cover scale-110 group-hover:scale-125 transition-transform duration-700">
                            </div>
                            <div class="absolute inset-0 bg-brand-terracotta/20 rounded-full blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        <div class="flex flex-col items-start leading-none">
                            <span class="text-xl font-serif font-bold tracking-tight text-brand-espresso group-hover:text-brand-terracotta transition-colors">Inesis<span class="text-brand-terracotta">.</span></span>
                            <span class="text-[8px] font-sans font-bold tracking-[0.3em] uppercase text-brand-mocha opacity-70">Profile</span>
                        </div>
                    </a>
                </div>
                <!-- Nav Links: Desktop -->
                <div class="hidden xl:flex space-x-6">
                    <a href="#home" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">About</a>
                    <a href="#academic" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Academic Profile</a>
                    <a href="#education" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Education</a>
                    <a href="#skills" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Skills</a>
                    <a href="#projects" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Projects</a>
                    <a href="#experience" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Experience</a>
                    <a href="#certificates" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Certificates</a>
                    <a href="#targets" class="nav-link text-sm font-medium hover:text-brand-terracotta transition-all relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-brand-terracotta after:transition-all hover:after:w-full">Targets</a>
                </div>
                <div class="hidden xl:flex">
                    <a href="#contact" class="portfolio-btn px-6 py-2.5 rounded-full text-sm">Contact Me</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="xl:hidden flex items-center p-2 text-brand-espresso hover:text-brand-terracotta transition-colors z-[60]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" class="block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed inset-0 z-50 bg-brand-tukucream/98 backdrop-blur-xl translate-x-full transition-transform duration-500 ease-in-out xl:hidden flex flex-col">
            <div class="flex flex-col items-center justify-center h-full gap-8 px-6 text-center overflow-y-auto pt-24 pb-12">
                <a href="#home" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">About</a>
                <a href="#academic" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Academic Profile</a>
                <a href="#education" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Education</a>
                <a href="#skills" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Skills</a>
                <a href="#projects" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Projects</a>
                <a href="#experience" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Experience</a>
                <a href="#certificates" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Certificates</a>
                <a href="#targets" class="mobile-nav-link text-2xl font-serif font-bold text-brand-espresso hover:text-brand-terracotta transition-colors">Targets</a>
                <a href="#contact" class="portfolio-btn px-10 py-4 rounded-full text-lg mt-4">Contact Me</a>

                <div class="mt-8 flex gap-6">
                    <a href="https://github.com/yunitainesis" class="text-brand-espresso hover:text-brand-terracotta transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                    </a>
                    <a href="mailto:yunitaines5@gmail.com" class="text-brand-espresso hover:text-brand-terracotta transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section id="home" class="relative pt-28 pb-20 lg:pt-40 lg:pb-32 flex items-center min-h-[80vh]">
            <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20 flex flex-col lg:flex-row items-center gap-16 relative z-10 w-full">
                <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 mb-8 text-brand-terracotta">
                        <svg class="w-6 h-6 animate-[spin_6s_linear_infinite]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <span class="font-serif italic font-bold tracking-widest text-sm text-brand-espresso uppercase">Creative Developer</span>
                        <svg class="w-6 h-6 animate-[spin_6s_linear_infinite]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold font-serif leading-tight mb-6 text-brand-espresso">
                        Hi, I'm <br>
                        <span class="italic text-brand-terracotta">Yunita Inesis Putri Cahyani</span>
                    </h1>
                    <p class="text-lg text-brand-mocha mb-10 max-w-xl font-medium leading-relaxed">
                        A 4th-semester Software Engineering Technology student at Politeknik Indonusa Surakarta with a deep passion for web and desktop application development. I possess foundational experience in PHP, JavaScript, and Python to build lightweight applications, and I am committed to learning new technologies in an industrial environment.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                        <a href="#projects" class="portfolio-btn inline-flex justify-center items-center px-8 py-4 rounded-full text-base">
                            Explore Projects
                        </a>
                        <a href="#about" class="inline-flex justify-center items-center px-8 py-4 border border-brand-espresso text-base font-semibold rounded-full text-brand-espresso hover:bg-brand-espresso hover:text-white transition-all shadow-sm hover:shadow-md">
                            More About Me
                        </a>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 flex justify-center relative mt-10 lg:mt-0">
                    <!-- Modern Aesthetic Photo Display -->
                    <div class="relative w-72 h-[26rem] lg:w-[26rem] lg:h-[30rem] group">
                        <!-- Aesthetic Blob Background Layer -->
                        <div class="absolute inset-0 bg-brand-latte/50 blob-shape scale-105 blur-sm transition-transform duration-700 group-hover:scale-110"></div>
                        
                        <!-- Image Container with Blob Shape -->
                        <div class="absolute inset-0 overflow-hidden z-10 bg-white blob-shape shadow-xl">
                            <!-- Slider Track -->
                            <div id="hero-slider-track" class="flex w-full h-full transition-transform duration-1000 ease-in-out">
                                <!-- Slide 1 -->
                                <img src="assets/img/1.jpeg" alt="foto 1" class="w-full h-full object-cover shrink-0">
                                <!-- Slide 2 -->
                                <img src="assets/img/2.jpeg" alt="foto 2" class="w-full h-full object-cover shrink-0">
                                <!-- Slide 3 -->
                                <img src="assets/img/3.jpeg" alt="foto 3" class="w-full h-full object-cover shrink-0">
                            </div>
                        </div>

                        <!-- Floating Badge -->
                        <div class="portfolio-badge absolute bottom-4 -left-2 sm:-left-4 lg:bottom-10 lg:-left-10 z-20 px-5 py-3 sm:px-6 sm:py-4 rounded-2xl sm:rounded-3xl flex items-center gap-3 sm:gap-4 hover:-translate-y-2 transition-transform duration-500 backdrop-blur-md bg-white/90">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full border border-brand-latte flex items-center justify-center text-brand-terracotta bg-brand-tukucream shadow-sm">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" /></svg>
                            </div>
                            <div>
                                <p class="text-[10px] sm:text-xs text-brand-mocha font-bold uppercase tracking-wider">Status</p>
                                <p class="text-xs sm:text-sm lg:text-base text-brand-espresso font-bold">4th Semester Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-24 relative">
            <div class="max-w-4xl mx-auto px-6 sm:px-12 text-center">
                <h3 class="text-3xl md:text-5xl font-serif font-bold text-brand-espresso leading-tight mb-8">
                    \"I believe in blending <span class="italic text-brand-terracotta">aesthetic design</span> with robust engineering to create meaningful digital experiences.\"
                </h3>
                <p class="text-brand-mocha text-lg leading-relaxed max-w-3xl mx-auto">
                    Currently pursuing my studies in Software Engineering Technology, I enjoy tackling complex problems and transforming them into simple, beautiful, and intuitive interfaces. My journey involves continuous learning, exploring new frameworks, and contributing to projects that challenge my current skill set.
                </p>
            </div>
        </section>

        <!-- Academic Profile -->
        <section id="academic" class="py-24 relative bg-white/50 backdrop-blur-sm border-y border-brand-latte/30">
            <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
                <div class="mb-16 text-center lg:text-left">
                    <h2 class="text-4xl font-bold font-serif mb-4"><span class="italic text-brand-terracotta">Academic</span> Profile.</h2>
                    <p class="text-brand-mocha max-w-2xl font-medium">My current academic journey and core details.</p>
                </div>
                
                <!-- Bento Grid Layout -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-fr">
                    <!-- Full Name -->
                    <div class="portfolio-card p-6 sm:p-8 lg:col-span-2 flex flex-col justify-between bg-brand-tukucream relative overflow-hidden group border-none shadow-sm">
                        <div class="absolute right-[-10%] top-[-20%] w-64 h-64 bg-brand-latte/20 rounded-full blur-3xl group-hover:scale-110 transition-transform duration-700"></div>
                        <div class="relative z-10">
                            <div class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center mb-6 text-brand-espresso group-hover:-translate-y-1 transition-transform border border-brand-latte/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <h3 class="text-xs uppercase tracking-[0.2em] text-brand-mocha font-bold mb-2">Full Name</h3>
                            <p class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-brand-espresso">Yunita Inesis Putri Cahyani</p>
                        </div>
                    </div>

                    <!-- GPA -->
                    <div class="portfolio-card p-6 sm:p-8 bg-brand-terracotta text-white border-none flex flex-col justify-center items-center text-center relative overflow-hidden group shadow-lg shadow-brand-terracotta/20">
                        <svg class="absolute -right-4 -top-4 w-32 h-32 text-white/10 group-hover:rotate-90 transition-transform duration-1000" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z" />
                        </svg>
                        <h3 class="text-xs uppercase tracking-[0.2em] text-white/80 font-bold mb-2 relative z-10">IPK/GPA</h3>
                        <p class="text-5xl sm:text-6xl font-serif font-bold relative z-10 drop-shadow-sm">3.8</p>
                        <p class="text-sm font-medium mt-2 text-white/90 relative z-10">Semester 3</p>
                    </div>

                    <!-- Semester & Major -->
                    <div class="portfolio-card p-6 sm:p-8 bg-white border-none shadow-sm flex flex-col justify-between group">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-12 h-12 rounded-2xl bg-brand-tukucream flex items-center justify-center text-brand-espresso group-hover:-translate-y-1 transition-transform border border-brand-latte/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            </div>
                            <span class="text-2xl sm:text-3xl font-serif font-bold text-brand-terracotta">Sem. 4</span>
                        </div>
                        <div>
                            <h3 class="text-xs uppercase tracking-[0.2em] text-brand-mocha font-bold mb-2">Study Program</h3>
                            <p class="text-lg sm:text-xl font-bold text-brand-espresso leading-snug">Software Engineering Technology</p>
                        </div>
                    </div>

                    <!-- Institution -->
                    <div class="portfolio-card p-6 sm:p-8 lg:col-span-2 bg-brand-latte/20 border-none shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6 group">
                        <div class="flex items-start gap-6">
                            <div class="w-16 h-16 rounded-3xl bg-white flex items-center justify-center text-brand-espresso shadow-sm shrink-0 group-hover:-translate-y-1 transition-transform border border-brand-latte/30">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <div>
                                <h3 class="text-xs uppercase tracking-[0.2em] text-brand-mocha font-bold mb-2">Educational Institution</h3>
                                <p class="text-xl sm:text-2xl md:text-3xl font-serif font-bold text-brand-espresso">Politeknik Indonusa Surakarta</p>
                                <p class="text-brand-terracotta font-semibold mt-1">Surakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education History -->
        <section id="education" class="py-24 relative overflow-hidden">
            <div class="max-w-4xl mx-auto px-6 sm:px-12 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold font-serif mb-4"><span class="italic text-brand-terracotta">Education</span> History.</h2>
                    <p class="text-brand-mocha font-medium">My academic background and formal education.</p>
                </div>
                
                <div class="space-y-10 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-brand-latte">
                    
                    @foreach($educations as $edu)
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group {{ $loop->first ? 'is-active' : '' }}">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border border-brand-latte {{ $loop->first ? 'bg-white text-brand-terracotta' : 'bg-white text-brand-espresso' }} shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                            @if($loop->first)
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                            @else
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            @endif
                        </div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] p-6 rounded-2xl {{ $loop->first ? 'bg-white shadow-sm border border-brand-latte/50 group-hover:shadow-md transition-shadow' : 'bg-brand-tukucream/50 border border-brand-latte/30 group-hover:bg-white group-hover:shadow-sm transition-all' }}">
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-bold font-serif text-xl text-brand-espresso">{{ $edu->school_name }}</h4>
                            </div>
                            <p class="{{ $loop->first ? 'text-brand-terracotta' : 'text-brand-mocha' }} font-semibold mb-2">{{ $edu->degree }}</p>
                            <p class="text-sm {{ $loop->first ? 'text-brand-mocha' : 'text-brand-mocha/70' }} font-medium">{{ $edu->start_year }} - {{ $edu->end_year ?? 'Present' }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Technical Skills -->
        <section id="skills" class="py-24 relative">
            <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold font-serif mb-4">Core <span class="italic text-brand-terracotta">Skills</span>.</h2>
                    <p class="text-brand-espresso max-w-2xl mx-auto font-medium">Technologies and skills I have developed.</p>
                </div>
                
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach($skills as $skill)
                    <div class="portfolio-badge px-6 py-3 rounded-full flex items-center gap-3 font-semibold hover:-translate-y-1 transition-transform {{ $skill->type === 'soft' ? 'text-brand-terracotta border-brand-terracotta bg-brand-terracotta/5' : 'text-brand-espresso bg-white' }}">
                        {{ $skill->name }}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Portofolio Project -->
        <section id="projects" class="py-24 relative bg-white/50 backdrop-blur-sm border-y border-brand-latte/30">
            <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                    <div>
                        <h2 class="text-4xl font-bold font-serif mb-4">Academic & <span class="italic text-brand-terracotta">Portfolio Projects</span>.</h2>
                        <p class="text-brand-mocha font-medium max-w-xl">A curated collection of my work, blending intuitive design with solid engineering.</p>
                    </div>
                </div>
                
                <div class="space-y-24">
                    @foreach($projects as $index => $project)
                    <div class="flex flex-col {{ $index % 2 != 0 ? 'lg:flex-row-reverse' : 'lg:flex-row' }} gap-12 items-center group">
                        <div class="w-full lg:w-3/5">
                            <div class="portfolio-card overflow-hidden border-none shadow-lg">
                                @if(Str::startsWith($project->image_url, ['http://', 'https://']))
                                    <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-[24rem] object-cover group-hover:scale-105 transition-all duration-700">
                                @else
                                    <img src="{{ asset($project->image_url) }}" alt="{{ $project->title }}" class="w-full h-[24rem] object-cover group-hover:scale-105 transition-all duration-700">
                                @endif
                            </div>
                        </div>
                        <div class="w-full lg:w-2/5 flex flex-col justify-center {{ $index % 2 != 0 ? 'lg:items-end lg:text-right' : '' }}">
                            <div class="flex gap-2 mb-6">
                                <span class="px-3 py-1 text-xs font-semibold tracking-wider bg-brand-latte/30 rounded-full text-brand-espresso">{{ $project->category }}</span>
                                <span class="px-3 py-1 text-xs font-semibold tracking-wider bg-brand-terracotta/10 rounded-full text-brand-terracotta">{{ $project->tech_stack }}</span>
                            </div>
                            <h3 class="text-3xl font-bold font-serif mb-4 text-brand-espresso">{{ $project->title }}</h3>
                            <p class="text-brand-mocha mb-8 font-medium leading-relaxed text-lg">
                                {{ $project->description }}
                            </p>
                            <a href="{{ $project->github_link ?? '#' }}" target="_blank" class="inline-flex items-center gap-3 px-6 py-3 rounded-full bg-white border border-brand-latte text-brand-espresso font-bold text-sm hover:bg-brand-espresso hover:text-white transition-all shadow-sm hover:shadow-md group/btn">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                                View on GitHub
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Experience (Org & Volunteer) -->
        <section id="experience" class="py-24 relative">
            <div class="max-w-5xl mx-auto px-6 sm:px-12">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold font-serif mb-4"><span class="italic text-brand-terracotta">Experience</span> & Volunteer.</h2>
                    <p class="text-brand-mocha font-medium">My active involvement in organizations and community events.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($experiences as $experience)
                    <div class="portfolio-card p-8 bg-white border border-brand-latte/30 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 {{ $loop->iteration % 2 == 0 ? 'bg-brand-latte/30' : 'bg-brand-tukucream' }} rounded-bl-full -z-10 group-hover:scale-125 transition-transform duration-500"></div>
                        <h3 class="text-2xl font-bold font-serif text-brand-espresso mb-2">{{ $experience->title }}</h3>
                        <p class="inline-block px-3 py-1 {{ $loop->iteration % 2 == 0 ? 'bg-brand-latte/50 text-brand-espresso' : 'bg-brand-terracotta/10 text-brand-terracotta' }} text-xs font-bold uppercase tracking-wider rounded-full mb-4">{{ $experience->role }} • {{ $experience->year }}</p>
                        <p class="text-brand-mocha text-sm leading-relaxed">
                            {{ $experience->description }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Certificates Section -->
        <section id="certificates" class="py-24 relative bg-white/30 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 sm:px-12 lg:px-20">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold font-serif mb-4">My <span class="italic text-brand-terracotta">Certificates</span>.</h2>
                    <p class="text-brand-mocha font-medium">Recognition and participation in professional development.</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Certificate 1: Peserta Workshop -->
                    <div class="portfolio-card overflow-hidden bg-white border border-brand-latte/30 shadow-sm hover:shadow-xl transition-all duration-500 group">
                        <div class="relative h-64 bg-brand-latte/20 overflow-hidden">
                            <!-- PDF Preview via Iframe (Best effort for \"foto\" feel with PDF) -->
                            <iframe src="{{ asset('assets/img/peserta_workshop.pdf#toolbar=0&navpanes=0&scrollbar=0') }}" class="w-full h-full border-none" loading="lazy"></iframe>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-tukucream flex items-center justify-center text-brand-espresso">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold font-serif text-brand-espresso">Seminar Certificate</h3>
                            </div>
                            <p class="text-brand-mocha text-sm leading-relaxed mb-6">
                                Participation certificate for the workshop/seminar, recognizing active engagement and skills acquired.
                            </p>
                            <a href="{{ asset('assets/img/peserta_workshop.pdf') }}" target="_blank" class="inline-flex items-center text-brand-terracotta font-bold text-sm hover:gap-2 transition-all">
                                Open Document <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Certificate 2: Panitia Workshop -->
                    <div class="portfolio-card overflow-hidden bg-white border border-brand-latte/30 shadow-sm hover:shadow-xl transition-all duration-500 group">
                        <div class="relative h-64 bg-brand-latte/20 overflow-hidden">
                            <!-- PDF Preview via Iframe -->
                            <iframe src="{{ asset('assets/img/panitia_workshop.pdf#toolbar=0&navpanes=0&scrollbar=0') }}" class="w-full h-full border-none" loading="lazy"></iframe>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-latte/30 flex items-center justify-center text-brand-espresso">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold font-serif text-brand-espresso">Workshop Committee</h3>
                            </div>
                            <p class="text-brand-mocha text-sm leading-relaxed mb-6">
                                Recognition for contribution and leadership as part of the organizing committee for technical workshops.
                            </p>
                            <a href="{{ asset('assets/img/panitia_workshop.pdf') }}" target="_blank" class="inline-flex items-center text-brand-terracotta font-bold text-sm hover:gap-2 transition-all">
                                Open Document <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Certificate 3: Seminar AI USAHID -->
                    <div class="portfolio-card overflow-hidden bg-white border border-brand-latte/30 shadow-sm hover:shadow-xl transition-all duration-500 group">
                        <div class="relative h-64 bg-brand-latte/20 overflow-hidden">
                            <!-- PDF Preview via Iframe -->
                            <iframe src="{{ asset('assets/img/seminar AI USAHID.pdf#toolbar=0&navpanes=0&scrollbar=0') }}" class="w-full h-full border-none" loading="lazy"></iframe>
                        </div>
                        <div class="p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 rounded-xl bg-brand-terracotta/20 flex items-center justify-center text-brand-espresso">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                                        <path d="m5 3 1 2.5L8.5 6 6 7 5 9.5 4 7 1.5 6 4 5.5z" />
                                        <path d="m19 17 1 2.5 2.5.5-2.5 1-1 2.5-1-2.5-2.5-1 2.5-1z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold font-serif text-brand-espresso">AI Seminar Participant</h3>
                            </div>
                            <p class="text-brand-mocha text-sm leading-relaxed mb-6">
                                Participation certificate for the Artificial Intelligence Seminar hosted by Universitas Sahid (USAHID), recognizing knowledge acquired in AI technology.
                            </p>
                            <a href="{{ asset('assets/img/seminar AI USAHID.pdf') }}" target="_blank" class="inline-flex items-center text-brand-terracotta font-bold text-sm hover:gap-2 transition-all">
                                Open Document <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Target Magang -->
        <section id="targets" class="py-24 relative bg-brand-tukucream/50 border-t border-brand-latte/30">
            <div class="max-w-6xl mx-auto px-6 sm:px-12 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold font-serif mb-4">Targets After <span class="italic text-brand-terracotta">Internship</span>.</h2>
                    <p class="text-brand-mocha font-medium max-w-xl mx-auto">Projects I aim to build and implement applying my internship experience.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @php
                        $icons = [
                            'calculator' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>',
                            'money' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>',
                            'building' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>',
                            'default' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>'
                        ];
                    @endphp
                    @foreach($targets as $target)
                    <div class="p-8 rounded-3xl bg-white shadow-sm border border-brand-latte/50 hover:shadow-lg hover:-translate-y-2 transition-all duration-300">
                        <div class="w-14 h-14 {{ $loop->iteration % 2 == 0 ? 'bg-brand-latte/40 text-brand-espresso' : 'bg-brand-terracotta/10 text-brand-terracotta' }} rounded-2xl flex items-center justify-center mb-6 border {{ $loop->iteration % 2 == 0 ? 'border-brand-latte' : 'border-brand-terracotta/20' }}">
                            {!! $icons[$target->icon] ?? $icons['default'] !!}
                        </div>
                        <h4 class="text-xl font-bold font-serif mb-3 text-brand-espresso">{{ $target->title }}</h4>
                        <p class="text-sm text-brand-mocha leading-relaxed">
                            {{ $target->description }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 relative overflow-hidden">
            <!-- Background aesthetic -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-3xl h-[400px] bg-brand-latte/20 blur-[120px] rounded-full z-[-1]"></div>
            
            <div class="max-w-4xl mx-auto px-6 sm:px-12">
                <div class="bg-white/60 backdrop-blur-xl p-10 md:p-16 text-center rounded-[3rem] border border-brand-latte/50 shadow-xl">
                    <h2 class="text-4xl md:text-5xl font-bold font-serif mb-6">Let's <span class="italic text-brand-terracotta">Connect.</span></h2>
                    <p class="text-brand-mocha mb-10 max-w-lg mx-auto text-lg">
                        I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <a href="mailto:yunitaines5@gmail.com" class="flex items-center gap-3 px-8 py-4 bg-brand-espresso text-white rounded-full font-medium hover:bg-brand-terracotta transition-colors shadow-lg hover:shadow-xl hover:-translate-y-1 w-full sm:w-auto justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Email Me
                        </a>
                        <a href="https://github.com/yunitainesis" target="_blank" class="flex items-center gap-3 px-8 py-4 bg-white text-brand-espresso border border-brand-latte rounded-full font-medium hover:bg-brand-tukucream transition-colors shadow-sm hover:shadow-md hover:-translate-y-1 w-full sm:w-auto justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.578 9.578 0 0112 6.836c.85.004 1.705.114 2.504.336 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.578.688.48C19.138 20.161 22 16.418 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                            GitHub
                        </a>
                        <a href="https://wa.me/6285701225827" target="_blank" class="flex items-center gap-3 px-8 py-4 bg-[#25D366] text-white rounded-full font-medium hover:bg-[#1ebe5d] transition-colors shadow-lg hover:shadow-xl hover:-translate-y-1 w-full sm:w-auto justify-center border border-[#25D366]">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.005 2.002h-.008C6.48 2.002 2 6.482 2 12c0 1.768.455 3.428 1.258 4.887l-1.328 4.846 4.962-1.302A9.957 9.957 0 0011.997 22c5.516 0 9.998-4.48 9.998-10s-4.482-9.998-9.99-9.998zm0 18.318c-1.5 0-2.915-.389-4.148-1.077l-.297-.166-3.081.808.824-3.003-.182-.29A8.283 8.283 0 013.682 12c0-4.593 3.738-8.33 8.33-8.33 4.591 0 8.328 3.737 8.328 8.33s-3.737 8.33-8.33 8.33zm4.565-6.223c-.25-.125-1.482-.731-1.712-.815-.23-.083-.398-.125-.565.125-.167.25-.648.815-.796.982-.148.167-.297.188-.547.063-.25-.125-1.058-.39-2.015-1.242-.744-.663-1.246-1.483-1.394-1.733-.148-.25-.015-.385.11-.51.112-.112.25-.292.375-.438.125-.146.167-.25.25-.417.083-.167.042-.313-.021-.438-.063-.125-.565-1.363-.774-1.867-.203-.49-.41-.424-.565-.432-.148-.008-.316-.008-.483-.008-.167 0-.438.063-.668.313-.23.25-.878.858-.878 2.092 0 1.233.899 2.425 1.025 2.592.125.167 1.768 2.7 4.28 3.722.597.242 1.064.387 1.428.496.6.19 1.147.163 1.577.098.482-.073 1.482-.606 1.691-1.192.208-.586.208-1.088.146-1.192-.062-.104-.23-.167-.48-.292z"></path></svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-10 border-t border-brand-latte/30 bg-white/50 backdrop-blur-md text-center">
        <div class="max-w-7xl mx-auto px-6 flex flex-col items-center">
            <a href="#" class="flex items-center gap-4 mb-6 group">
                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-brand-terracotta/20 group-hover:border-brand-terracotta transition-all duration-500">
                    <img src="{{ asset('assets/img/1.jpeg') }}" alt="Yunita Inesis" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                </div>
                <div class="flex flex-col items-start leading-none">
                    <span class="text-2xl font-serif font-bold tracking-tight italic text-brand-espresso group-hover:text-brand-terracotta transition-colors">Inesis<span class="text-brand-terracotta">.</span></span>
                    <span class="text-[9px] font-sans font-bold tracking-[0.2em] uppercase text-brand-mocha mt-1">Profile</span>
                </div>
            </a>
            <p class="text-sm text-brand-mocha font-medium">&copy; 2026 Yunita Inesis. Crafted with Laravel & CSS.</p>
        </div>
    </footer>

    <!-- Slider & ScrollSpy & Mobile Menu Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Slider Logic
            let currentSlide = 0;
            const track = document.getElementById('hero-slider-track');
            
            if(track) {
                const slidesCount = track.children.length;
                setInterval(() => {
                    currentSlide = (currentSlide + 1) % slidesCount;
                    track.style.transform = `translateX(-${currentSlide * 100}%)`;
                }, 3000);
            }

            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

            const toggleMenu = () => {
                const isOpen = !mobileMenu.classList.contains('translate-x-full');
                if (isOpen) {
                    mobileMenu.classList.add('translate-x-full');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    document.body.style.overflow = '';
                } else {
                    mobileMenu.classList.remove('translate-x-full');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            };

            mobileMenuBtn?.addEventListener('click', toggleMenu);
            mobileNavLinks.forEach(link => link.addEventListener('click', toggleMenu));

            // ScrollSpy Logic
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            const nav = document.querySelector('nav');

            // Add shadow to nav on scroll
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-sm');
                } else {
                    nav.classList.remove('shadow-sm');
                }

                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.scrollY >= (sectionTop - 250)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('text-brand-terracotta', 'after:w-full');
                    if (current && link.getAttribute('href').substring(1) === current) {
                        link.classList.add('text-brand-terracotta', 'after:w-full');
                    }
                });
            });
        });
    </script>
</body>
</html>
