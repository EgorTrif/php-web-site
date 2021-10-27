<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">PHP web-site</span>
      </a>
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="/">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/about.php">Contacts</a>
        <?php 
      if($_COOKIE['user'] == 'true'):
      ?>
        <a class="btn btn-outline-primary" href="/auth.php">Profile</a>
        <?php else: ?>
        <a class="btn btn-outline-primary" href="/auth.php">Sign up</a>
        <?php endif; ?>
      </nav>
    </div>