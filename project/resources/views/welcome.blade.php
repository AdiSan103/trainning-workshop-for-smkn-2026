<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <title>Laravel</title>
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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        .glass-card {
            background: rgba(13, 19, 33, 0.65);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        .glass-card:hover {
            border-color: rgba(6, 182, 212, 0.4);
            box-shadow: 0 14px 40px rgba(6, 182, 212, 0.15), 0 0 20px rgba(59, 130, 246, 0.1);
        }

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        .text-gradient {
            background: linear-gradient(135deg, #38bdf8 0%, #3b82f6 50%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
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
            @endif
                <div>
                    <span class="text-xl font-extrabold tracking-tight text-white flex items-center gap-1">
                        Crypto<span class="text-cyan-400">Secure</span>
                    </span>
                    <span class="text-[10px] tracking-widest text-cyan-400/80 uppercase font-mono block -mt-1 font-semibold">SMKN 2 Tabanan Core</span>
                </div>
            </div>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
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

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>
                <button onclick="openWalletModal()" class="px-5 py-2.5 rounded-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-500 hover:to-cyan-400 text-white font-semibold text-sm shadow-lg shadow-cyan-500/25 transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                    <i class="fa-solid fa-wallet"></i>
                    <span id="nav-wallet-text">Connect Wallet</span>
                </button>
            </div>
        </div>
    </nav>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
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

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
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

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            <div class="text-right">
                                <div id="crypto-price" class="text-2xl font-black font-mono text-white tracking-tight">$64,832.10</div>
                                <div id="crypto-change" class="text-xs font-bold font-mono text-emerald-400 flex items-center justify-end gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +3.84% (24h)
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>
                        <!-- Asset Switcher Tabs -->
                        <div class="flex gap-2 py-4">
                            <button onclick="switchAsset('BTC')" id="tab-BTC" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-cyan-500/20 border border-cyan-500/40 text-cyan-300 transition">BTC</button>
                            <button onclick="switchAsset('ETH')" id="tab-ETH" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">ETH</button>
                            <button onclick="switchAsset('SOL')" id="tab-SOL" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">SOL</button>
                            <button onclick="switchAsset('AVAX')" id="tab-AVAX" class="flex-1 py-1.5 text-xs font-semibold rounded-lg bg-white/5 border border-white/10 text-slate-400 hover:text-white transition">AVAX</button>
                        </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        <!-- Live Chart Container -->
                        <div class="h-52 w-full pt-2">
                            <canvas id="liveHeroChart"></canvas>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                        <!-- Mini Metric Row -->
                        <div class="grid grid-cols-3 gap-3 pt-5 mt-4 border-t border-white/10 text-center font-mono text-xs">
                            <div class="bg-white/5 p-2 rounded-xl">
                                <span class="text-slate-400 block text-[10px] uppercase">24h High</span>
                                <span id="metric-high" class="font-bold text-white">$65,420.00</span>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
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

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
            </div>
        </div>
    </section>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>
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

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
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

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
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

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
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
    </body>
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
