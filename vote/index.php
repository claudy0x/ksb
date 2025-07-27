<?php 
    $domaine="http://192.168.50.216/kamerstartbattle/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voter</title>
    <link rel="icon" href="kamerstartbattle.png" type="image/x-icon">
    <meta name="description" content="Voting page for selecting candidates in the Kamerstart Battle.">
    <meta name="keywords" content="voting, candidates, Kamerstart Battle">
    <meta name="author" content="claudystac">
    <?php include ("../settings/liens.php")?>
    <?php /* include_once("$path: $domaine settings/liens.php") */?>
</head>
<body style="padding-top: 6.8rem;background: url('templates/family-members-exchanging-hugs-smiles-medium-shot.jpg') center center/cover no-repeat fixed; min-height:100vh;">
    <?php include ("../templates/header_z.php")?>
    <main>
        <h1>Vote par catégorie</h1>
        <p>Veuillez sélectionner la catégorie et le candidat pour voter.</p>
        <div id="vote-message" style="text-align:center;color:#ffd700;font-weight:bold;margin-bottom:1.2rem;"></div>
        <div id="categories-filter" style="display:flex;flex-wrap:wrap;gap:1em;justify-content:center;margin-bottom:2em;">
            <button class="cat-filter-btn" data-cat="HipHop">Hip Hop danse</button>
            <button class="cat-filter-btn" data-cat="Miss">Miss</button>
            <button class="cat-filter-btn" data-cat="Master">Master</button>
            <button class="cat-filter-btn" data-cat="Chant">Chant</button>
            <button class="cat-filter-btn" data-cat="Afro">Afro danse</button>
            <button class="cat-filter-btn" data-cat="Danse">Danse</button>
            <button class="cat-filter-btn" data-cat="Rap">Rap</button>
            <button class="cat-filter-btn" data-cat="Mbole">Mbole danse</button>
            <button class="cat-filter-btn" data-cat="CoupeDecale">CoupeDecale danse</button>
            <button class="cat-filter-btn" data-cat="all">Toutes</button>
            

        </div>
        <div class="candidats">
            <!-- MISS -->
            <section class="categories_nom_cat" data-cat="Miss">
                <h2 class="cat-title">Miss</h2>
                <div class="liste_candidats" id="miss-candidats"></div>
            </section>
            <!-- MASTER -->
            <section class="categories_nom_cat" data-cat="Master">
                <h2 class="cat-title">Master</h2>
                <div class="liste_candidats" id="master-candidats"></div>
            </section>
            <!-- CHANT -->
            <section class="categories_nom_cat" data-cat="Chant">
                <h2 class="cat-title">Chant</h2>
                <div class="liste_candidats" id="chant-candidats"></div>
            </section>
            <!-- RAP -->
            <section class="categories_nom_cat" data-cat="Rap">
                <h2 class="cat-title">Rap</h2>
                <div class="liste_candidats" id="rap-candidats"></div>
            </section>            
            <!-- DANSE AFRO  -->
            <section class="categories_nom_cat" data-cat="Afro">
                <h2 class="cat-title">de la  Danse  Afro</h2>
                <div class="liste_candidats" id="afro-candidats"></div>
            </section>  
            
            <!-- DANSE MBOLE  -->
            <section class="categories_nom_cat" data-cat="Mbole">
                <h2 class="cat-title">Danse du Mbole </h2>
                <div class="liste_candidats" id="mbole-candidats"></div>
            </section>
            <!-- DANSE  HIPHOP-->
            <section class="categories_nom_cat" data-cat="HipHop">
                <h2 class="cat-title"> Danse du HipHop</h2>
                <div class="liste_candidats" id="hiphop-candidats"></div>
            </section>
            <!-- DANSE COUPEDECALER-->
            <section class="categories_nom_cat" data-cat="CoupeDecale">
                <h2 class="cat-title">Danse du CoupeDecale </h2>
                <div class="liste_candidats" id="coupedecale-candidats"></div>
            </section>
            <!-- DANSE
            <section class="categories_nom_cat" data-cat="Danse">
                <h2 class="cat-title">Danse</h2>
                <div class="liste_candidats" id="danse-candidats"></div>
            </section> -->
        </div>

        <section>

            <p>Si vous avez déjà voté, vous pouvez consulter les résultats <a href="../results/">ici</a>.</p>
            <p>Pour plus d'informations, visitez notre site web <a href="https://www.kamerstartbattle.com">ici</a>.</p>
            <p>Pour toute assistance, veuillez nous contacter à <a href="mailto:assistance@kamerstartbattle.com">assistance@kamerstartbattle.com</a>.</p>
            <p>Pour des mises à jour et des annonces, suivez-nous sur nos réseaux sociaux.</p>
            <p>Merci de participer à l'élection et de faire entendre votre voix!</p>
            <p>Nous vous souhaitons bonne chance dans votre choix de candidats.</p>
            <p>Votre vote compte et peut faire la différence!</p>
        </section>
    </main>
    <?php include("../templates/footer_z.php")?>
    <script src="<?php echo $domaine; ?>/templates/static/js/vote.js"></script>
    <script>
