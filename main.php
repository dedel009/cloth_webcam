<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>메인페이지</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
  </head>

<body>

<header>
  <?php include "header.php";?>
</header>

<section>
  <?php include "section.php";?>
</section>

<footer>
  <?php include "footer.php";?>
</footer>


<script type="text/javascript">
  var choice_tshirtsArray = new Array();
  var black_tshirtsArray = new Array();
  var siba_tshirtsArray = new Array(); 
  var black_pantsArray = new Array(); 
  var black_ShortPantsArray = new Array();
  var imgNum = 0;
  choice_tshirtsArray[0] = "cloth/choiceblueshirts1.png";
  choice_tshirtsArray[1] = "cloth/choiceblueshirts2.png";
  choice_tshirtsArray[2] = "cloth/choice_tshirts.jpg";
  black_tshirtsArray[0] = "cloth/blackTshirts1.png";
  black_tshirtsArray[1] = "cloth/blackTshirts2.png";
  black_tshirtsArray[2] = "cloth/black_tshirts.jpg";
  siba_tshirtsArray[0] = "cloth/sibaTshirts1.jpg";
  siba_tshirtsArray[1] = "cloth/sibaTshirts2.jpg";
  siba_tshirtsArray[2] = "cloth/siba_tshirts.jpg";
  black_pantsArray[0] = "cloth/blackPants1.jpg";
  black_pantsArray[1] = "cloth/blackPants2.jpg";
  black_pantsArray[2] = "cloth/pants.jpg";
  black_ShortPantsArray[0] = "cloth/blackShortPants1.jpg"
  black_ShortPantsArray[1] = "cloth/blackShortPants2.jpg"  
  black_ShortPantsArray[2] = "cloth/short_black_pants.jpg"  

  function shuffle() {
    $('#choiceTshirtsImg').attr("src",choice_tshirtsArray[imgNum]);
    $('#blackTshirtsImg').attr("src",black_tshirtsArray[imgNum]);
    $('#sibaTshirtsImg').attr("src",siba_tshirtsArray[imgNum]);    
    $('#blackPantsImg').attr("src",black_pantsArray[imgNum]);  
    $('#blackShortPantsImg').attr("src",black_ShortPantsArray[imgNum]);     
    if (imgNum == 2) {
      imgNum = 0;
    }else {
      imgNum++;                    
    }                
    setTimeout("shuffle()", 1500);                  
  }
  window.onload = shuffle;
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>

    </body>
</html>
