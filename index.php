<!DOCTYPE html>
<html>
    <head>
        <title>Web Sekolah</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="semua">
            <div class="kepala"> 
                <a href="index.php?halaman=home">
                    <img src="gambar/banneratas.jpg" width="100%" height="100%">  
                </a>
            </div>

            <div id="menu">   
                <ul>
                    <li><a href="index.php?halaman=home">Home</a></li>
                    <li><a href="index.php?halaman=profile">Profile</a></li>
                    <li><a href="index.php?halaman=sejarah">Sejarah</a></li>
                    <li><a href="index.php?halaman=ekskul">Ekskul</a></li>
                    <li><a href="index.php?halaman=berita">Berita</a></li>
                    <li><a href="index.php?halaman=login">Login</a></li>
                </ul>
            </div>

            <div class="konten">   
                <div class="sidebar">   
                    <img src="gambar/bannerkiri.jpg" width="100%" height="100%">  
                </div>

                <div class="berita">   
                    <?php
                        if(isset($_GET['halaman'])){
                            $hal=$_GET['halaman'];
                            
                            switch($hal){
                                case 'home':
                                    include "halaman/home.php";
                                    break;
                                    
                                case 'profile':
                                    include "halaman/profile.php";
                                    break;

                                case 'sejarah':
                                    include "halaman/sejarah.php";
                                    break;
                                    
                                case 'ekskul':
                                    include "halaman/ekskul.php";
                                    break;

                                case 'berita':
                                    include "halaman/berita.php";
                                    break;

                                case 'login':
                                    include "halaman/login.php";
                                    break;

                                case 'tambahberita':
                                    include "halaman/tambahberita.php";
                                    break;

                                default :
                                    echo "<h1>Maaf halaman yang anda tuju tidak ada</h1>";
                                    break;
                            }
                        }
                        else{
                            include "halaman/home.php";
                        }
                    ?>
                </div>

                <div style="clear:both;"></div>
            </div>

            <div class="kaki">  
                <?php 
                    include "footer.php"
                ?>
            </div>
        </div>
    </body>
</html>