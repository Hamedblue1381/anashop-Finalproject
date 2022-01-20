
<?php
$link=mysqli_connect("localhost","root","","ana");
if(mysqli_connect_errno())
    exit("this error happend:". mysqli_connect_error());
$query="SELECT * FROM `boostmmr` ";
$result=mysqli_query($link,$query);
?>
<head>
    <style>
        .header {
            background-image: url("images/header.png");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            margin: 0 auto;
            padding: 0 auto;
            height: 385px;
            position: relative;
            overflow: hidden;

        }

        .miniform {
            width: 29%;
          left:80px;
            float: left;
            position: relative;

            margin: 5px;
            padding: 8px;
            background-color: white;
            border-radius: 2px;
            border: 1px;
            font-size: 18px;
            color: black;
            box-shadow: 0px 0px 4px 4px grey;

        }

        .separator {
            display: flex;
            align-items: center;
            text-align: center;
        }
        .separator::before, .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #000;
        }
        .separator::before {
            margin-right: .25em;
        }
        .separator::after {
            margin-left: .25em;
        }

    </style>
    <title>Ana boosting | سایت کوچ و بوستینگ آنا</title>

</head>
<body>
<div class="header">
    <div class="logo">
        <img src="images/ANA2.png">
    </div>
</div>
<p>&nbsp;</p>
    <div class="miniform">
        <div class="separator"><h1>سفارش بوست جدید</h1></div>
        <?php

       while($row = mysqli_fetch_array($result)) {

        ?>
        <p>
            az
            <?php echo $row['startmmr']; ?>
            ta
            <?php echo $row['finishmmr']; ?>
            role :
            <?php echo $row['role']; ?>
            va
            <?php echo $row['soloparty']; ?>
            <?php
            /*
            }
            $link1=mysqli_connect("localhost","root","","ana");
            if(mysqli_connect_errno())
                exit("this error happend:". mysqli_connect_error());
            $query1="SELECT * FROM `users` ";

            while($row1 = mysqli_fetch_array($result1)) {
            */
            ?>
           tavasot
            <?php echo $row['username'];  ?>
           ba shomare
            <?php echo $row['number'];  ?>
           be sabt resid
           <div class="separator"> - </div>
        </p>
            <?php

        }

        ?>
    </div>
    <div class="miniform">
        <div class="separator"><h1>در صف انجام</h1></div>
    </div>
    <div class="miniform">
        <div class="separator"><h1>انجام شده</h1></div>
    </div>


</body>



