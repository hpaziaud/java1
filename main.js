function change(){ 
var madiv1 = document.getElementsByTagName("madiv1");
    for(let i = 0;i < madiv1.length; i++)
    {
        madiv1[i].innerHTML = "hello";
    }

}

change();
