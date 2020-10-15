  <meta charset="utf-8">
  <title>바지 캠</title>
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
    #hury_border{
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
    <div id="under">
      <a href="#"><img src="button/under_button.png"/></a>
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

  if($cloth_ctg == "black_pants"){
?>  
  <div id='cloth_px'>   
      <div id="medium">
        <img src="cloth/black_pants_medium.png"/>
      </div>
      <div id="large">
        <img src="cloth/black_pants_large.png" />
      </div>
      <div id="free">
      </div>      
  </div>

<?php
}else if($cloth_ctg == "short_black_pants"){
?>
  <div id='cloth_px'>   
      <div id="medium">
        <img src="cloth/short_black_pants_medium.png"/>
      </div>
      <div id="large">
      </div>
      <div id="free">
      </div>        
  </div>

<?php
}
?>




  <div id='hury_border'>
    <img src="img/hury_border.png">
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
    //For animation purpose




    $('#cloth_px').hide();
    $('#hury_border').hide();
    var size = '<?= $size; ?>';
    var a = '<?= $cloth_ctg; ?>';
    alert(a);

    if (size =="medium"){
      $('#large_button').hide();
      $('#free_button').hide();      

      $('#show_choice #under').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 하의");
        $('#footer').text("허리를 점선에 맞추세요.");
        $('#hury_border').css({
          left:'25%',
          top:'25%'
        });
        $('#cloth_px').show();
        $('#medium').show();
        $('#large').hide();
        $('#free').hide();
        $('#medium').css({
            left:'25%',
            top:'30%'
            });
        $('#medium img').css({
            'width': '500px',
            'height':'500px'
        }); 
      })
      $('#show_choice #all').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 전신");
        $('#footer').text("허리를 점선에 맞추세요.")
        $('#hury_border').css({
          left:'25%',
          top:'40%'
        });
        $('#cloth_px').show();
        $('#medium').show();
        $('#large').hide();
        $('#free').hide();
        $('#medium').css({
            left:'29%',
            top:'45%'
            });
        $('#medium img').css({
            'width': '400px',
            'height':'400px'
        });
      });  

    }else if (size == "large"){
      $('#medium_button').hide();
      $('#free_button').hide();
    
      $('#show_choice #under').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 하의");
        $('#footer').text("허리를 점선에 맞추세요.");
        $('#hury_border').css({
          left:'25%',
          top:'25%'
        });
        $('#cloth_px').show();
        $('#large').show();
        $('#medium').hide();
        $('#free').hide();        
        $('#large').css({
            left:'25%',
            top:'30%'
            });
        $('#large img').css({
            'width': '500px',
            'height':'500px'
        }); 
      })
      $('#show_choice #all').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 전신");
        $('#footer').text("허리를 점선에 맞추세요.")
        $('#hury_border').css({
          left:'25%',
          top:'39%'
        });
        $('#cloth_px').show();
        $('#large').show();
        $('#medium').hide();
        $('#free').hide();
        $('#large').css({
            left:'29%',
            top:'45%'
            });
        $('#large img').css({
            'width': '400px',
            'height':'400px'
        });
      });

    }else { //free일때 
      $('#medium_button').hide();
      $('#large_button').hide();
    
      $('#show_choice #under').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 하의");
        $('#footer').text("허리를 점선에 맞추세요.");
        $('#hury_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#free').show();
        $('#medium').hide();
        $('#large').hide();
        $('#free').css({
            left:'25%',
            top:'17%'
            });
        $('#free img').css({
            'width': '500px',
            'height':'500px'
        }); 
      })
      $('#show_choice #all').click(function(){
        $('#hury_border').show();
        $('#state').text("메뉴 : 전신");
        $('#footer').text("허리를 점선에 맞추세요.")
        $('#hury_border').css({
          left:'40.5%',
          top:'7%'
        });
        $('#cloth_px').show();
        $('#free').show();
        $('#medium').hide();
        $('#large').hide();
        $('#free').css({
            left:'33%',
            top:'20%'
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