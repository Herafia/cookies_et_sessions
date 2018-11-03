<?php
	session_start();
	
	require 'inc/head.php';
	
	if(empty($_SESSION))
	{
		header('Location: login.php');
	}
	
	if(!isset($_SESSION['pecan_nuts']))
	{
		$_SESSION['pecan_nuts']=0;
		$_SESSION['chocolate_chips']=0;
		$_SESSION['chocolate_cookie']=0;
		$_SESSION['mms_cookie']=0;
		
		
	}elseif (isset($_GET['add_to_cart']) AND ($_GET['add_to_cart']==46))
	{
		$_SESSION['pecan_nuts'] += 1;
	}
	
	if(isset($_GET['remove1']))
	{
		$_SESSION['pecan_nuts'] -= 1;
	}

    elseif (isset($_GET['add_to_cart']) AND ($_GET['add_to_cart']==36))
	{
		$_SESSION['chocolate_chips'] += 1;
	}
	
	if(isset($_GET['remove2']))
	{
		$_SESSION['chocolate_chips'] -= 1;
	}

    elseif (isset($_GET['add_to_cart']) AND ($_GET['add_to_cart']==58))
	{
		$_SESSION['chocolate_cookie'] += 1;
	}
	
	if(isset($_GET['remove3']))
	{
		$_SESSION['chocolate_cookie'] -= 1;
	}

    elseif (isset($_GET['add_to_cart']) AND ($_GET['add_to_cart']==32))
	{
		$_SESSION['mms_cookie'] += 1;
	}
	
	if(isset($_GET['remove4']))
	{
		$_SESSION['mms_cookie'] -= 1;
	}
	
	
	var_dump($_SESSION);

?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=46" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove1=1" class="btn btn-primary">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add_to_cart=36" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove2=1" class="btn btn-primary">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a  href="?add_to_cart=58" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove3=1" class="btn btn-primary">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a  href="?add_to_cart=32" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                    <a  href="?remove4=1" class="btn btn-primary">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
