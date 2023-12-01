<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="\Ethioelite master\resource\Resource.css">
    <!-- .......................font.....................  -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- ......................................................................  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatbox</title>
    <style type="text/css">
        /* 
        --first-color--:#f8f8ff;
    --second-color--: #864def;
    --third-color--: #0a3b5c;
    --forth-color--: #1b4c5d;
    --fifth-color--: #34eef1;
        */
      *{
        margin: 0px;
        padding:0px;
        box-sizing: border-box;
      }
    :root{
    --first-color--:#f8f8ff;
    --second-color--: #864def;
    --third-color--: #0a3b5c;
    --forth-color--: #1b4c5d;
    --fifth-color--: #34eef1;
      }

/* ------------------- */
.header-nav{
    background:var(--first-color--);
    width: 100%;
    /* height: 560px; */
}

header{
    width: 100%;
    background: var(--first-color--);
    z-index: 999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 1%;
    padding-bottom: 1%;
}
 
nav{
    height: auto;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo{
    color: var(--second-color--);
    font-size: 1.5rem;
    font-weight: bolder;
    font-family: 'Vladimir Script Regular';
    cursor:default;
    
}
.logo span{
    color: var(--forth-color--);
    font-family: '';
    font-size: 1.7rem;
}

.nav{
    display: flex;
    align-items: center;
    gap: .4rem;
}

.nav ol{
    display: flex;
    list-style: none;
    gap: .4rem;
    
}


.nav ol li a{
    text-decoration: none;
    border-radius: 10px 10px 0 0;
    color: var(--third-color--);
    transition: all .8s;
    position: relative;
    font-size: var(--font-size-s--);
    z-index: 1;
    overflow: hidden;
}

.nav ol li a::before{

    content: '';
    position: absolute;
    top: -1px;
    left: -4px;
    width: 120%;
    border-radius: 0px 0px 5px 5px;
    background: var(--second-color--);
    transform-origin:top;
    background: linear-gradient(to left,var(--third-color--), var(--forth-color--));
    transform: scaleY(0.0);
    z-index: -1;
    transition: all .4s;

}

.nav ol li a:hover::before{
    transform: scaleY(1.3);
    height: 100%;
}

.nav ol li a:hover{ 
    color: var(--fifth-color--);
}

.btn-login{

    padding:1% ;  
    border: #0a3b5c 2px solid;
    background: var(--first-color--);
    font-size: var(--font-size-m--);
    font-weight: bold;
    transition: all .5s;
    position: relative;
    cursor: pointer;

}


.btn-login:hover{
    border-color:var(--first-color--);
   background-color: var(--fifth-color--);
}
/* h */


/* body{
    background-color: #0a3b5c;
    max-width: 1500px;
    margin: 0px auto;
}  */
    .chat-box-container{
      box-shadow: 0px 0px 0px rgb(0, 0, 0); 
        width: 100%;
        height: 900px;
        display:flex;
    }
/* .................................... user side..............................  */
  .user{
    width:30%;
  }
  .userlist{
    display: flex;
    flex-direction: column;
    background-color:var(--third-color--);
    height:100%;
    color: var(--first-color--);
    overflow:scroll;
  }
  .user-header{
    display:flex;
    justify-content: center;
    align-items: center;
    background-color:var(--forth-color--);
    color:var(--first-color--);
    width: 100%;
    height: 200px;
    padding: 30px;
  }
  .user-header>h3{
    font-size: 50px;
    color: var(--first-color--);
  }
.user-info-text>p{
    color:#34eef1;
  }
  .user-info{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    font-size: 20px;
    background-color: transparent;
    color: #ffffff;
    padding: 15px;
  }
  .user-info:hover{
    box-shadow: 0px 0px 10px rgb(0, 0, 0);
  }
/* all personal info */
  .user-info>.img{
    width: 50px;
    height:50px;
    margin-right: 15px;
    border-radius: 50%;
    background-color: rgb(37, 205, 205);
  }
  /* .................. chat bock side..................*/
  .chatbox{
    width: 100%;
    background-color: #1b4c5d;
     height:100%;
  }
  .chat-header{
    color:var(--first-color--);
    background-color:var(--fourth-color--);
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 10px;
    height:10%; 
  }
  .chat-header>.img{
    width: 50px;
    height: 50px;
    background-color: #34eef1;
    border-radius: 50%;
    margin-right:10px;
  }
  .chat-header>div>h3{
    font-size:30px;
  }
  .chat-header>div>p{
 font-size: 20px;
  }
.chat-area{
  overflow: scroll;
    width: 100%;
    height:80%;
  background-color:var(--first-color--);

}
.message{
    background-color: wheat;
    display:flex;
    width:100%;
}
.message>input{
    width: 90%;
    height: 80px;
    font-size: 1.6em;
    border-style: none;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.message>button{
    width:15%;
 border-style: none;
 font-size:30px;
 background-color: #0a3b5c;
 color: var(--first-color--);
}
.client, .self{
  word-wrap: break-word;
  font-size: 30px;
  background-color: rgba(44, 79, 103,0.8);
  padding: 30px;
  margin-left: 70px;
  margin-bottom: 30px;
  margin-top: 30px;
  color: white;
  width: 400px;
  border-radius: 20px 20px 0px;

}
.self{
  margin-left:auto;
  margin-right: 70px;
 background-color: var(--fifth-color--);
 color:var(--forth-color--)
}
    </style>
    
</head>
<body>
    <?php include '../components/header.php' ;?>
    <div class="chat-box-container">
 <!-- /* .................................... user side..............................  */ -->

        <div class="user">
          <div class="userlist">
            <div class="user-header">
                <h3>Student</h3>
               </div>
               <!-- user 1 -->
            <div class="user-info">
               <div class="img">
                <img src="" alt="">
               </div>
                <div class="user-info-text">
                    <h3>Mekdes</h3>
                    <p>online</p>
                </div>
            </div>
            <!-- user two -->
            <div class="user-info">
              <div class="img">
               <img src="" alt="">
              </div>
               <div class="user-info-text">
                   <h3>Lidya</h3>
                   <p>online</p>
               </div>
           </div><div class="user-info">
            <div class="img">
             <img src="" alt="">
            </div>
             <div class="user-info-text">
                 <h3>Abriham</h3>
                 <p>online</p>
             </div>
         </div><div class="user-info">
          <div class="img">
           <img src="" alt="">
          </div>
           <div class="user-info-text">
               <h3>Nimona</h3>
               <p>online</p>
           </div>
       </div>
       <div class="user-info">
        <div class="img">
         <img src="" alt="">
        </div>
         <div class="user-info-text">
             <h3>wondimagegn</h3>
             <p>online</p>
         </div>
     </div>
     <div class="user-info">
      <div class="img">
       <img src="" alt="">
      </div>
       <div class="user-info-text">
           <h3>Ammar</h3>
           <p>online</p>
       </div>
   </div>
   <div class="user-info">
    <div class="img">
     <img src="" alt="">
    </div>
     <div class="user-info-text">
         <h3>Abenezer</h3>
         <p>online</p>
     </div>
 </div>
 <div class="user-info">
  <div class="img">
   <img src="" alt="">
  </div>
   <div class="user-info-text">
       <h3>Name</h3>
       <p>online</p>
   </div>
</div>
<div class="user-info">
  <div class="img">
   <img src="" alt="">
  </div>
   <div class="user-info-text">
       <h3>Name</h3>
       <p>online</p>
   </div>
</div>
<div class="user-info">
  <div class="img">
   <img src="" alt="">
  </div>
   <div class="user-info-text">
       <h3>Name</h3>
       <p>online</p>
   </div>
</div>
            <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
                <div class="img">
                 <img src="" alt="">
                </div>
                 <div class="user-info-text">
                     <h3>Name</h3>
                     <p>online</p>
                 </div>
             </div>
             <div class="user-info">
               <div class="img">
                <img src="" alt="">
               </div>
                <div class="user-info-text">
                    <h3>Name</h3>
                    <p>online</p>
                </div>
            </div>
          </div>
        </div>
<!-- ......................................... chat box.........................  -->
        <div class="chatbox">
            <div class="chat-header">
                <div class="img">
                    <img src="" alt="">
                </div>
              <div class="chat-header-text">
                <h3>Teacher</h3>
                <p>online</p>
              </div>
            </div>
             <div class="chat-area">
<!--                   
                  <div class="self">hi mr</div>
                  <div class="client">hello</div> -->
               
             
        </div>
        <form action="" class="message">
          <input id type="text" id="chat" placeholder="  Type Your Message Here....."  required>
          <button id="sbm" >send</button>
      </form>
    </div>
    <script>
   var btn=document.querySelector('button');
btn.addEventListener("click", function(e)
                     { 
  e.preventDefault();
var app=document.querySelector(".chat-area");
    var self=document.createElement("div");
  app.appendChild(self);
  self.classList.add("self");
  
  var message=document.querySelector("input").value;
  self.innerHTML=message;
   client(message);
   });
   function client(meshsate)
{
  var client=document.createElement("div");
  app.appendChild(client);
  client.classList.add("client");
  client.innerHTML=message;
}
    </script>
</body>
</html>