// Message d'incitation dynamique
const voteMessages = [
    "Votez pour votre candidat préféré et revenez chaque jour pour soutenir votre choix !",
    "Votre voix compte ! N'hésitez pas à revenir pour suivre l'évolution des votes.",
    "Partagez le lien et invitez vos amis à voter !",
    "Plus vous participez, plus votre candidat a de chances de gagner !",
    "Merci de faire vivre la compétition, revenez pour voir les résultats !"
];
function showVoteMessage() {
    const msg = voteMessages[Math.floor(Math.random() * voteMessages.length)];
    document.getElementById('vote-message').textContent = msg;
}
showVoteMessage();
setInterval(showVoteMessage, 8000);

// Sélection et vote par catégorie
const categories = document.querySelectorAll('.categories_nom_cat');
categories.forEach((cat, idx) => {
    const catTitle = cat.querySelector('.cat-title')?.textContent || 'Catégorie';
    const candidats = cat.querySelectorAll('[class^="candidatNo_"]');
    candidats.forEach((cdt, cdtIdx) => {
        const num = cdtIdx + 1;
        const nom = cdt.querySelector('img').alt;
        cdt.addEventListener('click', function() {
            // Retire la sélection précédente
            candidats.forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');
            showVoteModal({
                nom,
                categorie: catTitle,
                numero: num
            });
        });
    });
});

