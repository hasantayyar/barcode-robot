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
                <h1>Generate Qr Code</h1>
                <p>Paste your text and press "Generate" button.</p>

				<form class="form-inline">
                  <div class="input-group-lg col-md-6">
                      <input type="text" class="form-control" id="txt" placeholder="Paste here!" />
                  </div>
                  <div class="input-group-lg">
                      <button type="submit" class="btn btn-primary btn-lg">∫ GENERATE</button>
                  </div>

              </form>


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