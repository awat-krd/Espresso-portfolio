<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espresso Iraq Duhok</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        :root {
            --primary: #3C3633;
            --secondary: #E0CCBE;
            --accent: #A77979;
            --light: #f8f5f2;
            --dark: #2A2726;
            --gradient: linear-gradient(135deg, #3C3633 0%, #A77979 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #cac5c1;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background elements */
        .background-effects {
            position: fixed;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            z-index: -1;
        }

        .effect {
            position: absolute;
            background: rgba(167, 121, 121, 0.1);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-100px) rotate(180deg); }
            100% { transform: translateY(0) rotate(360deg); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin: 2rem 0;
            display: flex;
            align-items: center;
            gap: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transform: translateY(-50px);
            opacity: 0;
            animation: slideUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .logo img {
            width: 150px;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: rotate(-5deg) scale(1.05);
        }

        .title {
            color: var(--primary);
            font-size: 2.5rem;
            letter-spacing: -0.5px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.3);
            transform: scale(0.95);
            opacity: 0;
            animation: fadeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(224,204,190,0.1) 0%, rgba(60,54,51,0.05) 100%);
            transform: translate(-50%, -50%);
            transition: all 0.6s ease;
            z-index: -1;
        }

        .card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .card:hover::before {
            width: 150%;
            height: 150%;
        }

        .card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.3s ease;
        }

        .card:hover i {
            transform: scale(1.15) rotate(5deg);
        }

        .card h3 {
            color: var(--dark);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .card p {
            color: var(--primary);
            font-size: 1rem;
            opacity: 0.9;
        }

        .whatsapp-card {
            position: relative;
            overflow: hidden;
        }

        .whatsapp-card::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(37, 211, 102, 0.05);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .whatsapp-card:hover::after {
            bottom: -30%;
            left: -30%;
        }

        .phone-card {
            position: relative;
            overflow: hidden;
        }

        .phone-card::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: rgba(60, 54, 51, 0.05);
            transform: rotate(45deg);
            transition: all 0.6s ease;
        }

        .phone-card:hover::after {
            top: -30%;
            right: -30%;
        }

        .map-container {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin: 3rem 0;
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            background: white;
            border: 1px solid rgba(0,0,0,0.1);
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .footer {
            text-align: center;
            padding: 2rem;
            color: var(--light);
            background: var(--primary);
            margin-top: 4rem;
            opacity: 0;
            animation: fadeIn 0.6s 0.3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            transform: translateX(150%);
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .notification.active {
            transform: translateX(0);
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                text-align: center;
                padding: 1.5rem;
            }

            .title {
                font-size: 2rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="background-effects">
        <div class="effect" style="width: 200px; height: 200px; top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="effect" style="width: 150px; height: 150px; top: 60%; left: 80%; animation-delay: 2s;"></div>
        <div class="effect" style="width: 100px; height: 100px; top: 40%; left: 50%; animation-delay: 4s;"></div>
    </div>

    <div class="container">
    <header class="header">
            <div class="logo">
                <img src="img/E1logo.png" alt="Espresso Logo">
            </div>
            <h1 class="title">Espresso Iraq Duhok</h1>
        </header>

        <div class="grid">
            <!-- Store Card -->
            <a href="https://awat-krd.github.io/EsspressoM/" target="_blank" class="card">
                <i class="bi bi-cup-hot"></i>
                <h3>Menu</h3>
                <p>Explore our premium coffee selections</p>
            </a>

            <!-- Instagram Card -->
            <a href="https://www.instagram.com/espresso_iq_dhk" class="card">
                <i class="bi bi-instagram"></i>
                <h3>Instagram</h3>
                <p>Follow us for latest updates</p>
            </a>

            <!-- WhatsApp Cards -->
            <div class="card whatsapp-card" data-number="+9647500000000">
                <i class="bi bi-whatsapp"></i>
                <h3>WhatsApp 1</h3>
                <p>+964 750 000 0000</p>
            </div>

            <div class="card whatsapp-card" data-number="+9647500000001">
                <i class="bi bi-whatsapp"></i>
                <h3>WhatsApp 2</h3>
                <p>+964 750 000 0001</p>
            </div>

            <!-- Phone Cards -->
            <div class="card phone-card" data-number="+9647500000000">
                <i class="bi bi-telephone"></i>
                <h3>Phone 1</h3>
                <p>+964 750 000 0000</p>
            </div>

            <div class="card phone-card" data-number="+9647500000001">
                <i class="bi bi-telephone"></i>
                <h3>Phone 2</h3>
                <p>+964 750 000 0001</p>
            </div>

            <!-- Other Cards -->
            <a href="https://www.snapchat.com/add/espresso_duhok" class="card">
                <i class="bi bi-snapchat"></i>
                <h3>Snapchat</h3>
                <p>Connect with us on Snapchat</p>
            </a>

            <a href="mailto:@email.com" class="card">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p>placeholder@gmail.com</p>
            </a>
            <div class="card" id="location">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h3>Our Location</h3>
                    <p>Iraq, Duhok - Anwer mayi Road<br>Opposite kurdnaft Oil</p>
                </div>
        </div>

        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d399.025584497696!2d42.9709362!3d36.8615194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40088d0033fdeb43%3A0x6de2c5f0e51bd005!2sEspresso_iq_dhk!5e0!3m2!1sen!2siq!4v1728046917090!5m2!1sen!2siq"></iframe>
        </div>
    </div>

    <footer class="footer">
        <p>© 2024 All Rights Reserved & Developed by 
            <a href="https://www.instagram.com/awat.adil" target="_blank">Awat Adil</a>
        </p>
    </footer>

    <div class="notification" id="copyNotification">
        Phone number copied to clipboard!
    </div>

    <script>
        // Copy functionality for all interactive cards
        document.querySelectorAll('.card[data-number]').forEach(card => {
            card.addEventListener('click', () => {
                const phone = card.dataset.number;
                navigator.clipboard.writeText(phone).then(() => {
                    showNotification();
                });
            });
        });

        function showNotification() {
            const notif = document.getElementById('copyNotification');
            notif.classList.add('active');
            setTimeout(() => notif.classList.remove('active'), 2000);
        }

        // Intersection Observer for animation triggers
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0) scale(1)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.card, .header, .map-container').forEach(el => observer.observe(el));
        document.querySelector('.header').addEventListener('mousemove', (e) => {
            const x = e.pageX - e.target.offsetLeft;
            const y = e.pageY - e.target.offsetTop;
            
            e.target.style.transform = `
                translateY(-3px)
                perspective(1000px)
                rotateX(${(y - e.target.offsetHeight/2) / 15}deg)
                rotateY(${-(x - e.target.offsetWidth/2) / 15}deg)
            `;
        });

        document.querySelector('.header').addEventListener('mouseleave', (e) => {
            e.target.style.transform = 'translateY(0)';
        });
    </script>
</body>
</html>