// Création de la fenêtre modale personnalisée
function showVoteModal({ nom, categorie, numero }) {
    // Récupère le chemin d'image exact depuis le JS
    let imgPath = '';
    if (candidatsData[categorie] && candidatsData[categorie][numero-1]) {
        imgPath = candidatsData[categorie][numero-1].img;
    } else {
        // Fallback ancien chemin
        imgPath = `categories/${categorie}/${categorie}_candidat_${numero}_${nom}.jpg`;
    }
    document.getElementById('vote-modal')?.remove();
    const modal = document.createElement('div');
    modal.id = 'vote-modal';
    modal.innerHTML = `
        <div class="modal-backdrop"></div>
        <div class="modal-content">
            <h3>Vote pour le/la candidat(e) ${nom}</h3>
            <p><strong>Catégorie :</strong> ${categorie}</p>
            <p><span style="display:inline-block;width:200px;height: calc(160*1.618px);overflow:hidden;border:1rem solid-white;border-radius:1rem;box-shadow: 0 0 1rem white"><img src="${imgPath}" width="100" alt="${nom}" style="width:100%;height:100%;border-radius:1rem;box-shadow: 0 0 1rem white" /></span></p>
            <p><strong>Numéro :</strong> ${numero}</p>
            <label for="montant-vote">Montant du vote (min 125 XAF) :</label>
            <input type="number" id="montant-vote" min="125" value="125" style="width:100%;padding:0.5em;margin-bottom:1em;border:0;outline:none;">
            <div style="display:flex;gap:1em;justify-content:center;">
                <button id="btn-voter" class="vote-btn">Voter</button>
                <button id="btn-fermer" class="vote-btn" style="background:#ccc;color:#333;">Annuler</button>
            </div>
        </div>
    `;
    document.body.appendChild(modal);
    document.body.style.overflow = 'hidden';
    document.getElementById('btn-fermer').onclick = () => {
        modal.remove();
        document.body.style.overflow = '';
    };
    document.getElementById('btn-voter').onclick = () => {
        const montant = parseInt(document.getElementById('montant-vote').value, 10);
        if (isNaN(montant) || montant < 125) {
            alert('Le montant minimum est de 125 XAF.');
            return;
        }
        /*
        =============================
        PARAMÈTRES CINETPAY À FOURNIR
        =============================
        Pour que le paiement fonctionne parfaitement, voici les paramètres OBLIGATOIRES et RECOMMANDÉS à envoyer à l'endpoint officiel CinetPay :
        - site_id         : (OBLIGATOIRE) L'identifiant de votre site fourni par CinetPay (ex: '5877998')
        - api_key         : (OBLIGATOIRE) Votre clé API CinetPay (ex: '189315520766beae6b512c91.41663436')
        - transaction_id  : (OBLIGATOIRE) Un identifiant unique pour chaque transaction (ex: Date.now() + random)
        - amount          : (OBLIGATOIRE) Le montant du paiement (en XAF)
        - currency        : (OBLIGATOIRE) La devise, généralement 'XAF' pour l'Afrique Centrale
        - description     : (OBLIGATOIRE) Description de la transaction (ex: 'Vote pour ...')
        - return_url      : (RECOMMANDÉ) URL de redirection après paiement (succès ou échec)
        - notify_url      : (RECOMMANDÉ) URL de notification serveur à serveur (callback backend)
        - customer_name   : (RECOMMANDÉ) Nom du client (si disponible)
        - customer_email  : (RECOMMANDÉ) Email du client (si disponible)
        - customer_phone  : (RECOMMANDÉ) Téléphone du client (si disponible)
        - lang            : (optionnel) Langue d'affichage du formulaire CinetPay ('fr', 'en', etc.)
        - channels        : (optionnel) Moyen de paiement à afficher (ex: 'MOBILE_MONEY', 'CARTE', etc.)
        - metadata        : (optionnel) Données additionnelles (JSON encodé)
        
        Consulte la documentation officielle CinetPay pour la liste complète et la signification des paramètres :
        https://docs.cinetpay.com/
        */
        // Paramètres CinetPay (remplace par tes vraies infos)
        const site_id = '105895553';
        const api_key = '156781546166bead23063b25.42969593';
        const transaction_id = Date.now() + '' + Math.floor(Math.random()*1000);
        const description = `Vote pour ${nom} (${categorie} - N°${numero})`;
        // IMPORTANT : Utilise toujours des URLs absolues (https://...) accessibles publiquement !
        const return_url = 'https://www.kamerstartbattle.odoo.com/retour-paiement';
        const notify_url = 'https://www.kamerstartbattle.odoo.com/notify-paiement';
        // Création d'un formulaire POST pour la redirection sécurisée
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'https://secure.cinetpay.com/v1/?method=payment';
        form.target = '_blank';
        // Respect strict des paramètres attendus par CinetPay
        // Voir https://docs.cinetpay.com/api/payment/request/
        const params = {
            site_id,
            apikey: api_key, // la clé doit être "apikey" et non "api_key" selon la doc officielle
            transaction_id,
            amount: montant,
            currency: 'XAF',
            description,
            return_url,
            notify_url,
            // Les champs suivants sont optionnels mais recommandés si tu as l'info :
            // customer_name: nom,
            // customer_email: '',
            customer_phone: '690780519', // Remplace par le numéro de téléphone du client
            lang: 'fr',
            channels: ['MOBILE_MONEY','MOMO','ORANGE',], // 'MOBILE_MONEY' pour Mobile Money, 'MOMO' pour CinetPay  
            // channels: 'ALL', // 'ALL' pour tous les canaux disponibles
            metadata: JSON.stringify({ categorie, numero })
        };
        for (const key in params) {
            if (params[key]) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = key;
                input.value = params[key];
                form.appendChild(input);
            }
        }
        document.body.appendChild(form);
        form.submit();
        setTimeout(() => form.remove(), 2000);
        modal.remove();
        document.body.style.overflow = '';
    };
}

