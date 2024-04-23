<?php
session_start();
include '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boot -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontowesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/roombook.css">
    <title>BlueBird - Admin</title>
</head>

<body>
    <!-- guestdetailpanel -->

    <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
            <div class="head">
                <h3>RESERVATION</h3>
                <i class="fa-solid fa-circle-xmark" onclick="adduserclose()"></i>
            </div>
            <div class="middle">
                <div class="guestinfo">
                    <h4>Hotel information</h4>
                    <input type="text" name="Nom" placeholder="Enter Full name" required>
                    <input type="email" name="Emplacement" placeholder="Enter Location" required>



                    <?php
                    $Emplacement = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    ?>

                    <select name="Emplacement" class="selectinput" required>
						<option value selected >Select your Emplacement</option>
                        <?php
							foreach($Emplacement as $key => $value):
							echo '<option value="'.$value.'">'.$value.'</option>';
                            //close your tags!!
							endforeach;
						?>
                    </select>
                    <input type="text" name="Phone" placeholder="Enter Phoneno" required>
                </div>

                <div class="line"></div>

                <div class="reservationinfo">
                    <h4>Reservation information</h4>
                    <label for="Image">Upload Image:</label>
                  <input  id="Image" name="Image"><br><br>
                  <select name="Etoile" class="selectinput">
						<option value selected >Bedding Type</option>
                        <option value="Single">1</option>
                        <option value="Double">2</option>
						<option value="Triple">3</option>
                        <option value="Quad">4</option>
						<option value="None">5</option>
                    </select>

                   
       
                    
                  
                </div>
            </div>
            <div class="footer">
                <button class="btn btn-success" name="guestdetailsubmit">Submit</button>
            </div>
        </form>

       
        <!-- hotel availablity end-->

        <!-- ==== hotel book php ====-->
        <?php       
            if (isset($_POST['guestdetailsubmit'])) {
                $Nom = $_POST['Nom'];
                $Image = $_POST['Image'];
                $Emplacement = $_POST['Emplacement'];
                $Phone = $_POST['Phone'];
                $Etoile = $_POST['Etoile'];
               
               
                if($Nom == "" || $Image == "" || $Emplacement == ""){
                    echo "<script>swal({
                        title: 'Fill the proper details',
                        icon: 'error',
                    });
                    </script>";
                }
                else{
                    $sta = "NotConfirm";
                    $sql = "INSERT INTO hotel(Nom,Image,Emplacement,Phone,Etoile) VALUES ('$Nom','$Image','$Emplacement','$Phone','$Etoile'))";
                    $result = mysqli_query($conn, $sql);

                    // if($f1=="NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Superior Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f2=="NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Guest House is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f3 == "NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Si Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($f4 == "NO")
                    // {
                    //     echo "<script>swal({
                    //         title: 'Deluxe Room is not available',
                    //         icon: 'error',
                    //     });
                    //     </script>";
                    // }
                    // else if($result = mysqli_query($conn, $sql))
                    // {
                        if ($result) {
                            echo "<script>swal({
                                title: 'Reservation successful',
                                icon: 'success',
                            });
                        </script>";
                        } else {
                            echo "<script>swal({
                                    title: 'Something went wrong',
                                    icon: 'error',
                                });
                        </script>";
                        }
                    // }
                }
            }
        ?>
    </div>

    
    <!-- ================================================= -->
    <div class="searchsection">
        <input type="text" name="search_bar" id="search_bar" placeholder="search..." onkeyup="searchFun()">
        <button class="adduser" id="adduser" onclick="adduseropen()"><i class="fa-solid fa-bookmark"></i> Add</button>
        <form action="./exportdata.php" method="post">
            <button class="exportexcel" id="exportexcel" name="exportexcel" type="submit"><i class="fa-solid fa-file-arrow-down"></i></button>
        </form>
    </div>

    <div class="hoteltable" class="table-responsive-xl">
        <?php
            $hoteltablesql = "SELECT * FROM hotel";
            $hotelresult = mysqli_query($conn, $hoteltablesql);
            $nums = mysqli_num_rows($hotelresult);
        ?>
        <table class="table table-bordered" id="table-data">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Emplacement</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Type of Room</th>
                    <th scope="col">Type of Bed</th>
                    <th scope="col">No of Room</th>
                    <th scope="col">Meal</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">No of Day</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="action">Action</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>

            <tbody>
            <?php
            while ($res = mysqli_fetch_array($hotelresult)) {
            ?>
                <tr>
                    <td><?php echo $res['id'] ?></td>
                    <td><?php echo $res['Nom'] ?></td>
                    <td><?php echo $res['Image'] ?></td>
                    <td><?php echo $res['Emplacement'] ?></td>
                    <td><?php echo $res['Phone'] ?></td>
                    <td><?php echo $res['Etoile'] ?></td>
                    
                    <td class="action">
                        <?php
                            if($res['stat'] == "Confirm")
                            {
                                echo " ";
                            }
                            else
                            {
                                echo "<a href='roomconfirm.php?id=". $res['id'] ."'><button class='btn btn-success'>Confirm</button></a>";
                            }
                        ?>
                        <a href="roombookedit.php?id=<?php echo $res['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                        <a href="roombookdelete.php?id=<?php echo $res['id'] ?>"><button class='btn btn-danger'>Delete</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<script src="./javascript/roombook.js"></script>



</html>
