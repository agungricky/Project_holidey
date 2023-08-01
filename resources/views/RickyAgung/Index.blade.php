<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ricky Agung Sumiranto</title>
    <style>
        body{
            background-image: url('gambar/Ricky/bg.jpg');
            background-size: cover;
            background-position: right bottom;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        #header h1{
            font-size: 70px; /* Ukuran teks */
            font-weight: bold; /* Ketebalan teks */
            color: #ffffff; /* Warna teks */
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.9);
            position: absolute;
            top: 150px;
            left: 160px;
        }

        #header h2{
            color: white;
            position: absolute;
            top: 250px;
            left: 160px;
            font-size: 40px;
            font-family: 'Courier New', Courier, monospace;
        }

        #header hr{
            width: 235px;
            position: absolute;
            top: 280px;
            left: 465px;
            border-radius: 10px;
        }

        nav{
            position: absolute;
            top: 350px;
            left: 160px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex; 
        }

        li {
          margin-right: 20px;
          font-family: cursive;
          font-size: 20px;
        }

        nav a{
            display: block;
            text-decoration: none;
            color: white;

        }

        nav a:hover {
            background-color: #828282;
            padding: 10px;
            border-radius: 10px;
            color: greenyellow;
        }

        .sosial_media{
            position: absolute;
            bottom: 160px;
            left: 200px;
        }

        .sosial_media i {
          font-size: 25px; 
          color: #ffffff;
          margin-right: 15px; 
          background-color: rgba(255, 255, 255, 0.5); 
          padding: 30px 25px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <section id="header">
            <h1>Ricky Agung S.</h1>
            <h2>Saya Seorang Mahasiswa</h2>
            <hr class="border border-success border-3 opacity-75">
            <nav>
                <ul>
                    <li><a href="" id="Home">Home</a></li>
                    <li><a href="" id="About">About</a></li>
                    <li><a href="">Resume</a></li>
                    <li><a href="">myProject</a></li>
                    <li><a href="">Portofolio</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            
            <div class="sosial_media">
                <a href="https://www.instagram.com/ricky_story00/"><i class="fa-brands fa-instagram fa-sm rounded-circle"></i></a>
                <a href="https://web.facebook.com/mbokeng.mamio/"><i class="fa-brands fa-facebook-f fa-sm rounded-circle"></i></a>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="fa-solid fa-envelope fa-sm rounded-circle"></i></a>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5b3710b119.js" crossorigin="anonymous"></script>
</body>
</html>