// Filtre par catégorie
const filterBtns = document.querySelectorAll('.cat-filter-btn');
const catSections = document.querySelectorAll('.categories_nom_cat');
filterBtns.forEach(btn => {
    btn.onclick = function() {
        const cat = btn.getAttribute('data-cat');
        // Ajoute la classe active au bouton cliqué
        btn.classList.add('active');
        // Affiche/masque les sections en fonction de la catégorie
        if (cat === 'all') {
            catSections.forEach(sec => sec.style.display = '');

        } else {
            // alert(`Filtrer les candidats de la catégorie : ${cat}`);
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            // Affiche/masque les sections en fonction de la catégorie

            catSections.forEach(sec => {
                // Vérifie si le titre de la section contient la catégorie
                // Utilise textContent pour éviter les problèmes d'espaces ou de casse
                const cat = btn.getAttribute('data-cat');   
                sec.style.display = 'none'; // Masque par défaut
                // Vérifie si le titre de la section contient la catégorie
                const title = sec.querySelector('.cat-title')?.textContent || '';
                

                if (title.includes(cat)) {
                    sec.style.display = '';
                } else {
                    sec.style.display = 'none';
                }
            });
        }
        // Optionnel : scroll vers la section visible
        const firstVisible = Array.from(catSections).find(sec => sec.style.display !== 'none');
        if (firstVisible) firstVisible.scrollIntoView({behavior:'smooth', block:'start'});
    };
});

// Style modale
const style = document.createElement('style');
style.textContent = `
#vote-modal { position: fixed; z-index: 9999; top:0; left:0; width:100vw; height:100vh; display:flex; align-items:center; justify-content:center; }
#vote-modal .modal-backdrop { position:absolute; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.45); }
#vote-modal .modal-content { position:relative; background: transparent; backdrop-filter: blur(25px);box-shadow: 0 0px 1rem white; border-radius:16px; padding:2.2em 1.5em 1.5em 1.5em; min-width:320px; max-width:95vw; z-index:2; animation:pop-in .7s; }
#vote-modal h3 { margin-top:0; color:#007bff; }
#vote-modal label { font-weight:500; color:#0056b3; }
#vote-modal input[type=number] { border-radius:8px; border:1px solid #white; font-size:1.1em;}
@keyframes pop-in { 0%{opacity:0;transform:scale(0.9);} 100%{opacity:1;transform:scale(1);} }
`;
document.head.appendChild(style);

// Style pour les boutons de filtre
const filterStyle = document.createElement('style');
filterStyle.textContent = `
#categories-filter { margin-bottom:2em; }
.cat-filter-btn {
    background: #007bff;
    color: #fff;
    border: none;
    outline:none;
    border-radius: 8px;
    padding: 0.7em 1.5em;
    font-size: 1.1em;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s, color 0.2s, transform 0.2s;
    box-shadow: 0 2px 8px #ffffffff;
}
.cat-filter-btn:hover, .cat-filter-btn.active {
    background: #ff0000ff;
    color: #ffffffff;
    font-weight: 600;
    transform: scale(1.07);
}
`;
document.head.appendChild(filterStyle);

