<head>
<link rel="stylesheet" href="efe.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script>
<?php 
    $videolar_ad=array();
    $ilk="";
    $videolar_klasor=opendir("videolar");
    while($video=readdir($videolar_klasor)) {
        if($video!="."&&$video!="..")
        {
            if($ilk == "")
        {
            array_push($videolar_ad,$video);
        }
else
{
    array_push($videolar_ad,$video);
}
}
}
closedir($videolar_klasor);
$toplam=count($videolar_ad);
$son= $toplam-1;
$dosyalar="var videos=new Array(";

for($sira=0;$sira<$toplam; $sira++)
{
    $video_ad= "videolar/". $videolar_ad[$sira];
    if($sira!=$son) 
    {
        $dosyalar_ek="\"".$video_ad."\",";
    }
    else
    {
        $dosyalar_ek="\"".$video_ad."\");";
    }
    $dosyalar.=$dosyalar_ek;
}
echo $dosyalar ?>


    var currentVideo = 0;
     
function nextVideo() {

    videoPlayer = document.getElementById("play-video")

    videoPlayer.removeEventListener('ended',nextVideo,false);
    
    videoPlayer.src = videos[currentVideo];
    videoPlayer.play()
    
    currentVideo = (currentVideo + 1) % videos.length
    
    videoPlayer.addEventListener('ended', nextVideo,false); 
}

function ooops() {
    console.log(document.getElementById("play-video").error.code)
}
</script>
    </head>
    <style>
    video#backgroundvid {
position: fixed; right: 0; bottom: 0;
min-width: 100%; min-height: 100%;
width: auto; height: auto; z-index: -100;
background: url(polina.jpg) no-repeat;
background-size: cover;
}
    </style>
    <body> 
    <div class="existing_items">
        <table cellspacing="0">
            <th class="pointer"colspan="2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <?php 
  if(isset($_POST["submit"])){
  $link = $_POST["link"];
  echo '<a href="'.$link.'">Siteye Git</a>';// corrected incorrect usage of quotes
  }
  ?>
  <form accept="" action="" method="post"> <!-- added form open -->       
  <input type="url" class="form-control" name="link" placeholder="Enter Product URL" required>
  <input class="button" type="submit" name="submit" value="Submit">
  </form>
                </nav>
            </th>
            <tr><th class="" colspan="2"></th></tr>
        </table>
        </div>
<div class="video-player">
    <video  class="videom" id="play-video" width="%100" height="%100" controls autobuffer muted id="backgroundvid"></video>
</div>  
<div
    class="container">
</div>
<script>
    document.getElementById("play-video").addEventListener('error', ooops,false);

        function ooops() {
            console.log(document.getElementById("play-video").error)
        }
    
    nextVideo()
    var elem = document.getElementById("video-player");
if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) {
  elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) {
  elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) { 
  elem.msRequestFullscreen();
}
</script>
</head>