<?php
  require('./nav.inc.php');
  $limit = 14;

  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }
  else {
    $page = 1;
  }

  if(isset($_GET['search'])) {
    $searchInput = $_GET['search'];
  }
  else {
    $searchInput = '';
  }

  if(isset($_POST['submit'])) {
    $searchInput = $_POST['searchInput'];
    $page = 1;
  }

  $offset = ($page - 1) * $limit;

  $sql = "SELECT * FROM genes 
          WHERE aliases LIKE '%".$searchInput."%' 
          OR symbol LIKE '%".$searchInput."%' 
          OR description LIKE '%".$searchInput."%' 
          OR other_designations LIKE '%".$searchInput."%' 
          LIMIT {$offset}, {$limit}";

  $result = mysqli_query($con, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<div class="landing-gene" data-aos="fade-left" data-aos-duration="1000">
  <div class="container">
    <h1 class="mb-2">Search</h1>
    <form method="post" class="m-5">
      <div class="form-group">
        <input type="text" class="form-control" name="searchInput">
        <small class="form-text text-muted">Search for a gene based on its gene id, alias names or description</small>
      </div>
      <button type="submit" name="submit" class="btn btn-secondary">Search</button>
    </form>
    <table class="table text-center table-striped table-bordered table-sm" >
      <thead class="thead-dark">
        <tr>
          <th class="p-2">Gene Id</th>
          <th class="p-2">Symbol</th>
          <th class="p-2">Map Location</th>
          <th class="p-2">Chromosome</th>
          <th class="p-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!$result) {
            echo "ERROR";
          }
          if(mysqli_num_rows($result) > 0) {
            while($data = mysqli_fetch_assoc($result)) {
              $geneId = $data['gene_id']; 
              $symbol = $data['symbol']; 
              $mapLocation = $data['map_location']; 
              $chromosome = $data['chromosome']; 
              echo '
                <tr>
                  <td class="p-2">'.$geneId.'</td>
                  <td class="p-2">'.$symbol.'</td>
                  <td class="p-2">'.$mapLocation.'</td>
                  <td class="p-2">'.$chromosome.'</td>
                  <td class="p-2"><a class="btn btn-secondary text-light" href="gene.php?id='.$geneId.'">Read more</td>
                </tr>
              ';
            }
          }
          else {
            echo '<tr><td rowspan="2" colspan="5" class="p-2 text-center"> No Data Found, Please input valid details</td></tr>';
          }

        ?>
      </tbody>
    </table>  

    <?php
      $paginationSql = "SELECT * FROM genes 
                        WHERE aliases LIKE '%".$searchInput."%' 
                        OR symbol LIKE '%".$searchInput."%' 
                        OR description LIKE '%".$searchInput."%' 
                        OR other_designations LIKE '%".$searchInput."%'";
      
      $paginationResult = mysqli_query($con, $paginationSql);
      
      if(mysqli_num_rows($paginationResult) > 0) {

        $total_records = mysqli_num_rows($paginationResult);
        
        $total_page = ceil($total_records / $limit);
      
    ?>
    <nav>
      <ul class="pagination justify-content-center">
        <?php
          if($page > 1) {
            echo '<li class="page-item"><a class="page-link text-secondary" href="./search.php?page='.($page - 1).'&search='.$searchInput.'">Previous</a></li>';
          }

          
          for($i = 1; $i <= $total_page; $i++) {
            
            $active = "";
            if($page == $i) {
              $active = " active";
            }
          
            echo '<li class="page-item '.$active.'"><a class="page-link  text-secondary" href="./search.php?page='.$i.'&search='.$searchInput.'">'.$i.'</a></li>';
          }
         
          if($page < $total_page) {
            echo '<li class="page-item"><a class="page-link text-secondary" href="./search.php?page='.($page + 1).'&search='.$searchInput.'">Next </a></li>';
          }
        }
        ?>
      </ul>
    </nav>
  </div>
</div>
<?php
  require('./footer.inc.php');
?>