// Données dynamiques des candidats
const candidatsData = {
    Chant: [
        { categ:'Chant',nom: 'YC Becker', img: 'categories/chant/chant_candidat_1_YcBecker.jpg' },
        { categ:'Chant',nom: 'MiguiS', img: 'categories/chant/chant_candidat_2_MiguiS.jpg' },
        { categ:'Chant',nom: 'BaoLaMerveille', img: 'categories/chant/chant_candidat_3_BaoLaMerveille.jpg' },
        { categ:'Chant',nom: 'FEG', img: 'categories/chant/chant_candidat_4_FEG.jpg' },
        { categ:'Chant',nom: 'Syska', img: 'categories/chant/chant_candidat_5_Syska.jpg' },
        { categ:'Chant',nom: 'Dly', img: 'categories/chant/chant_candidat_6_Dly.jpg' },

        // Ajoutez ici autant de profils que nécessaire
    ],
    Danse: [
        { categ:'danse',nom: '4gigas', img: 'categories/danse/danse_candidat_0_4gigas.jpg' },
        { categ:'danse',nom: 'DAKY', img: 'categories/danse/danse_candidat_1_DAKY💭.jpg' },
        { categ:'danse',nom: 'Mutan', img: 'categories/danse/danse_candidat_2_Mutan.jpg' },
        { categ:'danse',nom: 'ChrisbeEKiobee', img: 'categories/danse/danse_candidat_3_ChrisbeeKiobee.jpg' },
        { categ:'danse',nom: 'IbLastar', img: 'categories/danse/danse_candidat_4_IbLastar.jpg' },
        { categ:'danse',nom: 'Bob', img: 'categories/danse/danse_candidat_5_Bob.jpg' },
        { categ:'danse',nom: 'Jezus', img: 'categories/danse/danse_candidat_6_Jezus.jpg' },
        { categ:'danse',nom: 'Manuel117', img: 'categories/danse/danse_candidat_7_Manuel117.jpg' },
        { categ:'danse',nom: 'AntiDot', img: 'categories/danse/danse_candidat_8_AntiDot.jpg' },
        { categ:'danse',nom: 'DaniBlue', img: 'categories/danse/danse_candidat_9_DaniBlue.jpg' },
        { categ:'danse',nom: 'MrSalim', img: 'categories/danse/danse_candidat_10_MrSalim.jpg' },
        { categ:'danse',nom: 'Queen', img: 'categories/danse/danse_candidat_11_Queen.jpg' },
        { categ:'danse',nom: 'HansB', img: 'categories/danse/danse_candidat_12_HansB.jpg' },
        { categ:'danse',nom: 'Zkelly', img: 'categories/danse/danse_candidat_13_Zkelly.jpg' },
        { categ:'danse',nom: 'JordyAfro', img: 'categories/danse/danse_candidat_14_JordyAfro.jpg' },
        { categ:'danse',nom: 'VortexAlpha3', img: 'categories/danse/danse_candidat_15_VortexAlpha3.jpg' },
        { categ:'danse',nom: 'Leader9', img: 'categories/danse/danse_candidat_16_Leader9.jpg' },
        { categ:'danse',nom: 'TakTik', img: 'categories/danse/danse_candidat_17_TakTik.jpg' },
        { categ:'danse',nom: 'Mirrage', img: 'categories/danse/danse_candidat_18_Mirrage.jpg' },

    ],
    Miss: [
        { categ:'Miss',nom: 'CharleneNKEM', img: 'categories/miss/miss_candidate_1_CharleneNKEM.jpg' },
        { categ:'Miss',nom: 'EssoumaMichelle', img: 'categories/miss/miss_candidate_2_EssoumaMichelle.jpg' },
    ],
    Master: [
        { categ:'Master',nom: 'ChinoisFk', img: 'categories/master/master_candidat_1_ChinoisFk.jpg' },
        { categ:'Master',nom: 'DarkKev', img: 'categories/master/master_candidat_2_DarkKev.jpg' },
        { categ:'Master',nom: 'NyangaBoy', img: 'categories/master/master_candidat_3_NyangaBoy.jpg' },
        { categ:'Master',nom: 'Stiller', img: 'categories/master/master_candidat_4_Stiller.jpg' }
    ],
    Rap: [
        { categ:'Rap',nom: 'MisterH', img: 'categories/rap/rap_candidat_2_MisterH.jpg' },
        { categ:'Rap',nom: 'CriminelFantome', img: 'categories/rap/rap_candidat_3_CriminelFantome.jpg' },
        { categ:'Rap',nom: 'SK9', img: 'categories/rap/rap_candidat_4_SK9.jpg' },
        { categ:'Rap',nom: 'TGV', img: 'categories/rap/rap_candidat_5_TGV.jpg' }
    ],
    // Ajoutez ici d'autres catégories et candidats si nécessaire

    Afro: [
        { categ:'Afro',nom: 'DAKY', img: 'categories/danse/afro/danse_candidat_1_DAKY💭.jpg' },
        { categ:'Afro',nom: 'Bob', img: 'categories/danse/afro/danse_candidat_5_Bob.jpg' },
        { categ:'Afro',nom: 'Jezus', img: 'categories/danse/afro/danse_candidat_6_Jezus.jpg' },
        { categ:'Afro',nom: 'Manuel117', img: 'categories/danse/afro/danse_candidat_7_Manuel117.jpg' },
        { categ:'Afro',nom: 'AntiDot', img: 'categories/danse/afro/danse_candidat_8_AntiDot.jpg' },
        { categ:'Afro',nom: 'DaniBlue', img: 'categories/danse/afro/danse_candidat_9_DaniBlue.jpg' },
        { categ:'Afro',nom: 'Queen', img: 'categories/danse/afro/danse_candidat_11_Queen.jpg' },
        { categ:'Afro',nom: 'JordyAfro', img: 'categories/danse/afro/danse_candidat_14_JordyAfro.jpg' },
        { categ:'Afro',nom: 'Leader9', img: 'categories/danse/afro/danse_candidat_16_Leader9.jpg' },
        { categ:'Afro',nom: 'TakTik', img: 'categories/danse/afro/danse_candidat_17_TakTik.jpg' },

    ],
    Mbole: [
        { categ:'Mbole',nom: 'DAKY', img: 'categories/danse/mbole/danse_candidat_1_DAKY💭.jpg' },
        { categ:'Mbole',nom: 'Bob', img: 'categories/danse/mbole/danse_candidat_5_Bob.jpg' },
        { categ:'Mbole',nom: 'MrSalim', img: 'categories/danse/mbole/danse_candidat_10_MrSalim.jpg' },
        { categ:'Mbole',nom: 'Zkelly', img: 'categories/danse/mbole/danse_candidat_13_Zkelly.jpg' },
        { categ:'Mbole',nom: 'TakTik', img: 'categories/danse/mbole/danse_candidat_17_TakTik.jpg' },
        { categ:'danse',nom: 'Mirrage', img: 'categories/danse/danse_candidat_18_Mirrage.jpg' },

    ],    
        
    HipHop: [
        { categ:'Hiphop',nom: 'ChrisbeEKiobee', img: 'categories/danse/hiphop/danse_candidat_3_ChrisbeeKiobee.jpg' },
        { categ:'Hiphop',nom: 'HansB', img: 'categories/danse/hiphop/danse_candidat_12_HansB.jpg' },
        { categ:'Hiphop',nom: 'VortexAlpha3', img: 'categories/danse/hiphop/danse_candidat_15_VortexAlpha3.jpg' },

    ],
    CoupeDecale: [
        { categ:'Couppé Décalé',nom: '4gigas', img: 'categories/danse/coupedecale/danse_candidat_0_4gigas.jpg' },
        { categ:'Couppé Décalé',nom: 'Mutan', img: 'categories/danse/coupedecale/danse_candidat_2_Mutan.jpg' },
        { categ:'Couppé Décalé',nom: 'IbLastar', img: 'categories/danse/coupedecale/danse_candidat_4_IbLastar.jpg' },
        { categ:'Couppé Décalé',nom: 'Jezus', img: 'categories/danse/coupedecale/danse_candidat_6_Jezus.jpg' },
        { categ:'Couppé Décalé',nom: 'Manuel117', img: 'categories/danse/coupedecale/danse_candidat_7_Manuel117.jpg' },

        { categ:'Couppé Décalé',nom: 'AntiDot', img: 'categories/danse/coupedecale/danse_candidat_8_AntiDot.jpg' },
        { categ:'Couppé Décalé',nom: 'Zkelly', img: 'categories/danse/coupedecale/danse_candidat_13_Zkelly.jpg' },
        { categ:'Couppé Décalé',nom: 'DoupiPapillon', img: 'categories/danse/coupedecale/danse_candidat_19_DoupiPapillon.jpg' },
        
    ],
};
// Génération dynamique des profils
Object.keys(candidatsData).forEach(cat => {
    const container = document.getElementById(cat.toLowerCase() + '-candidats');
    if (!container) return;
    candidatsData[cat].forEach((cdt, idx) => {
        const div = document.createElement('div');
        div.className = `candidatNo_${idx+1}`;
        div.innerHTML = `
            <span id="${cdt.nom}" name="${cdt.nom}">${cdt.categ} ${idx+1}</span>
            <div class="profil_cat_chant" name="${cdt.nom}"  style="cursor:pointer;"  >
                <img src="${cdt.img}" alt="${cdt.nom}" id="${cdt.nom}" class="ph_cdt" >
            </div>
            <button class="vote-btn">Voter ${cdt.nom}</button>
        `;
        // Gestion du clic sur le profil
        div.querySelector('.profil_cat_chant').onclick = function(e) {
            e.stopPropagation();
            showVoteModal({ nom: cdt.nom, categorie: cat, numero: idx+1 });
        };
        // Gestion du clic sur le bouton voter
        div.querySelector('.vote-btn').onclick = function(e) {
            e.stopPropagation();
            showVoteModal({ nom: cdt.nom, categorie: cat, numero: idx+1 });
        };
        container.appendChild(div);
    });
});

