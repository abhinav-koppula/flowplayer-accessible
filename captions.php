<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <title>Captions and Shortcuts</title>
  <style type="text/css">
    a:active {
        outline:none;
    }
    
    
    li {
        list-style: none;
        display: inline;
        padding-right: 20px;
    }
    
    #player {
      display: block;
      width: 640px;
      height: 506px;
      margin: 0;
    }

  </style>
  <script type="text/javascript" src="plugins/flowplayer-3.2.12.min.js"></script>
  <script type="text/javascript" src="plugins/jquery-1.6.2.js"></script>
  <script type="text/javascript">
// <![CDATA[
  window.onload = function () {
    $f("player", {
        src: "plugins/flowplayer-3.2.16.swf",
        SeamlessTabbing: true
    }, {
      log: { level: 'debug', filter: 'org.flowplayer.slowmotion.*' },
      onKeyPress: function(code) {
            switch(code) {
                case 70: this.toggleFullscreen();
                    break;
                case 36: this.stop();this.play();
                    break;
                case 67: this.getPlugin('content').toggle();
                    break;
            }
      },
      plugins: {  
        slowmotion: {
            url: "plugins/flowplayer.slowmotion-3.2.9.swf",
            serverType: "fms"
        },

        rtmp: {
            url: "plugins/flowplayer.rtmp-3.2.12.swf",
            netConnectionUrl: "rtmp://s3b78u0kbtx79q.cloudfront.net/cfx/st"
        },
        controls: {
          tooltipColor: '#FFF',
          autoHide: false,
          
          tooltips: {
              buttons: true
          }
        },
        captions: {
            url: "plugins/flowplayer.captions-3.2.9.swf",
 
            // pointer to a content plugin
            captionTarget: 'content'
        },
        content: {
            url: "plugins/flowplayer.content-3.2.8.swf",
            bottom: 25,
            width: '80%',
            height:40,
            backgroundColor: '#000000',
            backgroundGradient: 'low',
            borderRadius: 4,
            border: 0,
            style: {
                'body': {
                fontSize: '14',
                fontFamily: 'Arial',
                textAlign: 'center',
                color: '#FFFFFF'
                }
            }
        }
      },
      clip: {
        url: "vids/amara.flv",
        scaling: "fit",
        autoPlay: false,
        autoBuffering: true,
        captionUrl: 'vids/amara.srt'
      }
    });
  };
  // ]]>
  </script>
</head>

<body>
    <ul>
        <li><a href="control-flash.php" title="Control Bar-Flash" aria-label='control-bar'>Control Bar-Flash</a></li>
        <li><a href="captions.php" title="Captions" aria-label='captions'>Captions</a></li>
        <li><a href="amara.php" title="Amara Integration" aria-label='amara'>AMARA Subtitles</a></li>
    </ul>
    
  <h1>Captions and Shortcuts</h1>
  <div id="player" role="button" aria-label="Media" ></div>
  <div id="shortcuts">
        <b>Shortcuts:</b>
        <p>Play/Pause - Spacebar</p>
        <p>FullScreen - F key</p>
        <p>Restart - Home key</p>
        <p>Toggle Captions - C key</p>
        <p>Volume up/down - Up/Down key</p>
  </div>
</body>
</html>