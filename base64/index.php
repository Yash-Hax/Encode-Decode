<!-- Developed by Yash Hax  -->
<!-- Twitter: @yash_hax -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Base64 Encode/Decode</title>
  </head>
  <body>
  <!-- PHP error hide & Post capture -->
  <?php error_reporting(0); ini_set('display_errors', 0);?>
  <?php $encode=$_POST['encode']; ?>
  <?php $decode=$_POST['decode']; ?>
  <!-- PHP error hide & Post capture Closed-->

  <!-- Heading & Logo-->
  <div Class="heading my-4">
    <h1 class="base64">Base64 <span  class="en">Encode/Decode</span></h1>
  </div>
  <div class="heading mb-4">
    <h2 class="base64">Make it <span  class="simple">simple!</span></</h2>
  </div>
  <!-- Heading Closed -->
  <!-- Input OutPut encode-->
	<div class="container">
    <div class="row">
    	<div class="col">
      	<form action="index.php" method="post">
        	<h1>Encode</h1>
         		<br>
        	<input name="encode" id="myInput" value="<?php echo htmlspecialchars($encode)?>" class="eninput">
      	</form> 
      </div>
      <div class="col">
      	<h1>Output</h1>
					<br>
				<Textarea class="enoutput"><?php echo base64_encode($encode);?></Textarea>
  	</div>
  </div>
  <!-- Input OutPut encode closed-->
  <!-- Input OutPut decode closed-->
	<div class="container my-4 ">
  	<div class="row">
    	<div class="col">
    		<form action="index.php" method="post">
    			<h1>Decode</h1>
						<br>
					<input name="decode"  value="<?php echo $decode;?>"  class="deinput">
			  </form>
   		</div>
    	<div class="col">     
    		<h1>Output</h1>
					<br>
				<Textarea class="deoutput"><?php echo htmlspecialchars(base64_decode($decode));?> </Textarea>
      </div>
    </div>
  </div>	
  <!-- Input OutPut decode closed-->
  <!-- bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- bootstrap JS Closed -->
  </body>
</html>