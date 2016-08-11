<?php
/*
  Plugin Name: Debukzh
  Plugin URI: http://www.blueside.nl
  Version: 0.0.2
  Author: Cikzh
  Description: Collection of debug tools for internal development. To be disabled when shipping the website
*/

// Check the backtrace of deprecated function warnings
add_action ( 'deprecated_function_run', 'bs_deprecated_function_backtrace', 10, 3);
function bs_deprecated_function_backtrace($function, $replacement, $version)
{
    if(WP_DEBUG)
    {
        echo '<pre>';trigger_error(print_r(debug_backtrace(), TRUE)); echo '</pre>';
    }
}


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
