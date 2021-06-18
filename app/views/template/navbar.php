<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL ?>/Public/Belajar">
          <img style="width: 150px;" src="<?= BASE_URL ?>/Public/images/logo/logo_text.png" alt="">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item">
              <a class="nav-link active" href="<?= BASE_URL ?>/Public/Belajar">Belajar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/Public/Diskusi"
                >Diskusi</a
              >
            </li>

            <li class="nav-item">
              <a class="nav-link" href="article.php">
                <img style="width: 30px;" src="<?= BASE_URL ?>/Public/images/logo-login.png" alt="">
                <p></p>
              </a>
              
              
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">
                <?= $_SESSION['username'] ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
