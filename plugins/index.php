<html><head>
    
    <title>HTML control bar : Flowplayer</title>

    
    <style>
        body{
            width:982px;
            margin:50px auto;
            font-family:sans-serif;
        }
        a:active {
            outline:none;
        }
        :focus { -moz-outline-style:none; }

        .palert {
            padding: 12px;
            color: black;
            background-color: #ededed;
            box-shadow: none;
        }
    </style>

    
    
    <!-- flowplayer javascript component -->
    <script src="flowplayer-3.2.12.min.js"></script>
    <script src="jquery-1.6.2.js"></script>
    </head>

<body>
    <script src="flowplayer.controls-3.2.10.min.js"></script>

<!-- "HULU" look and feel -->
<link rel="stylesheet" type="text/css" href="controls-hulu.css">
<style>
#hulu{
    margin: -10px auto 0;
}
</style>


<!-- player container-->
<a href="myvid.mp4" class="player" style="display:block;width:425px;height:300px;margin:10px auto" id="huluPlayer">
    <object width="100%" height="100%" id="huluPlayer_api" name="huluPlayer_api" data="flowplayer-3.2.16.swf" type="application/x-shockwave-flash">
        <param name="allowfullscreen" value="true">
        <param name="allowscriptaccess" value="always">
        <param name="quality" value="high">
        <param name="bgcolor" value="#000000">
        <param name="flashvars" value="config={&quot;clip&quot;:{&quot;autoPlay&quot;:false,&quot;autoBuffering&quot;:true,&quot;url&quot;:&quot;http://pseudo01.hddn.com/vod/demo.flowplayervod/flowplayer-700.flv&quot;},&quot;plugins&quot;:{&quot;controls&quot;:null},&quot;playerId&quot;:&quot;huluPlayer&quot;,&quot;playlist&quot;:[{&quot;autoPlay&quot;:false,&quot;autoBuffering&quot;:true,&quot;url&quot;:&quot;myvid.mp4&quot;}]}">
    </object>
</a>

<!-- controlbar container -->
<div id="hulu" class="hulu"><a class="play">play</a><div class="track"><div class="buffer" style="width: 283px;"></div><div class="progress"></div><div class="playhead"></div></div><div class="time"><span>00:00</span> <strong>00:25</strong></div><a class="mute">mute</a></div>

<!-- this script block will install Flowplayer inside previous A tag -->
<script>
function accinit()
{
    $('.play').attr({
        'href':'javascript:chkplay();',
        'role':'button',
        'title':'play',
        'aria-label': 'play'
    }).html("");
    $('.pause').attr({
        'href':'javascript:chkplay();',
        'role':'button',
        'title': 'pause',
        'aria-label': 'pause'
    }).html("");
    $('.buffer').attr({
        'title': 'Progress Bar',
        'aria-label': 'Progress Bar'
    });
    $('.mute').attr({
        'href':'javascript:chkmute();',
        'role':'button',
        'title':'mute',
        'aria-label': 'mute'
    }).html("");
}
function chkmute()
{
    muteattr = $('.mute').attr('class');
    if(muteattr === 'mute') {
        $('.mute').attr({
        'href':'javascript:chkmute();',
        'role':'button',
        'title':'mute',
        'aria-label': 'mute'
    }).html("");
    }
    else
    {
        $('.unmute').attr({
        'href':'javascript:chkmute();',
        'role':'button',
        'title':'unmute',
        'aria-label': 'unmute'
    }).html("");
    }
}
function chkplay()
{
    playattr = $('.play').attr('class');
    if(playattr === 'play') {
        $('.play').attr({
        'href':'javascript:chkplay();',
        'role':'button',
        'title':'play',
        'aria-label': 'play'
    }).html("");
    }
    else
    {
        $('.pause').attr({
        'href':'javascript:chkplay();',
        'role':'button',
        'title':'pause',
        'aria-label': 'pause'
    }).html("");
    }
}
window.onload = function() {
// install everything after page is ready
    $f("huluPlayer", "flowplayer-3.2.16.swf", {
        onKeyPress: function(code) {
            switch(code) {
                case 70: this.toggleFullscreen();
                    break;
                case 36: this.stop();this.play();
                    break;
            }
        },
        // don't start automatically
        clip: {
            autoPlay: false,
            autoBuffering: true,
            captionUrl: "Mammals.en.vtt"
        },

        // disable default controls
        plugins: {
            controls: null,
            
            captions: {
            url: "flowplayer.captions-3.2.9.swf",
 
            // pointer to a content plugin (see below)
            captionTarget: 'content'
        },
 
        // configure a content plugin to look good for our purpose
        content: {
            url: "flowplayer.content-3.2.8.swf",
            bottom: 25,
            width: '80%',
            height:40,
            backgroundColor: 'transparent',
            backgroundGradient: 'low',
            borderRadius: 4,
            border: 0,
 
            style: {
                'body': {
                fontSize: '14',
                fontFamily: 'Arial',
                textAlign: 'center',
                color: '#000000'
                }
            }
        }
        }

    // install HTML controls inside element whose id is "hulu"
    }).controls("hulu", {duration: 0});
    accinit();
}

</script>



</body>
</html>