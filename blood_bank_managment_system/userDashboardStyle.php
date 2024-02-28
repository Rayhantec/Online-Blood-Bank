<?php
header('Content-type: text/css;');
?>

body {
    background-color: #08071048;
}

.container{
    height: 70vh;
    width: 90%;
    background-color: rgba(255, 255, 255, 0.13);
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    margin-top: 20px;
    margin-bottom: 20px;
   
}

.userContainer{
display: flex;
    flex-direction: column;
}
.login {
    display: flex;
    flex-direction: row;
}

.login button {
    margin-right: 1rem;
}

.userIcon{
    font-size: 10rem;
}

.user{
    display: flex;
    position: fixed;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    gap: 10rem;
}

.myButton{
    margin-left: 23%;
    font-size: 30px;
}

nav i{
    font-size: 30px;
    margin-right: 20px;
}

.my__button{
    padding: 50px 100px 50px 100px;
    margin: 0px auto 0px auto;
}

