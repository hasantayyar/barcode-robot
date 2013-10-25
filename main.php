<!-- http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=asdadasd&chld=H|0 -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Barcode Robot</title>
  <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet">
  <style>
  @import url(http://fonts.googleapis.com/css?family=Dosis:300,400&subset=latin,latin-ext);
  body{font-family:'Dosis', sans-serif;margin:0;padding:0 0 50px;}
  h1{color:#00BCF6; letter-spacing: 2px;font-family:'Dosis', sans-serif;}
  </style>
</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="/" class="navbar-brand">Barcode-robot</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">

          <li>
            <a href="#">Help</a>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" target="_blank">Share</a></li>
          <li><a href="#" target="_blank">Source</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
   <div class="bs-docs-section">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-12">
         <h1></h1>
       </div>
     </div>
   </div>


   <div class="row">
    <div class="col-lg-12">

     <div class="jumbotron">

      <?php
      $str = isset($_GET['v'])?$_GET['v']:false;
      $type = isset($_GET['t'])?$_GET['t']:false;
      if($str && $type):
        ?>
      <div class="col-lg-4">
        <div class="row">
          <img src="http://chart.apis.google.com/chart?cht=qr&amp;chs=300x300&amp;chl=<?php echo $str;?>&amp;chld=H|0" />
        </div>
      </div>

      <?php
      endif
      ?>
      <div class="col-lg-8">
      <h1>Generate BarCode</h1>
      <p>Paste your text and press "Generate" button.</p>

      <form class="form-inline" method="get">
        <div class="input-group-lg col-md-6">
          <input type="text" class="form-control btn-lg" id="barcode_input" name="v" placeholder="Paste here!" />
        </div>
        <div class="input-group-lg">
          <button type="submit" class="btn btn-primary btn-lg">∫ GENERATE</button>
        </div>
        <div class="clearfix"></div>
        <div class="input-group-lg btn-group well">
          <label class="btn btn-primary">
            <input type="radio" name="t" id="t1" value="qr" checked="checked"/> QR
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="t" id="t2" value="EAN" /> EAN/UPC
          </label>
          <label class="btn btn-primary">
            <input type="radio" name="t" id="t3" value="databar" /> GS1 DataBar
          </label>
        </div>

      </form>
    </div>

<div class="clearfix"></div>
    </div>

<!--
            <div class="bs-example">
              <p>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
              </p>
            </div>
          -->

        </div>

      </div>
    </div>

    



  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){

})
</script>
</body>
</html>