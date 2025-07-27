<footer class="main-footer">
    <div class="footer-content">
        <div class="footer-top">
            <span class="footer-logo"><img src="templates/pictures/kamerstartbattle.png" alt="Kamerstart Battle" class="footer-logo-img"></span>
            <!-- <span class="footer-title">Kamerstart Battle</span> -->
        </div>
        <span class="footer-desc">Rejoins la plus grande communauté de vote au Cameroun !<br><span class="footer-highlight">Soutiens tes talents, partage, invite tes amis et participe à l'aventure !</span></span>
        <a href="<?php echo $domaine; ?>vote/" class="footer-cta">Voter maintenant</a>
        <div class="footer-socials">
            <a href="https://facebook.com" target="_blank" title="Facebook" class="footer-social"><img src="templates/pictures/facebook.svg" alt="Facebook"></a>
            <a href="https://instagram.com" target="_blank" title="Instagram" class="footer-social"><img src="templates/pictures/instagram.svg" alt="Instagram"></a>
            <!-- <a href="https://twitter.com" target="_blank" title="Twitter" class="footer-social"><img src="templates/pictures/x.svg" alt="Twitter"></a> -->
            <a href="mailto:contact@kamerstartbattle.com" title="Contact" class="footer-social"><img src="templates/pictures/contact.png" alt="Contact"></a>
        </div>
        <span class="footer-community">#VoteCameroun &nbsp;|&nbsp; #Talents237 &nbsp;|&nbsp; #PartageLaPassion</span>
        <span class="footer-copyright">&copy; Kamerstart Battle <?php echo date('Y'); ?>. Tous droits réservés.</span>
    </div>
    <button id="scrollToTopBtn" class="scroll-to-top-btn" title="Remonter en haut">&#8679;</button>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/68770bfa511d08190afe2b38/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>
  .scroll-to-top-btn {
    position: fixed;
    left: 50%;
    bottom: 32px;
    transform: translateX(-50%);
    z-index: 1200;
    background: linear-gradient(90deg, #ff9800 60%, #ff5722 100%);
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 54px;
    height: 54px;
    font-size: 2.1rem;
    box-shadow: 0 2px 16px #ff980055;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.4s, transform 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .scroll-to-top-btn.visible {
    opacity: 1;
    pointer-events: auto;
    transform: translateX(-50%) scale(1.08);
  }
</style>
<script>
  // Bouton scroll to top
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('scrollToTopBtn');
    function toggleBtn() {
      const scrolled = window.scrollY || document.documentElement.scrollTop;
      const pageHeight = document.documentElement.scrollHeight - window.innerHeight;
      if (pageHeight > 0 && scrolled > pageHeight * 0.10) {
        btn.classList.add('visible');
      } else {
        btn.classList.remove('visible');
      }
    }
    window.addEventListener('scroll', toggleBtn);
    window.addEventListener('resize', toggleBtn);
    btn.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    setTimeout(toggleBtn, 500);
  });
</script>