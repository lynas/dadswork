<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body onload="f1()">
        <div class="rootContainer">
            <div class ="inputform">
                <table>
                    <tr><td>Voucher no:</td><td><input type="text" class="vn" value="" /></td></tr>
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
                    <tr><td></td><td><input type="button" class="save" id="save" value="Save"   /></td></tr>
                    <tr><td></td><td><input type="button" class="sht" id="sht" value="sht"   /></td></tr>
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



                            <table class="joma">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>V No</th>
                                        <th>Biboron</th>
                                        <th>Taka</th>
                                    </tr>
                                    <tr>
                                        <td class="cl">1</td>
                                        <td>101</td>
                                        <td>National Bank Dhaka Bangladesh Faridpur jessore khulna chitagong</td>
                                        <td>50000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>102</td>
                                        <td>Sweden</td>
                                        <td>12000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>103</td>
                                        <td>Mexico</td>
                                        <td>10000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>205</td>
                                        <td>Austria</td>
                                        <td>6500</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>909</td>
                                        <td>UK</td>
                                        <td>4000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>901</td>
                                        <td>Germany</td>
                                        <td>96500</td>
                                    </tr>

                                </tbody>
                            </table>










                        </div>
                      
                        <div id="second">
                            
                            
                            
                            <table class="khoroch">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>Voucher No</th>
                                        <th>Biboron</th>
                                        <th>Taka</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>101</td>
                                        <td>National Bank</td>
                                        <td>50000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>102</td>
                                        <td>Sweden</td>
                                        <td>12000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>103</td>
                                        <td>Mexico</td>
                                        <td>10000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>205</td>
                                        <td>Austria</td>
                                        <td>6500</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>909</td>
                                        <td>UK</td>
                                        <td>4000</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>901</td>
                                        <td>Germany</td>
                                        <td>96500</td>
                                    </tr>

                                </tbody>
                            </table>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>

                    </div>

                    <div style="clear: both;">
                    </div>						

                </div>



            </div>
            <div class="start">

            </div>
            <div>
                <table border="1px solid black">
                    <tr><td>Jabeda</td></tr>
                    <tr><td>Date</td></tr>
                    <tr><td>Joma</td> <td>Khoroch</td> </tr> 
                    <tr><td>Voucher no</td><td>Bibiron</td><td>taka</td><td>voucher no</td><td>bibiron</td><td>taka</td></tr>
                    <tr><td>total</td><td>amount</td><td>taka</td><td>total</td><td>amount</td><td>taka</td></tr>
                </table>
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
