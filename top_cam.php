<html>
<head>
  <meta charset="utf-8">
  <title>상의 캠</title>
  <style>
    #total{
      position: absolute;
      top: 42%; left: 50%;
      width: 1200px; height: 600px; 
      margin: -300px 0px 0px -600px;

    }
    #show_choice img{
      margin-right: 3px;
      width: 100px;
      height: 100px;
      margin-bottom: 5px;
      margin-top: 5px;
    }
    #size_choice img{
      width: 100px;
      height: 100px;
      margin-left : 3px;
      margin-top: 3px;
      float: left;
    }

    #cloth_px div{
      position: absolute;
    }
    #camera_area #video{
       float: left; 
       width: 920px; height: 700px;
    }
    #face_border{
      position: absolute;
    }
    footer{
      position: absolute;
      top: 85%;
      left: 35%;
    }
  </style>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<div id="total">
  <div id="show_choice" style="float: left;">
    <div id="top">
      <a href="#"><img src="button/top_button.png"/></a>
    </div>
    <div id="all">
      <a href="#"><img src="button/all_button.png"/></a>
    </div>   
  </div>


  <div id="camera_area">
    <video id ="video"  autoplay style="z-index: 0;">
    </video>
  </div>


  <div id ="size_choice">
    <div id = "medium_button">
      <img src="button/medium_button.png"/>
    </div>
    <div id = "large_button">
      <img src="button/large_button.png"/>
    </div>
    <div id = "free_button">
      <img src="button/free_button.png"/>
    </div>
  </div>

<?php
  $size = $_POST["size"];
  $cloth_ctg = $_GET["cloth_ctg"];

  if($cloth_ctg == "choice_tshirts"){
?>    
  <div id='cloth_px'>
      <div id="medium">
      </div>
      <div id="large">
        <img src="cloth/blue_Tshirts_large.png"/>
      </div>
      <div id="free">
        <img src="cloth/blue_Tshirts_free.png" />
      </div>
  </div>
<?php
}elseif($cloth_ctg == "black_tshirts"){
?>
  <div id='cloth_px'>
      <div id="medium">
      </div>
      <div id="large">
      </div>
      <div id="free">
        <img src="cloth/black_tshirts_free.png" />
      </div>
  </div>

<?php
}elseif($cloth_ctg == "siba_tshirts"){
?>
  <div id='cloth_px'>
      <div id="medium">
        <img src="cloth/siba_tshirts_medium.png"/>
      </div>
      <div id="large">
        <img src="cloth/siba_tshirts_large.png" />
      </div>
      <div id="free">
      </div>
  </div>
<?php
}
?>



  <div id='face_border'>
    <img src="img/face_border.png">
  </div>

</div>


<div>
  <p>메뉴를 선택하시오.</p>
  <p id ="state" ></p>
</div>

<footer><p id='footer' style="font-size: 30px; color: orange;"></p></footer>


  <script type="text/javascript">
    var video = document.getElementsByTagName('video')[0]; 
    var heading = document.getElementsByTagName('h1')[0];

    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });

    }


    $('#cloth_px').hide();
    $('#face_border').hide();
    var size = '<?= $size; ?>';
    var a = '<?= $cloth_ctg; ?>';
    alert(a);


    if (size =="medium"){
      $('#large_button').hide();
      $('#free_button').hide(); 
      $('#show_choice #top').click(function(){
        $('#face_border').show();
        $('#state').text("메뉴 : 상의");
        $('#footer').text("얼굴을 점선에 맞추세요.");
        $('#face_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#medium').show();
        $('#large').hide();
        $('#free').hide();        
        $('#medium').css({
            left:'25%',
            top:'17%'
            });
        $('#medium img').css({
            'width': '500px',
            'height':'500px'
        }); 
      })
      $('#show_choice #all').click(function(){
        $('#face_border').show();
        $('#state').text("메뉴 : 전신");
        $('#footer').text("얼굴을 점선에 맞추세요.")
        $('#face_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#medium').show();
        $('#large').hide();
        $('#free').hide();        
        $('#medium').css({
            left:'33%',
            top:'20%'
            });
        $('#medium img').css({
            'width': '300px',
            'height':'300px'
        });
      });      

    }else if(size == "large"){
      $('#medium_button').hide();
      $('#free_button').hide();
    
      $('#show_choice #top').click(function(){
        $('#face_border').show();
        $('#state').text("메뉴 : 상의");
        $('#footer').text("얼굴을 점선에 맞추세요.");
        $('#face_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#large').show();
        $('#medium').hide();
        $('#free').hide();
        $('#large').css({
            left:'25%',
            top:'17%'
            });
        $('#large img').css({
            'width': '500px',
            'height':'500px'
        }); 
      })
      $('#show_choice #all').click(function(){
        $('#face_border').show();
        $('#state').text("메뉴 : 전신");
        $('#footer').text("얼굴을 점선에 맞추세요.")
        $('#face_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#large').show();
        $('#medium').hide();
        $('#free').hide();
        $('#large').css({
            left:'33%',
            top:'20%'
            });
        $('#large img').css({
            'width': '300px',
            'height':'300px'
        });
      });

    }else { //free일때 
      $('#medium_button').hide();   
      $('#large_button').hide();  
          $('#show_choice #top').click(function(){
      $('#face_border').show();
      $('#state').text("메뉴 : 상의");
      $('#footer').text("얼굴을 점선에 맞추세요.");
      $('#face_border').css({
        left:'40.5%',
        top:'7%'
      });
      $('#cloth_px').show();
      $('#large').hide();
      $('#medium').hide();      
      $('#free').show();
      $('#free').css({
          left:'26%',
          top:'18%'
          });
      $('#free img').css({
          'width': '500px',
          'height':'500px'
      });

    })
    $('#show_choice #all').click(function(){
      $('#face_border').show();
      $('#state').text("메뉴 : 전신");
      $('#footer').text("얼굴을 점선에 맞추세요.")
      $('#face_border').css({
        left:'40.5%',
        top:'7%'
      });
      $('#cloth_px').show();
      $('#large').hide();
      $('#medium').hide();
      $('#free').show();
      $('#free').css({
          left:'34%',
          top:'21%'
          });
      $('#free img').css({
          'width': '300px',
          'height':'300px'
      });
    });
  }
  </script>
</body>
</html>