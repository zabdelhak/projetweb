<?php
session_start();
echo($_SESSION["username"]);
//$_SESSION["username"]="1";
include("fonction\session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    
  #aa
    {  
    font-weight: bold;
    position:fixed;
    left:0;
    right:0;
    margin: auto;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 200px;
    height: auto;
    padding: 15px;  
    background: gold;
    text-align: center;
    box-sizing: content-box;
    border: 4px dashed red;
    }
    .pic{
      margin: 40px 40px 0px 40px;
      
    }
    .parent {
    position: abolute;
    width: 100%;
    height: 100%;
    }

    .child1{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.7;
    }

    .child2 {
      top: 470px;
      background: white;
      width: 100%;
      height: 20%;
    }
</style>
  <script id="map" type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l' 
            async defer>
    </script> 
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <title>TAWSILA</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
    <div class="parent">
      <div class="child1" id="myMap"></div>
      <div class="child1 child2">
         <div class="pic">
         <div  style="display:none" ><input type="text" id="username" value="<?php echo($_SESSION["username"])?>"></div>
          <label for="pick_up"> pick up </label>
          <input  id="pick_up" type="text" placeholder="pick-Up location" readonly>
          <button id="pick_btn" name="pick_up" type="submit">lock in</button>
          <label for="drop">where to drop:</label>
          <input id="drop" type="text" placeholder="Drop location" readonly>
          <button id="drop_btn" name="drop" type="submit">lock in</button>
          <div id=aa style="display:none">PLEASE FILL THE PICK UP LOCATION</div>
          <button id="confirm" type="submit" style="display:none" onclick="fill()" >GO!</button>
          </div>
          <input id="username" style="display:none" value="<?php echo $_SESSION["username"];?>">
          <input id="pick_longue" style="display:none"></input>
          <input id="drop_longue" style="display:none" ></input>
          <input id="pick_att" style="display:none"></input>
          <input id="drop_att" style="display:none" ></input>
    </div>
    </div>
  </body>
<script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- <script src="js/pick.js"></script> -->
  <script>
      var url="fonction/trajet.php?";
  function GetMap() {
    var map = new Microsoft.Maps.Map('#myMap', {
             credentials: 'AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l',
             center: new Microsoft.Maps.Location(36.727743,3.067681)
         });
      
         var center = map.getCenter();

//Create custom Pushpin
var pin = new Microsoft.Maps.Pushpin(center, {
  title: 'Choose a Pick Up Location',
    text: ''
});
        Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_pickup(e);});
        //Add the pushpin to the map
        map.entities.push(pin);  
    }
 function set_latitudes_and_longitude_pickup(map)
 {
   document.getElementById("pick_up").value=map.location.latitude;
   document.getElementById("pick_att").value=map.location.latitude;
   document.getElementById("pick_longue").value=map.location.longitude;
   var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l',
            center: new Microsoft.Maps.Location(document.getElementById("pick_up").value,document.getElementById("pick_longue").value)
        });

       
        var center = map.getCenter();

        //Create custom Pushpin
        var pin = new Microsoft.Maps.Pushpin(center, {
            title: 'Pick Location',
            text: ''
        });
        Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_pickup(e);});
        //Add the pushpin to the map
        map.entities.push(pin);

  }
 function set_latitudes_and_longitude_drop(map)
 {
    document.getElementById("drop").value=map.location.latitude;
    document.getElementById("drop_att").value=map.location.latitude;
    document.getElementById("drop_longue").value=map.location.longitude;
    var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l',
            center: new Microsoft.Maps.Location(document.getElementById("drop").value,document.getElementById("drop_longue").value)
        });
      
        var center = map.getCenter();

        //Create custom Pushpin
        var pin = new Microsoft.Maps.Pushpin(center, {
          title: 'Drop Location',
            text: ''
        });
        Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_drop(e);});
        //Add the pushpin to the map
        map.entities.push(pin);

  }
</script>
</html>
 <script>
  var hello="";
  const pick_btn=document.getElementById("pick_btn");
        pick_btn.onclick=function(pick_btn)
        {if(document.getElementById("pick_up").value=="")
        {
          show();
        }
        else{
          document.getElementById("aa").style.display = "none";  
          GetMap2();
          pick_att=document.getElementById("pick_up").value;
          pick_long=document.getElementById("pick_longue").value;
        }
        };
</script> 
<script>
function show()
  {
      var stats =  document.getElementById("aa").style.display;
      if (stats == "none"){  
      document.getElementById("aa").style.display = "inline-block";
      } else {
      document.getElementById("aa").style.display = "none";  
      }
    }
function GetMap2()
           {
             var map = new Microsoft.Maps.Map('#myMap', {
             credentials: 'AnBg1zAkil1YotryDJPI3f73rIsfIBtk6YMFrPIIzMmW-OVo54wmpaljHrJlZV4l',
             center: new Microsoft.Maps.Location(document.getElementById("pick_up").value,document.getElementById("pick_longue").value)
         });          
        var center = map.getCenter();
    //Create custom Pushpin
                var pin = new Microsoft.Maps.Pushpin(center, {
              
                  title: 'Pick location',
                    text: ''
                });
                      map.entities.push(pin);
                      var click= Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_pickup(e);});
                      Microsoft.Maps.Events.removeHandler(click);
                      pick_btn.style.display='none';
                      Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_drop(e);});
                      const drop_btn=document.getElementById("drop_btn");  
              };
function GetMap3()
          { 
            var map = new Microsoft.Maps.Map('#myMap');
            var click= Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_drop(e);});
                  Microsoft.Maps.Events.removeHandler(click);
                  drop_btn.style.display='none';
              var confirm= document.getElementById("confirm").style;
              confirm.display="inline-block";
          };
          drop_btn.onclick=function(drop_btn)
        {if(document.getElementById("drop").value=="")
        {
          document.getElementById("aa").innerText ="PLEASE FILL THE DROP OUT LOCATION";
          show();}
        else{
          document.getElementById("aa").style.display = "none";  
          GetMap3();
          var xhttp = new XMLHttpRequest();
      };
    }
      </script>
      <script>
        function fill()
        {
          var pick_att=document.getElementById("pick_att").value;
          var pick_long=document.getElementById("pick_longue").value;
          var drop_att=document.getElementById("drop_att").value;
          var drop_long=document.getElementById("drop_longue").value;
          var username=document.getElementById("username").value;
          //+document.getElementById("pick_att").value+document.getElementById("drop_long").value+
          var xhttp = new XMLHttpRequest();
          var url="fonction/tarjet.php?pick_att="+pick_att+"&pick_long="+pick_long+"&drop_att="+drop_att+"&drop_long="+drop_long+"&username="+username;
          xhttp.onreadystatechange=function()
          {
            if(xhttp.readyState==4 && xhttp.status==200)
            {
              console.log("envoie avec succé");
              objet=xhttp.responseText;
              const obj=JSON.parse(objet);
              var t=obj.pick_long;
              console.log(t);
            }
          }
          xhttp.open("GET",url,true);
          xhttp.send(null);
        }
      </script>