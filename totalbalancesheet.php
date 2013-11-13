<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showTotalBalanceSheet()">
        <div class="rootContainer">
            <span style="float: left;background-color: #A7C942; padding: 10px;"><a href="index.php"><img src="res/jabedakhata.JPG" /></a></span>
            <!--            <a href="individual.php">Individual user Balancesheet</a><br />-->
            <div class="jabedamainheader "><img src="res/balancesheet.JPG" /></div>
            <div class ="inputform">
                
                
                <table class="totalbalance" id="totalbalance">
                    <tbody>
                        <tr>
                            <th><img src="res/nam.JPG" /></th>
                            <th><img src="res/joma.JPG" /> </th>
                            <th><img src="res/khoroch.JPG" /> </th>
                        </tr>
                    </tbody>
                </table>
                <br /><br />
                
                <img src="res/motjoma.JPG" /> : <span class="balancesheetTotalJoma" id="balancesheetTotalJoma" ></span><br />
                <img src="res/motkhoroch.JPG" /> : <span class="balancesheetTotalKhoroch" id="balancesheetTotalKhoroch" ></span><br />
                <img src="res/obosisto.JPG" /> : <span class="balancesheetTotalObosisto" id="balancesheetTotalObosisto" ></span><br />
                <input type="button" class="showTotalJomaKhoroch" id="showTotalJomaKhoroch" value="Show All" />
            </div>

            



            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>
