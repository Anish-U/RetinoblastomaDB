<?php
require './nav.inc.php';
?>

<!-- LANDING PAGE -->

<div class="landing">
  <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
    <h1 style="font-size: 5vw">
      Retinoblastoma.<span style="color: #e0501b; font-size: 2vw">
        An Eye Cancer</span>
    </h1>
    <h3>
      Retinoblastoma is a cancer that starts in the retina, the very back
      part of the eye. It is the most common type of eye cancer in
      children. It is a rare type of eye cancer that usually develops in
      early childhood, typically before the age of 5.
    </h3>
    <div class="btn">
      <a href="./about.php">Read More</a>
    </div>
  </div>
  <div class="landingImage" data-aos="fade-down" data-aos-duration="1000">
    <img src="img/bg.svg" alt="" />
  </div>
</div>

<!-- ABOUT SECTION -->

<div class="about">
  <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
    <h1>
      What causes Retinoblastoma <br />
      <span style="color: #2f8be0; font-size: 3vw">&nbsp; How ? Why ?</span>
    </h1>
    <img src="img/doctor.png" alt="" />
  </div>
  <div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
    <ol>
      <li>
        <span>01</span>
        <p>
          Retinoblastoma occurs when nerve cells in the retina develop
          genetic mutations. These mutations cause the cells to continue
          growing and multiplying when healthy cells would die. This
          accumulating mass of cells forms a tumor.
        </p>
      </li>
      <li>
        <span>02</span>
        <p>
          Hereditary retinoblastoma is passed from parents to children in
          an autosomal dominant pattern, which means only one parent needs
          a single copy of the mutated gene to pass the increased risk of
          retinoblastoma on to the children.
        </p>
      </li>
      <li>
        <span>03</span>
        <p>
          If one parent carries a mutated gene, each child has a 50
          percent chance of inheriting that gene.
        </p>
      </li>
      <li>
        <span>04</span>
        <p>
          Retinoblastoma happens when there’s a change, or mutation, in
          one particular gene in a child’s DNA. That gene’s job is to
          control cell division. When it doesn’t work the way it should,
          cells in the retina grow out of control
        </p>
      </li>
    </ol>
  </div>
</div>

<!-- INFO SECTION -->

<div class="infoSection">
  <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
    <h1>
      Things you can do on<br />
      <span style="color: #e0501b">RetinoblastomaDB.</span>
    </h1>
  </div>
  <div class="infoCards">
    <div class="card one" data-aos="fade-up" data-aos-duration="1000">
      <img src="img/all-genes.svg" class="cardoneImg" alt="" data-aos="fade-left" data-aos-duration="1100" />
      <div class="cardbgone"></div>
      <div class="cardContent">
        <h2>Know all Genes</h2>
        <p>Get to know about all the genes that cause Retinoblastoma !</p>
        <a href="./genes.php">
          <div class="cardBtn">
            <img src="img/next.png" alt="" class="cardIcon" />
          </div>
        </a>
      </div>
    </div>
    <div class="card two" data-aos="fade-up" data-aos-duration="1300">
      <img src="img/sequence.svg" class="cardtwoImg" alt="" data-aos="fade-left" data-aos-duration="1200" />
      <div class="cardbgtwo"></div>
      <div class="cardContent">
        <h2>Know each Mutation</h2>
        <p>
          Get to know about each gene in detail and the amino acid
          sequence too!
        </p>
        <a href="./sequences.php">
          <div class="cardBtn">
            <img src="img/next.png" alt="" class="cardIcon" />
          </div>
        </a>
      </div>
    </div>
    <div class="card three" data-aos="fade-up" data-aos-duration="1300">
      <img src="img/search.svg" class="cardthreeImg" alt="" data-aos="fade-left" data-aos-duration="1200" />
      <div class="cardbgthree"></div>
      <div class="cardContent">
        <h2>Search</h2>
        <p>
          Search for a particular gene that cause Retinoblastoma !
        </p>
        <a href="./search.php">
          <div class="cardBtn">
            <img src="img/next.png" alt="" class="cardIcon" />
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<?php
require 'footer.inc.php';
?>