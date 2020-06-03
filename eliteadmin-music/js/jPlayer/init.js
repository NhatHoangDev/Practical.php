$(document).ready(function(){

  var myPlaylist = new jPlayerPlaylist({
    jPlayer: "#jplayer_N",
    cssSelectorAncestor: "#jp_container_N"
  }, [
    {
      title:"Sun raha hai na tu",
      artist:"Shreya ghosal",
      mp3:"js/jPlayer/sunrahahai.mp3",
      poster: ""
    },
    {
      title:"Shubhaarambh",
      artist:"Shreya ghosal",
      mp3:"js/jPlayer/shubhaarambh.mp3",
      poster: ""
    },
    {
      title:"title2",
      artist:"Shreya ghosal",
      mp3:"js/jPlayer/sunrahahai.mp3",
      poster: ""
    }
  ], {
    playlistOptions: {
      enableRemoveControls: true,
      autoPlay: true
    },
    swfPath: "js/jPlayer",
    supplied: "webmv, ogv, m4v, oga, mp3",
    smoothPlayBar: true,
    keyEnabled: true,
    audioFullScreen: false
  });
  
  $(document).on($.jPlayer.event.pause, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').removeClass('animate');
    $('.jp-play-me').removeClass('active');
    $('.jp-play-me').parent('li').removeClass('active');
  });

  $(document).on($.jPlayer.event.play, myPlaylist.cssSelector.jPlayer,  function(){
    $('.musicbar').addClass('animate');
  });

  $(document).on('click', '.jp-play-me', function(e){
    e && e.preventDefault();
    var $this = $(e.target);
    if (!$this.is('a')) $this = $this.closest('a');

    $('.jp-play-me').not($this).removeClass('active');
    $('.jp-play-me').parent('li').not($this.parent('li')).removeClass('active');

    $this.toggleClass('active');
    $this.parent('li').toggleClass('active');
    if( !$this.hasClass('active') ){
      myPlaylist.pause();
    }else{
      var i = Math.floor(Math.random() * (1 + 7 - 1));
      myPlaylist.play(i);
    }
    
  });

  $('#playlist').on('shown.bs.dropdown', function () {
    $('.mplayer .jp-playlist.open ul').css({'left': 'auto', 'right': '-21px', 'width': '300px'});
  });

  

  // for video player


});


