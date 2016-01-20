<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title><?=$titlelogin?></title>
    
    
    <link rel="stylesheet" href="<?=base_url()?>css/reset.css">

    
    <link rel="stylesheet" href="<?=base_url()?>css/style.css">

    
    
    
  </head>

  <body>

   
     <form method="post" accept-charset="utf-8" action="<?=base_url()?>index.php/welcome/checklogin/"  />
      
    <div class="wrap">
		<div class="avatar">
      <img src="<?=base_url()?>img/KKU.png">
		</div>
        <input type="text" placeholder="username"  id="username"  name="username"  required  maxlength="10" value="ศิริลักษณ์"  />
		<div class="bar">
			<i></i>
		</div>
        <input type="password" placeholder="password"  id="password"   name="password"   required maxlength="10" value="jumkku"  />
		<!--<a href="" class="forgot_link">forgot ?</a>-->
		<button>Sign in</button>
                                   <!--   <input type="submit" >Sign in</input> -->
	</div>
    
        <script src="<?=base_url()?>js/index.js"></script>
        
  </form>
   
        

    
    
    
  </body>
</html>
