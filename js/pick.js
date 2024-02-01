function GetMap()
{ 
    var map = new Microsoft.Maps.Map('#myMap');  
    Microsoft.Maps.Events.addHandler(map,'click', function (e) { set_latitudes_and_longitude_pickup(e);});
    Microsoft.Maps.Events.addHandler(map,'rightclick', function (e) { set_latitudes_and_longitude_drop(e);});
}
function set_latitudes_and_longitude_pickup(map)
{
  document.getElementById("pick_up").value=map.location.latitude;
  document.getElementById("pick_btn").value=map.location.latitude;
}
function set_latitudes_and_longitude_drop(map)
{
    document.getElementById("drop").value=map.location.latitude;
    document.getElementById("drop_btn").value=map.location.latitude;
}
