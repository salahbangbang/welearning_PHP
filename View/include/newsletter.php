<section id="newsletter" class="">
  <div class="newsletter">

    <div class="newsletter-details">
      <h2>Newsletter - Rester avec nous !</h2>
      <p>Pour ne rien manquer de nos mises à jour, il vous suffit de fournir votre adresse e-mail ci-dessous et de cliquer sur le bouton d'abonnement.</p>
      <div class="newsletter-subscribe">
        <form class="" action="../Controllers/Newsletters/newsletterController.php" method="post">
          <input type="text" name="newsletter_email" placeholder="Entrez votre adresse email..." required>
            <button class="button-53">S'abonner</button>
            <input type="hidden" name="action" value="create">
        </form>
      </div>
    </div>
    <div class="newsletter-picture">
    </div>

  </div>
</section>
