console.log("Welcome to spotify");
let songIndex=0;
let audioElement=new Audio('Songs/Linkin Park - What I ve Done 8D Audio.mp3');
let masterPlay = document.getElementById('masterPlay');
let masterPause = document.getElementById('masterPause');
let myProgressBar = document.getElementById('myProgressBar');
let songItems =  Array.from(document.getElementsByClassName('songItem'));
let songs =[
    {songName:"Faint- Linkin Park", filePath:"Songs/07 Linkin Park - Faint.mp3", coverpath:"Covers/linkin park 1.png"},
    {songName:"BURN IT DOWN (Official Video) - Linkin Park", filePath:"Songs/BURN IT DOWN (Official Video) - Linkin Park.mp3", coverpath:"Covers/linkin park 1.png"},
    {songName:"Castle of Glass Linkin Park", filePath:"Songs/Linkin Park - Castle of Glass (8D AUDIO).mp3", coverpath:"Covers/linkin park 1.png"},
    {songName:"what ive done - Linkin Park", filePath:"Songs/Linkin Park - What I ve Done 8D Audio.mp3", coverpath:"Covers/linkin park 3.jpg"},
    {songName:"Somewhere I belong Linkin Park", filePath:"Songs/Linkin Park Somewhere I Belong 8D Audio.mp3", coverpath:"Covers/linkin park 1.png"},
    {songName:"Roads Untraveled- Linkin Park", filePath:"Songs/ROADS UNTRAVELED - Linkin Park (LIVING THINGS).mp3", coverpath:"Covers/linkin park 1.png"},
    {songName:"Radioactive", filePath:"Songs/Imagine Dragons - Radioactive - Night Visions.mp3", coverpath:"Covers/linkin park 3.jpg"},
    {songName:"Whatever It takes", filePath:"Songs/Imagine Dragons - Whatever It Takes - [Single] - [Mp3 320] - [7Tunes].mp3", coverpath:"Covers/imagine dragons 6.jpg"},
    {songName:"Thunder", filePath:"Songs/Imagine_Dragons_-_Thunder.mp3", coverpath:"Covers/imagine dragons 2.png"}

]
songItems.forEach((element, i)=>{
    element.getElementsByTagName("img")[0].src = songs[i].coverpath;
    element.getElementsByClassName("songName")[0].innerText=songs[i].songName;

})

//audioElement.play();
//Handle play/pause click
masterPlay.addEventListener('click', ()=>{
    audioElement.play();
 })
 masterPause.addEventListener('click',()=>{
     audioElement.pause();
 })
//Listen to events
audioElement.addEventListener('timeupdate',()=>{
    console.log('timeupdate');
    progress = parseInt((audioElement.currentTime/audioElement.duration)*100);
    console.log(progress);
    myProgressBar.value = progress;
})
myProgressBar.addEventListener('change',()=>{
    audioElement.currentTime = ((myProgressBar.value * audioElement.duration)/100);
})
const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');

    })
}
Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click',(e)=>{
        console.log(e.target);
        makeAllPlays();
        index = parseInt(e.target.id);
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src='Songs/${index+1}.mp3';
        audioElement.currentTime = 0;
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');

    }) 
})