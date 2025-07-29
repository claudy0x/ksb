<?php
// search.php
    // $domaine="http://192.168.83.1/kamerstartbattle/";
    $domaine="https://z0sdrh26-8070.uks1.devtunnels.ms/kamerstartbattle/";
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$results = [];

// Liste des candidats par catégorie (doit être synchronisée avec le JS du site)
$candidatsData = [
    'Chant' => [
        'YCBecker', 'MiguiS', 'BaoLaMerveille', 'FEG', 'Syska', 'Dly',''
    ],
    'Danse' => [
        'DAKY💭', 'Mutan', 'ChrisbeEKiobee', 'IbLastar', 'Bob', 'Jezus', 'Manuel117', 'AntiDot', 'DaniBlue', 'MrSalim', 'Queen', 'HansB', 'Zkelly', 'JordyAfro', 'VortexAlpha3', 'Leader9', 'TakTik'
    ],
    'Miss' => [
        'CharleneNKEM', 'EssoumaMichelle'
    ],
    'Master' => [
        'ChinoisFk', 'DarkKev', 'NyangaBoy', 'Stiller'
    ],
    'Rap' => [
        '4gigas', 'MisterH', 'CriminelFantome', 'SK9', 'TGV'
    ],
    'Afro' => [ 'DAKY','Bob','Jezus','Manuel117','AntiDot','DaniBlue','Queen','JordyAfro','Leader9','TakTik'],
    'Mbole' => [ 'DAKY','Bob','MrSalim','Zkelly','TakTik','Mirrage'],
    'HipHop' => [ 'ChrisbeEKiobee','HansB','VortexAlpha3'],
    'CoupeDecale' => ['4gigas','Mutan','IbLastar','Jezus','AntiDot','Zkelly','DoupiPapillon'],
];

