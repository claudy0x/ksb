<?php
// index.php
    $domaine="https://kamerstarbattle.vercel.app/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>voter</title>
    <?php include("settings/liens.php");?>        
    <link rel="canonical" href="<?php echo $domaine; ?>/voter">
    <link rel="alternate" href="<?php echo $domaine; ?>/voter" hreflang="en">
</head>
<body id="main-bg" style="padding-top: 6rem; background: url('templates/pictures/photomanipulation-2430031_1280.jpg') center center / cover no-repeat fixed; min-height: 100vh;">
    <!-- Espace publicité animé (desktop uniquement) -->
    <div class="pub-cartoon-ads" id="pubCartoonAds">
        <div class="pub-cartoon-slide">
            <img src="templates/pictures/imgs/images_(1).jpg" alt="Pub Cartoon 1" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/images_(2).jpg" alt="Pub Cartoon 2" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/images_(3).jpg" alt="Pub Cartoon 3" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/images_(4).jpg" alt="Pub Cartoon 4" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/danse_1.jpg" alt="Pub Cartoon 5" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/danse_2.jpg" alt="Pub Cartoon 6" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/danse_3.jpg" alt="Pub Cartoon 7" class="pub-cartoon-img">
            <img src="templates/pictures/imgs/staff_(1).jpg" alt="Pub Cartoon 8" class="pub-cartoon-img">
        </div>
        <div class="pub-cartoon-label">Publicité</div>
    </div>
    <!-- Animations bulles et multiformes -->
    <div class="animated-shapes-bg">
        <div class="bubble" style="--i:1;"></div>
        <div class="bubble" style="--i:2;"></div>
        <div class="bubble" style="--i:3;"></div>
        <div class="bubble" style="--i:4;"></div>
        <div class="bubble" style="--i:5;"></div>
        <div class="bubble" style="--i:6;"></div>
        <div class="bubble" style="--i:7;"></div>
        <div class="bubble" style="--i:8;"></div>
        <div class="bubble" style="--i:9;"></div>
        <div class="bubble" style="--i:10;"></div>
        <div class="shape square" style="--i:11;"></div>
        <div class="shape triangle" style="--i:12;"></div>
        <div class="shape square" style="--i:13;"></div>
        <div class="shape triangle" style="--i:14;"></div>
    </div>
    <div id="bg-fade" style="position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:-1;pointer-events:none;transition:opacity 1.2s;opacity:0;"></div>
    <?php
        include("templates/header.php")
    ?>

    <main class="main-home">
        <div class="main-banner">
            <span class="main-banner-text">🔥 Les votes sont ouverts ! Soutenez votre candidat préféré dès maintenant ! 🔥</span>
            <a href="<?php echo $domaine; ?>vote/" class="main-banner-btn">Voter</a>
        </div>
        <section class="main-hero">
            <div class="main-hero-content">
                <h1 class="main-title">Bienvenue sur <span class="main-title-accent">Kamerstart Battle</span></h1>
                <p class="main-subtitle">Participez à l'aventure, votez pour vos candidats favoris !</p>
                <a href="<?php echo $domaine; ?>vote/" class="main-vote-btn">🗳️ Voter maintenant</a>
            </div>
            <div class="main-hero-img">
                <img src="templates/pictures/kamerstartbattle.png" alt="Logo Kamerstart Battle" class="main-logo-img">
            </div>
        </section>
        <section class="main-about">
            <h2 class="main-about-title">Pourquoi voter ?</h2>
            <div class="main-about-content">
                <p class="main-about-desc">Votre voix compte ! En votant, vous soutenez vos talents préférés et participez à une compétition unique. Rejoignez la communauté et faites la différence !</p>
                <ul class="main-about-list">
                    <li><span class="main-about-icon">🏆</span> Récompensez les meilleurs talents</li>
                    <li><span class="main-about-icon">👥</span> Rejoignez une grande communauté</li>
                    <li><span class="main-about-icon">📊</span> Suivez les résultats en direct</li>
                    <li><span class="main-about-icon">🎉</span> Participez à des événements exclusifs</li>
                </ul>
            </div>
        </section>
    <section class="main-categories">
        <div class="main-category main-miss-bg">
            <h2 class="main-category-title">Catégorie Miss</h2>
            <img src="vote/categories/miss/miss_candidate_1_CharleneNKEM.jpg" alt="Miss Candidate" class="main-category-img">
            <img src="vote/categories/miss/miss_candidate_2_EssoumaMichelle.jpg" alt="Miss Candidate" class="main-category-img">
            <img src="vote/categories/miss/miss_candidate_1_CharleneNKEM.jpg" alt="Miss Candidate" class="main-category-img">
            <a href="<?php echo $domaine; ?>vote/index.php#miss-candidats" class="main-category-btn">Voir les Miss</a>
        </div>
        <div class="main-category main-master-bg">
            <h2 class="main-category-title">Catégorie Master</h2>
            <div class="main-category-imgs">
                <img src="vote/categories/master/master_candidat_1_ChinoisFk.jpg" alt="Master 1" class="main-category-img">
                <img src="vote/categories/master/master_candidat_2_DarkKev.jpg" alt="Master 2" class="main-category-img">
                <img src="vote/categories/master/master_candidat_3_NyangaBoy.jpg" alt="Master 3" class="main-category-img">
            </div>
            <a href="<?php echo $domaine; ?>vote/index.php#master-candidats" class="main-category-btn">Voir les Masters</a>
        </div>
        <div class="main-category main-rap-bg">
            <h2 class="main-category-title">Catégorie Rap</h2>
            <div class="main-category-imgs">
                <img src="vote/categories/rap/rap_candidat_2_MisterH.jpg" alt="Rap 2" class="main-category-img">
                <img src="vote/categories/rap/rap_candidat_3_CriminelFantome.jpg" alt="Rap 3" class="main-category-img">
                <img src="vote/categories/rap/rap_candidat_4_SK9.jpg" alt="Rap 4" class="main-category-img">
            </div>
            <a href="<?php echo $domaine; ?>vote/index.php#rap-candidats" class="main-category-btn">Voir les Rap</a>
        </div>
        <div class="main-category main-danse-bg">
            <h2 class="main-category-title">Catégorie Danse</h2>
            <div class="main-category-imgs">
                <img src="vote/categories/danse/danse_candidat_0_4gigas.jpg" alt="Danse 0" class="main-category-img">
                <img src="vote/categories/danse/danse_candidat_2_Mutan.jpg" alt="Danse 2" class="main-category-img">
                <img src="vote/categories/danse/danse_candidat_3_ChrisbeeKiobee.jpg" alt="Danse 3" class="main-category-img">
            </div>
            <a href="<?php echo $domaine; ?>vote/index.php#danse-candidats" class="main-category-btn">Voir les Danse</a>
        </div>
        <div class="main-category main-chant-bg">
            <h2 class="main-category-title">Catégorie Chant</h2>
            <div class="main-category-imgs">
                <img src="vote/categories/chant/chant_candidat_1_YcBecker.jpg" alt="Chant 1" class="main-category-img">
                <img src="vote/categories/chant/chant_candidat_2_MiguiS.jpg" alt="Chant 2" class="main-category-img">
                <img src="vote/categories/chant/chant_candidat_3_BaoLaMerveille.jpg" alt="Chant 3" class="main-category-img">
            </div>
            <a href="<?php echo $domaine; ?>vote/index.php#chant-candidats" class="main-category-btn">Voir les Chant</a>
        </div>
    </section>
    <section class="main-sponsors">
        <h2 class="main-sponsors-title">Nos sponsors</h2>
        <div class="main-sponsors-logos">
            <a href="#" class="sponsor-logo" title="Sponsor 1"><img src="templates/pictures/sponsor1.png" alt="Sponsor 1"></a>
            <a href="#" class="sponsor-logo" title="Sponsor 2"><img src="templates/pictures/sponsor2.png" alt="Sponsor 2"></a>
            <a href="#" class="sponsor-logo" title="Sponsor 3"><img src="templates/pictures/sponsor3.png" alt="Sponsor 3"></a>
            <a href="#" class="sponsor-logo" title="Sponsor 4"><img src="templates/pictures/sponsor4.png" alt="Sponsor 4"></a>
            <a href="#" class="sponsor-logo" title="Sponsor 5"><img src="templates/pictures/sponsor5.png" alt="Sponsor 5"></a>
        </div>
    </section>
    </main>
    <style>
    /* Espace publicité animé avec personnages de dessins animés (desktop only) */
    .pub-cartoon-ads {
        position: fixed;
        top: 50%;
        right: 40px;
        transform: translateY(-50%);
        width: 180px;
        height: 320px;
        background: linear-gradient(120deg, #fffbe6 60%, #ffe0b2 100%);
        border-radius: 18px;
        box-shadow: 0 4px 32px #ff980055;
        z-index: 1002;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        overflow: hidden;
        border: 2px solid #ff9800;
        animation: pubFadeIn 2.2s;
    }
    .pub-cartoon-label {
        width: 100%;
        text-align: center;
        background: #ff9800;
        color: #fff;
        font-weight: bold;
        font-size: 1.08rem;
        padding: 0.3rem 0;
        letter-spacing: 1px;
        border-bottom-left-radius: 16px;
        border-bottom-right-radius: 16px;
        margin-top: auto;
    }
    .pub-cartoon-slide {
        width: 100%;
        height: 260px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        position: relative;
    }
    .pub-cartoon-img {
        width: 120px;
        height: 180px;
        object-fit: contain;
        margin: 0.5rem auto;
        border-radius: 12px;
        box-shadow: 0 2px 12px #ff980033;
        background: #fff;
        position: absolute;
        left: 50%;
        top: 0;
        transform: translateX(-50%) scale(0.8);
        opacity: 0;
        transition: opacity 0.7s, transform 0.7s;
        animation: pubCartoonAnim 12s infinite;
    }
    .pub-cartoon-img:nth-child(1) { animation-delay: 0s; }
    .pub-cartoon-img:nth-child(2) { animation-delay: 4s; }
    .pub-cartoon-img:nth-child(3) { animation-delay: 8s; }
    .pub-cartoon-img:nth-child(4) { animation-delay: 12s; }
    .pub-cartoon-img:nth-child(5) { animation-delay: 16s; }
    .pub-cartoon-img:nth-child(6) { animation-delay: 20s; }
    .pub-cartoon-img:nth-child(7) { animation-delay: 24s; }
    @keyframes pubCartoonAnim {
        0% { opacity: 0; transform: translateX(-50%) scale(0.8) rotate(-8deg); }
        5% { opacity: 1; transform: translateX(-50%) scale(1.05) rotate(2deg); }
        25% { opacity: 1; transform: translateX(-50%) scale(1.08) rotate(-2deg); }
        
        30% { opacity: 0; transform: translateX(-50%) scale(0.8) rotate(8deg); }
        100% { opacity: 0; }
    }
    @keyframes pubFadeIn {
        0% { opacity: 0; transform: translateY(-30px) scale(0.95); }
        100% { opacity: 1; transform: translateY(0) scale(1); }
    }
    @media (max-width: 1100px) {
        .pub-cartoon-ads { right: 10px; }
    }
    @media (max-width: 900px) {
        .pub-cartoon-ads { display: none !important; }
    }
    /* Animations bulles et multiformes en arrière-plan du body */
    .animated-shapes-bg {
        position: fixed;
        top: 0; left: 0; width: 100vw; height: 100vh;
        pointer-events: none;
        z-index: 0;
        overflow: hidden;
    }
    .animated-shapes-bg .bubble {
        position: absolute;
        bottom: -120px;
        left: calc((var(--i) - 1) * 9vw + 2vw);
        width: 32px;
        height: 32px;
        background: linear-gradient(120deg, #ff9800cc 0%, #007bffcc 100%);
        opacity: 0.16;
        border-radius: 50%;
        filter: blur(1.5px);
        animation: bubbleFloat 9s linear infinite;
        animation-delay: calc(var(--i) * -0.7s);
    }
    .animated-shapes-bg .bubble:nth-child(even) {
        width: 22px;
        height: 22px;
        background: linear-gradient(120deg, #007bffcc 0%, #ff9800cc 100%);
        opacity: 0.11;
    }
    .animated-shapes-bg .shape.square {
        position: absolute;
        bottom: -100px;
        left: calc((var(--i) - 1) * 8vw + 5vw);
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, #ffeb3b99 0%, #ff980099 100%);
        opacity: 0.13;
        border-radius: 7px;
        filter: blur(1px);
        animation: shapeFloat 11s linear infinite;
        animation-delay: calc(var(--i) * -1.1s);
    }
    .animated-shapes-bg .shape.triangle {
        position: absolute;
        bottom: -90px;
        left: calc((var(--i) - 1) * 7vw + 3vw);
        width: 0;
        height: 0;
        border-left: 18px solid transparent;
        border-right: 18px solid transparent;
        border-bottom: 32px solid #00bcd499;
        opacity: 0.12;
        filter: blur(0.5px);
        animation: shapeFloat 13s linear infinite;
        animation-delay: calc(var(--i) * -1.3s);
    }
    @keyframes bubbleFloat {
        0% {
            transform: translateY(0) scale(1) rotate(0deg);
            opacity: 0.16;
        }
        70% {
            opacity: 0.22;
        }
        100% {
            transform: translateY(-540px) scale(1.25) rotate(360deg);
            opacity: 0;
        }
    }
    @keyframes shapeFloat {
        0% {
            transform: translateY(0) scale(1) rotate(0deg);
            opacity: 0.13;
        }
        70% {
            opacity: 0.19;
        }
        100% {
            transform: translateY(-600px) scale(1.18) rotate(360deg);
            opacity: 0;
        }
    }
    .main-home {
        max-width: 900px;
        margin: 0 auto;
        padding: 2.5rem 1rem 2rem 1rem;
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
    }
    .main-banner {
        width: 100%;
        background: linear-gradient(90deg, #ff9800 40%, #ff5722 100%);
        color: #fff;
        font-size: 1.18rem;
        font-weight: 600;
        text-align: center;
        border-radius: 14px;
        box-shadow: 0 2px 12px #ff980033;
        padding: 1.1rem 1.2rem 1.1rem 1.2rem;
        margin-bottom: 1.2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.2rem;
        animation: main-banner-pop 1.2s;
    }
    @keyframes main-banner-pop {
        0% { opacity: 0; transform: scale(0.95); }
        80% { opacity: 1; transform: scale(1.04); }
        100% { opacity: 1; transform: scale(1); }
    }
    .main-banner-btn {
        background: linear-gradient(90deg, #fff 60%, #ffe0b2 100%);
        color: #ff5722;
        font-weight: bold;
        font-size: 1.08rem;
        border: none;
        border-radius: 8px;
        padding: 0.7rem 1.5rem;
        box-shadow: 0 2px 8px #ff980033;
        text-decoration: none;
        margin-left: 0.5rem;
        transition: background 0.18s, color 0.18s, box-shadow 0.18s, transform 0.18s;
        cursor: pointer;
        animation: main-banner-btn-pop 1.5s;
    }
    @keyframes main-banner-btn-pop {
        0% { opacity: 0; transform: scale(0.8); }
        80% { opacity: 1; transform: scale(1.08); }
        100% { opacity: 1; transform: scale(1); }
    }
    .main-banner-btn:hover {
        background: linear-gradient(90deg, #ffe0b2 60%, #fff 100%);
        color: #ff9800;
        box-shadow: 0 4px 16px #ff980055;
        transform: scale(1.07);
    }
    .main-hero {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2.5rem;
        background: linear-gradient();
        backdrop-filter: blur(15px);
        border-radius: 18px;
        box-shadow: 0 4px 24px #007bff11;
        padding: 2.2rem 2.5rem;
        flex-wrap: wrap;
        text-align: center;
    }
    .main-hero-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    .main-hero-img {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    .main-hero-content {
        flex: 1 1 320px;
        min-width: 220px;
    }
    .main-title {
        font-size: 2.3rem;
        color: #ffffffff;
        font-weight: bold;
        margin-bottom: 0.7rem;
        letter-spacing: 0.5px;
    }
    .main-title-accent {
        color: #9ab1caff;
        background: linear-gradient(90deg, #ffffffff 60%, #ffffffff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }
    .main-subtitle {
        font-size: 1.15rem;
        color: white;
        margin-bottom: 1.5rem;
    }
    .main-vote-btn {
        display: inline-block;
        background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
        color: #fff;
        font-size: 1.18rem;
        font-weight: 600;
        padding: 0.8rem 2.2rem;
        border-radius: 10px;
        box-shadow: 0 2px 12px #007bff22;
        text-decoration: none;
        transition: background 0.18s, box-shadow 0.18s, transform 0.18s;
        margin-top: 0.5rem;
        animation: main-vote-btn-pop 1.2s;
    }
    @keyframes main-vote-btn-pop {
        0% { opacity: 0; transform: scale(0.8); }
        80% { opacity: 1; transform: scale(1.08); }
        100% { opacity: 1; transform: scale(1); }
    }
    .main-vote-btn:hover {
        background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
        box-shadow: 0 6px 24px #007bff33;
        transform: scale(1.07);
    }
    .main-hero-img {
        flex: 0 0 160px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .main-logo-img {
        width: 140px;
        height: auto;
        object-fit: contain;
        border-radius: 12px;
        box-shadow: 0 2px 12px #007bff22;
        background: #fff;
        padding: 0.5rem;
    }
    .main-about {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 12px #007bff11;
        padding: 2rem 2rem 1.5rem 2rem;
    }
    .main-about-title {
        font-size: 1.5rem;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 1rem;
        text-align: left;
    }
    .main-about-content {
        display: flex;
        flex-direction: column;
        gap: 1.2rem;
    }
    .main-about-desc {
        font-size: 1.08rem;
        color: #222;
        margin-bottom: 0.5rem;
    }
    .main-about-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 1.1rem;
    }
    .main-about-list li {
        background: linear-gradient(90deg, #e3f0ff 60%, #f8faff 100%);
        color: #0056b3;
        font-size: 1.08rem;
        border-radius: 8px;
        padding: 0.7rem 1.2rem;
        box-shadow: 0 2px 8px #007bff11;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1.12rem;
    }
    .main-about-icon {
        font-size: 1.3em;
        margin-right: 0.3em;
    }
    @media (max-width: 900px) {
        .main-home {
            padding: 1.2rem 0.2rem 1.2rem 0.2rem;
        }
        .main-banner {
            font-size: 1rem;
            padding: 0.7rem 0.5rem 0.7rem 0.5rem;
            gap: 0.7rem;
        }
        .main-banner-btn {
            font-size: 0.98rem;
            padding: 0.5rem 1rem;
        }
        .main-hero {
            flex-direction: column;
            gap: 1.2rem;
            padding: 1.2rem 0.7rem;
        }
        .main-hero-img {
            margin-top: 1.2rem;
        }
        .main-logo-img {
            width: 100px;
        }
        .main-about {
            padding: 1.2rem 0.7rem 1rem 0.7rem;
        }
        .main-about-list {
            gap: 0.7rem;
        }
        .main-title {
            font-size: 1.3rem;
            color:white;
        }
        .main-about-title {
            font-size: 1.1rem;
        }
    }
    .main-categories {
        display: flex;
        flex-wrap: wrap;
        gap: 2.2rem;
        justify-content: center;
        align-items: stretch;
        margin-top: 2rem;
        margin-bottom: 1.5rem;
    }
    .main-category {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 2px 12px #007bff11;
        padding: 1.5rem 2rem;
        flex: 1 1 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-width: 220px;
        text-align: center;
        gap: 0.7rem;
    }
    .main-category-title {
        font-size: 1.3rem;
        font-weight: bold;
        margin-bottom: 0.7rem;
    }
    .main-category-imgs {
        display: flex;
        gap: 1.2rem;
        justify-content: center;
        align-items: center;
        margin-top: 0.5rem;
    }
    .main-category-img {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 2px 12px #007bff22;
        border: 3px solid #007bff;
        background: #fff;
    }
    .main-miss-bg {
        background: linear-gradient(120deg, #ffe0f0 60%, #fff 100%);
        box-shadow: 0 2px 12px #ff80ab33;
    }
    .main-master-bg {
        background: linear-gradient(120deg, #e3f0ff 60%, #fff 100%);
        box-shadow: 0 2px 12px #007bff22;
    }
    .main-rap-bg {
        background: linear-gradient(120deg, #fff3e0 60%, #fff 100%);
        box-shadow: 0 2px 12px #ff980033;
    }
    .main-danse-bg {
        background: linear-gradient(120deg, #e0fff3 60%, #fff 100%);
        box-shadow: 0 2px 12px #00bfa522;
    }
    .main-chant-bg {
        background: linear-gradient(120deg, #e0f7fa 60%, #fff 100%);
        box-shadow: 0 2px 12px #00bcd422;
    }
    .main-category-btn {
        display: inline-block;
        background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
        color: #fff;
        font-size: 1.02rem;
        font-weight: 500;
        padding: 0.5rem 1.2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px #007bff22;
        text-decoration: none;
        transition: background 0.18s, box-shadow 0.18s, transform 0.18s;
        margin-top: 0.5rem;
    }
    .main-category-btn:hover {
        background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
        box-shadow: 0 4px 16px #007bff33;
        transform: scale(1.07);
    }
    @media (max-width: 900px) {
        .main-categories {
            flex-direction: column;
            gap: 1.2rem;
        }
        .main-category {
            padding: 1.2rem 0.7rem;
        }
        .main-category-img {
            width: 60px;
            height: 60px;
        }
    }
    @media (max-width: 900px) {
        .main-miss-master {
            flex-direction: column;
            gap: 1.2rem;
        }
        .main-miss-bg, .main-master-bg {
            padding: 1.2rem 0.7rem;
        }
        .main-miss-img {
            width: 80px;
            height: 80px;
        }
        .main-master-img {
            width: 60px;
            height: 60px;
        }
    }
    .main-sponsors {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 2px 12px #007bff11;
        padding: 2rem 2rem 1.5rem 2rem;
        margin-top: 1.5rem;
        text-align: center;
    }
    .main-sponsors-title {
        font-size: 1.4rem;
        color: #ff9800;
        font-weight: bold;
        margin-bottom: 1.2rem;
        letter-spacing: 0.5px;
    }
    .main-sponsors-logos {
        display: flex;
        flex-wrap: wrap;
        gap: 2.2rem;
        justify-content: center;
        align-items: center;
        margin-top: 0.5rem;
    }
    .sponsor-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8faff;
        border-radius: 12px;
        box-shadow: 0 2px 8px #007bff11;
        padding: 0.7rem 1.2rem;
        transition: box-shadow 0.18s, transform 0.18s;
        height: 80px;
        width: 140px;
    }
    .sponsor-logo img {
        max-width: 100px;
        max-height: 60px;
        object-fit: contain;
        filter: grayscale(0.2) brightness(1.1);
        transition: filter 0.18s, transform 0.18s;
    }
    .sponsor-logo:hover {
        box-shadow: 0 6px 24px #ff980055;
        transform: scale(1.07);
        background: #fffbe6;
    }
    .sponsor-logo:hover img {
        filter: none;
        transform: scale(1.08);
    }
    @media (max-width: 900px) {
        .main-sponsors {
            padding: 1.2rem 0.7rem 1rem 0.7rem;
        }
        .main-sponsors-logos {
            gap: 1.1rem;
        }
        .sponsor-logo {
            height: 60px;
            width: 90px;
            padding: 0.5rem 0.5rem;
        }
        .sponsor-logo img {
            max-width: 70px;
            max-height: 40px;
        }
    }
    </style>

    <script>
    // Liste des images d'arrière-plan (ajoute tes images dans templates/pictures)
    document.addEventListener('DOMContentLoaded', function() {
      const bgImages = [
        'templates/pictures/photomanipulation-2430031_1280.jpg',
        'templates/pictures/imgs/danse_1.jpg',
        'templates/pictures/imgs/hip-hop-2733136_1280.jpg',
        'templates/pictures/imgs/danse_3.jpg',
        'templates/pictures/imgs/kamerstart.jpg'
      ];
      let bgIndex = 0;
      const body = document.body;
      const bgFade = document.getElementById('bg-fade');
      function changeBg() {
        bgIndex = (bgIndex + 1) % bgImages.length;
        // Prépare la transition
        bgFade.style.background = `url('${bgImages[bgIndex]}') center center / cover no-repeat fixed`;
        bgFade.style.opacity = '1';
        setTimeout(() => {
          body.style.background = `url('${bgImages[bgIndex]}') center center / cover no-repeat fixed`;
          bgFade.style.opacity = '0';
        }, 1200);
      }
      setInterval(changeBg, 10000); // toutes les 10 secondes
    });
    </script>
    <?php include("templates/footer.php");?>
    <script>
    // Masquer l'espace pub si il chevauche le footer
    document.addEventListener('DOMContentLoaded', function() {
      const pub = document.getElementById('pubCartoonAds');
      const footer = document.querySelector('footer, .footer, #footer');
      if (!pub || !footer) return;
      function checkPubFooterOverlap() {
        const pubRect = pub.getBoundingClientRect();
        const footerRect = footer.getBoundingClientRect();
        // Si le bas de la pub touche ou dépasse le haut du footer
        if (pubRect.bottom > footerRect.top) {
          pub.style.opacity = '0';
          pub.style.pointerEvents = 'none';
        } else {
          pub.style.opacity = '1';
          pub.style.pointerEvents = '';
        }
      }
      window.addEventListener('scroll', checkPubFooterOverlap);
      window.addEventListener('resize', checkPubFooterOverlap);
      setTimeout(checkPubFooterOverlap, 500);
    });
    </script>
    <!-- <script src="settings/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
