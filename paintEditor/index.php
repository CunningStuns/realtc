<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/15/2015
 * Time: 2:36 PM
 */

//error_reporting(-1);
//ini_set('display_errors', 'On');

?>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script  src="https://apis.google.com/js/platform.js" async defer></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
<meta name="google-signin-client_id" content="251993177722-sm7r5qj9sq3lrff1ao2hgeoesmjs89dj.apps.googleusercontent.com">
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>

<div class="btn-group btn-group-justified" style="margin-right: auto; margin-top: 10px; width: 70%;">
    <a class="btn color-picker upper-button" style="background-color: blue; color: white; font-weight: bold">Blue</a>
    <a class="btn color-picker" style="background-color: green; color: white; font-weight: bold">Green</a>
    <a class="btn color-picker" style="background-color: yellow; color: black; font-weight: bold">Yellow</a>
    <a class="btn color-picker red-pick" style="background-color: red; color: white; font-weight: bold">Red</a>
    <a class="btn color-picker black-pick upper-button" style="border-bottom-width: 0px; background-color: black; color: white; font-weight: bold">Black</a>
</div>
<div class="clearfix"></div>
<div id="sketchContainer" style="width: 70%; height: 300px; border: 1px solid rgba(0,0,0,0.2)"><canvas id="sketch"></canvas></div>
<div class="btn-group btn-group-justified" style="margin-right: auto; width: 70%;">
    <a class="btn btn-info user-color-pick bottom-button" style="width: 30%;">User Color</a>
    <a class="btn btn-success plus-size" style="width: 15%;">
        <i class="fa fa-plus-square">Brush +</i>
    </a>
    <a class="btn btn-warning clear" style="width: 15%;">
        <i class="fa fa-times-circle">Clear Palette</i>
    </a>
    <a class="btn btn-danger minus-size" style="width: 15%;">
        <i class="fa fa-minus-square">Brush -</i>
    </a>
    <a class="btn btn-default eraser bottom-button" style="width: 35%; border-top-width: 0px;">
        <i class="fa fa-eraser" style="color: black">Eraser</i>
        
    </a>
</div>


<label for="sourceURL">Source URL For Images: </label><input type="text" id="sourceURL">
<button onclick="loadImage();">Submit Image</button>
<a href="#" class="button" id="btn-download" download="my-file-name.png">Download</a>


<div id='side'>
      <div id='loginup'>
            <div class='g-signin2' data-onsuccess='onSignIn'></div>
            <a href='#' onclick='signOut();'>Sign out</a>
          </div>
      </div>
    <script type="text/javascript">
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log("Name: " + profile.getName());
            console.log("Image URL: " + profile.getImageUrl());
            console.log("Email: " + profile.getEmail());
            
            document.getElementById("main").style.visibility = "visible";
            document.getElementById("main").disabled = "";
            
        }
    </script>
    
    <script>
      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
              console.log("User signed out.");
              window.location="/realtc/";
          });
      }
    </script>
