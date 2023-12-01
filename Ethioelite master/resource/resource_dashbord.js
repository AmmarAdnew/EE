document.getElementById('list-ppt').addEventListener("click",function(){
// this.style="block";
this.style.color='red';
var menu=document.getElementById('list-ppt-menu');
var take=menu.style.display;
if(take=="block"){
    console.log("fjdgdfg");
}
});

document.getElementById('call_power_point').addEventListener("click",function(){
    this.style.display="block";
    console.log("fdgdfg");
    document.getElementById('power').style.display="hidden";
    document.getElementById('books').style.display="hidden";
    document.getElementById('video').style.display="hidden";
});

console.log("fdgdfg");