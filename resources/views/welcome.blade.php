@extends('layouts.app')

@section('title', config('app.name', 'Laravel') . ' - Modern Web Application')
@section('meta_description', 'Welcome to our Laravel application powered by Bootstrap. Build something amazing with PHP and the most popular CSS framework.')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 36px; height: 36px; background: linear-gradient(135deg, #6366f1, #764ba2);">
                    <i class="bi bi-code-slash text-white" style="font-size: 1.1rem;"></i>
                </div>
                <span>{{ config('app.name', 'Laravel') }}</span>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#stack">Tech Stack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="#get-started">Get Started</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item ms-lg-2">
                                <a href="{{ url('/dashboard') }}" class="btn btn-light btn-sm px-3 py-2 fw-semibold rounded-pill">
                                    <i class="bi bi-grid-fill me-1"></i> Dashboard
                                </a>
                            </li>
                        @else
                            <li class="nav-item ms-lg-2">
                                <a href="{{ route('login') }}" class="nav-link px-3">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-light btn-sm px-3 py-2 fw-semibold rounded-pill">
                                        Register
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center text-white" style="padding-top: 100px;">
        {{-- Animated Dots --}}
        <div class="animated-dots">
            @for ($i = 0; $i < 20; $i++)
                <div class="dot"></div>
            @endfor
        </div>

        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="floating-badge d-inline-block mb-4">
                        <span class="badge rounded-pill px-3 py-2" style="background: rgba(255,255,255,0.15); backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.2);">
                            <i class="bi bi-lightning-charge-fill text-warning me-1"></i>
                            Laravel + Bootstrap
                        </span>
                    </div>

                    <h1 class="display-3 fw-bold mb-4 gradient-text" style="line-height: 1.1;">
                        Build Modern
                        <br>Web Apps
                        <span class="d-block" style="background: linear-gradient(135deg, #fbbf24, #f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Faster</span>
                    </h1>

                    <p class="lead mb-4 opacity-75" style="font-size: 1.15rem; line-height: 1.8;">
                        The perfect combination of Laravel's powerful backend with Bootstrap's responsive UI framework. Create stunning, scalable applications with ease.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://laravel.com/docs" target="_blank" class="btn btn-light btn-lg px-4 py-3 fw-semibold btn-glow rounded-pill">
                            <i class="bi bi-book me-2"></i>Documentation
                        </a>
                        <a href="#get-started" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold rounded-pill">
                            <i class="bi bi-rocket-takeoff me-2"></i>Get Started
                        </a>
                    </div>

                    <div class="d-flex align-items-center gap-4 mt-5">
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex">
                                <span class="badge bg-success rounded-circle p-1"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <span class="opacity-75 small">MVC Architecture</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex">
                                <span class="badge bg-success rounded-circle p-1"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <span class="opacity-75 small">Responsive Design</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex">
                                <span class="badge bg-success rounded-circle p-1"><i class="bi bi-check-lg"></i></span>
                            </div>
                            <span class="opacity-75 small">Secure by Default</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="glass-card p-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <div class="rounded-circle" style="width: 12px; height: 12px; background: #ef4444;"></div>
                            <div class="rounded-circle" style="width: 12px; height: 12px; background: #f59e0b;"></div>
                            <div class="rounded-circle" style="width: 12px; height: 12px; background: #10b981;"></div>
                            <span class="ms-2 small opacity-50">welcome.blade.php</span>
                        </div>
                        <div class="code-block">
                            <div><span class="code-comment">// Your first Laravel route</span></div>
                            <div class="mt-1">
                                <span class="code-function">Route</span>::<span class="code-function">get</span>(<span class="code-string">'/'</span>, <span class="code-keyword">function</span> () {
                            </div>
                            <div class="ps-4">
                                <span class="code-keyword">return</span> <span class="code-function">view</span>(<span class="code-string">'welcome'</span>);
                            </div>
                            <div>});</div>
                            <div class="mt-3"><span class="code-comment">// Eloquent ORM is beautiful</span></div>
                            <div class="mt-1">
                                <span class="code-variable">$users</span> = <span class="code-function">User</span>::<span class="code-function">where</span>(<span class="code-string">'active'</span>, <span class="code-keyword">true</span>)
                            </div>
                            <div class="ps-4">-><span class="code-function">orderBy</span>(<span class="code-string">'name'</span>)</div>
                            <div class="ps-4">-><span class="code-function">get</span>();</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section id="features" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                    <i class="bi bi-stars me-1"></i> Features
                </span>
                <h2 class="display-5 fw-bold text-dark">Everything You Need</h2>
                <p class="lead text-muted mx-auto" style="max-width: 600px;">
                    Powerful tools and features to help you build amazing web applications quickly and efficiently.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(99,102,241,0.1), rgba(99,102,241,0.2));">
                                <i class="bi bi-shield-lock-fill text-primary"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Authentication</h5>
                            <p class="text-muted mb-0">Built-in authentication system with login, registration, and password reset functionality out of the box.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(16,185,129,0.1), rgba(16,185,129,0.2));">
                                <i class="bi bi-database-fill text-success"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Eloquent ORM</h5>
                            <p class="text-muted mb-0">Beautiful, expressive database abstraction layer. Work with your data using clean, readable PHP syntax.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(245,158,11,0.1), rgba(245,158,11,0.2));">
                                <i class="bi bi-lightning-charge-fill text-warning"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Blazing Fast</h5>
                            <p class="text-muted mb-0">Optimized for performance with route caching, view caching, and built-in query optimization tools.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(239,68,68,0.1), rgba(239,68,68,0.2));">
                                <i class="bi bi-phone-fill text-danger"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Responsive UI</h5>
                            <p class="text-muted mb-0">Bootstrap's responsive grid and components ensure your app looks stunning on every device size.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(6,182,212,0.1), rgba(6,182,212,0.2));">
                                <i class="bi bi-gear-wide-connected text-info"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Artisan CLI</h5>
                            <p class="text-muted mb-0">Powerful command-line tools to generate code, run migrations, manage queues, and automate tasks.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100 p-4">
                        <div class="card-body p-0">
                            <div class="feature-icon" style="background: linear-gradient(135deg, rgba(168,85,247,0.1), rgba(168,85,247,0.2));">
                                <i class="bi bi-puzzle-fill" style="color: #a855f7;"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Rich Ecosystem</h5>
                            <p class="text-muted mb-0">Thousands of packages available via Composer and npm. Extend your app's capabilities effortlessly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="section-padding" style="background: #f8fafc;">
        <div class="container">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="card stats-card p-4 text-center h-100">
                        <div class="card-body p-0">
                            <div class="stats-number">50M+</div>
                            <p class="text-muted mb-0 fw-medium">Downloads</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stats-card p-4 text-center h-100">
                        <div class="card-body p-0">
                            <div class="stats-number">78K+</div>
                            <p class="text-muted mb-0 fw-medium">GitHub Stars</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stats-card p-4 text-center h-100">
                        <div class="card-body p-0">
                            <div class="stats-number">400+</div>
                            <p class="text-muted mb-0 fw-medium">Contributors</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card stats-card p-4 text-center h-100">
                        <div class="card-body p-0">
                            <div class="stats-number">12+</div>
                            <p class="text-muted mb-0 fw-medium">Years Active</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tech Stack Section --}}
    <section id="stack" class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3">
                    <i class="bi bi-stack me-1"></i> Tech Stack
                </span>
                <h2 class="display-5 fw-bold text-dark">Powered By The Best</h2>
                <p class="lead text-muted">This project is built with reliable, battle-tested technologies.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                        <div class="card-body">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff2d20, #e7342f);">
                                <i class="bi bi-code-slash text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h4 class="fw-bold">Laravel</h4>
                            <p class="text-muted">The PHP framework for web artisans. Elegant syntax, powerful tools, and robust architecture.</p>
                            <a href="https://laravel.com/docs" target="_blank" class="btn btn-outline-danger btn-sm rounded-pill px-3">
                                Learn More <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                        <div class="card-body">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background: linear-gradient(135deg, #7952b3, #6f42c1);">
                                <i class="bi bi-bootstrap-fill text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h4 class="fw-bold">Bootstrap 5</h4>
                            <p class="text-muted">The world's most popular CSS framework. Responsive, mobile-first, and component-rich.</p>
                            <a href="https://getbootstrap.com/docs" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                Learn More <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                        <div class="card-body">
                            <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background: linear-gradient(135deg, #646cff, #9747ff);">
                                <i class="bi bi-lightning-fill text-white" style="font-size: 2rem;"></i>
                            </div>
                            <h4 class="fw-bold">Vite</h4>
                            <p class="text-muted">Next generation frontend tooling. Lightning fast HMR and optimized production builds.</p>
                            <a href="https://vitejs.dev" target="_blank" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                                Learn More <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Get Started Section --}}
    <section id="get-started" class="section-padding" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <span class="badge rounded-pill bg-white bg-opacity-10 text-white px-3 py-2 mb-4">
                        <i class="bi bi-rocket-takeoff-fill me-1"></i> Quick Start
                    </span>
                    <h2 class="display-5 fw-bold text-white mb-4">Ready to Build?</h2>
                    <p class="lead text-white opacity-75 mb-5">
                        Start building your next project with these simple commands.
                    </p>

                    <div class="glass-card p-4 text-start mb-5">
                        <div class="code-block mb-0" style="background: rgba(0,0,0,0.3);">
                            <div class="d-flex align-items-center gap-2 mb-3 opacity-50">
                                <i class="bi bi-terminal-fill"></i>
                                <span class="small">Terminal</span>
                            </div>
                            <div><span class="code-comment"># Install dependencies</span></div>
                            <div class="mt-1">$ <span class="code-function">composer</span> install</div>
                            <div>$ <span class="code-function">npm</span> install</div>
                            <div class="mt-3"><span class="code-comment"># Set up environment</span></div>
                            <div class="mt-1">$ <span class="code-function">cp</span> .env.example .env</div>
                            <div>$ <span class="code-function">php</span> artisan key:generate</div>
                            <div class="mt-3"><span class="code-comment"># Run the application</span></div>
                            <div class="mt-1">$ <span class="code-function">php</span> artisan serve</div>
                            <div>$ <span class="code-function">npm</span> run dev</div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <a href="https://laravel.com/docs" target="_blank" class="btn btn-primary btn-lg px-4 py-3 rounded-pill fw-semibold">
                            <i class="bi bi-book me-2"></i>Read the Docs
                        </a>
                        <a href="https://laracasts.com" target="_blank" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-semibold">
                            <i class="bi bi-play-circle me-2"></i>Watch Tutorials
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="d-flex align-items-center justify-content-center rounded-3" style="width: 36px; height: 36px; background: linear-gradient(135deg, #6366f1, #764ba2);">
                            <i class="bi bi-code-slash text-white" style="font-size: 1.1rem;"></i>
                        </div>
                        <span class="text-white fw-bold fs-5">{{ config('app.name', 'Laravel') }}</span>
                    </div>
                    <p class="text-white opacity-50 mb-0">
                        A modern Laravel application built with Bootstrap 5, Vite, and SASS for a premium development experience.
                    </p>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="text-white fw-semibold mb-3">Resources</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="https://laravel.com/docs" target="_blank" class="text-white opacity-50 text-decoration-none small">Documentation</a></li>
                        <li class="mb-2"><a href="https://laracasts.com" target="_blank" class="text-white opacity-50 text-decoration-none small">Laracasts</a></li>
                        <li class="mb-2"><a href="https://laravel-news.com" target="_blank" class="text-white opacity-50 text-decoration-none small">Laravel News</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="text-white fw-semibold mb-3">Ecosystem</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><a href="https://forge.laravel.com" target="_blank" class="text-white opacity-50 text-decoration-none small">Forge</a></li>
                        <li class="mb-2"><a href="https://vapor.laravel.com" target="_blank" class="text-white opacity-50 text-decoration-none small">Vapor</a></li>
                        <li class="mb-2"><a href="https://nova.laravel.com" target="_blank" class="text-white opacity-50 text-decoration-none small">Nova</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h6 class="text-white fw-semibold mb-3">Stay Connected</h6>
                    <div class="d-flex gap-2">
                        <a href="https://github.com/laravel/laravel" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://twitter.com/laaboravel" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://discord.gg/laravel" target="_blank" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-discord"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-4 opacity-10">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <p class="text-white opacity-50 small mb-0">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Built with <i class="bi bi-heart-fill text-danger"></i> using Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                </p>
                <p class="text-white opacity-50 small mb-0">
                    PHP v{{ PHP_VERSION }}
                </p>
            </div>
        </div>
    </footer>
@endsection
