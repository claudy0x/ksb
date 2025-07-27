<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <?php include("../settings/liens_z.php");?>        
</head>
<body>
    <?php include("../templates/header_z.php"); ?>
    <main>
        <section class="contact-section">
            <div class="contact-card">
                <h2 class="contact-title">Contactez-nous</h2>
                <p class="contact-desc">Pour toute question, suggestion ou assistance, notre équipe est à votre écoute !</p>
                <div class="contact-infos">
                    <div class="contact-info"><span class="contact-icon">✉️</span> <a href="mailto:contact@kamerstartbattle.com">contact@kamerstartbattle.com</a></div>
                    <div class="contact-info"><span class="contact-icon">📞</span> <a href="tel:+237699036706">+237 6 99 03 67 06</a></div>
                    <div class="contact-info"><span class="contact-icon">💬</span> <a href="https://wa.me/+237699036706?text=Bonjour%2C%20je%20souhaite%20plus%20d'informations%20sur%20Kamerstart%20Battle" target="_blank" class="contact-whatsapp">WhatsApp direct</a></div>
                </div>
                <div class="contact-socials">
                    <a href="https://facebook.com" target="_blank" title="Facebook" class="contact-social"><img src="../templates/pictures/facebook.svg" alt="Facebook"></a>
                    <a href="https://instagram.com" target="_blank" title="Instagram" class="contact-social"><img src="../templates/pictures/instagram.svg" alt="Instagram"></a>
                    <a href="https://twitter.com" target="_blank" title="Twitter" class="contact-social"><img src="../templates/pictures/x.svg" alt="Twitter"></a>
                </div>
            </div>
        </section>
        <style>
        .contact-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            position: static;
            transform: translateY(-13rem);
            top:0;
            background: linear-gradient(120deg, #e3f0ff00 99%, #fff 100%);
        }
        .contact-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px #007bff22;
            padding: 2.2rem 2.5rem;
            max-width: 420px;
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.2rem;
        }
        .contact-title {
            font-size: 2rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .contact-desc {
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .contact-infos {
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
            width: 100%;
        }
        .contact-info {
            font-size: 1.08rem;
            color: #222;
            background: #f8faff;
            border-radius: 8px;
            padding: 0.7rem 1.2rem;
            box-shadow: 0 2px 8px #007bff11;
            display: flex;
            align-items: center;
            gap: 0.7rem;
            justify-content: flex-start;
        }
        .contact-icon {
            font-size: 1.3em;
            margin-right: 0.3em;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.18s;
        }
        .contact-info a:hover {
            color: #ff9800;
        }
        .contact-whatsapp {
            color: #25d366;
            font-weight: 600;
        }
        .contact-socials {
            display: flex;
            gap: 1.2rem;
            justify-content: center;
            margin-top: 0.7rem;
        }
        .contact-social img {
            width: 32px;
            height: 32px;
            filter: grayscale(0.2) brightness(1.1);
            transition: filter 0.18s, transform 0.18s;
        }
        .contact-social:hover img {
            filter: none;
            transform: scale(1.12);
        }
        @media (max-width: 600px) {
            .contact-card {
                padding: 1.2rem 0.5rem;
            }
            .contact-title {
                font-size: 1.3rem;
            }
        }
        </style>
    </main>
    <?php include("../templates/footer_z.php"); ?>
</body>
</html>