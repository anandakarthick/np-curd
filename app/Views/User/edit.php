<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<head>
	<meta charset="UTF-8">
	<title>Welcome to Notion Press</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"/> -->

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>


	<div class="heroe">
	<center><h3>Edit User</h3></center>
	</div>

</header>

<!-- CONTENT -->

<section>
<?php
// echo"<pre>";print_r($user);exit;
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
	  <input type="hidden" class="form-control" id="inputEmail4" name="id" value="<?php echo $user['id'] ?>">
	  <input type="hidden" class="form-control" id="inputEmail4" name="user_image" value="<?php echo $user['image'] ?>">
      <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name" value="<?php echo $user['name'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control" id="inputPassword4" name="email_id" placeholder="email" value="<?php echo$user['email_id'] ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Address</label>
      <input type="text" class="form-control" id="inputEmail4" name="address" placeholder="Address" value="<?php echo$user['address'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Select State</label>
     <select name= "state" id="state" class="form-control">
  <option value="tamilnadu">Tamil Nadu</option>
  <option value="uttar Pradesh">Uttar Pradesh</option>
  <option value="kerala">Kerala</option>
  <option value="karnataka">Karnataka</option>
</select>
    </div>
  </div>
  <?php
$estate=$user['city'];
$state=explode(",",$estate);
// echo"<pre>";print_r($estate);exit;
if(($state[0]== 'Ambattur') || ($state[1]== 'Ambattur') || ($state[2]== 'Ambattur')|| ($state[3]== 'Ambattur')){
    $Ambattur="selected";
    }
    if(($state[0]== 'Avadi') || ($state[1]== 'Avadi') || ($state[2]== 'Avadi')|| ($state[3]== 'Avadi')){
        $Avadi="selected";
    }
    if(($state[0]== 'CMBT') || ($state[1]== 'CMBT') || ($state[2]== 'CMBT')|| ($state[3]== 'CMBT')){
        $CMBT="selected";
    }
    if(($state[0]== 'Anna Nagar') || ($state[1]== 'Anna Nagar') || ($state[2]== 'Anna Nagar')|| ($state[3]== 'Anna Nagar')){
        $AnnaNagar="selected";
    }
    
  ?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Select city</label>
      <select name="city[]" id="cars" class="form-control" multiple>
    <option value="Ambattur" <?php echo $Ambattur; ?>>Ambattur</option>
    <option value="Avadi" <?php echo $Avadi; ?>>Avadi</option>
    <option value="CMBT" <?php echo $CMBT; ?>>CMBT</option>
    <option value="Anna Nagar" <?php echo $AnnaNagar; ?>>Anna Nagar</option>
  </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Pincode</label>
      <input type="text" class="form-control" id="inputPassword4" name="pincode" placeholder="Pincode" value="<?php echo $user['pincode'] ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Gender</label>
     <?php
     $signi=$user['gender'];
     ?>
      <input type="radio" id="male" name="gender" value="Male" <?php echo ($signi== 'Male') ?  "checked" : "" ;  ?>>
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female" <?php echo ($signi== 'Female') ?  "checked" : "" ;  ?>>
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="Other" <?php echo ($signi== 'Other') ?  "checked" : "" ;  ?>>
  <label for="other">Other</label>
    </div>

    <?php
$language=$user['language'];
$expolde=explode(",",$language);
// echo"<pre>";print_r($expolde);exit;
if(($expolde[0]== 'Tamil') || ($expolde[1]== 'Tamil') || ($expolde[2]== 'Tamil')){
$Tamil="checked";
}
if(($expolde[0]== 'English') || ($expolde[1]== 'English') || ($expolde[2]== 'English')){
    $English="checked";
}
if(($expolde[0]== 'Telugu') || ($expolde[1]== 'Telugu') || ($expolde[2]== 'Telugu')){
    $Telugu="checked";
}



    ?>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Language</label>
      <input type="checkbox" name="language[]" value="Tamil" <?php echo $Tamil; ?>>
  <label for="vehicle1"> Tamil</label>
  <input type="checkbox" name="language[]" value="English" <?php echo $English; ?>>
  <label for="vehicle2">English</label>
  <input type="checkbox" name="language[]" value="Telugu" <?php echo $Telugu; ?>>
  <label for="vehicle3">Telugu</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    
      <label for="inputPassword4">Image</label><?php if($user['image']) { ?><img src="<?php echo base_url().'/uploads/'.$user['image'] ?>" style="width:30px;height:30px;border-radius: 50%;" ><?php } ?>
      <input type="file" class="form-control" id="inputPassword4" name="image">
    </div>
    </div>
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile Number</label>
      <input type="number" class="form-control" id="inputPassword4" name="mobile_number" placeholder="Mobile NUmber" value="<?php echo $user['mobile_number'] ?>">
    </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>

</section>



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> Notion Press</p>

	</div>

</footer>

<!-- SCRIPTS -->



<!-- -->

</body>
</html>

<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
	</script>
