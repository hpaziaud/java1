function funt(){
setTimeout(function() {
 console.log("I'm here!")
}, 5000);

console.log("Where are you?");}


funt();

document.getElementById("myBtn").addEventListener('click', function(e) {
    // Do something here ...
    alert("hiiiiiiii");
    console.log("I'm here again!")
   });


   function change(){ 
    var madiv1 = document.getElementsByTagName("madiv1");
        for(let i = 0;i < madiv1.length; i++)
        {
            madiv1[i].innerHTML = "hello";
        }
    
    }
change();