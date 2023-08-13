const music = new Audio('Songs/1.mp3');

 // Step 1: Create the songarr array
var songarr = [
    { id: "1", songname: `Why this kolaveri di <br><div class = "subtitle" >Dhanush</div>`, postert: "Posters/1.jpg" },
    { id: "2", songname: `Agar Tum Mil Jao <br><div class = "subtitle" >Shreya Ghosal</div>`, postert: "Posters/2.jpg" },
    { id: "3", songname: `Azadi Gully boy<br><div class = "subtitle" >Divine</div>`, postert: "Posters/3.jpg" },
    { id: "4", songname: `Bandook Meri laila <br><div class = "subtitle" >Ash King</div>`, postert: "Posters/4.jpg" },
    { id: "5",songname: `Mine <br><div class = "subtitle" >Bazzi</div>`, postert: "Posters/5.jpg" },
    { id: "6", songname: `Bol do na zara <br><div class = "subtitle" >Armaan Malik</div>`, postert: "Posters/6.jpg" },
    { id: "7", songname: `Call Aundi <br><div class = "subtitle" >Honey Singh</div>`, postert: "Posters/7.jpg" },
    { id: "8", songname: `Havana <br><div class = "subtitle" >Camila cabello</div>`, postert: "Posters/8.jpg" },
    { id: "9", songname: `Chaha Hai Tujhko<br><div class = "subtitle" >Anuradha</div>`, postert: "Posters/9.jpg" },
    { id: "10", songname: `Attention<br><div class = "subtitle" >Charlie puth</div>`, postert: "Posters/10.jpg" },
    { id: "11", songname: `Ik Vaari<br><div class = "subtitle" >Ayushman khurana</div>`, postert: "Posters/11.jpg" },
    { id: "12", songname: `Northern Lights<br><div class = "subtitle" >Jayemes Young</div>`, postert: "Posters/12.jpg" },
    { id: "13", songname: `Worship<br><div class = "subtitle" >Laces</div>`, postert: "Posters/13.jpg" },
    { id: "14", songname: `Mia<br><div class = "subtitle" >Drake & Daddy yankee</div>`, postert: "Posters/14.jpg" },
    { id: "15", songname: `Yo x Ti, Tu x Mi <br><div class = "subtitle" >Rosalia</div>`, postert: "Posters/15.jpg" },
    { id: "16", songname: `Closer<br><div class = "subtitle" >Chainsmokers</div>`, postert: "Posters/16.jpg" },
    { id: "17", songname: `Nehia ke Phulwa<br><div class = "subtitle" >Palak</div>`, postert: "Posters/17.jpg" },
    { id: "18", songname: `Let'em Talk<br><div class = "subtitle" >Unknown</div>`, postert: "Posters/18.jpg" }
]

Array.from(document.getElementsByClassName('songItems')).forEach((e,i)=>{
    e.getElementsByTagName('img')[0].src=songarr[i].postert;
    e.getElementsByTagName('h5')[0].innerHTML=songarr[i].songname;
})


let index=0;
let poster=document.getElementById('small_poster');
let DownloadMusic = document.getElementById('DownloadMusic');

Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
    e.addEventListener('click',(el)=>{
        index=el.target.id;
        poster.src=`Posters/${index}.jpg`;        
        DownloadMusic.href=`Songs/${index}.mp3`;
        music.src=`Songs/${index}.mp3`;
        if (music.paused || music.currentTime<=0) {
            music.play();
        } else {
            music.pause();
        }
        
    })
})

// Scrolling=========================================================


let pop_song_left=document.getElementById('pop_song_left');
let pop_song_right=document.getElementById('pop_song_right');
let pop_song=document.getElementsByClassName('pop_song')[0];
pop_song_right.addEventListener('click',()=>{
    pop_song.scrollLeft+=330;
})
pop_song_left.addEventListener('click',()=>{
    pop_song.scrollLeft-=330;
})

let pop_artist_left=document.getElementById('pop_artist_left');
let pop_artist_right=document.getElementById('pop_artist_right');
let item=document.getElementsByClassName('items1')[0];

pop_artist_right.addEventListener('click',()=>{
    item.scrollLeft+=330;
})
pop_artist_left.addEventListener('click',()=>{
    item.scrollLeft-=330;
})
// Play - Left - Right ================================================================

let masterplay=document.getElementById('master_play'); 

masterplay.addEventListener('click',()=>{
    if (music.paused || music.currentTime<=0) {
        music.play();
      
        masterplay.classList.remove("bi bi-play");
        masterplay.classList.add("bi bi-pause");
    } else {
        music.pause();
        
        masterplay.classList.add("bi bi-play");
        masterplay.classList.remove("bi bi-pause");
    }
})
// Left - Right ===============================
music.addEventListener('ended',()=>{
    if ( index==songarr.length){
        index=1;

    }
    else{
        index++;
    }
    music.src=`Songs/${index}.mp3`;
    poster.src=`Posters/${index}.jpg`;
    music.play();
})

const left_play=document.getElementById('left_play');
const right_play=document.getElementById('right_play');

left_play.addEventListener('click',()=>{
    if ( index==1){
        index=songarr.length;

    }
    else{
        index--;
    }
    music.src=`Songs/${index}.mp3`;
    poster.src=`Posters/${index}.jpg`;
    music.play();
})

right_play.addEventListener('click',()=>{
    if ( index==songarr.length){
        index=1;

    }
    else{
        index++;
    }
    music.src=`Songs/${index}.mp3`;
    poster.src=`Posters/${index}.jpg`;
    music.play();
})



// Seekbar ====================================================================

let currentstart = document.getElementById('currentstart');
let currentend = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot=document.getElementsByClassName('dot')[0];
music.addEventListener('timeupdate',()=>{
    let music_curr = music.currentTime;
    let music_dur=music.duration;
    let min1=Math.floor(music_dur/60);
    let sec1=Math.floor(music_dur%60);
    if(sec1<10){
        sec1=`0${sec1}`;
    }

    currentend.innerText=`${min1}:${sec1}`;
    let min2=Math.floor(music_curr/60);
    let sec2=Math.floor(music_curr%60);
    if(sec2<10){
        sec2=`0${sec2}`;
    }
    currentstart.innerText=`${min2}:${sec2}`;
    let progressbar = parseInt((music_curr/music_dur)*100);
    seek.value = progressbar;
    let seekbar = seek.value;
    bar2.style.width=`${seekbar}%`;

    dot.style.left=`${seekbar}%`;


})

seek.addEventListener('change',()=>{
    music.currentTime=seek.value*music.duration/100;
})

let searchresult = document.getElementsByClassName('searchresult')[0];

songarr.forEach(elem =>{
    const {id,songname,postert} = elem;
    let card = document.createElement('a');
    card.classList.add('card');
    card.href='#'+id;
    card.innerHTML=`<img src="${postert}" alt="">
    <div class="content">
     ${songname}

    </div>`;
    searchresult.appendChild(card);

});

let input = document.getElementsById('inputs');
input.addEventListener('keyup',()=>{
    let inputval = input.value.toUpperCase();
    let items = searchresult.getElementsByTagName('a');
    for (let i = 0; i < item.litem; i++){
         let as = items[i].getElementsByClassName('content')[0];
         let textval = as.textContent || as.innerText;
         if (textval.toUpperCase().indexof(inputval)>-1) {
            items[i].style.display="flex";
         }
         else{
            items[i].style.display="none";
         }
         if (textval.toUpperCase().indexof(inputval)>-1) {
            searchresult.style.display="none";
         }
         else{
            searchresult.style.display="";
         }
    }
})







