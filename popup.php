#!/usr/bin/php
<html> 
<head>  
<?php 
include('includes/header.php');?>
</head>    
<body>
<div class="container_4 padding all_curves box_shadow min_height" id="box">
<div class="left grid_4 text_white"><h2>Radio Player</h2></div>
<!--

  <div id="radio-player" class="radio-default">

    <!-- Audio placeholder used by jPlayer -->
<!--    <div id="player"> </div>

    <!-- Container for channel picker -->
<!--    <div id="channelPicker">
        <a tabindex="8" accesskey="l" id="paginationLeft" class="inactive"><span>Left</span></a>
        <div id="channels"> </div>
        <a tabindex="9" accesskey="r" id="paginationRight" class="active"><span>Right</span></a>
    </div>

    <!-- Container for display -->
<!--    <div id="display">
        <a id="currentChannel"><img src="gfx/default/default-station.png" /></a>
        <span id="duration"> </span>
        <span id="quality"> </span>
    </div>

    <!-- Containers for admin functions -->
<!--    <a tabindex="7" accesskey="c" id="displayChannelPicker" title="Channels"><span>Channels</span></a>
    <a id="config">Config</a>

    <!-- Containers for jPlayer actions -->
<!--    <a tabindex="3" accesskey="d" id="volumeMin" title="Mute"><span>Mute Volume</span></a>
    <a id="volume"><span>Adjust Volume</span></a>
    <a tabindex="4" accesskey="u" id="volumeMax" title="Max"><span>Max Volume</span></a>
    <a tabindex="1" accesskey="p" id="play" title="Play"><span>Play</span></a>
    <a id="pause" title="Pause"><span>Pause</span></a>
    <a tabindex="2" accesskey="s" id="stop" title="Stop"><span>Stop</span></a>

    <!-- Container for error messages -->
<!--    <div id="error">
        <h2>Error</h2>
        <p> </p>
    </div>
</div>
-->
</br>
<audio style="left:10px;bottom:10px;position:absolute" src="<?php echo $_GET[link];?>" controls preload> </audio>
</div>
</body>
</html>
