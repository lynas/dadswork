<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="showTodaysTransaction()">
        <div class="rootContainer">
            <div class ="inputform">
                <table>
                    <tr><td>Voucher no:</td><td><input type="text" class="vn" value="" /></td></tr>
                    <tr><td></td><td><select class="previousBiboron" style="width: 155px;"></select></td></tr>
                    <tr><td>Biboron:</td><td><input type="text" class="bib" value="" /></td></tr>
                    <tr><td>Joma/Khoroch:</td>
                        <td>
                            <select class="jomaOrKhoroch" style="width: 155px;">
                                <option value="Select">Select</option>
                                <option value="Joma">Joma</option>
                                <option value="Khoroch">Khoroch</option>
                            </select>
                        </td></tr>
                    <tr><td>Taka:</td><td><input type="text" class="taka" value="" /></td></tr>
                    <tr><td>Tarik:</td><td><input type="text" class="tarik" value="<?php echo date("Y-m-d"); ?>" /></td></tr>
                    <tr><td></td><td><input type="button" class="save" id="save" value="Save"/></td></tr>
                    
                </table>



            </div>

            <div class ="jabedamain">
                <div class="jabedamainheader ">
                    <div class="">
                        Jabeda Khata <br />
                        <?php echo date("Y-m-d"); ?>
                        <input type="button" class="addanewrow" id="addanewrow" value="Add Row"   />
                    </div>

                    <div id="header"></div>
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
                                        <th>Voucher No</th>
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
                        <tr><td>Total Joma</td><td class="totaljoma"></td></tr>
                        <tr><td>Total KHOROCH</td><td class="totalkhoroch"></td></tr>
                        <tr><td>REMAINING</td><td class="remaining"></td></tr>
                        <tr><td></td><td><input type="button" class="addall" value="Show All" /> </td></tr>
                    </table>
                </div>
            </div>

            <div class="testsection">
                <input type="button" class="addrow" id="save" value="Add row"   />
                <table id="myTable">
                    <tbody>
                        <tr><td>1</td><td>2</td></tr>
                    </tbody>
                </table>

            </div>

            <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
            <script type="text/javascript" src="js/my_code.js"></script>
        </div>
    </body>
</html>
