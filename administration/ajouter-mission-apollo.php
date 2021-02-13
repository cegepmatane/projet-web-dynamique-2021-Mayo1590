<?php include "../include/head.php"; ?>

<body>
  <header>
    <h1 class="text-light fw-lighter text-center mx-3 mt-5">
      Panneau d'administration-Les missions Apollo
    </h1>
  </header>

  <section class="mt-5 mb-5 mx-3 card" id="contenu">
    <div class="card-body bg-secondary text-center">
      <h2 class="">Ajouter une mission Apollo</h2>

      <form action="traitement-ajouter-mission-apollo.php" method="post" class="row">
        <div class="input-group mt-5 col">
          <span class="input-group-text">Mission</span>
          <input type="text" class="form-control" name="titre" id="titre" />
        </div>

        <div class="input-group mt-5 col">
          <span class="input-group-text">Astronaute</span>
          <input type="text" class="form-control" name="astronautes" id="astronaute" />
        </div>

        <div class="input-group mt-5">
          <span class="input-group-text">Date</span>
          <input type="text" placeholder="ex: 2021-02-03" class="form-control" name="date" id="date" />
        </div>

        <div class="input-group mt-5">
          <span class="input-group-text">Résumé</span>
          <textarea class="form-control" name="resume" id="resume"></textarea>
        </div>

        <div class="input-group mt-5">
          <span class="input-group-text">Progrès</span>
          <input type="text" class="form-control" name="progres" id="progres" />
        </div>

        <div class="input-group mt-5 mb-5 col">
          <span class="input-group-text">Réussite</span>
          <input type="text" class="form-control" name="reussi" id="reussis" />
        </div>

        <div class="input-group mt-5 mb-5 col">
          <span class="input-group-text">Astronaute en vie</span>
          <input type="text" class="form-control" name="retour" id="retour-astronaute" />
        </div>

        <div class="mb-5">
          <input class="form-control" type="file" id="formFile" />
        </div>

        <input type="submit" class="btn btn-primary mt-2" value="Enregistrer" />
      </form>
    </div>
  </section>

  <?php include "../include/footer.php"; ?>