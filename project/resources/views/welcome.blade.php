<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoSecure | Next-Gen Decentralized Fintech & Academic Vault</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        darkBg: '#05070c',
                        darkCard: 'rgba(13, 19, 33, 0.72)',
                        neonCyan: '#06b6d4',
                        neonBlue: '#3b82f6',
                        neonEmerald: '#10b981',
                        neonPurple: '#8b5cf6',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background-color: #05070c;
            color: #f1f5f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 35%),
                radial-gradient(circle at 85% 15%, rgba(6, 182, 212, 0.12) 0%, transparent 35%),
                radial-gradient(circle at 50% 65%, rgba(139, 92, 246, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 20% 85%, rgba(16, 185, 129, 0.1) 0%, transparent 35%);
            background-attachment: fixed;
        }

        .glass-card {
            background: rgba(13, 19, 33, 0.65);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 14px 40px rgba(6, 182, 212, 0.15), 0 0 20px rgba(59, 130, 246, 0.1);
        }

        .text-gradient {
            background: linear-gradient(135deg, #38bdf8 0%, #3b82f6 50%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-purple {
            background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 50%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .glow-cyan {
            box-shadow: 0 0 25px rgba(6, 182, 212, 0.35);
        }

        .glow-blue {
            box-shadow: 0 0 25px rgba(59, 130, 246, 0.35);
        }

        .pulse-slow {
            animation: pulse-glow 3s infinite ease-in-out;
        }

        @keyframes pulse-glow {
            0%, 100% { opacity: 0.8; transform: scale(1); }
            50% { opacity: 0.3; transform: scale(1.03); }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #05070c;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col selection:bg-cyan-500 selection:text-white">

    <!-- Floating Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-[#05070c]/80 backdrop-blur-xl border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-lg shadow-lg shadow-cyan-500/30">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <span class="text-xl font-extrabold tracking-tight text-white flex items-center gap-1">
                        Crypto<span class="text-cyan-400">Secure</span>
                    </span>
                    <span class="text-[10px] tracking-widest text-cyan-400/80 uppercase font-mono block -mt-1 font-semibold">SMKN 2 Tabanan Core</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center gap-7 text-sm font-semibold text-slate-300">
                <a href="#markets" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-chart-line text-xs text-cyan-400"></i> Markets
                </a>
                <a href="#security" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-lock text-xs text-cyan-400"></i> Security Protocol
                </a>
                <a href="#wallets" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-wallet text-xs text-cyan-400"></i> Wallets
                </a>
                <a href="#trust" class="hover:text-cyan-400 transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-certificate text-xs text-cyan-400"></i> Trust & Audit
                </a>
                <a href="{{ route('siswa.index') }}" class="text-cyan-400 hover:text-cyan-300 transition-colors flex items-center gap-1.5 bg-cyan-950/40 px-3 py-1.5 rounded-lg border border-cyan-500/30">
                    <i class="fa-solid fa-database text-xs"></i> Data Siswa & Kelas
                </a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-3">
                <div class="hidden lg:flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-mono font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span>Mainnet 2.4 | TPS: 3,420</span>
                </div>

                <button onclick="openWalletModal()" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold text-sm shadow-lg shadow-cyan-500/25 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                    <i class="fa-solid fa-wallet"></i>
                    <span id="nav-wallet-text">Connect Wallet</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-36 pb-20 relative overflow-hidden">
        <!-- Ambient Glow Backdrops -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-cyan-500/15 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute top-1/3 right-10 w-[400px] h-[300px] bg-blue-600/15 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <!-- Left Column: Copy & CTAs -->
                <div class="lg:col-span-7 space-y-7 text-center lg:text-left">
                    <!-- Security Badges -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-900/80 border border-cyan-500/40 text-cyan-400 text-xs font-semibold backdrop-blur-md shadow-inner">
                        <i class="fa-solid fa-shield-virus text-sm"></i>
                        <span>Zero-Knowledge Proofs &bull; Bank-Grade Multi-Sig Vault</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-[1.12]">
                        Institutional <br>
                        <span class="text-gradient">Cryptographic Vault</span><br>
                        & Next-Gen Ledger.
                    </h1>

                    <!-- Paragraph -->
                    <p class="text-slate-400 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Secure your high-value assets and academic administrative records with military-grade cold storage, real-time market telemetry, and hardware-enforced WebAuthn authentication.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="{{ route('siswa.index') }}" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold text-sm shadow-xl shadow-cyan-500/30 transition-all transform hover:-translate-y-0.5 flex items-center gap-2.5">
                            <i class="fa-solid fa-users-gear text-base"></i>
                            <span>Buka Portal Siswa & Kelas</span>
                        </a>

                        <button onclick="openWalletModal()" class="glass-card hover:bg-white/10 px-6 py-3.5 rounded-xl text-white font-semibold text-sm transition-all flex items-center gap-2.5 border border-white/15">
                            <i class="fa-solid fa-microchip text-cyan-400"></i>
                            <span>Hardware Key Connect</span>
                        </button>
                    </div>

                    <!-- Trust Stats Counter -->
                    <div class="pt-6 grid grid-cols-3 gap-4 border-t border-white/10 max-w-lg mx-auto lg:mx-0">
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-white font-mono">$5.84B+</div>
                            <div class="text-xs text-slate-400 font-medium">Total Value Secured</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-emerald-400 font-mono">100%</div>
                            <div class="text-xs text-slate-400 font-medium">Proof of Reserves</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-cyan-400 font-mono">0.00s</div>
                            <div class="text-xs text-slate-400 font-medium">Exploit Tolerance</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Real-Time Price Preview Card -->
                <div class="lg:col-span-5 relative">
                    <!-- Layered Glow -->
                    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 blur-3xl rounded-3xl -z-10"></div>

                    <!-- Main Glass Card -->
                    <div class="glass-card rounded-3xl p-6 sm:p-7 relative border border-white/15">

                        <!-- Header with Crypto Switcher Tabs -->
                        <div class="flex items-center justify-between pb-5 border-b border-white/10">
                            <div class="flex items-center gap-3">
                                <div id="crypto-icon-box" class="w-12 h-12 rounded-2xl bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-amber-400 text-2xl">
                                    <i id="crypto-icon" class="fa-brands fa-bitcoin"></i>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 id="crypto-name" class="text-lg font-bold text-white">Bitcoin</h3>
                                        <span id="crypto-symbol" class="text-xs font-mono font-semibold px-2 py-0.5 rounded bg-white/10 text-slate-300">BTC</span>
                                    </div>
                                    <span class="text-xs text-slate-400 font-mono">Real-Time Oracle Stream</span>
                                </div>
                            </div>

                            <div class="text-right">
                                <div id="crypto-price" class="text-2xl font-black font-mono text-white tracking-tight">$64,832.10</div>
                                <div id="crypto-change" class="text-xs font-bold font-mono text-emerald-400 flex items-center justify-end gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +3.84% (24h)
                                </div>
                            </div>
                        </div>

                        <!-- Asset Switcher Tabs -->
                        <div class="flex gap-2 py-4">
                            <button onclick="switchAsset('BTC')" id="tab-BTC" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-cyan-500/20 border border-cyan-500/40 text-cyan-300 transition">BTC</button>
                            <button onclick="switchAsset('ETH')" id="tab-ETH" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">ETH</button>
                            <button onclick="switchAsset('SOL')" id="tab-SOL" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">SOL</button>
                            <button onclick="switchAsset('AVAX')" id="tab-AVAX" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">AVAX</button>
                        </div>

                        <!-- Live Chart Container -->
                        <div class="h-52 w-full pt-2">
                            <canvas id="liveHeroChart"></canvas>
                        </div>

                        <!-- Mini Metric Row -->
                        <div class="grid grid-cols-3 gap-3 pt-5 mt-4 border-t border-white/10 text-center font-mono text-xs">
                            <div class="bg-white/5 p-2 rounded-xl">
                                <span class="text-slate-400 block text-[10px] uppercase">24h High</span>
                                <span id="metric-high" class="font-bold text-white">$65,420.00</span>
                            </div>
                            <div class="bg-white/5 p-2 rounded-xl">
                                <span class="text-slate-400 block text-[10px] uppercase">24h Low</span>
                                <span id="metric-low" class="font-bold text-white">$63,890.00</span>
                            </div>
                            <div class="bg-white/5 p-2 rounded-xl">
                                <span class="text-slate-400 block text-[10px] uppercase">Volume</span>
                                <span class="font-bold text-cyan-400">$34.2B</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Mini Card 1: Cold Vault -->
                    <div class="glass-card hidden sm:flex items-center gap-3 p-3.5 rounded-2xl absolute -bottom-5 -left-8 border border-emerald-500/30 z-20 shadow-xl">
                        <div class="w-9 h-9 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-base">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-slate-400 uppercase font-mono">Air-Gapped Vault</div>
                            <div class="text-xs font-bold text-white">99.8% Assets Offline</div>
                        </div>
                    </div>

                    <!-- Floating Mini Card 2: Threat Detection -->
                    <div class="glass-card hidden sm:flex items-center gap-3 p-3.5 rounded-2xl absolute -top-5 -right-6 border border-cyan-500/30 z-20 shadow-xl">
                        <div class="w-9 h-9 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-base">
                            <i class="fa-solid fa-satellite-dish"></i>
                        </div>
                        <div>
                            <div class="text-[11px] text-slate-400 uppercase font-mono">AI Threat Shield</div>
                            <div class="text-xs font-bold text-cyan-400">0 Threat Anomalies</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Trust Tickers / Institutional Logos -->
    <section id="trust" class="py-12 border-y border-white/10 bg-slate-950/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 text-slate-400 text-xs uppercase font-mono tracking-wider">
                <div class="flex items-center gap-2 font-bold text-white">
                    <i class="fa-solid fa-circle-check text-cyan-400 text-sm"></i>
                    <span>Institutional Security Verified</span>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-8 sm:gap-12 text-slate-400 font-semibold text-sm">
                    <div class="flex items-center gap-2 hover:text-white transition">
                        <i class="fa-solid fa-shield-halved text-cyan-400"></i> CertiK Audited (99.4/100)
                    </div>
                    <div class="flex items-center gap-2 hover:text-white transition">
                        <i class="fa-solid fa-fingerprint text-emerald-400"></i> ISO/IEC 27001 Certified
                    </div>
                    <div class="flex items-center gap-2 hover:text-white transition">
                        <i class="fa-solid fa-server text-blue-400"></i> SOC 2 Type II Compliant
                    </div>
                    <div class="flex items-center gap-2 hover:text-white transition">
                        <i class="fa-solid fa-cube text-purple-400"></i> OpenZeppelin Verified
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security Features Highlight Section -->
    <section id="security" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-mono uppercase tracking-wider font-semibold">
                    <i class="fa-solid fa-lock"></i> Architecture &amp; Defense
                </div>
                <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                    Fort Knox-Grade <span class="text-gradient">Security Matrix</span>
                </h2>
                <p class="text-slate-400 text-base leading-relaxed">
                    Designed with an uncompromising zero-trust philosophy. Every private key, transaction authorization, and academic record is shielded with distributed cryptographic redundancy.
                </p>
            </div>

            <!-- Grid of 6 Security Features -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Feature 1 -->
                <div class="glass-card p-8 rounded-3xl group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center text-cyan-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-key"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        MPC Multi-Sig Vaults
                        <span class="text-[10px] font-mono text-cyan-400 px-2 py-0.5 rounded bg-cyan-950/60 border border-cyan-500/30">SHARDED</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Private keys are cryptographically fragmented using Multi-Party Computation into multiple mathematical secrets, eliminating single-point catastrophic failure.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card p-8 rounded-3xl group border-emerald-500/20">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        Air-Gapped Cold Storage
                        <span class="text-[10px] font-mono text-emerald-400 px-2 py-0.5 rounded bg-emerald-950/60 border border-emerald-500/30">OFFLINE</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        98.5% of reserves are isolated completely from internet networks within specialized hardware security modules (HSM) stored inside deep physical vaults.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card p-8 rounded-3xl group">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/15 border border-purple-500/30 flex items-center justify-center text-purple-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-user-secret"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        Zero-Knowledge Proofs
                        <span class="text-[10px] font-mono text-purple-400 px-2 py-0.5 rounded bg-purple-950/60 border border-purple-500/30">zk-SNARK</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Verify identity validity and student credential authentication mathematically without revealing underlying personal identifiable information (PII).
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card p-8 rounded-3xl group">
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-blue-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        Real-Time Anomaly Sentinel
                        <span class="text-[10px] font-mono text-blue-400 px-2 py-0.5 rounded bg-blue-950/60 border border-blue-500/30">AI GUARD</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Continuous neural network surveillance inspecting mempool transactions for reentrancy attacks, flash loan exploits, and unauthorized data tampering.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-card p-8 rounded-3xl group">
                    <div class="w-14 h-14 rounded-2xl bg-rose-500/15 border border-rose-500/30 flex items-center justify-center text-rose-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-fingerprint"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        Biometric Hardware Enclave
                        <span class="text-[10px] font-mono text-rose-400 px-2 py-0.5 rounded bg-rose-950/60 border border-rose-500/30">FIDO2</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Hardware-level authentication requiring physical biometric confirmation (Touch ID, Face ID, YubiKey) for administrative authorizations and ledger modifications.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-card p-8 rounded-3xl group">
                    <div class="w-14 h-14 rounded-2xl bg-amber-500/15 border border-amber-500/30 flex items-center justify-center text-amber-400 text-2xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-file-shield"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3 flex items-center justify-between">
                        Formally Verified Contracts
                        <span class="text-[10px] font-mono text-amber-400 px-2 py-0.5 rounded bg-amber-950/60 border border-amber-500/30">IMMUTABLE</span>
                    </h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Mathematical proof verification applied to smart contracts by top security auditing firms, guaranteeing complete immunity against logical exploits.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Wallet Integration Showcase Section -->
    <section id="wallets" class="py-24 border-t border-white/10 bg-slate-950/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-mono uppercase tracking-wider font-semibold">
                    <i class="fa-solid fa-plug"></i> Web3 Interoperability
                </div>
                <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">
                    Seamless <span class="text-gradient">Wallet Ecosystem</span>
                </h2>
                <p class="text-slate-400 text-sm sm:text-base">
                    Plug in instantly with your preferred self-custody wallet, browser extension, or physical hardware device across Ethereum, Solana, and EVM chains.
                </p>
            </div>

            <!-- Wallet Cards Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
                <!-- MetaMask -->
                <div onclick="simulateConnect('MetaMask')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-orange-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-orange-500/15 border border-orange-500/30 flex items-center justify-center text-orange-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-fox"></i>
                    </div>
                    <div class="font-bold text-white text-sm">MetaMask</div>
                    <span class="text-[11px] text-slate-400 font-mono">EVM / L2</span>
                </div>

                <!-- Phantom -->
                <div onclick="simulateConnect('Phantom')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-purple-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-purple-500/15 border border-purple-500/30 flex items-center justify-center text-purple-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-ghost"></i>
                    </div>
                    <div class="font-bold text-white text-sm">Phantom</div>
                    <span class="text-[11px] text-slate-400 font-mono">Solana / Multi</span>
                </div>

                <!-- Ledger -->
                <div onclick="simulateConnect('Ledger')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-cyan-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center text-cyan-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <div class="font-bold text-white text-sm">Ledger Hardware</div>
                    <span class="text-[11px] text-slate-400 font-mono">Cold Security</span>
                </div>

                <!-- Trezor -->
                <div onclick="simulateConnect('Trezor')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-emerald-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="font-bold text-white text-sm">Trezor Model T</div>
                    <span class="text-[11px] text-slate-400 font-mono">Air-Gapped</span>
                </div>

                <!-- Coinbase Wallet -->
                <div onclick="simulateConnect('Coinbase Wallet')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-blue-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-blue-500/15 border border-blue-500/30 flex items-center justify-center text-blue-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-circle-nodes"></i>
                    </div>
                    <div class="font-bold text-white text-sm">Coinbase</div>
                    <span class="text-[11px] text-slate-400 font-mono">Smart Wallet</span>
                </div>

                <!-- WalletConnect -->
                <div onclick="simulateConnect('WalletConnect')" class="glass-card p-6 rounded-2xl text-center cursor-pointer hover:border-sky-500/50 group">
                    <div class="w-14 h-14 mx-auto mb-3 rounded-2xl bg-sky-500/15 border border-sky-500/30 flex items-center justify-center text-sky-400 text-2xl group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-qrcode"></i>
                    </div>
                    <div class="font-bold text-white text-sm">WalletConnect</div>
                    <span class="text-[11px] text-slate-400 font-mono">350+ Wallets</span>
                </div>
            </div>

            <!-- Active Connection Banner -->
            <div id="connection-banner" class="hidden mt-8 max-w-xl mx-auto glass-card p-4 rounded-2xl border border-cyan-500/40 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></div>
                    <div>
                        <span class="text-xs text-slate-400 font-mono block">Connected via <span id="banner-wallet-name">MetaMask</span></span>
                        <span id="banner-address" class="text-sm font-mono font-bold text-cyan-400">0x71C85B3...94F2</span>
                    </div>
                </div>
                <span class="text-xs font-semibold text-emerald-400 bg-emerald-500/10 px-3 py-1 rounded-full border border-emerald-500/30">
                    <i class="fa-solid fa-shield-check mr-1"></i> Authorized
                </span>
            </div>
        </div>
    </section>

    <!-- Academic Core Ledger Integration Showcase -->
    <section class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-3xl p-8 sm:p-12 relative overflow-hidden border border-cyan-500/30">
                <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-8 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-500/15 border border-cyan-500/30 text-cyan-400 text-xs font-mono uppercase font-semibold">
                            <i class="fa-solid fa-graduation-cap"></i> SMKN 2 Tabanan Academic Vault
                        </div>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
                            Cryptographic Integrity Applied to Student Records
                        </h2>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            The same high-assurance cryptographic protocols, multi-signature access controls, and tamper-evident audit logging are integrated right here into the <strong>Data Siswa</strong> and <strong>Data Kelas</strong> databases.
                        </p>

                        <div class="flex flex-wrap gap-4 pt-2">
                            <a href="{{ route('siswa.index') }}" class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-sm shadow-lg shadow-cyan-500/30 transition flex items-center gap-2">
                                <i class="fa-solid fa-users"></i>
                                <span>Kelola Data Siswa</span>
                            </a>
                            <a href="{{ route('kelas.index') }}" class="px-6 py-3 rounded-xl bg-white/10 hover:bg-white/15 text-white font-bold text-sm transition flex items-center gap-2 border border-white/15">
                                <i class="fa-solid fa-layer-group"></i>
                                <span>Kelola Data Kelas</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col gap-3 font-mono text-xs">
                        <div class="bg-black/40 p-4 rounded-xl border border-white/10">
                            <span class="text-slate-400 block text-[10px] uppercase">Ledger Encryption</span>
                            <span class="text-emerald-400 font-bold text-sm">AES-256-GCM Multi-Sig</span>
                        </div>
                        <div class="bg-black/40 p-4 rounded-xl border border-white/10">
                            <span class="text-slate-400 block text-[10px] uppercase">Verification Hash</span>
                            <span class="text-cyan-400 font-bold text-sm">SHA-256 &bull; Immutable</span>
                        </div>
                        <div class="bg-black/40 p-4 rounded-xl border border-white/10">
                            <span class="text-slate-400 block text-[10px] uppercase">Node Status</span>
                            <span class="text-white font-bold text-sm">SMKN2-TABANAN-NODE-01 (Active)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto border-t border-white/10 bg-[#05070c]/90 py-12 text-slate-400 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-10 border-b border-white/10">
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-sm">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="text-lg font-bold text-white">Crypto<span class="text-cyan-400">Secure</span></span>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">
                        Institutional-grade fintech vault architecture and secure academic ledger for SMKN 2 Tabanan.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-semibold text-xs uppercase tracking-wider mb-3">Sistem Data</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('siswa.index') }}" class="hover:text-cyan-400 transition">Data Siswa</a></li>
                        <li><a href="{{ route('kelas.index') }}" class="hover:text-cyan-400 transition">Data Kelas</a></li>
                        <li><a href="{{ route('siswa.create') }}" class="hover:text-cyan-400 transition">Registrasi Siswa</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold text-xs uppercase tracking-wider mb-3">Security Standards</h4>
                    <ul class="space-y-2 text-xs">
                        <li><span class="text-slate-500">Zero-Knowledge Verification</span></li>
                        <li><span class="text-slate-500">Multi-Party Computation (MPC)</span></li>
                        <li><span class="text-slate-500">FIDO2 WebAuthn Enclave</span></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold text-xs uppercase tracking-wider mb-3">Cryptographic Audits</h4>
                    <div class="flex items-center gap-2 text-xs font-mono text-emerald-400 mb-2">
                        <i class="fa-solid fa-shield-check"></i>
                        <span>CertiK Audited Score: 99.4</span>
                    </div>
                    <p class="text-[11px] text-slate-500">
                        Formal verification executed across all deployed smart contracts.
                    </p>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div>
                    &copy; 2026 CryptoSecure &bull; SMKN 2 Tabanan. All rights reserved.
                </div>
                <div class="flex gap-6 font-mono text-[11px]">
                    <span>TLS 1.3 256-Bit</span>
                    <span>Merkle Tree Verified</span>
                    <span>Zero-Knowledge Proof</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Wallet Connect Modal -->
    <div id="walletModal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md hidden flex items-center justify-center p-4">
        <div class="glass-card rounded-3xl p-6 sm:p-8 max-w-md w-full border border-cyan-500/40 relative">
            <button onclick="closeWalletModal()" class="absolute top-5 right-5 text-slate-400 hover:text-white text-lg">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="text-center mb-6">
                <div class="w-12 h-12 mx-auto mb-3 rounded-2xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <h3 class="text-xl font-bold text-white">Connect Web3 Wallet</h3>
                <p class="text-xs text-slate-400 mt-1">Select your preferred hardware or browser wallet to authorize.</p>
            </div>

            <div class="space-y-3 font-medium text-sm">
                <button onclick="simulateConnect('MetaMask')" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-fox text-orange-400 text-lg"></i>
                        <span class="text-white">MetaMask</span>
                    </div>
                    <span class="text-[11px] font-mono text-cyan-400">Popular</span>
                </button>

                <button onclick="simulateConnect('Phantom')" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-ghost text-purple-400 text-lg"></i>
                        <span class="text-white">Phantom</span>
                    </div>
                    <span class="text-[11px] font-mono text-purple-400">Solana</span>
                </button>

                <button onclick="simulateConnect('Ledger')" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-microchip text-cyan-400 text-lg"></i>
                        <span class="text-white">Ledger Nano X / Stax</span>
                    </div>
                    <span class="text-[11px] font-mono text-emerald-400">Air-Gapped</span>
                </button>

                <button onclick="simulateConnect('WalletConnect')" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 transition">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-qrcode text-blue-400 text-lg"></i>
                        <span class="text-white">WalletConnect</span>
                    </div>
                    <span class="text-[11px] font-mono text-slate-400">QR Code</span>
                </button>
            </div>

            <div class="mt-6 pt-4 border-t border-white/10 text-center text-[11px] text-slate-500">
                <i class="fa-solid fa-shield-halved text-cyan-400 mr-1"></i>
                By connecting, you agree to our Encrypted Identity Protocols.
            </div>
        </div>
    </div>

    <!-- Chart.js & Real-Time Simulation Script -->
    <script>
        // Assets Configuration
        const assetData = {
            BTC: {
                name: 'Bitcoin',
                symbol: 'BTC',
                iconClass: 'fa-brands fa-bitcoin',
                iconBoxClass: 'bg-amber-500/20 border-amber-500/30 text-amber-400',
                basePrice: 64832.10,
                high: '$65,420.00',
                low: '$63,890.00',
                change: '+3.84%',
                changeColor: 'text-emerald-400',
                history: [63890, 64150, 64020, 64400, 64230, 64650, 64832.10]
            },
            ETH: {
                name: 'Ethereum',
                symbol: 'ETH',
                iconClass: 'fa-brands fa-ethereum',
                iconBoxClass: 'bg-blue-500/20 border-blue-500/30 text-blue-400',
                basePrice: 3491.50,
                high: '$3,550.00',
                low: '$3,410.00',
                change: '+2.18%',
                changeColor: 'text-emerald-400',
                history: [3410, 3440, 3425, 3470, 3460, 3480, 3491.50]
            },
            SOL: {
                name: 'Solana',
                symbol: 'SOL',
                iconClass: 'fa-solid fa-sun',
                iconBoxClass: 'bg-purple-500/20 border-purple-500/30 text-purple-400',
                basePrice: 154.25,
                high: '$158.40',
                low: '$148.10',
                change: '+6.42%',
                changeColor: 'text-emerald-400',
                history: [148, 150, 149, 152, 151, 153, 154.25]
            },
            AVAX: {
                name: 'Avalanche',
                symbol: 'AVAX',
                iconClass: 'fa-solid fa-mountain',
                iconBoxClass: 'bg-rose-500/20 border-rose-500/30 text-rose-400',
                basePrice: 28.75,
                high: '$29.50',
                low: '$27.80',
                change: '-0.85%',
                changeColor: 'text-rose-400',
                history: [28.9, 29.2, 28.8, 28.5, 28.9, 28.6, 28.75]
            }
        };

        let currentAsset = 'BTC';
        let currentPoints = [...assetData.BTC.history];
        const labels = ['12:00', '12:10', '12:20', '12:30', '12:40', '12:50', '13:00'];

        // Initialize Chart
        const ctx = document.getElementById('liveHeroChart').getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 220);
        gradient.addColorStop(0, 'rgba(6, 182, 212, 0.45)');
        gradient.addColorStop(1, 'rgba(6, 182, 212, 0)');

        const heroChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Live Telemetry',
                    data: currentPoints,
                    borderColor: '#06b6d4',
                    backgroundColor: gradient,
                    borderWidth: 2.5,
                    pointBackgroundColor: '#05070c',
                    pointBorderColor: '#06b6d4',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    fill: true,
                    tension: 0.38
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        backgroundColor: 'rgba(5, 7, 12, 0.9)',
                        titleColor: '#94a3b8',
                        bodyColor: '#38bdf8',
                        borderColor: 'rgba(255, 255, 255, 0.15)',
                        borderWidth: 1,
                        padding: 10,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return '$' + context.parsed.y.toLocaleString('en-US', {minimumFractionDigits: 2});
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { color: 'rgba(255, 255, 255, 0.04)' },
                        ticks: { color: '#64748b', font: { family: 'JetBrains Mono', size: 10 } }
                    },
                    y: {
                        grid: { color: 'rgba(255, 255, 255, 0.04)' },
                        ticks: {
                            color: '#64748b',
                            font: { family: 'JetBrains Mono', size: 10 },
                            callback: function(value) { return '$' + value; }
                        }
                    }
                }
            }
        });

        // Switch Active Crypto Asset
        function switchAsset(symbol) {
            currentAsset = symbol;
            const asset = assetData[symbol];

            // Update Tab styles
            ['BTC', 'ETH', 'SOL', 'AVAX'].forEach(s => {
                const btn = document.getElementById('tab-' + s);
                if (s === symbol) {
                    btn.className = 'flex-1 py-1.5 text-xs font-semibold rounded-lg bg-cyan-500/20 border border-cyan-500/40 text-cyan-300 transition';
                } else {
                    btn.className = 'flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition';
                }
            });

            // Update Elements
            document.getElementById('crypto-name').innerText = asset.name;
            document.getElementById('crypto-symbol').innerText = asset.symbol;
            document.getElementById('crypto-price').innerText = '$' + asset.basePrice.toLocaleString('en-US', {minimumFractionDigits: 2});
            document.getElementById('crypto-change').innerHTML = `<i class="fa-solid fa-arrow-trend-up"></i> ${asset.change} (24h)`;
            document.getElementById('metric-high').innerText = asset.high;
            document.getElementById('metric-low').innerText = asset.low;

            const iconBox = document.getElementById('crypto-icon-box');
            iconBox.className = 'w-12 h-12 rounded-2xl flex items-center justify-center text-2xl ' + asset.iconBoxClass;
            document.getElementById('crypto-icon').className = asset.iconClass;

            // Update Chart
            currentPoints = [...asset.history];
            heroChart.data.datasets[0].data = currentPoints;
            heroChart.update();
        }

        // Real-Time Simulation Interval
        setInterval(() => {
            const asset = assetData[currentAsset];
            const currentLast = currentPoints[currentPoints.length - 1];
            const volatility = currentLast * 0.003;
            const delta = (Math.random() - 0.48) * volatility;
            const newPrice = Math.max(0.01, currentLast + delta);

            currentPoints.shift();
            currentPoints.push(newPrice);
            heroChart.data.datasets[0].data = currentPoints;
            heroChart.update('none');

            document.getElementById('crypto-price').innerText = '$' + newPrice.toLocaleString('en-US', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }, 2500);

        // Wallet Modal & Connection Simulation
        function openWalletModal() {
            document.getElementById('walletModal').classList.remove('hidden');
        }

        function closeWalletModal() {
            document.getElementById('walletModal').classList.add('hidden');
        }

        function simulateConnect(walletName) {
            closeWalletModal();
            const demoAddress = '0x71C85B3...' + Math.floor(1000 + Math.random() * 9000).toString(16).toUpperCase();

            document.getElementById('nav-wallet-text').innerText = demoAddress;
            document.getElementById('banner-wallet-name').innerText = walletName;
            document.getElementById('banner-address').innerText = demoAddress;
            document.getElementById('connection-banner').classList.remove('hidden');

            alert(`Sukses Terhubung!\nWallet: ${walletName}\nStatus: Hardware Auth Verified\nAlamat: ${demoAddress}`);
        }
    </script>
</body>
</html>
