<?php

session_start();
include("db.php");
include("insert.db");

$user_data = check_login($conn)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>

    <link rel="stylesheet" href="rent.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <!-- CSS only 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        -->
</head>
<body>

    <div class="container">
        <div class="book">
            <div class="description">
                <h1><strong>Book</strong> your ride</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis est, tempora in ab accusamus alias eveniet aspernatur 
                    consequatur molestias. Soluta veniam, cumque exercitationem fugiat quia minima temporibus sit deserunt voluptates?
                </p>
                <div class="quote">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis est, tempora in ab accusamus alias eveniet aspernatur
                    </p>
                </div>
                <ul>
                    <li>Super reliable service</li>
                    <li>24/7 customer service</li>
                    <li>Wide range of vehicles</li>
                    <li>GPS Tracking System</li>
                </ul>
            </div>
            <div class="form">
                <form action="/action_page.php">
                    <!--
                    <div class="inpbox full">
                        <span><ion-icon name="car"></ion-icon></span>
                        <select name="" id="cars">
                            <option value="">Select Vehicle</option>
                            <option value="">Mercedes</option>
                            <option value="">Audi</option>
                            <option value="">BMW</option>
                            <option value="">Toyota</option>
                        </select>
                        
                    </div>
                    -->
                    <div class="inpbox">
                        <span><ion-icon name="globe"></ion-icon></span>
                        <input type="text" placeholder="Pickup Location">
                    </div>
                    <div class="inpbox">
                        <span><ion-icon name="calendar"></ion-icon></span>
                        <input type="date" id="date">
                    </div>

                    <div class="inpbox">
                        <span><ion-icon name="locate"></ion-icon></span>
                        <input type="text" placeholder="Drop Location">
                    </div>
                    <div class="inpbox">
                        <span><ion-icon name="calendar"></ion-icon></span>
                        <input type="date"  id="date">
                    </div>

                    <div class="inpbox">
                        <span><ion-icon name="person"></ion-icon></span>
                        <input type="text" placeholder="Full name">
                    </div>
                    <div class="inpbox">
                        <span><ion-icon name="mail"></ion-icon></span>
                        <input type="email" id="email" placeholder="Email">
                    </div>
                    <div class="inpbox full">
                        <div class="inrbox">
                            <span><ion-icon name="car"></ion-icon>Regular</span>
                            <input type="radio"  id="plan">
                            <h2>$50</h2>
                            <span>1 Passenger</span>
                        </div>
                        <div class="inrbox">
                            <span><ion-icon name="car"></ion-icon>Pro</span>
                            <input type="radio"  id="plan">
                            <h2>$90</h2>
                            <span>2 Passenger</span>
                        </div>
                        <div class="inrbox">
                            <span><ion-icon name="car"></ion-icon>Advanced</span>
                            <input type="radio" name="plan" id="">
                            <h2>$180</h2>
                            <span>4 Passenger</span>
                        </div>
                    </div>

                    <button class="subtn">Submit</button>
                    <button class="rst">Reset</button>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>