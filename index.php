<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">

    <title>Distance Between Cities App</title>
  </head>
  
  <body>
    <div class="jumbotron">
      <div class="container-fluid">
          <h1>Distance between cities App</h1>

          <p>Our app will help you calculate traveling distances</p>

         <form class="form-horizontal">
          <div class="form-group">
            <label for="from" class="col-xs-2 control-label">From:</label>
              <div class="col-xs-10">
                <input type="text" id="from" placeholder="Origin" class="form-control">
              </div>
          </div>

          <div class="form-group">
            <label for="to" class="col-xs-2 control-label">To:</label>
              <div class="col-xs-10">
                <input type="text" id="to" placeholder="Destination" class="form-control">
              </div>
          </div>
        </form>
        <div class="col-xs-offset-2 col-xs-10">
          <button class="btn btn-info btn-lg" onclick="calcRoute();">Submit</button>
        </div>
      </div>
      
      <div class="container-fluid">
        <div id="googleMap">
          
        </div>
        <div id="output">
          
        </div>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdfyeprC3CDilCnUTObRzna-uhFggOq-E&callback=initMap" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
  </body>
</html>