<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Video Player Demo</title>
        <link rel="stylesheet" type="text/css" href="lib/infusion/framework/fss/css/fss-layout.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/framework/fss/css/fss-text.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/fss/fss-text-uio.css" />
        <link rel="stylesheet" type="text/css" href="lib/infusion/components/uiOptions/css/FatPanelUIOptions.css" />

        <link type="text/css" href="lib/jquery-ui/css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
        <link type="text/css" href="css/VideoPlayer.css" rel="stylesheet" />
        <link type="text/css" href="lib/captionator/css/captions.css" rel="stylesheet" />
        <!--[if lt IE 9]>
            <link type="text/css" href="css/ltie9.css" rel="stylesheet" />
        <![endif]-->

        <!-- Fluid and jQuery Dependencies -->
        <script type="text/javascript" src="lib/infusion/MyInfusion.js"></script>
        <!-- Utils -->
        <script type="text/javascript" src="lib/jquery-ui/js/jquery.ui.button.js"></script>
        <script type="text/javascript" src="lib/captionator/js/captionator.js"></script>
        <script type="text/javascript" src="lib/mediaelement/js/mediaelement.js"></script>
        <!--[if lt IE 9]>
            <script type="text/javascript" src="lib/html5shiv/js/html5shiv.js"></script>
        <![endif]-->
        <!-- VideoPlayer dependencies -->
        <script type="text/javascript" src="js/VideoPlayer_framework.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_showHide.js"></script>
        <script type="text/javascript" src="js/VideoPlayer.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_html5Captionator.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_controllers.js"></script>
        <script type="text/javascript" src="js/ToggleButton.js"></script>
        <script type="text/javascript" src="js/MenuButton.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_media.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_transcript.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_intervalEventsConductor.js"></script>
        <script type="text/javascript" src="js/VideoPlayer_uiOptions.js"></script>

        </head>
    <body>

        <h1>Infusion HTML 5 Video Player</h1>
        
        <div class="myplayer" style="height:400px;"></div>

        <script>
            fluid.videoPlayer(".myplayer",{
                video: {
                    sources: [
                        {
                            src: "vids/myvid.mp4",
                            type: "video/mp4"
                        }
                    ],
                    captions: [
                        {
                            src: "vids/Mammals.en.vtt",
                            type: "text/vtt",
                            srclang: "en",
                            label: "English"
                        }
                    ],
                    transcripts: [
                        {

                            src: "vids/Mammals.transcripts.en.json",
                            type: "JSONcc",
                            srclang: "en",
                            label: "English"
                        }
                    ]
                },
                videoTitle: "A chance to reorganize our future?"
            });
        </script>
    </body>
</html>
