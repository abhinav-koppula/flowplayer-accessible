<!DOCTYPE html>

<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <title>Control Bar-Flash</title>
  <style type="text/css">
      li {
        list-style: none;
        display: inline;
        padding-right: 20px;
      }
/* <![CDATA[ */
    #player {
      display: block;
      width: 640px;
      height: 506px;
      margin: 0;
    }
  /* ]]> */
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
      plugins: {
        tooltipColor: '#456',
        
        controls: {
          autoHide: false,
          
          tooltips: {
              buttons: true
          }
        }
      },
      clip: {
        url: "vids/myvid.mp4",
        scaling: "fit",
        autoPlay: false,
        autoBuffering: true
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
    
  <h1>Accessibility</h1>      
  <div id="player" role="button" aria-label="Media" ></div>
</body>
</html>