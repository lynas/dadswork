<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="rootContainer">
            <a href="index.php">Home</a><br />
            

            <div class ="jabedamain">
                <div class="jabedamainheader ">
                    <div class="">
                        <img src="res/jabedakhata.JPG" />
                        <br />
                        <img src="res/tarikh.JPG" /> <span><input type="text" value="<?php echo date("Y-m-d"); ?>" id="prevd" /></span>
                        <input type="button" value="B F" class="getbf" />
                        <input type="button" class="reload" value="Reload" />
                    </div>

                    <div id="header"><span><img src="res/joma.JPG"></span><span style="padding-left: 350px;"><img src="res/khoroch.JPG"></span></div>
                    <div id="container">
                        <div id="first">
                            <table class="joma" id="joma">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
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
                                        <th>Id</th>
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
                        <tr><td></td><td><input type="button" class="addall" value="Show All" /> </td></tr>
                    </table>
                </div>
            </div>
            

            

            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>