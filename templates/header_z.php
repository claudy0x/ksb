<?php  
    $domaine="http://192.168.83.1/kamerstartbattle/";
    // $domaine="https://z0sdrh26-7070.uks1.devtunnels.ms/kamerstartbattle/";
?>

<script> 
onload=function j(){

    // Thème clair/sombre
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    function setTheme(dark) {
        if (dark) {
            document.body.classList.add('dark-theme');
            themeIcon.textContent = '☀️';
        } else {
            document.body.classList.remove('dark-theme');
            themeIcon.textContent = '🌙';
        }
    }
    themeToggle.addEventListener('click', function() {
        const isDark = !document.body.classList.contains('dark-theme');
        setTheme(isDark);
        localStorage.setItem('voter-theme', isDark ? 'dark' : 'light');
    });
    //  Theme initiale
    setTheme(localStorage.getItem('voter-theme') === 'dark');

    // Date et heure dynamiques
    function updateDateTime() {
        const dt = new Date();
        const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        document.getElementById('datetime').textContent = dt.toLocaleString('fr-FR', options);
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();

    // Message d'accueil personnalisé
    function updateGreeting() {
        const hour = new Date().getHours();
        let msg = "Bienvenue sur l'application Voter. Choisissez une option ci-dessous :";
        if (hour >= 5 && hour < 12) msg = "Bonjour ! Prêt à voter ce matin ?";
        else if (hour >= 12 && hour < 18) msg = "Bon après-midi ! Faites entendre votre voix.";
        else if (hour >= 18 && hour < 22) msg = "Bonsoir ! Il n'est jamais trop tard pour voter.";
        else msg = "Bonne nuit ! Pensez à voter demain si ce n'est pas déjà fait.";
        document.getElementById('greeting').textContent = msg;
    }
    setInterval(updateGreeting, 60000);
    updateGreeting();
};
</script>


<header  class="header">
    <div class="header-content" data-aos="fade-down" data-aos-duration="1200">
        <div class="header-top-bar">
            <button id="theme-toggle" title="Changer le thème" aria-label="Changer le thème">
                <span id="theme-icon">🌙</span>
            </button>
            <span id="datetime" class="datetime"></span>
        </div>
        <div class="header-logo-global">
            <h1 class="animated-title" style="margin:0;">
                <span class="logo_cadre logo-glow" style="display:inline-flex;align-items:center;justify-content:center;">
                    <a href="../" class="logo-link-global">
                        <img src="../templates/pictures/kamerstartbattle.png" width="150" alt="Logo Kamerstartbattle" class="logo-img-global">
                    </a>
                </span>
            </h1>
        </div>
        <nav class="header-nav">
            <div class="nav-desktop custom-nav-desktop">
                <div class="logo-area-desktop">
                    <h1 class="animated-title" style="margin:0;">
                        <span class="logo_cadre logo-glow" style="display:inline-flex;align-items:center;justify-content:center;">
                            <a href="../" class="logo-link-global">
                                <img src="../templates/pictures/kamerstartbattle.png" width="150" alt="Logo Kamerstartbattle" class="logo-img-global">
                            </a>
                        </span>
                    </h1>
                </div>
                <ul class="liens_content custom-liens-content">
                    <li><a href="../">Home</a></li>
                    <li><a href="../vote/">Voter</a></li>
                    <li><a href="../contact/">Contact us</a></li>
                    <li><a href="../results/">Résultats</a></li>
                    <li><a href="../galerie/">Galerie</a></li>
                </ul>
                <form id="site-search-form" class="custom-search-form" action="<?php echo $domaine; ?>settings/search.php" method="get">
                    <input type="text" name="q" placeholder="Rechercher..." class="custom-search-input">
                    <button type="submit" class="custom-search-btn">Recherche</button>
                </form>
            </div>
            <details class="nav-mobile custom-nav-mobile">
                <summary class="custom-nav-summary"><img src="../templates/pictures/icons8-menu.svg" alt="⇶" class="custom-menu-icon"></summary>
                
                <ul class="custom-mobile-list">
                    <li><a href="../">Home</a></li>
                    <li><a href="../vote/">Voter</a></li>
                    <li><a href="../contact/">Contact us</a></li>
                    <li><a href="../results/">Résultats</a></li>
                    <li><a href="../galerie/">Galerie</a></li>
                    <li class="custom-mobile-search">
                        <form id="site-search-form-mobile" class="custom-search-form-mobile" action="<?php echo $domaine; ?>settings/search.php" method="get">
                            <input type="text" name="q" placeholder="Rechercher..." class="custom-search-input-mobile">
                            <button type="submit" class="custom-search-btn-mobile">Recherche</button>
                        </form>
                    </li>
                </ul>
            </details>
            <style>
                /* Logo global toujours visible en haut */
                /* Animation de surbrillance autour du logo */
                .logo-glow {
                    position: relative;
                }
                .logo-glow::before {
                    content: '';
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    transform: translate(-50%, -50%);
                .logo-glow {
                    position: relative;
                }
                /* Suppression de tout effet de couleur autour du logo */
                    align-items: center;
                    justify-content: center;
                }
                .logo-glow {
                    position: relative;
                }
                .custom-liens-content li {
                    position: relative;
                    transition: transform 0.18s cubic-bezier(.4,0,.2,1);
                }
                .custom-liens-content li a {
                    color: #222;
                    text-decoration: none;
                    font-weight: 500;
                    font-size: 1.08rem;
                    padding: 0.3rem 0.7rem;
                    border-radius: 6px;
                    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
                    outline: none;
                }
                .custom-liens-content li a:focus {
                    box-shadow: 0 0 0 2px #007bff55;
                }
                .custom-liens-content li a:hover, .custom-liens-content li a:active {
    background: #fff;
    color: #222;
                    box-shadow: 0 2px 12px 0 #007bff22;
                    text-decoration: none;
                }
                @media (max-width: 900px) {
                    .custom-liens-content {
                        gap: 1.2rem;
                    }
                    .custom-liens-content li a {
                        font-size: 1rem;
                        padding: 0.3rem 0.5rem;
                    }
                }
                .custom-search-form {
                    background: transparent;
                    backdrop-filter: blur(18px);
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                    border-radius: 8px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                    padding: 0.25rem 0.5rem;
                }
                .custom-search-input {
                    min-width: 180px;
                    max-width: 220px;
                    padding: 0.25rem 1rem;
                    border-radius: 8px;
                    border: 1px solid #ccc;
                    font-size: 1rem;
                    outline: none;
                    height: 2rem;
                }
                .custom-search-btn {
                    background: #007bff;
                    color: #fff;
                    border: none;
                    border-radius: 8px;
                    padding: 0.5rem .7rem;
                    font-size: 1rem;
                    margin-left: 0.2rem;
                    cursor: pointer;
                }
                .custom-nav-mobile { display: none; }
                /* Responsive: logo global visible, nav desktop caché, nav mobile visible */
                @media (max-width: 900px) {
                    .header-logo-global { margin-bottom: 0.5rem; }
                    .custom-nav-desktop { display: none !important; }
                    .custom-nav-mobile { display: block !important; margin-top: 0.5rem; }
                }
                @media (min-width: 901px) {
                    .header-logo-global { display: none !important; }
                    .custom-nav-desktop { display: flex !important; }
                }
                .custom-mobile-list {
                    display: flex;
                    flex-direction: column;
                    gap: 1.1rem;
                    list-style: none;
                    margin: 0;
                    padding: 1rem 0;
                    align-items: flex-start;
                    border-radius: 8px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
                }
                .custom-mobile-list li a {
                    color: #222;
                    text-decoration: none;
                    font-weight: 500;
                    font-size: 1.08rem;
                    padding: 0.3rem 0.7rem;
                    border-radius: 6px;
                    transition: background 0.18s, color 0.18s, box-shadow 0.18s;
                    outline: none;
                    display: block;
                }
                .custom-mobile-list li a:focus {
                    box-shadow: 0 0 0 2px #007bff55;
                }
                .custom-mobile-list li a:hover, .custom-mobile-list li a:active {
                    background: linear-gradient(90deg, #007bff22 0%, #007bff11 100%);
                    color: #007bff;
                    box-shadow: 0 2px 12px 0 #007bff22;
                    text-decoration: none;
                }
                .custom-mobile-search { width: 100%; margin-top: 0.5rem; }
                .custom-search-form-mobile { background: transparent; backdrop-filter: blur(18px); display: flex; align-items: center; gap: 0.5rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 0.25rem 0.5rem; width: 100%; }
                .custom-search-input-mobile { min-width: 120px; max-width: 180px; padding: 0.25rem 1rem; border-radius: 8px; border: 1px solid #ccc; font-size: 1rem; outline: none; height: 2rem; }
                .custom-search-btn-mobile { background: #007bff; color: #fff; border: none; border-radius: 8px; padding: 0.5rem .7rem; font-size: 1rem; margin-left: 0.2rem; cursor: pointer; }
                .custom-menu-icon { width: 32px; height: 32px; }
                .custom-nav-summary { list-style: none; cursor: pointer; }
            </style>
        </nav>
        <p class="subtitle" id="greeting">Bienvenue sur l'application Voter.</p>
    </div>
    <div class="header-animation">
        <div class="circle"></div>
        <div class="circle delay"></div>
        <div class="circle delay2"></div>
    </div>

</header>
    <!-- Bouton WhatsApp de démonstration pour cette page -->
<div class="whatsapp-button-demo" id="whatsapp-btn-demo">
    <a href="https://wa.me/237699036706?text=Bonjour%2C%20j'ai%20une%20question%20concernant%20kamer%20Start%20Battle." target="_blank" rel="noopener" id="whatsapp-link" title="WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
    <div class="whatsapp-tooltip" id="whatsapp-tooltip" style="display:none;">
        <strong>Contact WhatsApp</strong><br>
        Cliquez pour discuter avec nous sur WhatsApp !<br>
        <span style="font-size:0.95em;color:#007bff;">+237 672 03 28 48</span>
    </div>
</div>
<style>
    .whatsapp-button-demo {
        position: fixed;
        bottom: 24px;
        left: 24px;
        z-index: 1000;
        transition: transform 0.2s;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .whatsapp-button-demo img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        background: #fff;
        border: 2px solid #d37325ff;
        transition: box-shadow 0.2s, border 0.2s;
        cursor: pointer;
    }
    .whatsapp-button-demo img:hover {
        box-shadow: 0 8px 24px #25d36655;
        border: 2.5px solid #128c7e;
    }
    .whatsapp-tooltip {
        position: absolute;
        left: 70px;
        bottom: 40px;
        min-width: 210px;
        background: #fff;
        color: #222;
        border-radius: 8px;
        box-shadow: 0 4px 24px #2222;
        padding: 14px 18px 12px 18px;
        font-size: 1.05em;
        line-height: 1.4;
        z-index: 1001;
        border: 1.5px solid #25d366;
        animation: tooltip-fade-in 0.25s;
        pointer-events: none;
    }
    @keyframes tooltip-fade-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @media (max-width: 600px) {
        .whatsapp-button-demo {
            left: 10px;
            bottom: 14px;
        }
        .whatsapp-tooltip {
            left: 65px;
            min-width: 160px;
            font-size: 0.98em;
            padding: 10px 12px 10px 12px;
        }
    }
</style>
<script>
    // Affichage du tooltip WhatsApp au clic
    const whatsappBtn = document.getElementById('whatsapp-btn-demo');
    const whatsappTooltip = document.getElementById('whatsapp-tooltip');
    const whatsappLink = document.getElementById('whatsapp-link');
    let tooltipTimeout;
    if (whatsappBtn && whatsappTooltip && whatsappLink) {
        whatsappBtn.addEventListener('click', function(e) {
            // N'affiche le tooltip que si on clique sur le bouton, pas sur le lien
            if (e.target === whatsappLink || e.target.closest('a')) return;
            e.preventDefault();
            whatsappTooltip.style.display = 'block';
            clearTimeout(tooltipTimeout);
            tooltipTimeout = setTimeout(() => {
                whatsappTooltip.style.display = 'none';
            }, 3500);
        });
        // Cacher le tooltip si on clique ailleurs
        document.addEventListener('click', function(e) {
            if (!whatsappBtn.contains(e.target)) {
                whatsappTooltip.style.display = 'none';
            }
        });
    }
</script>
