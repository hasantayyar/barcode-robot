<?php
define('APPPATH',__DIR__.'/');

include(APPPATH.'lib/ean13.php');
include(APPPATH.'views/header.php');



?>

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
            if($type=='ean'){
              $ean13 = new ean13;
              $ean13->article = $str;   
              $ean13->article .= $ean13->generate_checksum();  
              $ean13->reverse();  
              $ean13->article = $ean13->codestring(); 
              $src = 'data:image/png;base64,'.$ean13->create_image();   
            }else{
              $src = 'http://chart.apis.google.com/chart?cht=qr&amp;chs=300x300&amp;chl='.$str.'&amp;chld=H|0';
            }

        ?>
      <div class="col-lg-4">
        <div class="row">
          <img src="<?php echo $src;?>" />
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
            <input type="radio" name="t" id="t2" value="ean" /> EAN/UPC
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

<?php 
include('footer.php');