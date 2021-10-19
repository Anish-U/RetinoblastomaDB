
      <!-- FOOTER -->

      <div class="footer">
        <h2>RetinoblastomaDB.</h2>
        <div class="footerlinks">
          <a href="./index.php" <?php if($home) echo 'class="mainlink"' ?>>Home</a>
          <a href="./about.php" <?php if($about) echo 'class="mainlink"' ?>>About</a>
          <a href="./genes.php" <?php if($gene) echo 'class="mainlink"' ?>>Genes</a>
          <a href="./sequences.php" <?php if($sequence) echo 'class="mainlink"' ?>>Mutations</a>
          <a href="./search.php" <?php if($search) echo 'class="mainlink"' ?>>Search</a>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
