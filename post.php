<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/728a841025.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
  header .song_side::before{
     background: url(img/35c.png) ;
     background-position: right;
     background-repeat: no-repeat; 
   }
</style>
</head>
<body>
  <header>
    <div class="menu_side">
      <h1>Playlist</h1>
      <div class="playlist">
      <a href="dailyMix/dailyMix.html" class="Daily" target="_blank"><h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>
      Daily Mix</h4> </a> 
          <a href="forYou/forYou.html" class="Daily" target="_blank"><h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>
           For You </h4></a> 
          <a href="playlist/playlist.html" class="Daily" target="_blank"><h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>
         Recommended
          </h4>  </a> 
      </div>
      <div class="menu_song">
       <!--  <li class="songItem">
         <span>01</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
        </li>
        <li class="songItem">
          <span>02</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
        </li>
        <li class="songItem">
          <span>03</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
           </h5> 
           <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
          
        </li>
        <li class="songItem">
          <span>04</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
        </li>
        <li class="songItem">
          <span>05</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
        </li>
        <li class="songItem">
          <span>06</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
        </li>
        <li class="songItem">
          <span>07</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
        </li> <li class="songItem">
          <span>08</span>
          <img src="Covers/linkin park 2.jpg" alt="Imagine Dragons">
          <h5>On My Way
            <div class="subtitle">Linkin Park</div>
          </h5>
          <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
        </li>-->
    
      </div>
    </div>
    <div class="song_side">
      <nav>
        <ul>
          <li>DISCOVER<span></span> </li>
          <li>MY LIBRARY<span></span></li>
          <li>RADIO<span></span> </li>
        </ul>
        <div class="search">
          <i class="bi bi-search"></i>
          <input type="text" placeholder="Search Music...">
        </div>
        <div class="user">
          <img src="Covers/mdu logo.png" alt="User" title="Amogh Goel">
        </div>
      </nav>
       <div class="content">
          <h1>Post Malone</h1>
          <p>Post Malone is an American rapper, singer, songwriter, and record producer. He was born<br> 
            as Austin Richard Post on July 4, 1995 in Syracuse, New York. He has a distinctive style of blending <br>
            genres and subgenres of hip hop, pop, R&B, and trap. He got his stage name from a rap name generator.<br>
          </p>
             <div class="buttons">
               <button type="button">PLAY</button>
               <a href="index.php"><button type="button">BACK TO HOME</button></a>
             </div>
        </div>
        <div class="popular_song">
            <div class="h4">
               <h4>Popular Song</h4>
               <div class="btn_s">
                  <i id="pop_song_left" class="bi bi-arrow-left-short"></i>
                  <i id="pop_song_right" class="bi bi-arrow-right-short"></i>
               </div>
            </div>

            <div class="pop_song">
                <li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/1.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/2.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/3.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/4.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/5.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/6.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/7.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/Post Malone/8.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><!--<li class="songItem">
                  <div class="img_play">
                      <img src="img/1.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li><li class="songItem">
                  <div class="img_play">
                      <img src="img/1.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li>
                <li class="songItem">
                  <div class="img_play">
                      <img src="img/1.jpg" alt="Dragons" >
                      <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                  </div>
                  <h5>On My Way
                    <br>
                    <div class="subtitle">Linkin Park</div>
                  </h5>
                </li>-->
            </div>
        </div>
        
        <div class="popular_artists">
          <div class="h4">
             <h4>Popular Artists</h4>
             <div class="btn_s">
                <i id="pop_art_left" class="bi bi-arrow-left-short"></i>
                <i id="pop_art_right" class="bi bi-arrow-right-short"></i>
             </div>
          </div>
          <div class="item Artists_bx">
          <li>
              <a href="post.php">  <img src="Covers/14.jpg" alt="Post Malone" title="Post Malone"></a>
            </li>  
            <li>
            <a href="avicii.php"> <img src="Covers/avicii.jpg" alt="Avicii" title="Avicii"></a>
            </li> 
             <li>
            <a href="badshah.php"> <img src="Covers/badshah.jpg" alt="Badshah" title="Badshah"></a>
            </li>  
            <li>
              <a href="coldplay.php">  <img src="Covers/coldplay.jpg" alt="Coldplay" title="Coldplay"></a>
            </li>  
            <li>
              <a href="diljit.php">  <img src="Covers/Diljit-Dosanjh-1.jpg" alt="Diljit Dosanjh" title="Diljit Dosanjh"></a>
            </li>  
            <li>
              <a href="eminem.php">  <img src="Covers/eminem.jpg" alt="Eminem" title="Eminem"></a>
            </li>  
            <li>
              <a href="guru.php">  <img src="Covers/Guru-Randhawa (2).jpg" alt="Guru Randhawa" title="Guru Randhawa"></a>
            </li>  
            <li>
              <a href="yo yo.php"> <img src="Covers/honey.jpg" alt="Yo Yo Honey Singh" title="Yo Yo Honey Singh"></a>
            </li>  
            <li>
              <a href="imagdra.php"> <img src="Covers/7.jpg" alt="Imagine Dragons" title="Imagine Dragons"></a>
            </li>  
              <li>
                <a href="linkin.php"> <img src="Covers/OIP1.jpg" alt="Linkin Park" title="Linkin Park"></a>
            </li>     
            <li>
              <a href="weeknd.php">  <img src="Covers/weekend.jpg" alt="The Weeknd" title="The Weeknd"></a>
            </li>                     
          </div>
        </div>  
   </div>
    
    <div class="master_play">
      <div class="wave">
        <div class="wave1"></div>
        <div class="wave1"></div>
        <div class="wave1"></div>
      </div>
      <img src="Covers/linkin park 1.png" alt="Linkin Park" id="poster_master_play">
      <h5 id="title">Faint<br>
        <div class="subtitle">Linkin Park</div>
      </h5>
      <div class="icon">
        <i class="bi shuffle bi-music-note-beamed">next</i>
        <i class="bi bi-skip-start-fill" id="back"></i>
        <i class="bi bi-play-fill" id="MasterPlay"></i>
        <i class="bi bi-skip-end-fill" id="next"></i>
        <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill" ></i></a>
      </div>
      <span id="currentStart">0:00</span>
      <div class="bar">
        <input type="range" id="seek" min="0"  max="100">
        <div class="bar2" id="bar2"></div>
        <div class="dot"></div>
      </div>
      <span id="currentEnd">0:30</span>
      <div class="vol">
        <i class="bi bi-volume-up-fill" id="vol_icon"></i>
        <input type ="range" id="vol" min="0"  max="100">
        <div class="vol_bar"></div>
        <div class="dot" id="vol_dot"></div>
      </div>
    </div>

  </header> 
   
 <script src="post.js"></script>
 <script> 
let menu_list_active_button= document.getElementById('menu_list_active_button');
let menu_side = document.getElementsByClassName('menu_side')[0];

menu_list_active_button.addEventListener('click', ()=>{
    menu_side.style.transform = "unset";
    menu_list_active_button.style.opacity = 0;
})

let song_side = document.getElementsByClassName('song_side')[0];

song_side.addEventListener('click', ()=>{
    menu_side.style.transform = "translateX(-100%)";
    menu_list_active_button.style.opacity = 1;
})
</script>
</body>
</html>