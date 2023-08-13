<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="MusicWeb.css" >
    <title>MusicWeb</title>
    <style>    
        header .song-side::before{
        content: "";
        position: absolute;
        margin-left: 15%;
        width: 90%;
        height: 300px;
        background: url('romantic.png');
        z-index: -1;
    }
    #DOORBTN{
            color:white;
            font-size:26px;
        } 
    header .masterplay{
     border-top:0.5px solid white;
     border-bottom:0.5px solid black;
 
    } 
    #DownloadBtnn{
        font-size:23px;
        color:white;
        margin-right:30px;
    }
    .icon .bi{
        font-size:23px;
        
    }
    </style>
</head>
<body>
    <header>

        <div class="menu-side">
        <div class="user">
                    <a href="MusicWeb.php "> <img src="brand.png" alt="user" title="Anil prajapati"></a>
                    <h1 >Romantic</h1>
            </div>
            <div class="playlist">
                <h4 class="active"><span></span> <i class="bi bi-music-note-beamed"></i>Playlist</h4>
              
                <h4><span></span> <i class="bi bi-music-note-beamed"></i> Recomended</h4>
            </div>
            <div class="menu-song">
                <li class="songItem">
                    <span>01</span>
                    <img src="RomanticPosters/1.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    <h5>
                        Mareese-E-Ishq
                        <div class="subtitle">Arijit</div>
                    </h5>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="RomanticPosters/2.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                    <h5>
                        Pachtaoge
                        <div class="subtitle">Arijit</div>
                    </h5>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="RomanticPosters/3.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                    <h5>
                        Valam
                        <div class="subtitle">Arijit</div>
                    </h5>  
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="RomanticPosters/4.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                    <h5>
                        Itni Si Baat Hain
                        <div class="subtitle">Arijit</div>
                    </h5>    
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="RomanticPosters/5.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                    <h5>
                        Main Dhoodne 
                        <div class="subtitle">Arijit</div>
                    </h5>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="RomanticPosters/6.jpg" alt="Piya aaye na">
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                    <h5>
                        Jashn-E-Bahara
                        <div class="subtitle">Akriti</div>
                    </h5>
                </li>
            </div>
        </div>

        <div class="song-side">
            <nav>
                <ul>
                    <li>Discover<span></span></li>
                    <li>MY LIBRERY</li>
                    <li>RADIO</li>

                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <a href="SignUp.php "><i class="bi bi-door-closed" id="DOORBTN"></i></a>
                </div>
            </nav>
            <div class="content">
                <br>
                <h1>Top #10 Romantic Songs </h1>
                <p>
                    <br>
                   Checkout leatest release
                    <br>                 
                </p>
                <div class="buttons">
                    <button>PLAY</button>
                </div>
            </div>
            
            <div class="popular-song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i id="pop_song_left" class="bi bi-arrow-left-short"></i>
                        <i id="pop_song_right"class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    <li class="songItems">
                        <div class="img-play">
                            <img src="1.jpg" alt="KK & Tulsi">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Piya aaye na 
                            <br>
                            <div class="subtitle">KK & Tulsi Kumar</div>
                        </h5>
                    </li>
                    
                </div>
            </div>
            <div class="popular-artists">
                <div class="h4">
                    <h4>Popular Genres</h4>
                    <div class="btn_s">
                        <i id="pop_artist_left" class="bi bi-arrow-left-short"></i>
                        <i id="pop_artist_right"class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="items1">
                       <li>
                       <button>
                       <a href="Trending.php"><img src="Category\trending.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Party.php"><img src="Category\party.png"></a>
                       </button>>
                       </li>
                       <li>
                       <button>
                       <a href="Wedding.php"><img src="Category\wedding.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Punjabi.php"><img src="Category\punjabi.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Old.php"><img src="Category\old.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Podcast.php"><img src="Category\podcast.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Romantic.php"><img src="Category\romantic.png"></a>
                       </button>
                       </li>
                       <li>
                       <button>
                       <a href="Mashup.php"><img src="Category\mashup.png"></a>
                       </button>
                       </li>                      
                </div>
                
            </div>
        </div>

        <div class="masterplay">
        <div class="icon">
            <i class="bi bi-music-note-beamed"></i>
        </div>
         <img src="RomanticPosters/1.jpg" alt="KK & Tulsi kumar" id="small_poster">
         <h5 class="sname">Playing<br>
          
         </h5>
        
            <div class="icon">
        
            <a href="RomanticSongs/1.mp3" id="DownloadMusic" download><i class="bi bi-cloud-arrow-down-fill"id="DownloadBtnn" ></i></a>
            <i class="bi bi-skip-start-fill" id="left_play"></i>
            <i class="bi bi-play" id="master_play"></i>
            <i class="bi bi-skip-end-fill" id="right_play"></i>

        </div>
       
        <span id="currentstart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" value="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>

        <span id="currentEnd">0:00</span>
       
        </div>

    </header>
        <script src="Romanticscript.js"></script>
</body>
</html>