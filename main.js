"use strict";

function evt(d){
let req= new XMLHttpRequest();
    req.onreadystatechange = ()=>{
                if(req.status=== 200){
                let response = req.responseText;
                document.getElementById('data').innerHTML = response;
            }
        }
req.open('GET', 'http://localhost/My/Db.php?id='+d);
req.send(null);
};

function chat_ajax(){
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
    if(req.readyState == 4 && req.status == 200){
        document.getElementById('chat_box').innerHTML = req.responseText;
            }
        }
    req.open('GET', 'Npp3.php', true);
    req.send(null); 
    }

setInterval(function(){chat_ajax()}, 2000)