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
        margin-left: 35%;
        width: 90%;
        height: 300px;
        background: url('Camila.png');
        z-index: -1;
        /* margin-top:5px; */
    }
    #DOORBTN{
            color:white;
            font-size:26px;
    }
    .searchresult{
        position: absolute;
        width: 100%;
        height:200px;
        /* border: 1px solid white; */
        margin-top:10px;
        border-radius:10px;
        display:flex;
        align-items:flex-start;
        justify-content:flex-start;
        flex-direction:column;
        overflow:auto;
    }
    .searchresult::-webkit-scrollbar{
        display:none;
    }
    .searchresult .card{
        width:100%;
        min-height:45px;
        /* border:1px solid white; */
        display:flex;
        align-items:center;
        padding:0px 5px;
        text-decoration:none;
        background:rgb(184,184,184,.1);
        margin-bottom:5px;
    }
    .searchresult .card img{
        width:35px;
        height:35px;
        border-radius:5px;
    }
    .searchresult .card .content{
        width:80%;
        height:100%;
        /* border:1px solid white; */
        padding:0;
        font-size:13px;
        font-weight:600;
        color:white;
        display:flex;
        align-items:flex-start;
        justify-content:center;
        flex-direction:column;
    }
    .searchresult .card .content .subtitle{
        font-size:11px;
        color:#a4a8b4;
        font-weight:500;
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
                        <h1 >Rhythm</h1>
                </div>
                <div class="playlist">
                    <h4 class="active"><span></span> <i class="bi bi-music-note-beamed"></i>Playlist</h4>

                    <h4><span></span> <i class="bi bi-music-note-beamed"></i> Recomended</h4>
                </div>
                <div class="menu-song">
                    <li class="songItem">
                        <span>01</span>
                        <img src="Posters/1.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                        <h5>
                        Why this kolaveri di  
                            <div class="subtitle">Dhanush</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <span>02</span>
                        <img src="Posters/2.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                        <h5>
                        Agar Tum Mil Jao
                            <div class="subtitle">Shreya Ghosal</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <span>03</span>
                        <img src="Posters/3.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        <h5>
                        Azadi Gully boy
                            <div class="subtitle">Divine</div>
                        </h5>  
                    </li>
                    <li class="songItem">
                        <span>04</span>
                        <img src="Posters/4.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                        <h5>
                        Bandook Meri laila
                            <div class="subtitle">Ash King</div>
                        </h5>    
                    </li>
                    <li class="songItem">
                        <span>05</span>
                        <img src="Posters/5.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        <h5>
                        Mine  
                            <div class="subtitle">Bazzi</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <span>06</span>
                        <img src="Posters/6.jpg" alt="Piya aaye na">
                        <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                        <h5>
                        Bol do na zara 
                            <div class="subtitle">Armaan Malik</div>
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
                        <input type="text" placeholder="Search Music..." id="inputs">
                        <div class="searchresult">
                        <!-- <a href="#" class="card">
                            <img src="Posters/1.jpg" alt="">
                            <div class="content">
                            Why this kolaveri di <br><div class = "subtitle" >Dhanush</div>
                            </div>
                        </a> -->
                        
                        
                        
                        </div>
                    </div>
                    <div class="user">
                        <a href="SignUp.php "><i class="bi bi-door-closed" id="DOORBTN"></i></a>
                    </div>
                </nav>
                <div class="content">
                    <br>
                    <h1>Top #10 Releases Of The Month</h1>
                    <p>
                        <br>
                    Checkout leatest release
                        <br>                 
                    </p>
                    <div class="buttons">
                        <button >Play</button>
                        
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
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                            </div>
                            <h5>Piya aaye na 
                                <br>
                                <div class="subtitle">KK & Tulsi Kumar</div>
                            </h5>
                        </li>
                        <li class="songItems">
                            <div class="img-play">
                                <img src="1.jpg" alt="KK & Tulsi">
                                <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
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
            <img src="Posters/1.jpg" alt="KK & Tulsi kumar" id="small_poster">
            <h5 class="sname">Playing<br>
                
            </h5>
            
                <div class="icon">
            
                <a href="Songs/1.mp3" id="DownloadMusic" download><i class="bi bi-cloud-arrow-down-fill" id="DownloadBtnn"></i></a>
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
        <script src="script.js"></script>
</body>
</html>