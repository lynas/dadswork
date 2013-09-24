<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showTodaysTransaction()">
        <div class="rootContainer">
            <a href="totalbalancesheet.php"><img src="res/balancesheet.JPG" /></a><br />
            <a href="individual.php"><img src="res/khotian.JPG" /></a><br />
            <div class ="inputform">
                <table>
                    <tr><td><img src="res/vaucharno.JPG" /></td><td><input type="text" class="vn" value="" /></td></tr>
                    <tr><td></td><td><select class="previousBiboron" style="width: 155px;"></select></td></tr>
                    <tr><td><img src="res/biboron.JPG" /></td><td><input type="text" class="bib" value="" /></td></tr>
                    <tr><td><img src="res/jomaorkhoroch.JPG" /></td>
                        <td>
                            <select class="jomaOrKhoroch" style="width: 155px;">
                                <option value="Select">Select</option>
                                <option value="Joma">Joma</option>
                                <option value="Khoroch">Khoroch</option>
                            </select>
                        </td></tr>
                    <tr><td><img src="res/taka.JPG" /></td><td><input type="text" class="taka" value="" /></td></tr>
                    <tr><td><img src="res/tarikh.JPG" /></td><td><input type="text" class="tarik" value="<?php echo date("Y-m-d"); ?>" /></td></tr>
                    <tr><td></td><td><input type="button" class="save" id="save" value="Save"/></td></tr>
                    
                </table>



            </div>

            <div class ="jabedamain">
                <div class="jabedamainheader ">
                    <div class="">
                        <img src="res/jabedakhata.JPG" />
                        <br />
                        <img src="res/tarikh.JPG" /> <span class="datest"><?php echo date("Y-m-d"); ?></span>
                        <br />
                        <input type="button" value="B F" class="getbf" />
                        
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
