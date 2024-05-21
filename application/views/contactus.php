<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/try.css">
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-image: url(img/gallery/gallery10.jpg);
            background-size: cover;
        }
        .contactUs {
        position: relative;
        width: 80%;
        padding: 40px 100px;

        }

        .contactUs .title {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            margin-bottom: 20px;
            
        }

        .contactUs .title h2 {
            color: #33691E;
            font-weight: 500;
        }

        .form {
            grid-area: form;
        }

        .info {
            grid-area: info;
        }

        .map {
            grid-area: map;
        }

        .contact {
            padding: 20px;
            background: #fff;
            box-shadow: 0 5px 35px rgba(0,0,0,0.30);
            border-radius: 10px;
        }

        .box {
            position: relative;
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-template-rows: 5fr 4fr;
            grid-template-areas: 
            "form info" 
            "form map";
            grid-gap: 20px;
            margin-top: 20px;
        }
        .formBox {
            position: relative;
            width: 100%;
        }

        .formBox .row50 {
            display: flex;
            gap: 20px;
        }

        .inputBox {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            width: 50%;
        }

        .formBox .row100 .inputBox {
            width: 100%
        }

        .inputBox span {
            color: #1B5E20;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .inputBox input {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 1px solid #333;
        }

        .inputBox textarea {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 1px solid #333;
            resize: none;
            min-height: 220px;
            margin-bottom: 10px;
        }

        .inputBox input[type="submit"] {
            background: #4CAF50;
            color: #fff;
            border: none;
            font-size: 1.1em;
            max-width: 120px;
            font-weight: 500;
            cursor: pointer;
            padding: 14px 15x;
        }

        .inputBox ::placeholder
        {
            color: #999;
        }

        /*----------info-----------------*/
        .info {
            background: #1B5E20;
        }

        .info h3{
            color: #fff;
        }

        .info .infoBox div {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .info .infoBox div span {
            min-width: 40px;
            height: 40px;
            color: #fff;
            background: #7CB342;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1em;
            border-radius: 50%;
            margin-right: 15px;
        }

        .info .infoBox div p {
            color: #fff;
            font-size: 1.1em;
        }

        .info .infoBox div a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1em;
        }

        .sci {
            margin-top: 40px;
            display: flex;
        }

        .sci li {
            list-style: none;
            margin-right: 15px;
        }

        .sci li a {
            color: #fff;
            font-size: 2em;
            color: #ccc;
        }

        .sci li a:hover {
            color: #fff;
        }

        .map {
            padding: 0; 
        }

        .map iframe {
            width: 100%;
            height: 100%;
        }
        @media (max-width: 991.98px)
        {
            .navbar-nav {
                flex-direction: column;
            }
            
            .navbar-nav .nav-item {
                margin-bottom: 10px;
            }
            .contactUs {
                padding: 20px;
            }
            .box {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                grid-template-areas: 
                    "form"
                    "info"
                    "map";
            }
            .map {
                min-height: 300px;
            }
            .formBox .row50{
                display: flex;
                gap: 0;
                flex-direction: column;
            }
            .inputBox {
                width: 100%;
            }
            .contact {
                padding: 30px;
            }
            .map {
                min-height: 300px;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <?php $this->load->view('header'); ?>
    <div class="contactUs">
        <div class="title">
            <h2><br>GET IN TOUCH</h2>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send a message</h3>
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First name</span>
                                <input type="text" placeholder="John">
                            </div>
                            <div class="inputBox">
                                <span>Last name</span>
                                <input type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="Johndoe@email.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile num</span>
                                <input type="text" placeholder="+6391231424205">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here..."></textarea>
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                        </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Purok 4, Paitan Norte 3117 Cuyapo <br>Philippines</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto: julianashaven@email.com">julianashaven@email.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel: +639071020700">+63907 102 0700</a>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/gardenofjuliana"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    </ul>
                </div>
                
            </div>

            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.4283576578946!2d120.73802657574882!3d15.834068045689252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33912521ed2c3149%3A0x44d1fe0433dbb3d3!2sJuliana&#39;s%20Garden!5e0!3m2!1sen!2sph!4v1708431373276!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>