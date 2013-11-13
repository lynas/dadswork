<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showPrevBiboron()">
        <div class="rootContainer">
            <span style="float: left;background-color: #A7C942; padding: 10px;"><a href="index.php"><img src="res/jabedakhata.JPG" /></a></span>
<!--            <a href="totalbalancesheet.php">Total Balancesheet</a>-->
            
            <div class ="inputform">
                <table>
                    
                    <tr><td></td><td><select class="indiusers" style="width: 155px;"></select><input type="button" class="reload" value="Reload" /></td></tr>
                    
                    
                </table>



            </div>

            <div class ="jabedamain">
                <div class="jabedamainheader ">
                    <div class="">
                        <img src="res/khotian.JPG"> :  <span id="selectedUser"></span>
                        
                        
                    </div>

                    <div id="header"></div>
                    <div id="container">
                        <div id="first">
                            <table class="joma" id="joma">
                                <tbody>
                                    <tr>
                                        <th><img src="res/joma.JPG"></th>
                                        <th>V No</th>
                                        <th>Biboron</th>
                                        <th>Taka</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="second">
                            <table class="khoroch" id="khoroch">
                                <tbody>
                                    <tr>
                                        <th><img src="res/khoroch.JPG"></th>
                                        <th>V No</th>
                                        <th>Biboron</th>
                                        <th>Taka</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div style="clear: both;">
                    </div>
                </div>
                <div id="footer">
                    <table>
                        <tr><td><img src="res/motjoma.JPG" /></td><td class="totaljoma"></td></tr>
                        <tr><td><img src="res/motkhoroch.JPG" /></td><td class="totalkhoroch"></td></tr>
                        <tr><td><img src="res/obosisto.JPG" /></td><td class="remaining"></td></tr>
                        <tr><td><input type="button" class="addall" value="Show All" /></td><td> </td></tr>
                    </table>
                </div>
                
            </div>

            

            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>
