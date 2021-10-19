<?php
  require('./nav.inc.php');
  $limit = 17;

  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  else {
    $page = 1;
  }

  $offset = ($page - 1) * $limit;

  $sql = "SELECT * FROM sequences LIMIT {$offset}, {$limit}";
  $result = mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="landing-gene" data-aos="fade-left" data-aos-duration="1000">
  <div class="container">
    <h1 class="mb-2">Mutations</h1>
    <table class="table text-center table-striped table-bordered table-sm" >
      <thead class="thead-dark">
        <tr>
          <th class="p-2">Gene Name</th>
          <th class="p-2">Feature Key</th>
          <th class="p-2">Position</th>
          <th class="p-2">Length</th>
          <th class="p-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!$result) {
            echo "ERROR";
          }
          while($data = mysqli_fetch_assoc($result)) {
            $id = $data['id']; 
            $geneName = $data['gene_name']; 
            $featureKey = $data['feature_key']; 
            $position = $data['position']; 
            $length = $data['length']; 
            echo '
              <tr>
                <td class="p-2">'.$geneName.'</td>
                <td class="p-2">'.$featureKey.'</td>
                <td class="p-2">'.$position.'</td>
                <td class="p-2">'.$length.'</td>
                <td class="p-2"><a class="btn btn-secondary text-light" href="sequence.php?id='.$id.'">Read more</td>
              </tr>
            ';
          }

        ?>
      </tbody>
    </table>  

    <?php
      $paginationSql = "SELECT * FROM sequences";
      $paginationResult = mysqli_query($con, $paginationSql);
      if(mysqli_num_rows($paginationResult) > 0) {

        $total_records = mysqli_num_rows($paginationResult);
        
        $total_page = ceil($total_records / $limit);
      }
    ?>
    <nav>
      <ul class="pagination justify-content-center">
        <?php
          if($page > 1) {
            echo '<li class="page-item"><a class="page-link text-secondary" href="./sequences.php?page='.($page - 1).'">Previous</a></li>';
          }

          
          for($i = 1; $i <= $total_page; $i++) {
            
            $active = "";
            if($page == $i) {
              $active = " active";
            }
          
            echo '<li class="page-item '.$active.'"><a class="page-link  text-secondary" href="./sequences.php?page='.$i.'">'.$i.'</a></li>';
          }
         
          if($page < $total_page) {
            echo '<li class="page-item"><a class="page-link text-secondary" href="./sequences.php?page='.($page + 1).'">Next </a></li>';
          }
        
        ?>
      </ul>
    </nav>
  </div>
</div>
<?php
  require('./footer.inc.php');
?>