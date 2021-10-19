<?php
  require('./nav.inc.php');

  $id = $_GET['id'];
  
  $sql = "SELECT * FROM genes WHERE gene_id = {$id}";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_assoc($result);
  
  $taxId = $data['tax_id'];
  $orgName = $data['org_name'];
  $symbol = $data['symbol'];
  $aliases = $data['aliases'];
  $desc = $data['description'];
  $designations = $data['other_designations'];
  $mapLocation = $data['map_location'];
  $chromosome = $data['chromosome'];
  $nucleotideAccession = $data['genomic_nucleotide_accession.version'];
  $startPos = $data['start_position_on_the_genomic_accession'];
  $endPos = $data['end_position_on_the_genomic_accession'];
  $orientation = $data['orientation'];
  $exonCount = $data['exon_count'];

  $designations = str_replace("|","<br>",$designations);
  $aliases = str_replace(",","<br>",$aliases);

  if($aliases == '') {
    $aliases = "-";
  }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="landing-gene" data-aos="fade-right" data-aos-duration="1200">
  <div class="container">
    <h1 class="pb-4"><?php echo $desc ?></h1>
    <ul class="list-group">
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Gene Id 
          </div>
          <div class="col-6">
            <?php echo $id ?>
            <a 
              target="_blank" 
              href="https://www.ncbi.nlm.nih.gov/gene/<?php echo $id ?>"
              class="btn btn-sm btn-secondary"
            >
            NCBI Gene Page
            </a>  
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Symbol 
          </div>
          <div class="col-6">
            <?php echo $symbol ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            TaxId
          </div>
          <div class="col-6">
            <?php echo $taxId ?>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Organism Name 
          </div>
          <div class="col-6">
            <?php echo $orgName ?>
          </div>
        </div>  
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Aliases 
          </div>
          <div class="col-6">
            <?php echo $aliases ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Other Designations 
          </div>
          <div class="col-6">
            <?php echo $designations ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Map Location
          </div>
          <div class="col-6">
            <?php echo $mapLocation ?>
            <a 
              target="_blank" 
              href="https://www.ncbi.nlm.nih.gov/genome/gdv/browser/gene/?id=<?php echo $id ?>"
              class="btn btn-sm btn-secondary"
            >
            Genome Data Viewer
            </a>  
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Chromosome 
          </div>
          <div class="col-6">
            <?php echo $chromosome ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Genomic Nucleotide Accession 
          </div>
          <div class="col-6">
            <?php echo $nucleotideAccession ?>
            <a 
              target="_blank" 
              href="https://www.ncbi.nlm.nih.gov/nuccore/<?php echo $nucleotideAccession ?>"
              class="btn btn-sm btn-secondary"
            >
              NCBI Nucleotide Page
            </a>
            
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Start Position in Nucleotide Accession 
          </div>
          <div class="col-6">
            <?php echo $startPos ?>
          </div>
        </div>    
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            End Position in Nucleotide Accession 
          </div>
          <div class="col-6">
            <?php echo $endPos ?>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Orientation 
          </div>
          <div class="col-6">
            <?php echo $orientation ?>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="row">
          <div class="col-6">
            Exon Count 
          </div>
          <div class="col-6">
            <?php echo $exonCount ?>
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