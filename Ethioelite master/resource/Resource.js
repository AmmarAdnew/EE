var powerPoint=document.getElementById("power-point");
var books=document.getElementById('books');
var videos=document.getElementById('videos');
var tabLinks=document.getElementsByClassName('tab-titles');

document.getElementById("open").addEventListener("click",function(){
    document.getElementById('tab').style.display="block";
    document.getElementById("open").style.display="none";
    document.getElementById("close").style.display="inline";
});

document.getElementById("close").addEventListener("click",function(){
 
    document.getElementById('tab').style.display="none";
    document.getElementById("open").style.display="inline";
    document.getElementById("close").style.display="none";
});

document.getElementById("powerPoint").addEventListener("click",function(){
    closeResourcePart();
    powerPoint.style.display='block';
    tabLinks[0].classList.add('active-link');
});

document.getElementById('Book').addEventListener("click",function(){
    closeResourcePart();
    books.style.display='block';
    tabLinks[1].classList.add('active-link');
});

document.getElementById('Video').addEventListener("click",function(){
    closeResourcePart();
    videos.style.display='block';
    tabLinks[2].classList.add('active-link');
});

function closeResourcePart(){

    powerPoint.style.display='none';
    books.style.display='none';
    videos.style.display='none';

    tabLinks[0].classList.remove('active-link');
    tabLinks[1].classList.remove('active-link');
    tabLinks[2].classList.remove('active-link');
 
}



