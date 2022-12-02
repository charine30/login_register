<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>GRADUATE NAMES</title>
    <style>
        * {
            /* Change your font family */
            font-family: sans-serif;
        }
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: medium;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            text-align: left;
            font-weight: bold;

        }
        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align-last: auto;
            font-weight: bold;
        }
        .content-table th,
        .content-table td{
            padding: 15px 15px;
        }
        .content-table tbody tr{
            border-bottom: 2px solid grey;
        }
        .content-table tbody tr:nth-of-type(odd) {
            background-color: burlywood;
        }
        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .main{
            color: black;
            height: auto;
        }

    </style>
</head>
<body>
<div class="main">
            <h1>LIST NAMES OF GRADUATES ALUMNI'S IN PAGADIAN CAPITOL COLLEGE</h1>
            <a href="logout.php" class="btn btn-warning">Logout</a>
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Occupation</th>
                    <th>Company Name</th>
                    <th>Status</th>
                    <th>Year Graduated</th>
                    <th>Department</th>
                </tr>
            </thead>
            <body>
                <tr>
                    <td>1. Jiezl B. Bongolan</td>
                    <td>22</td>
                    <td>San Isidro Labangan,Zamboanga del Sur</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                    
                    <td>2. Mark Joel P. Dag-uman</td>
                    <td>23</td>
                    <td>P-3 Bambong Daku Ramon Magsaysay Zamboanga del Sur</td>
                    <td>Policeman</td>
                    <td>PNP</td>
                    <td>Single</td>
                    <td>2018-2019</td>
                    <td>CRIMINOLOGY Department</td>
                </tr>
                <tr>
                   
                    <td>3. Ray Mark C. Segovia</td>
                    <td>23</td>
                    <td>Lapu-Lapu City, Cebu</td>
                    <td>Call Center Associates</td>
                    <td>Results-Cx Manila</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                   
                    <td>4. Catherine Entienza Largo</td>
                    <td>22</td>
                    <td>Alegria Pagadian City</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                   
                    <td>5. Roselyn G. Romero</td>
                    <td>28</td>
                    <td>Proper Dimaya Dinas ZDS</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                   
                    <td>6. Erica G. Saban</td>
                    <td>22</td>
                    <td>Kagawasan Pagadian City</td>
                    <td>Volunteer Teacher</td>
                    <td>Danlugan Elementary School</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                   
                    <td>7. Fahima Odin</td>
                    <td>23</td>
                    <td>Piraka SND, Lanao del Norte</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>BEED Department</td>
                </tr>
                <tr>
                   
                    <td>8. Rey Jay A. Simbajon</td>
                    <td>28</td>
                    <td>Mulansong San Pablo Zamboanga Del Sur</td>
                    <td>Police</td>
                    <td>PNP</td>
                    <td>Single</td>
                    <td>2018-2019</td>
                    <td>CRIMINOLOGY Department</td>
                </tr>
                <tr>
                   
                    <td>9. Marvin O. Balatian</td>
                    <td>26</td>
                    <td>Purok Kabatoan Mabuhay San Pablo Zamboanga del Sur</td>
                    <td>Government Employee</td>
                    <td>Philippine National Police</td>
                    <td>Single</td>
                    <td>2021-2022</td>
                    <td>CRIMINOLOGY Department</td>
                </tr>
            </body>
        </table>
    </body>
</html>