<script>
    // get the canvas element and its context
    var canvas = document.getElementById('sketch');
    var context = canvas.getContext('2d');

    // the aspect ratio is always based on 1140x400, height is calculated from width:
    canvas.width = $('#sketchContainer').outerWidth();
    canvas.height = (canvas.width/1140)*400;
    $('#sketchContainer').outerHeight(String(canvas.height) + "px", true);
    // scale function needs to know the width/height pre-resizing:
    var oWidth = canvas.width;
    var oHeight = canvas.height;
    var lines = [];

    var lastMouse = {
        x: 0,
        y: 0
    };

    // brush settings
    context.lineWidth = 2;
    context.lineJoin = 'round';
    context.lineCap = 'round';
    context.strokeStyle = '#000';

    // attach the mousedown, mouseout, mousemove, mouseup event listeners.
    canvas.addEventListener('mousedown', function (e) {
        lastMouse = {
            x: e.pageX - this.offsetLeft,
            y: e.pageY - this.offsetTop
        };
        canvas.addEventListener('mousemove', move, false);
    }, false);
    
    //actions for leaving the canvas
    canvas.addEventListener('mouseout', function () {
        canvas.removeEventListener('mousemove', move, false);
    }, false);

    //actions for taking off the click
    canvas.addEventListener('mouseup', function () {
        canvas.removeEventListener('mousemove', move, false);
    }, false);

    // Sets the brush size:
    function setSize(size) {
        context.lineWidth = size;
    }

    // Sets the brush color:
    function setColor(color) {
        context.globalCompositeOperation = 'source-over';
        context.strokeStyle = color;
    }

    // Sets the brush to erase-mode:
    function eraser() {
        context.globalCompositeOperation = 'destination-out';
        context.strokeStyle = 'rgba(0,0,0,1)';
    }

    // Clears the canvas and the lines-array:
    function clear(send) {
        context.clearRect(0, 0, canvas.width, canvas.height);
        lines = [];
        if (send && TogetherJS.running) {
            TogetherJS.send({
                type: 'clear'
            });
        }
    }

    // Redraws the lines from the lines-array:
    function reDraw(lines){
        for (var i in lines) {
            draw(lines[i][0], lines[i][1], lines[i][2], lines[i][3], lines[i][4], false);
        }
    }
    // Draws the lines, called by move and the TogetherJS event listener:
    function draw(start, end, color, size, compositeOperation, save) {
        context.save();
        context.lineJoin = 'round';
        context.lineCap = 'round';
        // Since the coordinates have been translated to an 1140x400 canvas, the context needs to be scaled before it can be drawn on:
        context.scale(canvas.width/1140,canvas.height/400);
        context.strokeStyle = color;
        context.globalCompositeOperation = compositeOperation;
        context.lineWidth = size;
        context.beginPath();
        context.moveTo(start.x, start.y);
        context.lineTo(end.x, end.y);
        context.closePath();
        context.stroke();
        context.restore();
        if (save) {
            // Won't save if draw() is called from reDraw().
            lines.push([{x: start.x, y: start.y}, {x: end.x, y: end.y}, color, size, compositeOperation]);
        }
    }

    // Called whenever the mousemove event is fired, calls the draw function:
    function move(e) {
        var mouse = {
            x: e.pageX - this.offsetLeft,
            y: e.pageY - this.offsetTop
        };
        // Translates the coordinates from the local canvas size to 1140x400:
        sendMouse = {
            x: (1140/canvas.width)*mouse.x,
            y: (400/canvas.height)*mouse.y
        };
        sendLastMouse = {
            x: (1140/canvas.width)*lastMouse.x,
            y: (400/canvas.height)*lastMouse.y
        };
        draw(sendLastMouse, sendMouse, context.strokeStyle, context.lineWidth, context.globalCompositeOperation, true);
        if (TogetherJS.running) {
            TogetherJS.send({
                type: 'draw',
                start: sendLastMouse,
                end: sendMouse,
                color: context.strokeStyle,
                size: context.lineWidth,
                compositeOperation: context.globalCompositeOperation
            });
        }
        lastMouse = mouse;
    }

    // Listens for draw messages, sends info about the drawn lines:
    TogetherJS.hub.on('draw', function (msg) {
        if (!msg.sameUrl) {
            return;
        }
        draw(msg.start, msg.end, msg.color, msg.size, msg.compositeOperation, true);
    });


    // Clears the canvas whenever someone presses the clear-button
    TogetherJS.hub.on('clear', function (msg) {
        if (!msg.sameUrl) {
            return;
        }
        clear(false);
    });

    // Hello is sent from every newly connected user, this way they will receive what has already been drawn:
    TogetherJS.hub.on('togetherjs.hello', function () {
        TogetherJS.send({
            type: 'init',
            lines: lines
        });
    });

    // Draw initially received drawings:
    TogetherJS.hub.on('init', function (msg) {
        reDraw(msg.lines);
        lines = msg.lines;
    });

    // JQuery to handle buttons and resizing events, also changes the cursor to a dot resembling the brush size:
    $(document).ready(function () {
        // changeMouse creates a temporary invisible canvas that shows the cursor, which is then set as the cursor through css:
        function changeMouse() {
            // Makes sure the cursorSize is scaled:
            var cursorSize = context.lineWidth*(canvas.width/1140);
            if (cursorSize < 10){
                cursorSize = 10;
            }
            var cursorColor = context.strokeStyle;
            var cursorGenerator = document.createElement('canvas');
            cursorGenerator.width = cursorSize;
            cursorGenerator.height = cursorSize;
            var ctx = cursorGenerator.getContext('2d');

            var centerX = cursorGenerator.width/2;
            var centerY = cursorGenerator.height/2;

            ctx.beginPath();
            ctx.arc(centerX, centerY, (cursorSize/2)-4, 0, 2 * Math.PI, false);
            ctx.lineWidth = 3;
            ctx.strokeStyle = cursorColor;
            ctx.stroke();
            $('#sketch').css('cursor', 'url(' + cursorGenerator.toDataURL('image/png') + ') ' + cursorSize/2 + ' ' + cursorSize/2 + ',crosshair');
        }
        // Init mouse
        changeMouse();

        // Redraws the lines whenever the canvas is resized:
        $(window).resize(function() {
            if ($('#sketchContainer').width() != oWidth) {
                canvas.width = $('#sketchContainer').width();
                canvas.height = (canvas.width/1140)*400;
                $('#sketchContainer').outerHeight(String(canvas.height)+"px", true);
                var ratio = canvas.width/oWidth;
                oWidth = canvas.width;
                oHeight = canvas.height;
                reDraw(lines);
                changeMouse();
            }
        });

        // Clears the canvas:
        $('.clear').click(function () {
            clear(true);
        });

        // Color-button functions:
        $('.color-picker').click(function () {
            var $this = $(this);
            console.log($this);
            setColor($this.css("background-color"));
            changeMouse();
        });
        
        //event handler for eraser
        $('.eraser').click(function () {
            eraser();
            changeMouse();
        });
        // TogetherJS user color:
        $('.user-color-pick').click(function() {
            setColor(TogetherJS.require('peers').Self.color);
            changeMouse();
        });

        // Increase/decrease brush size:
        $('.plus-size').click(function() {
            setSize(context.lineWidth+3);
            changeMouse();
        });
        
        //event handler for decreasing brush size
        $('.minus-size').click(function() {
            if (context.lineWidth > 3) {
                setSize(context.lineWidth-3);
            }
            changeMouse();
        });
    });
    
    function addingImage(url){
        var img = new Image();

        img.onload = function() {
            context.drawImage(img, 69, 50);
        };
        img.src = url;
    }
    
    function loadImage(){
        var src = document.getElementById('sourceURL').value;
        
        addingImage(src);
        
        TogetherJS.send({
            type: 'img',
            url: src
        });
    }

    TogetherJS.hub.on('img', function (msg) {
        var src = document.getElementById('sourceURL').value;

        addingImage(src);
    });
    
    function exportToPNG(){
        var button = document.getElementById('btn-download');
        button.addEventListener('click', function (e) {
            var dataURL = context.toDataURL('image/png');
            button.href = dataURL;
        });
    }

    function downloadCanvas(link, canvasId, filename) {
        link.href = document.getElementById(canvasId).toDataURL();
        link.download = filename;
    }

    /**
     * The event handler for the link's onclick event. We give THIS as a
     * parameter (=the link element), ID of the canvas and a filename.
     */
    document.getElementById('download').addEventListener('click', function() {
        downloadCanvas(this, 'canvas', 'test.png');
    }, false);
</script>