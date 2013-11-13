<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ledger Book</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showTodaysTransaction()">
        <div class="rootContainer">
            <span style="float: left; background-color: #A7C942; padding: 10px;"> 
                <a href="totalbalancesheet.php"><img src="res/balancesheet.JPG" /></a><br />
                <a href="individual.php"><img src="res/khotian.JPG" /></a><br />
                <a href="prevjabeda.php"><img src="res/purbojabeda.JPG" /></a><br />
            </span>
            <div class ="inputform">

                <table>
                    <tr>
                        <td><img src="res/vaucharno.JPG" /></td>
                        <td><input type="text" class="vn" value="" /></td>
                        <td><span class="blankSpace">_______</span></td>
                        <td><img src="res/jomaorkhoroch.JPG" /></td>
                        <td>
                            <form>
                                <input type="radio" id="jomaRadio" name="sex" value="Joma"><img src="res/joma.JPG"> 
                                <input type="radio" id="khorochRadio" name="sex" value="Khoroch"><img src="res/khoroch.JPG">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><select class="previousBiboron" style="width: 155px;"></select></td>
                        <td><span class="blankSpace">_____</span></td>
                        <td>
                            <img src="res/taka.JPG" /></td><td><input type="text" class="taka" value="" />
                            <input type="button" id="formatedTaka" value="FM" />
                            <span id="formatedTakaOutput"></span>
                        </td>

                    </tr>
                    <tr>
                        <td><img src="res/nam.JPG" /></td>
                        <td><input type="text" class="bib" value="" /></td>
                        <td><span class="blankSpace">_____</span></td>
                        <td><img src="res/tarikh.JPG" /></td>
                        <td><input type="text" class="tarik" value="<?php echo date("Y-m-d"); ?>" /></td>
                    </tr>
                    <tr>
                        <td><img src="res/biboron.JPG" /></td>
                        <td><input type="text" class="biboron" value="" /></td>
                        <td><span class="blankSpace">_____</span></td>
                        <td></td>
                        <td><input type="button" class="save" id="save" value="Save"/></td>
                    </tr>

                </table>
<!--                <script>
         var str1 = "1,23,456.66";
         str1.replace(/\,/g, "");
         var str2 = str1.replace(/\,/g, "");
         //alert (str1);
         alert(str2);
                </script>-->

            </div>

            <div class ="jabedamain">
                <div class="jabedamainheader ">
                    <div class="" style="background-color: yellow">
                        <span style="float: left"><img src="res/jabedakhata.JPG" /></span>
                        <span> </span>
                        <span style="float: right"><img src="res/tarikh.JPG" /><span style="font-size: 21px"><?php echo date("Y-m-d"); ?></span></span>
                        
                        <input type="button" value="B F" class="getbf" />
                        <span id="bfsection">

                        </span>

                    </div>

                    <div id="header"></div>
                    <div id="container">
                        <div id="first">
                            <table class="joma" id="joma">
                                <tbody>
                                    <tr>
                                        <th><img src="res/joma.JPG"></th>
                                        <th>V No</th>
                                        <th><img src="res/nam.JPG" /></th>
                                        <th><img src="res/taka.JPG" /></th>
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
                                        <th><img src="res/nam.JPG" /></th>
                                        <th><img src="res/taka.JPG" /></th>
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
                        <tr><td><input type="button" class="addall" value="Show All" /> </td><td></td></tr>
                    </table>
                </div>
            </div>





            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>
