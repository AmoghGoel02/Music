const music = new Audio('Songs/BURN IT DOWN (Official Video) - Linkin Park.mp3');
//music.play();
const songs = [
    {
       id:'1',
       songName:`Faint <br>
       <div class="subtitle">Linkin Park</div>` ,
       poster:"img/1.jpg"
    },
    {
        id:'2',
        songName:`Burn It Down<br>
        <div class="subtitle">Linkin Park</div>`,
        poster:"img/2.jpg"
    },
    {
        id:'3',
        songName:`Castle of Glass <br>
        <div class="subtitle">Linkin Park</div>`,
        poster:"img/3.jpg"
    },
    {
        id:'4',
        songName:`What I've Done<br>
        <div class="subtitle">Linkin Park</div>`,
        poster:"img/4.jpg"
    },
    {
        id:'5',
        songName:`Somewhere I Belong <br>
        <div class="subtitle">Linkin Park</div>`,
        poster:"img/5.jpg"
    },
    {
        id:'6',
        songName:`Roads Untraveled <br>
        <div class="subtitle">Linkin Park</div>`,
        poster:"img/6.jpg"
    },
    {
        id:'7',
        songName:`Radioactive <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/7.jpg"
    },
    {
        id:'8',
        songName:`Whatever It Takes <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/8.jpg"
    },
    {
        id:'9',
        songName:`Thunder <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/9.jpg"
    },
    {
        id:'10',
        songName:`Zero <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/10.jpg"
    },
    {
        id:'11',
        songName:`Bad Liar <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/11.jpg"
    },
    {
        id:'12',
        songName:`Friction <br>
        <div class="subtitle">Imagine Dragons</div>`,
        poster:"img/12.jpg"
    },
    {
        id:'13',
        songName:`Better Now <br>
        <div class="subtitle">Post Malone</div>`,
        poster:"img/13.jpg"
    },
    {
        id:'14',
        songName:`Wow <br>
        <div class="subtitle">Post Malone</div>`,
        poster:"img/14.jpg"
    },
    {
        id:'15',
        songName:`Sunflower<br>
        <div class="subtitle">Post Malone</div>`,
        poster:"img/15.jpg"
    },
    {
        id:'16',
        songName:`Not Afraid <br>
        <div class="subtitle">Eminem</div>`,
        poster:"img/16.jpg"
    },
    {
        id:'17',
        songName:`Take What You Want <br>
        <div class="subtitle">Post Malone</div>`,
        poster:"img/17.jpg"
    },
    {
        id:'18',
        songName:`Blinding Lights <br>
        <div class="subtitle">The Weeknd</div>`,
        poster:"img/18.jpg"
    },
    {
        id:'19',
        songName:`Hey Brother <br>
        <div class="subtitle">Avicii</div>`,
        poster:"img/19.jpg"
    }
]

Array.from(document.getElementsByClassName('songItem')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].src = songs[i].poster;
    element.getElementsByTagName('h5')[0].innerHTML = songs[i].songName;
})

let MasterPlay = document.getElementById('MasterPlay');
let wave = document.getElementsByClassName('wave')[0];

MasterPlay.addEventListener('click',()=>{
    if(music.paused || music.currentTime <=0){
        music.play();
        wave.classList.add('active2');
        MasterPlay.classList.remove('bi-play-fill');
        MasterPlay.classList.add('bi-pause-fill');
        
    }
    else{
        music.pause(); 
        wave.classList.remove('active2');
        MasterPlay.classList.add('bi-play-fill');
        MasterPlay.classList.remove('bi-pause-fill');
       
    }
})

const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
           element.classList.add('bi-play-circle-fill');
           element.classList.remove('bi-pause-circle-fill');
    })
}
const makeAllBackgrounds = () =>{
    Array.from(document.getElementsByClassName('songItem')).forEach((element)=>{
           element.style.background="rgb(105, 105, 170, 0)";
    })
}
let index = 0;
let poster_master_play = document.getElementById('poster_master_play');
let title = document.getElementById('title');

Array.from(document.getElementsByClassName('playListPlay')).forEach((element)=>{
    element.addEventListener('click',(e)=>{
       index= e.target.id;
       makeAllPlays();
       e.target.classList.remove('bi-play-circle-fill');
       e.target.classList.add('bi-pause-circle-fill');
       music.src=`Songs/${index}.mp3`;
       poster_master_play.src=`img/${index}.jpg`;
       music.play();
       let song_title = songs.filter((ele)=>{
            return ele.id == index;
       })
       song_title.forEach(ele =>{
        let {songName} =ele;
        title.innerHTML = songName;
    })
        MasterPlay.classList.remove('bi-play-fill');
        MasterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active2');
        music.addEventListener('ended',()=>{
            MasterPlay.classList.add('bi-play-fill');
            MasterPlay.classList.remove('bi-pause-fill');
            wave.classList.remove('active2');
        })
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background="rgb(105, 105, 170, .1)";
    })
})


let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate',()=>{
    let music_curr = music.currentTime;
    let music_dur = music.duration;
    
    let min1 = Math.floor(music_dur/60);
    let sec1 = Math.floor(music_dur%60);
    if(sec1<10){
        sec1=`0${sec1}`
    }
    currentEnd.innerText = `${min1}:${sec1}`;

    let min2 = Math.floor(music_curr/60);
    let sec2 = Math.floor(music_curr%60);
    if(sec2<10){
        sec2=`0${sec2}`
    }
    currentStart.innerText = `${min2}:${sec2}`;

    let progressBar = parseInt((music_curr / music_dur) * 100);
    seek.value = progressBar;
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})
seek.addEventListener('change',()=>{
    music.currentTime = seek.value * music.duration / 100;
});
music.addEventListener('ended', ()=>{
    MasterPlay.classList.add('bi-play-fill');
    MasterPlay.classList.remove('bi-pause-fill');
    wave.classList.remove('active2');
})

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_dot = document.getElementById('vol_dot');
let vol_bar = document.getElementsByClassName('vol_bar')[0];

vol.addEventListener('change',()=>{
    if (vol.value == 0) {
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');        
        vol_icon.classList.add('bi-volume-off-fill');
    }    
    if(vol.value > 0) {
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.add('bi-volume-down-fill');        
        vol_icon.classList.remove('bi-volume-off-fill');
    }   
    if(vol.value > 50) {
        vol_icon.classList.add('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');        
        vol_icon.classList.remove('bi-volume-off-fill');
    }    
    let vol_a = vol.value;
    vol_bar.style.width =`${vol_a}%`;
    vol_dot.style.left =`${vol_a}%`;
    music.volume = vol_a / 100;
})

let back = document.getElementById('back');
let next = document.getElementById('next');
index = Array.from(document.getElementsByClassName('songItem')).length;   
back.addEventListener('click',()=>{
    index -= 1;
    if(index < 1){
        index = Array.from(document.getElementsByClassName('songItem')).length;   
     }
     music.src=`Songs/${index}.mp3`;
       poster_master_play.src=`img/${index}.jpg`;
       music.play();
       MasterPlay.classList.remove('bi-play-fill');
       MasterPlay.classList.add('bi-pause-fill');
       let song_title = songs.filter((ele)=>{
            return ele.id == index;
       })
       song_title.forEach(ele =>{
        let {songName} =ele;
        title.innerHTML = songName;
    })
        makeAllPlays();

        document.getElementById(`${index}`).classList.remove('bi-play-circle-fill');
        document.getElementById(`${index}`).classList.add('bi-pause-circle-fill');
        makeAllBackgrounds();
        Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background="rgb(105, 105, 170, .1)";
  
        })
    
next.addEventListener('click',()=>{
            index++;
            if(index > Array.from(document.getElementsByClassName('songItem')).length){
                index = 1;    
             }
             music.src=`Songs/${index}.mp3`;
               poster_master_play.src=`img/${index}.jpg`;
               music.play();
               MasterPlay.classList.remove('bi-play-fill');
               MasterPlay.classList.add('bi-pause-fill');
               let song_title = songs.filter((ele)=>{
                    return ele.id == index;
               })
              song_title.forEach(ele =>{
                let {songName} =ele;
                title.innerHTML = songName;
            })
                makeAllPlays();
        
                document.getElementById(`${index}`).classList.remove('bi-play-circle-fill');
                document.getElementById(`${index}`).classList.add('bi-pause-circle-fill');
                makeAllBackgrounds();
                Array.from(document.getElementsByClassName('songItem'))[`${index-1}`].style.background="rgb(105, 105, 170, .1)";
          
                }) 
let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];

pop_song_right.addEventListener('click',()=>{
   pop_song.scrollLeft += 330;
})
pop_song_left.addEventListener('click',()=>{
   pop_song.scrollLeft -=330;
})

let pop_art_left = document.getElementById('pop_art_left');
let pop_art_right = document.getElementById('pop_art_right');
let Artists_bx= document.getElementsByClassName('Artists_bx')[0];

pop_art_right.addEventListener('click',()=>{
    Artists_bx.scrollLeft += 330;
})
pop_art_left.addEventListener('click',()=>{
    Artists_bx.scrollLeft -=330;
})

