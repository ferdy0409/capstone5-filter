<?php
// index.php - Halaman Landing Utama
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CodeIgniter 4 - Framework PHP Modern</title>
    <meta name="description"
        content="Selamat datang di pembelajaran CodeIgniter 4. Membangun aplikasi web yang cepat, kuat, dan aman dengan framework PHP modern.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --bg-color: #050505;
            --text-color: #e2e8f0;
            --primary: #5c3fff;
            --secondary: #ff3366;
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.08);
            --glass-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Hero Background with Parallax */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: linear-gradient(to bottom, rgba(5, 5, 5, 0.4), var(--bg-color)), url('assets/img/hero_background.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: -1;
            filter: saturate(1.2) contrast(1.1);
        }

        /* Navbar Glassmorphism */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5rem;
            background: rgba(5, 5, 5, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(45deg, #fff, var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }

        .nav-links li a {
            text-decoration: none;
            color: #ccc;
            font-weight: 500;
            font-size: 1.05rem;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }

        .nav-links li a:hover {
            color: #fff;
        }

        .nav-links li a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 2rem;
            position: relative;
            margin-top: 2rem;
        }

        .hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            animation: fadeUp 1s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--secondary), #00d2ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: gradientMove 5s ease infinite;
        }

        .hero p {
            font-size: 1.25rem;
            color: #a0aec0;
            max-width: 600px;
            margin-bottom: 2.5rem;
            animation: fadeUp 1s ease 0.2s forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .btn-group {
            display: flex;
            gap: 1.5rem;
            animation: fadeUp 1s ease 0.4s forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            outline: none;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--primary), #8167ff);
            color: white;
            box-shadow: 0 10px 20px rgba(92, 63, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 25px rgba(92, 63, 255, 0.5);
        }

        .btn-outline {
            background: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 8rem 5rem;
            position: relative;
            z-index: 10;
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 5rem;
        }

        .section-title span {
            color: var(--secondary);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 2.5rem;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: var(--glass-shadow);
            transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(92, 63, 255, 0.1), rgba(255, 51, 102, 0.1));
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -1;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: rgba(92, 63, 255, 0.4);
            box-shadow: 0 15px 40px rgba(92, 63, 255, 0.2);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .card p {
            color: #a0aec0;
            font-size: 1rem;
            line-height: 1.7;
        }

        /* Floating Elements */
        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.5;
            border-radius: 50%;
            animation: float 10s infinite ease-in-out alternate;
        }

        .blob-1 {
            width: 400px;
            height: 400px;
            background: var(--primary);
            top: 10%;
            left: -100px;
        }

        .blob-2 {
            width: 300px;
            height: 300px;
            background: var(--secondary);
            bottom: -50px;
            right: -50px;
            animation-delay: -5s;
        }

        /* Animations */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) scale(1);
            }

            100% {
                transform: translate(30px, -50px) scale(1.1);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            nav {
                padding: 1rem 2rem;
            }

            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .btn-group {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
            }

            .features {
                padding: 5rem 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Dynamic Background -->
    <div class="hero-bg"></div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <!-- Navigation -->
    <nav>
        <div class="logo">DevLab.</div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#features">Fitur</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="public/">Buka Aplikasi CI4</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Mulai Menguasai <br><span class="gradient-text">CodeIgniter 4</span></h1>
        <p>Jelajahi kehebatan framework PHP yang ringan, cepat, dan modern. Belajar membangun aplikasi web yang handal
            mulai dari sekarang.</p>
        <div class="btn-group">
            <a href="public/" class="btn btn-primary">Jalankan Aplikasi</a>
            <a href="#features" class="btn btn-outline">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h2 class="section-title">Fitur <span>Unggulan</span></h2>
        <div class="grid">
            <div class="card">
                <div class="card-icon">⚡</div>
                <h3>Performa Cepat</h3>
                <p>CodeIgniter 4 dirancang agar sangat ringan dan cepat, memastikan aplikasi andamu memiliki waktu
                    respons yang luar biasa.</p>
            </div>
            <div class="card">
                <div class="card-icon">🔒</div>
                <h3>Sistem Keamanan</h3>
                <p>Dilengkapi dengan fitur keamanan tingkat lanjut untuk mencegah berbagai ancaman umum seperti CSRF dan
                    XSS secara otomatis.</p>
            </div>
            <div class="card">
                <div class="card-icon">🛠️</div>
                <h3>Struktur MVC</h3>
                <p>Pengelolaan kode yang rapi dengan konsep Model-View-Controller mempermudah pengembangan web skala
                    kecil hingga besar.</p>
            </div>
        </div>
    </section>

    <script>
        // Navbar Scrolled Effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.background = 'rgba(5, 5, 5, 0.8)';
                nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.1)';
            } else {
                nav.style.background = 'rgba(5, 5, 5, 0.4)';
                nav.style.boxShadow = 'none';
            }
        });

        // Interactive Card Tilt Effect (Subtle)
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -5;
                const rotateY = ((x - centerX) / centerX) * 5;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
            });
        });
    </script>
</body>

</html>