<?php header('Content-type: text/css;');
?>

body{
    background-color: #08071048;
    }

.header__image {
    width: 95%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    border-radius: 15px;
}


.header__image-container {
    position: relative;
    text-align: center;
    color: rgba(0, 0, 0, 0.603);
    align-items: center;
  }

  .centered {
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .compatibility{
      align-items: center;
  }

  .compatibility__table {
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
  height: auto;
  border-radius: 10px;
}

.compatibility__text{
    margin: 30px 0 30px 0;
    color: rgba(0, 0, 0, 0.603);
   text-align: center;
}


.my__card{
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 10px; /* Added */
}
.card__image{
    width: 1500px;
    height: 498px;
    object-fit: cover
}

.my__button{
    padding: 50px 100px 50px 100px;
    margin: 30px auto 30px auto;
}

/* Footer */
footer{
    color: white;
    height: 250px;
    width: 100%;
    background-color: black;
    text-align: center;
    padding-top: 80px;
}


.login{
    display: flex;
    flex-direction: row;
}

.login button{
    margin-right: 1rem;
}

nav i {
    font-size: 30px;
    margin-right: 20px;
}