const candidatStyle = document.createElement('style');
candidatStyle.textContent = `
[class^="candidatNo_"] {
    display: inline-block;
    margin: 1em;
    padding: 1em;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px #f8f9fa;
    text-align: center;
    min-width: 235px;
    min-height: 235px;
    max-width: 220px;
    flex-grow: 1;
    flex-shrink: 0;
    transition: box-shadow 0.2s, transform 0.2s;
    cursor: pointer;
    gap:1rem;
    background: #transparent;
    backdrop-filter: blur(25px);

}
`;
document.head.appendChild(candidatStyle);

// Ajout d'un overlay pour améliorer la lisibilité du contenu
const bgOverlay = document.createElement('style');
bgOverlay.textContent = `
body::after {
    content: '';
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(90deg,rgba(255, 0, 0, 0.86) 1%,transparent 40% ,black 100%) /*url("templates/family-members-exchanging-hugs-smiles-medium-shot.jpg")*/;
    background-size: cover;
    background-position: center;
    z-index: 0;
    Padding-top: 6rem; /* Ajuste selon la hauteur du header pour éviter qu'il ne masque le contenu */
    min-height: 100vh;
}
main, header, footer {
    position: relative;
    z-index: 1;

}
`;
document.head.appendChild(bgOverlay);
    </script>

</body>
</html>

