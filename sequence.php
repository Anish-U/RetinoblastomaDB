<?php
  require('./nav.inc.php');

  $id = $_GET['id'];
  
  $sql = "SELECT * FROM sequences WHERE id = {$id}";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
  
  $geneName = $data['gene_name'];
  $featureKey = $data['feature_key'];
  $position = $data['position'];
  $length = $data['length'];
  $desc = $data['description'];
  $pubMedId = $data['pubmed_id'];
  $sequence = $data['sequence'];
  
  if($pubMedId == 0) {
    $pubMedId = "-";
  }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="landing-gene" data-aos="fade-right" data-aos-duration="1200">
  <div class="container">
    <h1 class="pb-4"><?php echo $geneName ?></h1>
    <ul class="list-group">
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            Feature Key 
          </div>
          <div class="col-10">
            <?php echo $featureKey ?> 
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            Position 
          </div>
          <div class="col-10">
            <?php echo $position ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            Description
          </div>
          <div class="col-10">
            <?php echo $desc ?>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            Length 
          </div>
          <div class="col-10">
            <?php echo $length ?>
          </div>
        </div>  
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            PubMed Id
          </div>
          <div class="col-10">
            <?php echo $pubMedId;

              if($pubMedId != "-") {
                echo '
                  <a 
                    target="_blank" 
                    href="https://pubmed.ncbi.nlm.nih.gov/'.$pubMedId.'"
                    class="btn btn-sm btn-secondary"
                  >
                    PubMed Article
                  </a>
                ';
              }
            ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-2">
            Sequence 
          </div>
          <div class="col-10">
            <?php echo nl2br($sequence) ?>
          </div>
        </div>    
      </li>
    </ul>
    <div class="container p-2 text-center">
      <button class="btn btn-danger" onclick="history.back(-1)">Go Back</button>
    </div>
  </div>
</div>
<?php
  require('./footer.inc.php');
?>