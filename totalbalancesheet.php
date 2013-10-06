<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showTotalBalanceSheet()">
        <div class="rootContainer">
            <a href="index.php">Home</a><br />
            <!--            <a href="individual.php">Individual user Balancesheet</a><br />-->
            
            <div class ="inputform">
                
                <span style="text-align: center"><img src="res/balancesheet.JPG" /></span>
                <table class="totalbalance" id="totalbalance">
                    <tbody>
                        <tr>
                            <th><img src="res/biboron.JPG" /></th>
                            
                            <th><img src="res/joma.JPG" /> </th>
                            <th><img src="res/khoroch.JPG" /> </th>
                        </tr>
                    </tbody>
                </table>
                <br /><br />
                <input type="button" class="showTotalJomaKhoroch" id="showTotalJomaKhoroch" value="Show All" />
                <br /><br /><br />
                Mot Joma : <span class="balancesheetTotalJoma" id="balancesheetTotalJoma" ></span><br />
                Mot Khoroch : <span class="balancesheetTotalKhoroch" id="balancesheetTotalKhoroch" ></span><br />
                Mot Obosisto : <span class="balancesheetTotalObosisto" id="balancesheetTotalObosisto" ></span><br /><br />
            </div>

            



            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>
