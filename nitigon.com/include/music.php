<div id="youtube_player"></div>


<script>

var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
  var player = new YT.Player("youtube_player", {
    height: "600",
    width: "600",
    videoId: "dQw4w9WgXcQ",
    playerVars: { 'autoplay': 1, 'controls': 0 },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
   
    }
    
  });
  
}
function onPlayerReady(event) {
    event.target.setVolume(5);
}

function onPlayerStateChange(event) {
if (event.data == YT.PlayerState.ENDED) {
    player.seekTo(0);
    player.playVideo();
}
}
function stopVideo() {
    player.stopVideo();
}


</script>

