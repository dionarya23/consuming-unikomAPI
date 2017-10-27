<?php

require __DIR__.'/vendor/autoload.php';


$url      = 'https://unikom.ac.id/api/v1/event';
$response = Unirest\Request::get($url);

$data  = json_decode($response->raw_body, true);
$event = $data['result'];

require_once 'template/header.php';
?>

<div class="container">
<div class="row" style="display: flex;flex-wrap: wrap;">

<?php foreach($event as $e): ?>
<div class="col-md-4">

    <div class="thumbnail">
        <img src="https://unikom.ac.id/img_event/<?=$e['foto'];?>" style="max-height: 200px;height: 300px;width: 300px;">
        <div class="caption">
        	<p style="color:blue"> <i class="fa fa-calendar"></i> <?php echo $e['tgl_event']; ?> </p>
        	<h4> <?= $e['nama_event']; ?>  </h4>
          <i class="fa fa-map-marker"></i> <?php echo $e['lokasi_event']; ?>
        </div>
    </div>
  
  </div>

<?php endforeach; ?>

</div>
</div>




<?php  

require_once 'template/footer.php'; 

?>