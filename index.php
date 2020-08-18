<!DOCTYPE html>
<?php
    include 'show-data.php';
    include 'update-data.php';
?>
<html>
    <head>
        <title>Profil Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">menu</a>
            </div>
            <ul id="menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">GALLERY</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">MY INVENTORY</a></li>
            </ul>
        </nav>
        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image:url(assets/img/profil.png);"></div>
            </div>
            <div class="description">
                <h1 id="pName"><?= $nama; ?></h1>
                <p id="pRole"><?= $role; ?></p>
                <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
                <a href="#" class="button border-blue">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Availability</p>
                    <p id="pAvailable" class="text-gray"><?= $availability; ?></p>
                </div>
                <div class="data">
                    <p class="field">Age</p>
                    <p id="pAge" class="text-gray"><?= $age; ?></p>
                </div>
                <div class="data">
                    <p class="field">Location</p>
                    <p id="pLocation" class="text-gray"><?= $location; ?></p>
                </div>
                <div class="data">
                    <p class="field">Years Experience</p>
                    <p id="pExperience" class="text-gray"><?= $years; ?></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray"><?= $email; ?></p>
                </div>
            </div>
        </section>
        <section id="input-form">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div class="form">
                    <label>id</label>
                    <input id="inID" type="text" name="nama" name="id_user" value="<?php echo $id; ?>">
                </div>
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="nama">
                </div>
                <div class="form">
                    <label>Role</label>
                    <input id="inpRole" type="text" name="role">
                </div>
                <div class="form">
                    <label>Availability</label>
                    <input id="inpAvailability" type="text" name="availability">
                </div>
                <div class="form">
                    <label>Age</label>
                    <input id="inpAge" type="number" name="age">
                </div>
                <div class="form">
                    <label>Location</label>
                    <input id="inpLocation" type="text" name="location">
                </div>
                <div class="form">
                    <label>Years Experience</label>
                    <input id="inpYears" type="number" name="years">
                </div>
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="text" name="email">
                </div>
                <div class="form">
                    <input type="submit" value="SIMPAN" class="bg-blue">
                </div>
            </form>
        </section>
        <script>
            var formMenu = document.getElementById("input-form"); 
            formMenu.style.display = "none"; 
            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block"; 
                } else {
                    formMenu.style.display  = "none";
                }

                var name = document.getElementById("pName").innerHTML;
                var role = document.getElementById("pRole").innerHTML;
                var available = document.getElementById("pAvailable").innerHTML;
                var age = document.getElementById("pAge").innerHTML;
                var location = document.getElementById("pLocation").innerHTML;
                var experience = document.getElementById("pExperience").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;
                
                document.getElementById("inpName").value = name;
                document.getElementById("inpRole").value = role;
                document.getElementById("inpAvailability").value = available;
                document.getElementById("inpAge").value = age;
                document.getElementById("inpLocation").value = location;
                document.getElementById("inpYears").value = experience;
                document.getElementById("inpEmail").value = email; 
            }

            // function simpanForm(){
            //     if(formMenu.style.display === "block"){
            //         formMenu.style.display = "none"; 
            //     } else {
            //         formMenu.style.display = "block"; 
            //     }

            //     var name = document.getElementById("inpName").value; 
            //     document.getElementById("pName").innerHTML = name;

            //     var name = document.getElementById("inpRole").value; 
            //     document.getElementById("pRole").innerHTML = name;

            //     var available = document.getElementById("inpAvailability").value; 
            //     document.getElementById("pAvailable").innerHTML = available;

            //     var age = document.getElementById("inpAge").value; 
            //     document.getElementById("pAge").innerHTML = age;

            //     var location = document.getElementById("inpLocation").value; 
            //     document.getElementById("pLocation").innerHTML = location;

            //     var experience = document.getElementById("inpYears").value; 
            //     document.getElementById("pExperience").innerHTML = experience;

            //     var email = document.getElementById("inpEmail").value; 
            //     document.getElementById("pEmail").innerHTML = email; 
            // }

            function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                } else {
                    menu.style.display = "block"; 
                    box.style.paddingTop = "125px";
                }
            }     
        </script>
    </body>
</html>