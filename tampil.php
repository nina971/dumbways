<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <?php require_once 'bootstrap.php'; ?>
    <style media="screen">
     .button{
     	width: 95%;
     	height: 30px;
     	margin-top: 10px;

     }
     .left{
     	float: left;
     	display: inline-block;
     	
     }
     .right{
     	float: right;
     	display: block;
     }
     .button ul a{
     	padding: 5px;
     	margin-top: 5px;
     	background: #00BFFF;
     	color: white;
     	border-radius: 8px;
     }
    </style>
  </head>
  <body>
    	<div class="button">
    		<ul class="left">
    			<h1>Dw Froz</h1>
    		</ul>
    		<ul class="right">
    			<a href="form_simpan.php"> &nbsp; Add Product</a>
    			<a href="form_simpan_distributor.php"> &nbsp; Add Distributor</a>
    		</ul>
    	</div>
    <br/>
<div class="container">
<div class="row no-gutters">
	<?php
      $query = "SELECT *
      			FROM distributor
      		";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
	<div class="col-md-4 mb-5 ml-5">
	 <div class="card-deck">
	 	<div class="card  border-dark mb-3 " style="width: 8rem; ">
	 		<!-- <img src="">  -->
      <div class="card-body"><p class="card-title" style="font-size: 30px;"><strong><?php echo $row['nama']; ?></strong> </p>
            <p class="card-text "><small class="txt-muted text-secondary"><?php echo $row['address']; ?></small></p>
            
            <!-- <p class="card-text "><?php echo $p->isi; ?></p> -->
        </div>
        </div>
      </div>
       <a href="lihat_produk_distributor.php?id=<?php echo $row['id']; ?>" style="padding: 8px 155px; background: #00BFFF; color: white; border-radius: 8px;">Detail</a>
      </div>

      <?php } ?>
</div>
</div>

  </body>
</html>