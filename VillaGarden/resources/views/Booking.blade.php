<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border-radius: 70px;
    font-family: 'Montserrat', sans-serif;
}

.main_bg{
    background-image: url('Gp/assets/img/background.jpg');
    background-color: black;
    height: 800px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}
.form{
    width: 650px;
}

.form-text{
    text-align: center;
    margin: 0 0 40px 0;
}
.form-text h1 span img{
    margin: 0 10px;

}
.form-text h1{
    color: #fff;
    font-family: 'Montserrat', cursive;
    font-size: 40px;
    margin-bottom: 20px;
}
.form-text p{
    color: #fff;
    font-family: 'Montserrat', cursive;
    font-size: large;
}

.main-form div{
    margin: 10px 10px;
    width: 300px;
    display: inline-block;
}
.main-form div input {
    width: 100%;
    font-family: 'Montserrat', cursive;
    background: none;
    border: 1px solid #ffca00;;
    font-size: 20px;
    color: #fff;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div select{
    width: 104%;
    font-family: 'Montserrat', cursive;
    background: none;
    border: 1px solid #ffca00;;
    font-size: 20px;
    color: #fff;
    outline: none;
    padding: 3px 0 3px 10px;
    margin-top: 10px;
}
.main-form div span{
    width: 100%;
    font-family: 'Montserrat', cursive;
    color: #fff;
    font-size: 25px;
}

#submit{
    width: 100%;
    text-align: center;
}
#submit input{
    font-family: 'Montserrat', cursive;
    width: 200px;
    background-color:#ffca00 !important;
    color: black !important;
    transition: all .3s;
}
#submit input:hover{
    font-family: 'Montserrat', cursive;
    width: 200px;
    background-color: black !important;
    color: #fff !important;
}
#submit input:active{
    font-size: 19px;
    background-color: rgb(46, 20, 5) !important;
    color: #fff !important;
}


@media screen and (max-width:710px) {
    .main-form{
        text-align: center;
    }
}
.color-font {

color:black
}


    </style>
</head>

<body class="main_bg">
    <div class="form">
        <div class="form-text">
            <<img src="{{ asset('Gp/assets/img/LogoVilla.png')}}" alt="Logo villa"  width="500" height="">
            <h1> Booking Now </h1>
            <p>Tolong isi form ini dengan benar. Terima kasih</p>
        </div>
        <div class="main-form">

                <div>
                    <span>Your full name</span>
                    <input type="text" name="name" id="name" placeholder="Enter your name here..." required>
                </div>
                <div>
                    <span>Your email address</span>
                    <input type="email" name="name" id="name" placeholder="Write your email here..." required>
                </div>
                <div>
                    <!-- <---this is the select option--->
                    <span class="color-font">How many people ?</span>
                    <select name="people" id="people" required>
                        <option value=""><---People---></option>
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5+">5+ People</option>
                    </select>
                    <!-- <---this is the select option--->
                </div>
                <div>
                    <span>Your Phone Number</span>
                    <input type="text" name="Phone" id="number" placeholder="Write your number here..." required>
                </div>
                <div>
                    <span>What is the date ?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div>
                    <span>Until ?</span>
                    <input type="date" name="date" id="date" placeholder="date" required>
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                    <p><a href="/">ADMIN</a></p>
                </div>


            </form>
        </div>
    </div>
</body>

</html>
