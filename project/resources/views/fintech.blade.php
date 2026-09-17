<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoSecure | Next-Gen Fintech</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: '#0B0E14',
                        darker: '#05070A',
                        primary: '#3B82F6',
                        accent: '#10B981',
                        glass: 'rgba(255, 255, 255, 0.05)',
                        glassBorder: 'rgba(255, 255, 255, 0.1)',
                    }
                }
            }
        }
    </script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #05070A;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            background-image: radial-gradient(circle at 15% 50%, rgba(59, 130, 246, 0.15), transparent 25%),
                              radial-gradient(circle at 85% 30%, rgba(16, 185, 129, 0.15), transparent 25%);
            background-attachment: fixed;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .glass-card:hover {
            border-color: rgba(255, 255, 255, 0.15);
            background: rgba(255, 255, 255, 0.05);
        }
        .text-gradient {
            background: linear-gradient(to right, #3B82F6, #10B981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glow {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-card border-b-0 border-t-0 border-r-0 border-l-0 border-b border-glassBorder py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-shield-halved text-primary text-2xl"></i>
                <span class="text-xl font-bold tracking-wider">Crypto<span class="text-primary">Secure</span></span>
            </div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-gray-300">
                <a href="#" class="hover:text-white transition">Markets</a>
                <a href="#" class="hover:text-white transition">Wallet</a>
                <a href="#" class="hover:text-white transition">Security</a>
                <a href="#" class="hover:text-white transition">Company</a>
            </div>
            <div class="flex gap-4 items-center">
                <a href="#" class="text-sm font-medium hover:text-primary transition">Log In</a>
                <a href="#" class="bg-primary hover:bg-blue-600 text-white px-5 py-2 rounded-full text-sm font-medium transition glow">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="pt-32 pb-20 px-6 container mx-auto flex flex-col lg:flex-row items-center gap-12 flex-grow">
        <div class="lg:w-1/2 space-y-8 z-10">
            <div class="inline-block glass-card rounded-full px-4 py-1.5 text-sm text-primary mb-2 border border-blue-500/30">
                <i class="fa-solid fa-lock mr-2"></i> Bank-grade Security Certified
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight">
                Secure Your <br>
                <span class="text-gradient">Digital Assets</span><br>
                With Confidence
            </h1>
            <p class="text-gray-400 text-lg max-w-lg leading-relaxed">
                The most advanced crypto wallet and trading platform. Experience military-grade encryption, real-time market data, and seamless DeFi integration.
            </p>
            <div class="flex gap-4">
                <button class="bg-primary hover:bg-blue-600 px-8 py-3.5 rounded-full font-semibold transition glow flex items-center gap-2">
                    Connect Wallet <i class="fa-solid fa-arrow-right"></i>
                </button>
                <button class="glass-card hover:bg-white/5 px-8 py-3.5 rounded-full font-semibold transition flex items-center gap-2">
                    <i class="fa-brands fa-apple text-xl"></i> App Store
                </button>
            </div>

            <!-- Trust Indicators -->
            <div class="pt-8 flex items-center gap-8 text-gray-500 text-sm font-semibold">
                <span>TRUSTED BY</span>
                <i class="fa-brands fa-bitcoin text-2xl hover:text-gray-300 transition cursor-pointer"></i>
                <i class="fa-brands fa-ethereum text-2xl hover:text-gray-300 transition cursor-pointer"></i>
                <i class="fa-solid fa-building-columns text-2xl hover:text-gray-300 transition cursor-pointer"></i>
                <div class="flex items-center gap-2">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-dark" src="https://i.pravatar.cc/100?img=1" alt="user">
                        <img class="w-8 h-8 rounded-full border-2 border-dark" src="https://i.pravatar.cc/100?img=2" alt="user">
                        <img class="w-8 h-8 rounded-full border-2 border-dark" src="https://i.pravatar.cc/100?img=3" alt="user">
                    </div>
                    <span class="text-gray-400">2M+ Users</span>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 relative w-full max-w-lg mx-auto">
            <!-- Decorative Glow -->
            <div class="absolute inset-0 bg-primary/20 blur-[100px] rounded-full"></div>

            <!-- Main Chart Card (Glassmorphism) -->
            <div class="glass-card rounded-3xl p-6 relative z-10 w-full transform hover:-translate-y-2 transition duration-500">
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-orange-500/20 p-2 rounded-full text-orange-500">
                            <i class="fa-brands fa-bitcoin text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Bitcoin</h3>
                            <p class="text-xs text-gray-400">BTC/USD</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-xl" id="btc-price">$64,230.50</p>
                        <p class="text-xs text-accent"><i class="fa-solid fa-arrow-trend-up"></i> +2.45%</p>
                    </div>
                </div>
                <div class="h-48 w-full">
                    <canvas id="cryptoChart"></canvas>
                </div>
            </div>

            <!-- Floating Mini Card 1 -->
            <div class="glass-card rounded-2xl p-4 absolute -bottom-6 -left-10 z-20 w-48 transform hover:scale-105 transition hidden md:block">
                <div class="flex items-center gap-3 mb-2">
                    <div class="bg-blue-500/20 p-1.5 rounded-full text-blue-500">
                        <i class="fa-brands fa-ethereum"></i>
                    </div>
                    <span class="font-semibold text-sm">Ethereum</span>
                </div>
                <p class="font-bold text-lg">$3,450.20</p>
                <div class="w-full bg-gray-700 h-1 mt-2 rounded-full overflow-hidden">
                    <div class="bg-blue-500 h-full w-3/4"></div>
                </div>
            </div>

            <!-- Floating Mini Card 2 (Security) -->
            <div class="glass-card rounded-2xl p-4 absolute top-10 -right-8 z-20 flex items-center gap-4 transform hover:scale-105 transition hidden md:flex">
                <div class="bg-green-500/20 p-3 rounded-full text-green-500">
                    <i class="fa-solid fa-shield-check text-xl"></i>
                </div>
                <div>
                    <p class="text-xs text-gray-400">Status</p>
                    <p class="font-bold text-sm text-green-400">Fully Secured</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-20 bg-darker/50 relative border-t border-glassBorder">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Fort Knox for your <span class="text-gradient">Crypto</span></h2>
                <p class="text-gray-400 max-w-2xl mx-auto">We employ multi-layer security architectures to ensure your assets are protected against all threats.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="glass-card p-8 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary text-2xl mb-6">
                        <i class="fa-solid fa-fingerprint"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Biometric Authentication</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Hardware-backed biometric security ensuring only you can authorize transactions and access your funds.</p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card p-8 rounded-3xl border border-primary/30 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-primary/20 text-primary text-xs font-bold px-3 py-1 rounded-bl-lg">CORE</div>
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center text-accent text-2xl mb-6">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Cold Storage</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">98% of all digital assets are stored in geographically distributed offline cold wallets, air-gapped from the internet.</p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card p-8 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/10 flex items-center justify-center text-purple-500 text-2xl mb-6">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Smart Contract Audits</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">All integrated DeFi protocols undergo rigorous automated and manual security audits by top-tier security firms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Wallet Integration Showcase -->
    <section class="py-20 relative">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Seamless Wallet Integration</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="glass-card px-6 py-4 rounded-full flex items-center gap-3 hover:bg-white/5 transition cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-orange-500 flex items-center justify-center"><i class="fa-solid fa-fox text-white text-sm"></i></div>
                    <span class="font-semibold">MetaMask</span>
                </div>
                <div class="glass-card px-6 py-4 rounded-full flex items-center gap-3 hover:bg-white/5 transition cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center"><i class="fa-solid fa-shield text-white text-sm"></i></div>
                    <span class="font-semibold">Trust Wallet</span>
                </div>
                <div class="glass-card px-6 py-4 rounded-full flex items-center gap-3 hover:bg-white/5 transition cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-black border border-gray-600 flex items-center justify-center"><i class="fa-brands fa-usb text-white text-sm"></i></div>
                    <span class="font-semibold">Ledger</span>
                </div>
                <div class="glass-card px-6 py-4 rounded-full flex items-center gap-3 hover:bg-white/5 transition cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center"><i class="fa-solid fa-wallet text-white text-sm"></i></div>
                    <span class="font-semibold">WalletConnect</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="glass-card border-t border-glassBorder border-b-0 border-l-0 border-r-0 py-8 mt-auto">
        <div class="container mx-auto px-6 text-center text-gray-500 text-sm">
            <p>&copy; 2026 CryptoSecure. All rights reserved.</p>
            <div class="flex justify-center gap-4 mt-4">
                <a href="#" class="hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="hover:text-white transition"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="hover:text-white transition"><i class="fa-brands fa-discord"></i></a>
            </div>
        </div>
    </footer>

    <!-- Chart.js Logic for Real-time simulation -->
    <script>
        const ctx = document.getElementById('cryptoChart').getContext('2d');

        // Gradient for line chart
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)');
        gradient.addColorStop(1, 'rgba(59, 130, 246, 0)');

        // Initial Data
        const labels = ['10:00', '10:05', '10:10', '10:15', '10:20', '10:25', '10:30'];
        const dataPoints = [63900, 64100, 63850, 64200, 64150, 64300, 64230.50];

        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'BTC Price',
                    data: dataPoints,
                    borderColor: '#3B82F6',
                    backgroundColor: gradient,
                    borderWidth: 2,
                    pointBackgroundColor: '#0B0E14',
                    pointBorderColor: '#3B82F6',
                    pointBorderWidth: 2,
                    pointRadius: 3,
                    pointHoverRadius: 5,
                    fill: true,
                    tension: 0.4
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
                        backgroundColor: 'rgba(11, 14, 20, 0.9)',
                        titleColor: '#fff',
                        bodyColor: '#10B981',
                        borderColor: 'rgba(255,255,255,0.1)',
                        borderWidth: 1
                    }
                },
                scales: {
                    x: {
                        display: false,
                        grid: { display: false }
                    },
                    y: {
                        display: false,
                        grid: { display: false },
                        min: Math.min(...dataPoints) - 500,
                        max: Math.max(...dataPoints) + 500
                    }
                },
                interaction: {
                    mode: 'nearest',
                    axis: 'x',
                    intersect: false
                }
            }
        });

        // Simulate real-time updates
        setInterval(() => {
            const lastPrice = dataPoints[dataPoints.length - 1];
            const change = (Math.random() - 0.5) * 200; // Random change between -100 and +100
            const newPrice = lastPrice + change;

            // Update Array
            dataPoints.shift();
            dataPoints.push(newPrice);

            // Update Chart
            chart.options.scales.y.min = Math.min(...dataPoints) - 500;
            chart.options.scales.y.max = Math.max(...dataPoints) + 500;
            chart.update();

            // Update Text
            document.getElementById('btc-price').innerText = '$' + newPrice.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
        }, 3000);
    </script>
</body>
</html>

@include('welcome')
