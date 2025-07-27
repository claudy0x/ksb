<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>résultats du vote</title>
    <?php include("../settings/liens_z.php")?>
</head>
<body>
    <?php include("../templates/header_z.php")?>


    <main>
        <div class="results-container results-container_1">
            <section class="results-hero">
                <div class="results-hero-card">
                    <span class="results-hero-icon">🎉</span>
                    <h2 class="results-title">Résultats du Vote</h2>
                    <p class="results-desc">Bienvenue sur la page des résultats !<br>
                    <span class="results-highlight">Préparez-vous à vivre l'émotion du direct : classements, surprises et talents à découvrir !</span></p>
                    <div class="results-status">
                        <span class="results-status-icon">⏳</span>
                        <span class="results-status-text">Résultats :  prochainement.</span>
                    </div>
                    <a href="../vote/" class="results-cta">voter avant l'ouerture !</a>
                </div>
            </section>
            <div class="results-separator"></div>
            <section class="results-empty">
                <h3 class="results-empty-title">Aucun résultat disponible</h3>
                <div class="results-empty-card">
                    <span class="results-empty-icon">📊</span>
                    <p class="results-empty-desc">Dès le lancement des votes, les résultats s'afficheront ici en temps réel !<br>
                    <span class="results-empty-highlight">Partage la page et invite tes amis à voter !</span></p>
                    <div class="results-socials">
                        <a href="https://facebook.com" target="_blank" title="Facebook" class="results-social"><img src="../templates/pictures/facebook.svg" alt="Facebook"></a>
                        <a href="https://instagram.com" target="_blank" title="Instagram" class="results-social"><img src="../templates/pictures/instagram.svg" alt="Instagram"></a>
                        <a href="https://twitter.com" target="_blank" title="Twitter" class="results-social"><img src="../templates/pictures/x.svg" alt="Twitter"></a>
                    </div>
                </div>
            </section>
        </div>
        <div class="results-container">
            <section class="results-hero">
                <div class="results-hero-card">
                    <h2 class="results-title">Résultats du Vote</h2>
                    <p class="results-desc">Bienvenue sur la page des résultats. Les votes n'ont pas encore commencé.<br>
                    Revenez bientôt pour découvrir les classements et soutenir vos candidats favoris !</p>
                    <div class="results-status">
                        <span class="results-status-icon">⏳</span>
                        <span class="results-status-text">Les votes ouvriront prochainement.</span>
                    </div>
                </div>
            </section>
            <div class="results-separator"></div>
            <section class="results-empty">
                <h3 class="results-empty-title">Aucun résultat disponible</h3>
                <div class="results-empty-card">
                    <span class="results-empty-icon">📊</span>
                    <p class="results-empty-desc">Dès le lancement des votes, les résultats s'afficheront ici en temps réel !</p>
                </div>
            </section>
        </div>
        <div class="results-bg-anim"></div>

        <style>
        .results-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2.5rem;
            width: 100%;
            min-height: 80vh;
        }
        .results-container_1{
            transform: translateY(-10rem)
        }
        .results-hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 30vh;
            background: linear-gradient(120deg, #e3f0ff 60%, #fff 100%);
        }
        .results-hero-card {
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
        .results-separator {
            background: none;
        }
        .results-bg-anim {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            z-index: -1;
            background: linear-gradient(120deg, #e3f0ff 60%, #fff 100%);
            animation: resultsBgAnim 8s linear infinite alternate;

            max-width: 420px;
            height: 2px;
            background: linear-gradient(90deg, #e3f0ff 0%, #ff9800 100%);
            margin: 1.2rem 0;
            opacity: 0.3;
        }
        @keyframes resultsBgAnim {
            0% { filter: hue-rotate(0deg) brightness(1); }
            50% { filter: hue-rotate(30deg) brightness(1.08); }
            100% { filter: hue-rotate(-30deg) brightness(1); }

        }
        .results-title {
            font-size: 2rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .results-desc {
            position: relative;
            overflow: hidden;
        }
        .results-hero-icon {
            font-size: 3.2rem;
            margin-bottom: 0.7rem;
            animation: heroIconPulse 2.2s infinite;
            display: inline-block;
        }
        @keyframes heroIconPulse {
            0%, 100% { transform: scale(1); filter: brightness(1.1); }
            50% { transform: scale(1.18) rotate(-6deg); filter: brightness(1.4); }
        }
        .results-highlight {
            display: inline-block;
            background: #fff2;
            color: #ff9800;
            font-weight: 700;
            border-radius: 8px;
            padding: 0.2em 0.7em;
            margin-top: 0.7em;
            font-size: 1.08em;
            box-shadow: 0 2px 8px #0002;
        }
        .results-cta {
            display: inline-block;
            margin-top: 1.2rem;
            background: linear-gradient(90deg, #ff9800 60%, #007bff 100%);
            color: #fff;
            font-size: 1.18rem;
            font-weight: 700;
            border-radius: 10px;
            padding: 0.9rem 2.2rem;
            text-decoration: none;
            box-shadow: 0 4px 16px #ff980055;
            transition: background 0.18s, box-shadow 0.18s, transform 0.18s;
        }
        .results-cta:hover {
            background: linear-gradient(90deg, #007bff 60%, #ff9800 100%);
            box-shadow: 0 8px 32px #007bff33;
            transform: scale(1.07);
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .results-status {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 0.7rem;
            background: #f8faff;
            border-radius: 8px;
            padding: 0.7rem 1.2rem;
            box-shadow: 0 2px 8px #007bff11;
            font-size: 1.08rem;
            color: #222;
            justify-content: center;
        }
        .results-status-icon {
            font-size: 1.5em;
        }
        .results-empty {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 20vh;
        }
        .results-empty-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px #007bff11;
            padding: 2rem 2rem 1.5rem 2rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            width: 100%;
        }
        .results-empty-title {
            font-size: 1.3rem;
            color: #ff9800;
            font-weight: bold;
            margin-bottom: 0.7rem;
        }
        .results-empty-icon {
            font-size: 2.5em;
            color: #007bff;
            margin-bottom: 0.5rem;
        }
        .results-empty-desc {
            font-size: 1.08rem;
            color: #222;
            position: relative;
            overflow: hidden;
        }
        @media (max-width: 600px) {
            .results-container {
                gap: 1.2rem;
            }
            .results-hero-card, .results-empty-card {
                padding: 1.2rem 0.5rem;
            }
            .results-title {
                font-size: 1.3rem;
            }
        }
        .results-empty-highlight {
            display: inline-block;
            background: #fff2;
            color: #007bff;
            font-weight: 700;
            border-radius: 8px;
            padding: 0.2em 0.7em;
            margin-top: 0.7em;
            font-size: 1.08em;
            box-shadow: 0 2px 8px #0002;
        }
        .results-socials {
            display: flex;
            gap: 1.2rem;
            justify-content: center;
            margin-top: 1.2rem;
        }
        .results-social img {
            width: 32px;
            height: 32px;
            filter: grayscale(0.2) brightness(1.1);
            transition: filter 0.18s, transform 0.18s;
        }
        .results-social:hover img {
            filter: none;
            transform: scale(1.12);
        }
        </style>
    </main>


    <?php include("../templates/footer_z.php")?>
    
</body>
</html>