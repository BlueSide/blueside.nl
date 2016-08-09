<?php
/*
  Plugin Name: Debukzh
  Plugin URI: http://cikzh.com
  Version: 0.0.1
  Author: Cikzh
  Description: Collection of debug tools for internal development. To be disabled when shipping the website
*/
?>
<html>
<head>
<script type="text/javascript">
    var socket;

function init() {
    var host = "ws://127.0.0.1:33033/debukzh/";
    try {
        socket = new WebSocket(host);
        socket.onopen    = function(msg) { };
        socket.onmessage = function(msg) { 
            if(msg.data == "reload")
            {
                location.reload(true);
            } 
        };
        socket.onclose   = function(msg) { };
    }
    catch(ex){ 
        log(ex); 
    }
}

function send(msg){
    socket.send(msg); 
 }

 init();
</script>

</head>
