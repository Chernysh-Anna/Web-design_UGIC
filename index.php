<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thank you for your order</title>
  <style type="text/css">
  ol, ul { 
     list-style-type: none;
      }
  body {  
    background-color: #fff;
    margin: 0 10%;
    font-family: sans-serif;
  }
  h1 {
    text-align: center;
    font-family: serif;
    font-weight: normal;
    text-transform: uppercase;
    border-bottom: 1px solid #57b1dc;
    margin-top: 30px;
  }

  h2 {
    color: #37c9f7;
    font-size: 1em;
  }
  p.disclaimer { 
    border-top: 1px solid #37c9f7; 
    padding-top: 1em;
  }
  </style>
</head>

<body>
<h1>THANK YOU</h1>

<p>We have received your application,please check your mail to confirm your application.</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['email'] ? $_POST['email'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Your wishes:</strong> <?php print $_POST['comment'] ? $_POST['comment'] : '<em>empty</em>'; ?></p>


<?php if (!isset($_POST['customername']) && !isset($_POST['telephone']) && !isset($_POST['email'])) { ?>
<em>Sorry, we did not receive your information. <a href="http://www.blackgoosebistro.com/pizza.html">Try again.</a></em>
<?php } 
  else { 
    ?>
<em>Well done!!!</a></em>
<?php
   }


<p class="disclaimer"><small>This site is for educational purposes only. But....</small></p>

</body>
</html>
