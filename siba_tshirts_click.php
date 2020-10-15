<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>옷설명 페이지</title>
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

<header>
  <?php include "header.php";?>
</header>

<main role="main">
  <section class="jumbotron text-center" style="width: 100%; float: left;">
          <div>
            <div class="card-body" style=" float: left; padding-left: 10%;">
              <img src="cloth/siba_tshirts.jpg" style="width: 500px; height: 500px; " >     
            </div>
          </div>
          <div style=" float: left; margin-top: 20px; margin-left: 10px;">
            <form method="post" name="form_size">
                <p style="font-size: 30px;">시바 티셔츠</p>
                <hr/>
                <p style="float: left;">판매가</p>
                <p style="float: left; margin-left: 70px;">15,000원</p>
                <br/>
                <p style="float: left;">적립금</p>
                <p style="float: left; margin-left: 70px;">150P</p>
                <br/>
                <p style="float:left; margin-right: 15px;">사이즈</p>
                  <select id ="size" name="size">
                    <option value="">사이즈 선택</option>
                    <option value="medium">medium</option>
                    <option value="large">large</option>
                  </select>                   
                  <p></p>
                  <input type="hidden" name="menu" id="menu" value="top">
                  <a onclick="what_menu()"><input type="submit" value="입어보기"></a>
                </br>
                </br>
                  <button>구매하기</button>
            </form>  
          </div> 
          <div style=" float: left; margin-left: 10%; margin-top: 20px;">
            <a href="">
            <img src="img/ad.png" style="width: 200px; height: 200px;">
            </a>
            <br>
            <br>
            <a href="">
            <img src="img/ad2.png" style="width: 200px; height: 300px;">
            </a>                        
          </div>
  </section>
  <section>
          <div style="margin-left: 15%; padding-top: 15%;">
            <p>*상품설명*</p>
            <p>이 옷은 귀여운 시바 강아지가 로고로 박혀있는 하얀 티셔츠입니다.</p>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>    
  </section>
</main>


  <!-- FOOTER -->
<footer>
  <?php include "footer.php";?>
</footer>


<script type="text/javascript">
  
  function what_menu(){
    if($('#size').val()==""){
      alert('사이즈를 선택하시오');
    }else{
      var menu = $('#menu').val();
      document.form_size.action = "top_cam.php?cloth_ctg=siba_tshirts";
      location.href = "top_cam.php";
    }
}

  



</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script></body>
</html>
