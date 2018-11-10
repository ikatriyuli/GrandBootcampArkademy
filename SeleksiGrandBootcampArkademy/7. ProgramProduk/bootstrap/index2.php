<!DOCTYPE html>
<html>
<head>
	<title></title>
<!--Load CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css"><!--Dibutukan bila anda menggunakan navbar fixed top-->
        body {
            padding-top:30px;
            padding-bottom: 40px;
        }
    </style> 
    <!--Load jQuery-->
    <script type="text/javascript" src="js/jquery.js"></script>
</head>
<body bgcolor="#01DFD7">
 
    <!--CODING HERE-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Data Produk</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <h1>Data Produk</h1>
    <table class="tabel" border="5" class="table" align="center">
		<tr>
			<th>Id Product</th>
			<th>Name Product</th>
			<th>Jumlah Product</th>		
		</tr>
		<?php 
		include "config.php";
		$query_mysql = mysql_query("SELECT product_categories.id,product_categories.name, COUNT( * ) AS Jumlah_product FROM product_categories,product GROUP BY product_categories.id")or die(mysql_error());
		
		
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['Jumlah_product']; ?></td>
			
		</tr>
		<?php } ?>
	</table>
      <hr>
 
      <footer>
        <p>&copy; <a href="https://www.github.com/ikatriyuli">Ikatriyuliyanti@gmail.com</a></p>
      </footer>
 
    </div> <!-- /container -->
 
    <!--Load Bootstrap JS ( Diletakan dibawah merupakan rekomendasi,agar proses load page lebih cepat )-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>  
</html>