if ($query !== '') {
    foreach ($candidatsData as $cat => $candidats) {
        foreach ($candidats as $idx => $nom) {
            if ($nom && stripos($nom, $query) !== false) {
                $results[] = [
                    'url' => $domaine . '/vote/index.php#' . strtolower($cat) . '-candidats',
                    'title' => $nom . ' (' . $cat . ')',
                    'nom' => $domaine . '/vote/index.php#' . urlencode($nom)
                ];
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Recherche candidats sur le site</title>
    <meta name="description" content="Recherche sur les noms des candidats sur tout le site Kamerstart Battle">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $domaine; ?>/templates/static/css/styles.css">
    <style>
    body {
        background: linear-gradient(120deg, #007bff 60%, #0056b3 100%);
        min-height: 100vh;
    }

    .search-container {
        max-width: 600px;
        margin: 2rem auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10);
        padding: 2rem 2.5rem 2.5rem 2.5rem;
    }

    .search-title {
        text-align: center;
        color: #007bff;
        font-size: 2rem;
        margin-bottom: 1.2rem;
        font-weight: bold;
    }

    .search-form {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .search-form input[type="text"] {
        flex: 1;
        padding: 0.7rem 1.2rem;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 1.1rem;
    }

    .search-form button {
        background: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 0.7rem 1.5rem;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background 0.2s;
    }

    .search-form button:hover {
        background: #0056b3;
    }

    .search-results {
        margin-top: 1.5rem;
    }

    .search-results h2 {
        color: #0056b3;
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }

    .search-results ul {
        list-style: none;
        padding: 0;
    }

    .search-results li {
        background: #f8faff;
        margin-bottom: 1rem;
        border-radius: 10px;
        box-shadow: 0 2px 8px #007bff11;
        padding: 1rem 1.2rem;
        font-size: 1.08rem;
        transition: box-shadow 0.2s, transform 0.2s;
    }

    .search-results li:hover {
        box-shadow: 0 6px 24px #007bff22;
        transform: translateY(-2px) scale(1.01);
    }

    .search-results a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .search-results a:hover {
        text-decoration: underline;
        color: #0056b3;
    }

    .no-result {
        color: #ff0037;
        text-align: center;
        font-size: 1.1rem;
        margin-top: 2rem;
    }

    @media (max-width: 700px) {
        .search-container {
            padding: 1rem 0.5rem;
        }

        .search-title {
            font-size: 1.3rem;
        }
    }
    </style>
</head>


<body>
    <div class="search-header-bar">
        <div class="search-header-logo-area">
            <a href="<?php echo $domaine; ?>" class="search-logo-link" title="Retour à l'accueil">
                <img src="<?php echo $domaine; ?>/templates/pictures/kamerstartbattle.png" alt="Logo Kamerstartbattle" class="search-logo-img">
            </a>
        </div>
        <div class="search-header-actions">
            <a href="<?php echo $domaine; ?>" class="search-home-btn">Accueil</a>
        </div>
    </div>
    <div class="search-container">
        <div class="search-title">
            <span class="search-title-icon">🔎</span> Recherche de candidats
        </div>
        <form class="search-form" action="search.php" method="get" role="search" aria-label="Recherche de candidats">
            <input type="text" name="q" value="<?php echo htmlspecialchars($query); ?>"
                placeholder="Tapez le nom d'un candidat..." aria-label="Nom du candidat" autofocus required>
            <button type="submit" aria-label="Lancer la recherche"><span class="search-btn-icon">🔍</span> Rechercher</button>
        </form>
        <div class="search-results">
            <?php if ($query === ''): ?>
            <div class="search-info">Entrez le nom d'un candidat pour lancer une recherche sur le site.</div>
            <?php else: ?>
            <h2>Résultats pour "<?php echo htmlspecialchars($query); ?>" :</h2>
            <?php if (empty($results)): ?>
            <div class="no-result">
                <span style="font-size:2em;">😕</span><br>Aucun candidat trouvé.<br>
                <a href="<?php echo $domaine; ?>" class="search-home-btn-alt">Retour à l'accueil</a>
            </div>
            <?php else: ?>
            <ul class="search-results-list">
                <?php foreach ($results as $result): ?>
                <li class="search-result-item"><a href="<?php echo $result['nom']; ?>">🎤 <?php echo htmlspecialchars($result['title']); ?></a></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <footer>
        <p style="text-align:center;margin-top:2rem;">&copy; 2025 Kamerstart Battle. Tous droits réservés.</p>
    </footer>

    <style>
    .search-header-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #fff;
        box-shadow: 0 2px 12px #007bff11;
        padding: 0.7rem 2.5rem 0.7rem 2.5rem;
        border-radius: 0 0 18px 18px;
        margin-bottom: 1.2rem;
        position: relative;
        min-height: 70px;
    }
    .search-header-logo-area {
        display: flex;
        align-items: center;
        gap: 1.2rem;
    }
    .search-logo-link {
        display: flex;
        align-items: center;
        text-decoration: none;
    }
    .search-logo-img {
        height: 62px;
        width: auto;
        object-fit: contain;
        margin-right: 0.5rem;
        transition: filter 0.2s;
        filter: drop-shadow(0 0 8px #007bff33);
        position: relative;
        z-index: 1;
    }
    .search-logo-img:hover {
        filter: drop-shadow(0 0 16px #007bff99);
    }
    .search-header-actions {
        display: flex;
        align-items: center;
        gap: 1.2rem;
    }
    .search-home-btn, .search-home-btn-alt {
        background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 0.5rem 1.2rem;
        font-size: 1.08rem;
        font-weight: 500;
        text-decoration: none;
        margin-left: 0.5rem;
        transition: background 0.18s, box-shadow 0.18s;
        box-shadow: 0 2px 8px #007bff22;
        cursor: pointer;
        display: inline-block;
    }
    .search-home-btn:hover, .search-home-btn-alt:hover {
        background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
        color: #fff;
        text-decoration: none;
        box-shadow: 0 4px 16px #007bff33;
    }
    .search-container {
        max-width: 600px;
        margin: 2rem auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10);
        padding: 2rem 2.5rem 2.5rem 2.5rem;
        animation: fade-in 0.7s;
    }
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .search-title {
        text-align: center;
        color: #007bff;
        font-size: 2rem;
        margin-bottom: 1.2rem;
        font-weight: bold;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    .search-title-icon {
        font-size: 1.3em;
        vertical-align: middle;
    }
    .search-form {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }
    .search-form input[type="text"] {
        flex: 1 1 180px;
        min-width: 0;
        padding: 0.7rem 1.2rem;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 1.1rem;
        background: #f8faff;
        transition: border 0.18s, box-shadow 0.18s;
    }
    .search-form input[type="text"]:focus {
        border: 1.5px solid #007bff;
        box-shadow: 0 0 0 2px #007bff33;
        outline: none;
    }
    .search-form button {
        background: linear-gradient(90deg, #007bff 60%, #0056b3 100%);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 0.7rem 1.5rem;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background 0.2s, box-shadow 0.18s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 2px 8px #007bff22;
    }
    .search-form button:hover {
        background: linear-gradient(90deg, #0056b3 60%, #007bff 100%);
        box-shadow: 0 4px 16px #007bff33;
    }
    .search-btn-icon {
        font-size: 1.1em;
    }
    .search-results {
        margin-top: 1.5rem;
    }
    .search-results h2 {
        color: #0056b3;
        font-size: 1.3rem;
        margin-bottom: 1rem;
        text-align: center;
    }
    .search-results-list {
        list-style: none;
        padding: 0;
        margin: 0 auto;
        max-width: 420px;
    }
    .search-result-item {
        background: linear-gradient(90deg, #f8faff 60%, #e3f0ff 100%);
        margin-bottom: 1rem;
        border-radius: 10px;
        box-shadow: 0 2px 8px #007bff11;
        padding: 1rem 1.2rem;
        font-size: 1.08rem;
        transition: box-shadow 0.2s, transform 0.2s, background 0.2s;
        display: flex;
        align-items: center;
        gap: 0.7rem;
    }
    .search-result-item:hover {
        box-shadow: 0 6px 24px #007bff22;
        transform: translateY(-2px) scale(1.01);
        background: linear-gradient(90deg, #e3f0ff 60%, #f8faff 100%);
    }
    .search-result-item a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
        flex: 1;
        transition: color 0.18s;
    }
    .search-result-item a:hover {
        text-decoration: underline;
        color: #0056b3;
    }
    .no-result {
        color: #ff0037;
        text-align: center;
        font-size: 1.1rem;
        margin-top: 2rem;
        background: #fff6f8;
        border-radius: 10px;
        padding: 1.2rem 0.5rem 1.2rem 0.5rem;
        box-shadow: 0 2px 8px #ff003722;
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
    }
    .search-info {
        color: #555;
        text-align: center;
        font-size: 1.08rem;
        margin-top: 1.5rem;
    }
    @media (max-width: 900px) {
        .search-header-bar {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 0.5rem 0.5rem 0.5rem;
            gap: 0.7rem;
            border-radius: 0 0 12px 12px;
            min-height: unset;
        }
        .search-header-logo-area {
            justify-content: center;
        }
        .search-logo-img {
            height: 32px;
            margin: 0 auto 0.3rem auto;
            display: block;
        }
        .search-home-btn, .search-home-btn-alt {
            font-size: 0.98rem;
            padding: 0.4rem 0.7rem;
            margin-left: 0;
        }
        .search-container {
            padding: 1rem 0.5rem;
        }
        .search-title {
            font-size: 1.3rem;
        }
    }
    @media (max-width: 600px) {
        .search-header-bar {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 0 0 12px 12px;
        }
        .search-logo-img {
            margin: 0 auto 0.3rem auto;
            display: block;
        }
        .search-home-btn {
            margin-left: 0;
        }
        .search-container {
            padding: 0.7rem 0.2rem 1.2rem 0.2rem;
        }
        .search-title {
            font-size: 1.1rem;
            gap: 0.3rem;
        }
        .search-form {
            flex-direction: column;
            gap: 0.7rem;
        }
        .search-form input[type="text"] {
            width: 100%;
            font-size: 1rem;
        }
        .search-form button {
            width: 100%;
            font-size: 1rem;
        }
        .search-results-list {
            max-width: 100%;
        }
        .no-result {
            font-size: 1rem;
            padding: 0.7rem 0.2rem 0.7rem 0.2rem;
        }
    }
    </style>
</body>

</html>