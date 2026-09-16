<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Fintech Ledger') — CryptoSecure SMKN 2 Tabanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Glassmorphism Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="{{ url('/') }}" class="brand-wrapper">
                <div class="brand-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div class="brand">
                    <span>Crypto<span style="color: var(--cyan);">Secure</span></span>
                    <span class="sub-brand">Academic Ledger & Vault</span>
                </div>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-item {{ request()->is('/') || request()->is('fintech') ? 'active' : '' }}">
                    <i class="fa-solid fa-chart-pie"></i> Landing & Market
                </a>
                <a href="{{ route('siswa.index') }}" class="nav-item {{ request()->is('siswa*') ? 'active' : '' }}">
                    <i class="fa-solid fa-user-shield"></i> Data Siswa
                </a>
                <a href="{{ route('kelas.index') }}" class="nav-item {{ request()->is('kelas*') ? 'active' : '' }}">
                    <i class="fa-solid fa-layer-group"></i> Data Kelas
                </a>
            </div>

            <div style="display: flex; align-items: center; gap: 0.85rem;">
                <div class="nav-status">
                    <div class="status-dot"></div>
                    <span>Mainnet 2.4 Active</span>
                </div>
                <button class="wallet-btn" onclick="alert('Secured Hardware Wallet Connected: 0x71C85B...94F2 (EVM / Solana Multi-Chain)')">
                    <i class="fa-solid fa-wallet"></i>
                    <span>0x71C...94F2</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-check" style="font-size: 1.25rem;"></i>
                <div>
                    <strong>Action Verified:</strong> {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                <i class="fa-solid fa-triangle-exclamation" style="font-size: 1.25rem;"></i>
                <div>
                    <strong>Security Notice:</strong> {{ session('error') }}
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="errors">
                <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem; font-weight: 700;">
                    <i class="fa-solid fa-circle-xmark"></i> Validation Error Detected:
                </div>
                <ul style="margin: 0; padding-left: 1.2rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Fintech & Security Footer -->
    <footer class="app-footer">
        <div class="container footer-content">
            <div>
                <strong>CryptoSecure &trade;</strong> &copy; {{ date('Y') }} SMKN 2 Tabanan. All smart contract actions logged & immutable.
            </div>
            <div class="security-badge-footer">
                <i class="fa-solid fa-lock"></i>
                <span>256-Bit TLS | ISO/IEC 27001 Certified | Zero-Knowledge Protocol</span>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
