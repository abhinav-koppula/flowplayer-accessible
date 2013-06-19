<?php
// input string. DO NOT CHANGE.
global $_input, $_content_base_href;

$media_replace = array();
$media_matches = array();
$fluidplayerholder_class = "player";
$caption_init = "
    captions: [
    {
        src: '##CAPTIONS##',
        type: 'text/vtt',
        srclang: 'en',
        label: 'English'
    }
    ]
    ";
                                
// .mp4
preg_match_all("#\[media[0-9a-z\|]*([\s]?captions=[.\w\d]+[^\s\"]+\.vtt)*\]([.\w\d]+[^\s\"]+)\.mp4\[/media\]#i",$_input,$media_matches[],PREG_SET_ORDER);
$media_replace[] = "<div>\n".
                   "    <div class='##DIVCLASS## fl-videoPlayer' style='height:##HEIGHT##px;'>\n".
                   "    <script>
                            fluid.videoPlayer('.##DIVCLASS##',  {
                            videoTitle: 'Mammals',
                            video: {
                                sources: [
                                {
                                    src: '##MEDIA1##',
                                    type: 'video/mp4'
                                }
                                ],
                                ##CAPTION_CODE##
                            }
                            });
                        </script>\n".
                   "    </div>\n".
                   "</div>\n";

$holder_counter = 0;
for ($i=0;$i<count($media_replace);$i++){
	foreach($media_matches[$i] as $media)
	{
                $player_id = $fluidplayerholder_class.$holder_counter++;
		//find width and height for each matched media
		if (preg_match("/\[media\|([0-9]*)\|([0-9]*)\]*/", $media[0], $matches)) 
		{
			$width = $matches[1];
			$height = $matches[2];
		}
		else
		{
			$width = DEFAULT_VIDEO_PLAYER_WIDTH;
			$height = DEFAULT_VIDEO_PLAYER_HEIGHT;
		}
		
		//replace media tags with embedded media for each media tag
		$media_input = $media_replace[$i];
                
                if((!empty($media[1])) && (preg_match("/captions=([.\w\d]+[^\s\"]+\.vtt)/", $media[1], $matches)))
                {
                    $media_input = str_replace("##CAPTION_CODE##", $caption_init, $media_input);
                    $media_input = str_replace("##CAPTIONS##", $matches[1], $media_input);
                }
                else
                {
                    $media_input = str_replace("##CAPTION_CODE##", '', $media_input);
                    $media_input = str_replace("##CAPTIONS##", '', $media_input);
                }
                
                $media_input = str_replace("##DIVCLASS##", $player_id, $media_input);
		$media_input = str_replace("##WIDTH##","$width",$media_input);
		$media_input = str_replace("##HEIGHT##","$height",$media_input);
		$media_input = str_replace("##MEDIA1##","$media[2]",$media_input);
		$media_input = str_replace("##MEDIA2##","$media[3]",$media_input);
		$_input = str_replace($media[0],$media_input,$_input);
	}
}
?>