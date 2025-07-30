<?PHP
    // $domaine="http://192.168.83.1/kamerstartbattle/";
    $domaine="https://z0sdrh26-7070.uks1.devtunnels.ms/kamerstartbattle/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <?php include("../settings/liens_z.php")?>
</head>
<body>
    <?php include("../templates/header_z.php")?>
    <!-- Bulles animées sur tout le body -->
    <div class="gallery-bubbles-bg">
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
    </div>
    <main>
        <section class="gallery-hero">
            <div class="gallery-hero-bg">
                <div class="gallery-hero-overlay"></div>
                <div class="gallery-hero-content">
                    <span class="gallery-hero-icon">✨</span>
                    <h2 class="gallery-title">Galerie Kamerstart Battle</h2>
                    <p class="gallery-desc">
                        Plongez dans l'univers vibrant de <strong>Kamerstart Battle</strong> !<br>
                        Revivez les meilleurs moments, les émotions et les performances inoubliables en images et vidéos.<br>
                        <span class="gallery-hero-highlight">Partagez, commentez, inspirez-vous !</span>
                    </p>
                    <a href="#gallery-images" class="gallery-hero-cta">Découvrir la galerie <span class="gallery-hero-cta-arrow">↓</span></a>
                </div>
            </div>
        </section>
        <!-- Bulles animées sur tout le main -->
        <div class="gallery-bubbles-bg">
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
        </div>
        <section class="gallery-images-section">
            <h3 class="gallery-subtitle"><span class="gallery-icon">🖼️</span> Galerie Photo</h3>
            <div class="gallery-images-grid">
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/chant/chant_candidat_2_MiguiS.jpg" alt="Chant - MiguiS" class="gallery-img-lightbox" data-caption="Chant - MiguiS">
                        <span class="gallery-img-title">Chant - MiguiS</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/chant/chant_candidat_3_BaoLaMerveille.jpg" alt="Chant - BaoLaMerveille" class="gallery-img-lightbox" data-caption="Chant - BaoLaMerveille">
                        <span class="gallery-img-title">Chant - BaoLaMerveille</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/danse/danse_candidat_3_ChrisbeeKiobee.jpg" alt="Danse - ChrisbeeKiobee" class="gallery-img-lightbox" data-caption="Danse - ChrisbeeKiobee">
                        <span class="gallery-img-title">Danse - ChrisbeeKiobee</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/danse/danse_candidat_4_IbLastar.jpg" alt="Danse - IbLastar" class="gallery-img-lightbox" data-caption="Danse - IbLastar">
                        <span class="gallery-img-title">Danse - IbLastar</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/master/master_candidat_3_NyangaBoy.jpg" alt="Master - NyangaBoy" class="gallery-img-lightbox" data-caption="Master - NyangaBoy">
                        <span class="gallery-img-title">Master - NyangaBoy</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/miss/miss_candidate_1_CharleneNKEM.jpg" alt="Miss - CharleneNKEM" class="gallery-img-lightbox" data-caption="Miss - CharleneNKEM">
                        <span class="gallery-img-title">Miss - CharleneNKEM</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(1).jpg" alt="Cérémonie d'ouverture" class="gallery-img-lightbox" data-caption="Cérémonie d'ouverture">
                        <span class="gallery-img-title">Cérémonie d'ouverture</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(2).jpg" alt="Ambiance du public" class="gallery-img-lightbox" data-caption="Ambiance du public">
                        <span class="gallery-img-title">Ambiance du public</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(3).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(4).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(5).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(6).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(7).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(8).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(9).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(10).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(11).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(12).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(13).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(14).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(15).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(16).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(17).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(18).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(19).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/images_(20).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(1).jpg" alt="Cérémonie d'ouverture" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Cérémonie Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(2).jpg" alt="Ambiance du public" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(3).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(4).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(5).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(6).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(7).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(8).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(9).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(10).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(11).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(12).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(13).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(14).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(15).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(16).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="staff Nkolo start battle">
                        <span class="gallery-img-title">Staff Nkolo start battle</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/templates/pictures/imgs/staff_(17).jpg" alt="Candidats sur scène" class="gallery-img-lightbox" data-caption="Candidats sur scène">
                        <span class="gallery-img-title">Candidats sur scène</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/chant/chant_candidat_1_YcBecker.jpg" alt="Chant - YcBecker" class="gallery-img-lightbox" data-caption="Chant - YcBecker">
                        <span class="gallery-img-title">Chant - YcBecker</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/danse/danse_candidat_2_Mutan.jpg" alt="Danse - Mutan" class="gallery-img-lightbox" data-caption="Danse - Mutan">
                        <span class="gallery-img-title">Danse - Mutan</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/master/master_candidat_2_DarkKev.jpg" alt="Master - DarkKev" class="gallery-img-lightbox" data-caption="Master - DarkKev">
                        <span class="gallery-img-title">Master - DarkKev</span>
                    </div>
                </div>
                <div class="gallery-img-card">
                    <div class="gallery-img-overlay">
                        <img src="<?php echo $domaine; ?>/vote/categories/rap/rap_candidat_3_CriminelFantome.jpg" alt="Rap - CriminelFantome" class="gallery-img-lightbox" data-caption="Rap - CriminelFantome">
                        <span class="gallery-img-title">Rap - CriminelFantome</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!--  -->
        
        <section class="gallery-videos-section">
            <h3 class="gallery-subtitle"><span class="gallery-icon">🎬</span> Galerie Vidéo</h3>
            <div class="gallery-videos-grid">
                <div class="gallery-video-card">
                    <div class="gallery-video-thumb" data-video="<?php echo $domaine; ?>/templates/videos/video1.mp4" data-poster="<?php echo $domaine; ?>/templates/pictures/image1.jpg" data-caption="Best of - Highlights">
                        <video src="<?php echo $domaine; ?>/templates/pictures/movs/video_(3).mp4" alt="Best of - Highlights"></video>
                        <span class="gallery-video-play">▶</span>
                    </div>
                    <span class="gallery-video-caption">Best of - Highlights</span>
                </div>
                <div class="gallery-video-card">
                    <div class="gallery-video-thumb" data-video="<?php echo $domaine; ?>/templates/videos/video2.mp4" data-poster="<?php echo $domaine; ?>/templates/pictures/image2.jpg" data-caption="Interview des candidats">
                        <video src="<?php echo $domaine; ?>/templates/pictures/movs/video_(13).mp4" alt="Interview des candidats"></video>>
                        <span class="gallery-video-play">▶</span>
                    </div>
                    <span class="gallery-video-caption">Interview des candidats</span>
                </div>
                <div class="gallery-video-card">
                    <div class="gallery-video-thumb" data-video="<?php echo $domaine; ?>/templates/videos/video3.mp4" data-poster="<?php echo $domaine; ?>/templates/pictures/image3.jpg" data-caption="Finale en direct">
                        <video src="<?php echo $domaine; ?>/templates/pictures/movs/video_(17).mp4" alt="Finale en direct"></video>
                        <span class="gallery-video-play">▶</span>
                    </div>
                    <span class="gallery-video-caption">Finale en direct</span>
                </div>
            </div>
        </section> 
        <section class="gallery-contact-section">
            <h3 class="gallery-subtitle">Contact & Collaboration</h3>
            <div class="gallery-contact-card">
                <p>Une question, une suggestion ou envie de collaborer ?<br>
                <strong>Contactez-nous directement :</strong></p>
                <a href="mailto:contact@kamerstartbattle.com" class="gallery-contact-btn">✉️ contact@kamerstartbattle.com</a>
                <a href="https://wa.me/237699036706?text=Bonjour%2C%20je%20souhaite%20plus%20d'informations%20sur%20Kamerstart%20Battle" target="_blank" class="gallery-contact-btn whatsapp">💬 WhatsApp : +237 699 036 706</a>
            </div>
        </section>
        <style>
        /* Bulles animées en arrière-plan du body */
        .gallery-bubbles-bg {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        .gallery-bubbles-bg .bubble {
            position: absolute;
            bottom: -120px;
            left: calc(var(--i) * 10%);
            width: 32px;
            height: 32px;
            background: linear-gradient(120deg, #ff9800cc 0%, #007bffcc 100%);
            opacity: 0.18;
            border-radius: 50%;
            filter: blur(1.5px);
            animation: bubbleFloat 8s linear infinite;
            animation-delay: calc(var(--i) * -0.7s);
        }
        .gallery-bubbles-bg .bubble:nth-child(even) {
            width: 22px;
            height: 22px;
            background: linear-gradient(120deg, #007bffcc 0%, #ff9800cc 100%);
            opacity: 0.13;
        }
        @keyframes bubbleFloat {
            0% {
                transform: translateY(0) scale(1) rotate(0deg);
                opacity: 0.18;
            }
            70% {
                opacity: 0.22;
            }
            100% {
                transform: translateY(-520px) scale(1.25) rotate(360deg);
                opacity: 0;
            }
        }
        .gallery-images-section {
            position: relative;
            z-index: 1;
        }
        /* HERO MODERNE */
        .gallery-hero {
            position: relative;
            min-height: 340px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2.5rem;
        }
        .gallery-hero-bg {
            position: relative;
            width: 100%;
            min-height: 340px;
            background: linear-gradient(120deg, #007bff 0%, #ff9800 100%);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 6px 32px #007bff22;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #0007 0%, #fff0 100%);
            z-index: 1;
        }
        .gallery-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 2.5rem 1.2rem 2.2rem 1.2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .gallery-hero-icon {
            font-size: 3.2rem;
            margin-bottom: 0.7rem;
            animation: heroIconPulse 2.2s infinite;
            display: inline-block;
        }
        @keyframes heroIconPulse {
            0%, 100% { transform: scale(1); filter: brightness(1.1); }
            50% { transform: scale(1.18) rotate(-6deg); filter: brightness(1.4); }
        }
        .gallery-title {
            font-size: 2.7rem;
            font-weight: bold;
            margin-bottom: 1.1rem;
            color: #fff;
            letter-spacing: 1.5px;
            text-shadow: 0 4px 24px #000a;
        }
        .gallery-desc {
            font-size: 1.25rem;
            color: #fff;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 8px #000a;
        }
        .gallery-hero-highlight {
            display: inline-block;
            background: #fff2;
            color: #ffeb3b;
            font-weight: 700;
            border-radius: 8px;
            padding: 0.2em 0.7em;
            margin-top: 0.7em;
            font-size: 1.08em;
            box-shadow: 0 2px 8px #0002;
        }
        .gallery-hero-cta {
            display: inline-block;
            margin-top: 1.7rem;
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
        .gallery-hero-cta:hover {
            background: linear-gradient(90deg, #007bff 60%, #ff9800 100%);
            box-shadow: 0 8px 32px #007bff33;
            transform: scale(1.07);
        }
        .gallery-hero-cta-arrow {
            font-size: 1.5em;
            margin-left: 0.3em;
            vertical-align: middle;
            animation: heroArrowBounce 1.2s infinite;
        }
        @keyframes heroArrowBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(8px); }
        }
        @media (max-width: 900px) {
            .gallery-hero-bg {
                min-height: 180px;
                border-radius: 12px;
            }
            .gallery-title {
                font-size: 1.5rem;
            }
            .gallery-desc {
                font-size: 1.01rem;
            }
            .gallery-hero-content {
                padding: 1.2rem 0.2rem 1.2rem 0.2rem;
            }
            .gallery-hero-cta {
                font-size: 1rem;
                padding: 0.6rem 1.2rem;
            }
        }
        /* Masonry grid améliorée et overlay titre */
        .gallery-images-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
            justify-items: center;
            align-items: stretch;
            position: relative;
            z-index: 2;
        }
        .gallery-img-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 12px #007bff11;
            overflow: hidden;
            position: relative;
            transition: box-shadow 0.18s, transform 0.18s;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .gallery-img-overlay {
            position: relative;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        .gallery-img-overlay img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
            transition: transform 0.22s cubic-bezier(.4,0,.2,1), filter 0.22s;
        }
        .gallery-img-overlay:hover img {
            transform: scale(1.08) rotate(-2deg);
            filter: brightness(1.08) saturate(1.2);
        }
        .gallery-img-title {
            position: absolute;
            left: 0; right: 0; bottom: 0;
            background: linear-gradient(0deg, #222b 80%, #fff0 100%);
            color: #fff;
            font-size: 1.08rem;
            font-weight: 600;
            padding: 0.7rem 0.5rem 0.4rem 0.9rem;
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
            letter-spacing: 0.5px;
            opacity: 0.96;
            pointer-events: none;
            text-shadow: 0 2px 8px #000a;
        }
        @media (max-width: 900px) {
            .gallery-img-overlay img {
                height: 90px;
            }
        }
        /* Lightbox & Video Popup */
        .gallery-lightbox, .gallery-video-popup {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.85);
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: fadeIn 0.3s;
        }
        .gallery-lightbox.active, .gallery-video-popup.active {
            display: flex;
        }
        .gallery-lightbox {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .gallery-lightbox-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 95vw;
        }
        .gallery-lightbox-img {
            max-width: 90vw;
            max-height: 70vh;
            border-radius: 14px;
            box-shadow: 0 4px 32px #000a;
            background: #fff;
            margin-bottom: 1.2rem;
        }
        .gallery-lightbox-caption {
            color: #fff;
            font-size: 1.25rem;
            text-align: center;
            font-weight: 600;
            text-shadow: 0 2px 8px #000a;
            background: rgba(0,0,0,0.25);
            border-radius: 8px;
            padding: 0.7rem 1.5rem;
            margin-bottom: 0.5rem;
            max-width: 90vw;
        }
        .gallery-video-popup {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .gallery-video-popup-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 95vw;
        }
        .gallery-video-popup video {
            max-width: 90vw;
            max-height: 70vh;
            border-radius: 14px;
            box-shadow: 0 4px 32px #000a;
            background: #fff;
            margin-bottom: 1.2rem;
        }
        .gallery-video-popup-caption {
            color: #fff;
            font-size: 1.25rem;
            text-align: center;
            font-weight: 600;
            text-shadow: 0 2px 8px #000a;
            background: rgba(0,0,0,0.25);
            border-radius: 8px;
            padding: 0.7rem 1.5rem;
            margin-bottom: 0.5rem;
            max-width: 90vw;
        }
        .gallery-video-popup-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.8rem;
            color: #fff;
            background: rgba(0,0,0,0.25);
            border: none;
            border-radius: 50%;
            width: 54px;
            height: 54px;
            cursor: pointer;
            z-index: 10001;
            transition: background 0.18s, color 0.18s;
        }
        .gallery-video-popup-arrow:hover {
            background: #ff9800;
            color: #fff;
        }
        .gallery-video-popup-prev { left: 32px; }
        .gallery-video-popup-next { right: 32px; }
        .gallery-lightbox-close, .gallery-video-popup-close {
            position: absolute;
            top: 32px;
            right: 48px;
            font-size: 2.5rem;
            color: #fff;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 10000;
            transition: color 0.18s;
        }
        .gallery-lightbox-close:hover, .gallery-video-popup-close:hover {
            color: #ff9800;
        }
        .gallery-video-thumb {
            position: relative;
            cursor: pointer;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px #007bff22;
            transition: box-shadow 0.18s, transform 0.18s;
        }
        .gallery-video-thumb img {
            width: 200px;
            height: 120px;
            object-fit: cover;
            display: block;
        }
        .gallery-video-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2.5rem;
            color: #fff;
            background: rgba(0,0,0,0.35);
            border-radius: 50%;
            padding: 0.2em 0.4em;
            pointer-events: none;
            box-shadow: 0 2px 8px #000a;
        }
        .gallery-video-thumb:hover {
            box-shadow: 0 6px 24px #ff980055;
            transform: scale(1.04) rotate(1deg);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
main {
    max-width: 900px;
    margin: 0 auto;
    padding: 2.5rem 1rem 2rem 1rem;
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    position: relative;
    z-index: 1;
    overflow: visible;
}
        .gallery-hero {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .gallery-title {
            font-size: 2.2rem;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 0.7rem;
        }
        .gallery-desc {
            font-size: 1.15rem;
            color: #333;
            margin-bottom: 1.2rem;
        }
        .gallery-subtitle {
            font-size: 1.3rem;
            color: #ff9800;
            font-weight: bold;
            margin-bottom: 0.7rem;
        }
        .gallery-images-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
            justify-items: center;
        }
        .gallery-img-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px #007bff11;
            padding: 0.7rem 0.7rem 0.5rem 0.7rem;
            transition: box-shadow 0.18s, transform 0.18s;
        }
        .gallery-img-card img {
            width: 170px;
            height: 110px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 8px #007bff22;
            margin-bottom: 0.5rem;
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .gallery-img-card:hover {
            box-shadow: 0 6px 24px #ff980055;
            transform: scale(1.04) rotate(-1deg);
        }
        .gallery-img-caption {
            font-size: 1.01rem;
            color: #007bff;
            margin-top: 0.1rem;
            font-weight: 500;
        }
        .gallery-videos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            justify-items: center;
        }
        .gallery-video-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 12px #007bff11;
            padding: 0.7rem 0.7rem 0.5rem 0.7rem;
            transition: box-shadow 0.18s, transform 0.18s;
        }
        .gallery-video-card video {
            width: 200px;
            height: 120px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #007bff22;
            margin-bottom: 0.5rem;
            background: #000;
            transition: transform 0.18s, box-shadow 0.18s;
        }
        .gallery-video-card:hover {
            box-shadow: 0 6px 24px #ff980055;
            transform: scale(1.03) rotate(1deg);
        }
        .gallery-video-caption {
            font-size: 1.01rem;
            color: #ff9800;
            margin-top: 0.1rem;
            font-weight: 500;
        }
        .gallery-icon {
            font-size: 1.2em;
            vertical-align: middle;
            margin-right: 0.3em;
        }
        .gallery-contact-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }
        .gallery-contact-card {
            background: linear-gradient(90deg, #fffbe6 60%, #ffe0b2 100%);
            border-radius: 14px;
            box-shadow: 0 2px 12px #ff980033;
            padding: 1.5rem 2.2rem;
            text-align: center;
            margin-top: 0.7rem;
        }
        .gallery-contact-btn {
            display: inline-block;
            background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
            color: #fff;
            font-size: 1.08rem;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.7rem 1.5rem;
            margin: 0.5rem 0.5rem 0 0;
            text-decoration: none;
            box-shadow: 0 2px 8px #007bff22;
            transition: background 0.18s, box-shadow 0.18s, transform 0.18s;
        }
        .gallery-contact-btn:hover {
            background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
            box-shadow: 0 4px 16px #007bff33;
            transform: scale(1.07);
        }
        .gallery-contact-btn.whatsapp {
            background: linear-gradient(90deg, #25d366 60%, #128c7e 100%);
            color: #fff;
        }
        .gallery-contact-btn.whatsapp:hover {
            background: linear-gradient(90deg, #128c7e 60%, #25d366 100%);
        }
        @media (max-width: 900px) {
            main {
                padding: 1.2rem 0.2rem 1.2rem 0.2rem;
            }
            .gallery-title {
                font-size: 1.3rem;
            }
            .gallery-subtitle {
                font-size: 1.08rem;
            }
            .gallery-images-grid, .gallery-videos-grid {
                grid-template-columns: 1fr 1fr;
                gap: 0.7rem;
            }
            .gallery-img-card img, .gallery-video-card video {
                width: 150px;
                height: 150px;
            }
            .gallery-img-card, .gallery-video-card {
                padding: 0.3rem 0.2rem 0.2rem 0.2rem;
            }
            .gallery-contact-card {
                padding: 1rem 0.5rem;
            }
            .gallery-contact-btn {
                font-size: 0.98rem;
                padding: 0.5rem 1rem;
            }
        }

                .gallery-lightbox-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.8rem;
            color: #fff;
            background: rgba(0,0,0,0.25);
            border: none;
            border-radius: 50%;
            width: 54px;
            height: 54px;
            cursor: pointer;
            z-index: 10001;
            transition: background 0.18s, color 0.18s;
        }
        .gallery-lightbox-arrow:hover {
            background: #ff9800;
            color: #fff;
        }
        .gallery-lightbox-prev { left: 32px; }
        .gallery-lightbox-next { right: 32px; }
        </style>
        <!-- Lightbox & Video Popup Elements -->
        <div class="gallery-lightbox" id="gallery-lightbox">
            <button class="gallery-lightbox-arrow gallery-lightbox-prev" id="gallery-lightbox-prev" title="Précédent">&#10094;</button>
            <div class="gallery-lightbox-content">
                <img src="" alt="" class="gallery-lightbox-img" id="gallery-lightbox-img">
                <div class="gallery-lightbox-caption" id="gallery-lightbox-caption"></div>
            </div>
            <button class="gallery-lightbox-arrow gallery-lightbox-next" id="gallery-lightbox-next" title="Suivant">&#10095;</button>
            <button class="gallery-lightbox-close" id="gallery-lightbox-close" title="Fermer">&times;</button>

        </div>
        <div class="gallery-video-popup" id="gallery-video-popup">
            <button class="gallery-video-popup-arrow gallery-video-popup-prev" id="gallery-video-popup-prev" title="Précédent">&#10094;</button>
            <div class="gallery-video-popup-content">
                <video controls id="gallery-video-popup-video" poster="">
                    <source src="" type="video/mp4">
                </video>
                <div class="gallery-video-popup-caption" id="gallery-video-popup-caption"></div>
            </div>
            <button class="gallery-video-popup-arrow gallery-video-popup-next" id="gallery-video-popup-next" title="Suivant">&#10095;</button>
            <button class="gallery-video-popup-close" id="gallery-video-popup-close" title="Fermer">&times;</button>
        </div>
        <script>
        // Lightbox pour images avec navigation
        const galleryImgs = Array.from(document.querySelectorAll('.gallery-img-lightbox'));
        let currentImgIndex = 0;
        function showLightbox(index) {
            if (index < 0) index = galleryImgs.length - 1;
            if (index >= galleryImgs.length) index = 0;
            currentImgIndex = index;
            const img = galleryImgs[index];
            document.getElementById('gallery-lightbox-img').src = img.src;
            document.getElementById('gallery-lightbox-caption').textContent = img.dataset.caption || '';
            document.getElementById('gallery-lightbox').classList.add('active');
        }
        galleryImgs.forEach((img, idx) => {
            img.addEventListener('click', function() {
                showLightbox(idx);
            });
        });
        document.getElementById('gallery-lightbox-close').onclick = function() {
            document.getElementById('gallery-lightbox').classList.remove('active');
            document.getElementById('gallery-lightbox-img').src = '';
        };
        document.getElementById('gallery-lightbox').onclick = function(e) {
            if(e.target === this) this.classList.remove('active');
        };
        document.getElementById('gallery-lightbox-prev').onclick = function(e) {
            e.stopPropagation();
            showLightbox(currentImgIndex - 1);
        };
        document.getElementById('gallery-lightbox-next').onclick = function(e) {
            e.stopPropagation();
            showLightbox(currentImgIndex + 1);
        };
        document.addEventListener('keydown', function(e) {
            if (!document.getElementById('gallery-lightbox').classList.contains('active')) return;
            if (e.key === 'ArrowLeft') showLightbox(currentImgIndex - 1);
            if (e.key === 'ArrowRight') showLightbox(currentImgIndex + 1);
            if (e.key === 'Escape') document.getElementById('gallery-lightbox').classList.remove('active');
        });
        // Popup vidéo avec navigation
        const galleryVideos = Array.from(document.querySelectorAll('.gallery-video-thumb'));
        let currentVideoIndex = 0;
        function showVideoPopup(index) {
            if (index < 0) index = galleryVideos.length - 1;
            if (index >= galleryVideos.length) index = 0;
            currentVideoIndex = index;
            const thumb = galleryVideos[index];
            const video = document.getElementById('gallery-video-popup-video');
            video.poster = thumb.dataset.poster;
            video.querySelector('source').src = thumb.dataset.video;
            video.load();
            document.getElementById('gallery-video-popup-caption').textContent = thumb.dataset.caption || '';
            document.getElementById('gallery-video-popup').classList.add('active');
        }
        galleryVideos.forEach((thumb, idx) => {
            thumb.addEventListener('click', function() {
                showVideoPopup(idx);
            });
        });
        document.getElementById('gallery-video-popup-close').onclick = function() {
            document.getElementById('gallery-video-popup').classList.remove('active');
            const video = document.getElementById('gallery-video-popup-video');
            video.pause();
            video.currentTime = 0;
            video.querySelector('source').src = '';
        };
        document.getElementById('gallery-video-popup').onclick = function(e) {
            if(e.target === this) {
                this.classList.remove('active');
                const video = document.getElementById('gallery-video-popup-video');
                video.pause();
                video.currentTime = 0;
                video.querySelector('source').src = '';
            }
        };
        document.getElementById('gallery-video-popup-prev').onclick = function(e) {
            e.stopPropagation();
            showVideoPopup(currentVideoIndex - 1);
        };
        document.getElementById('gallery-video-popup-next').onclick = function(e) {
            e.stopPropagation();
            showVideoPopup(currentVideoIndex + 1);
        };
        document.addEventListener('keydown', function(e) {
            if (!document.getElementById('gallery-video-popup').classList.contains('active')) return;
            if (e.key === 'ArrowLeft') showVideoPopup(currentVideoIndex - 1);
            if (e.key === 'ArrowRight') showVideoPopup(currentVideoIndex + 1);
            if (e.key === 'Escape') document.getElementById('gallery-video-popup').classList.remove('active');
        });
        </script>
    </main>
    <?php include("../templates/footer_z.php"); ?>
    
</body>
</html>