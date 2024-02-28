<!DOCTYPE html>
<html>


<head>
    <title>Tugas 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body{
            background-image: url(https://img.freepik.com/premium-vector/green-tosca-bold-grunge-background_558855-98.jpg?w=2000);
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }


        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-bottom: 20px;
        }


        .profile-picture {
            width: 100%;
            border-radius: 10px;
        }


        .skills-bar {
            margin-top: 10px;
        }


        .skills-label {
            font-weight: bold;
        }


        /* Navbar styles */
        .navbar {
            overflow: hidden;
            background-color: #ffffff;
        }


        .navbar a {
            float: left;
            font-size: 16px;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }


        .navbar a:hover {
            background-color: #11ff4100;
            color: rgba(235, 235, 235, 0.816);
        }


        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }




    </style>
</head>


<body class="w3-light-grey">
    <!-- Combined Header and Navbar -->
    <div class="header-navbar">
        <h1>Tugas 2</h1>
        <div class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </div>
    </div>


    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width: 1400px;">
        <!-- The Grid -->
        <div class="w3-row-padding">
            <!-- Left Column -->
            <div class="w3-half">
                <div class="profile-card">
                    <div class="w3-display-container">
                        <img src="https://serving.photos.photobox.com/6629536912a75c3d25779ca433fbd9b363989cc917e6ef0ac5fe0622504ad96c0fc37586.jpg"  alt="foto dhani raynaldi" height="500" width="300"">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Programmer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Pontianak, Kal-Bar</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>dhaniraynaldi984@gmail.com</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>089624412150</p>
                        <hr>
                        <p class="w3-large"><i class="fa fa-superpowers fa-fw w3-margin-right w3-text-teal"></i>Skills</p>
                        <p class="skills-label">Visual Studio Code</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                        </div>
                        <p class="skills-label">Figma</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                <div class="w3-center w3-text-white">80%</div>
                            </div>
                        </div>
                        <p class="skills-label">Xampp</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                        </div>
                        <p class="skills-label">Adobe Phtoshop</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                        </div>
                        <br>
                        <p class="w3-large w3-text-theme"><b><i class="fa fa-spinner fa-fw w3-margin-right w3-text-teal"></i>Bahasa Pemrograman</b></p>
                        <p class="skills-label">Python</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width: 100%"></div>
                        </div>
                        <p class="skills-label">Html & Css</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:75%"></div>
                        </div>
                        <p class="skills-label">PHP</p>
                        <div class="w3-light-grey w3-round-xlarge skills-bar">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width: 55%"></div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Right Column -->
            <div class="w3-half">
                <div class="profile-card">
                    <h2 class="w3-text-black w3-padding-16"><i class="fa fa-ravelry fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><big><big><b>Dhani<br>Raynaldi</b></big></big></h2>
                    <div class="w3-container">
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Programmer</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - <span class="w3-tag w3-teal w3-round">Sekarang</span></h6>
                        <p>Saya seorang programmer yang berpengalaman dalam mengembangkan aplikasi web dan perangkat lunak.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Web Developer</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2008 - <span class="w3-tag w3-teal w3-round">2010</span></h6>
                        <p>Saya telah bekerja sebagai pengembang web di beberapa perusahaan terkemuka, fokus pada pengembangan frontend dan backend.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Tutor</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015 - 2017</h6>
                        <p>Saya juga membuka kelas saya sendiri bagi mereka yang ingin serius mendalami dunia programming.</p>
                        <br>
                    </div>
                </div>
                <div class="profile-card">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-ravelry fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Pendidikan</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>S1 </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-bar-chart fa-fw w3-margin-right"></i>Sarjana Komputer</h6>
                        <p>Saya memiliki gelar Sarjana Komputer dari Universitas Tanjungpura dengan predikat cumlaude.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>S2</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-bar-chart fa-fw w3-margin-right"></i>Magister Sains</h6>
                        <p>Saya juga memiliki gelar Magister Sains dari universitas terkemuka dengan predikat cumlaude.</p>
                        <hr>
                    </div>
                </div>
                <div class="profile-card">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-ravelry fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Tentang Saya</h2>
                    <div class="w3-container">
                        <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Profil</h6>
                        <p>Memiliki bekal pendidikan di Universitas Tanjungpura, jurusan sistem informasi membuat saya ingin terus mendalami dunia programmer.Hingga saya memiliki beberapa pengalaman profesional dalam mengoding.bahkan beberapa program saya telah dipublikasikan.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Page Container -->
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Media Sosial</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p>Tugas PWD: Copyright by badoystudio.com</p>
        <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
    </footer>
</body>


</html>