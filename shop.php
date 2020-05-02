<?php require_once('includes/header.php');
require_once('admin/connect.php');
require_once('admin/functions.php');
 $sql="select * from e_category where Status=1 order by Category asc";
 $result=mysqli_query($con, $sql);
 $cat_arrays=array();
 while($row=mysqli_fetch_assoc($result))
 {
	$cat_arrays[]=$row;
 }
?>
<nav class="navbar navbar-expand-sm navbar-green bg-secondary">
    <div class="container" style="background:green">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.html" class="nav-link" style="color:white">Home</a>
            </li>
			<?php 
			foreach($cat_arrays as $list){
			?>
			<li class="nav-item">
                <a href="product_details.php?id=<?php echo $list['id'] ?>" class="btn btn-dark mr-1" style="color:white"><?php echo $list['Category'] ?></a>
            </li>
			<?php
			}
			?>
			<li class="nav-item">
                <a href="contact_us.php" class="nav-link" style="color:white">Cuntact us</a>
            </li>
			
			
			
        </ul>
		<a href="myorder.php"><button class="btn btn-light mr-2">MY ORDER</button></a>
		<a href="cart.php"><button class="btn btn-light mr-2">VIEW CART</button></a>
        <a href="login.php"><button class="btn btn-danger">Login</button></a>
    </div>
    </nav>
	
	        <h2 style="text-align:center" class="bg-danger">&llarr; JC Developers Ecom <?php echo date('d-m, Y') ?> &rrarr; </h2>
            <hr>
<div class="bg-dark">
        <div>
            <div>
                <div class="col-lg-12 m-auto" style="background-color:purple">
                    <div class="card mt-1 py-2" style="background-image:url('uploads/products/bg.jpg')">
                       <div>
                           <h2 class="text-center mt-2"><marquee behavior="alternate" scrollamount="20"><strong>Welcome to shop with us</strong></marquee></h2>
                          
                           <hr>

                        </div>
                         <div class="card-body">
                             <div class="form-group">
							 
							 <?php
							 $get_product=get_product($con, 30);
							  foreach($get_product as $list)
							  {
							 ?>
							 <div class="mt-2" style="float:left ;margin-right:5px; text-align:center; border:solid 2px">
							    
								<a href="individual_product.php?id=<?php echo  $list['id']?>"><img height="305" width="414" src="uploads/products/<?php echo $list['image']?>" alt="product images"/></a>
								<h3><a href="individual_product.php?id=<?php echo  $list['id']?>"><?php echo  $list['name']?></a></h3>
								
									<a class="btn btn-light" href="individual_product.php?id=<?php echo  $list['id']?>"><strong><?php echo "Price: Ksh. ",$list['price']?></strong></a>
									<br>
									<a><?php echo  $list['description']?></a>
							</div>
								
							
							  <?php } ?>
							  </div>
							 </div>
						
                        </div>
                          <div class="card-footer">
                         
                        </div>
                        </form>
                    </div>
					<br><br>
                </div>
			</div>
            </div>
	<?php require_once('includes/footer.php')?>