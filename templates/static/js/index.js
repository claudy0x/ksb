onload=function j(){
    document.querySelector('.header').style.opacity = 1;
// <script>
    // JavaScript can be added here for interactivity
    console.log("Welcome to the Voter application!");
// </script>
// <script>
    // Additional JavaScript can be added here
    document.addEventListener('DOMContentLoaded', function() {
        console.log("Document is ready!");
    });
    function greetUser() {
        alert("Hello, welcome to the Voter application!");
    }
// </script>
// <script>
    // Call the greetUser function when the page loads
    window.onload = greetUser;
// </script>
// <script>
    // Animation d'apparition du header au chargement
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('.header');
        header.style.opacity = 0;
        header.style.transform = 'translateY(-40px)';
        setTimeout(() => {
            header.style.transition = 'opacity 1.2s cubic-bezier(.77,0,.18,1), transform 1.2s cubic-bezier(.77,0,.18,1)';
            header.style.opacity = 1;
            header.style.transform = 'translateY(0)';
        }, 200);
    }); 
// </script>
// <script> 
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

// </script>