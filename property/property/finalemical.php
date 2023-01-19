<?php
    // include("../configuration/config.php");
    session_start(); 
?>
<html>
    <head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <style type="text/css">
            table#emi{
                border:1px solid #d4d4d4;
                margin:0 auto;
                font-family:'Cantora One', sans-serif;
                font-size:14px;
            }
            table#emi td{
                padding:5px;

            }
            table#emi tr:nth-child(even){
                background:#E4E4E4;
                border:1px solid #D4D4D4;
                border-left:0;
                border-right:0;
            }
            table#emi tr td:nth-last-child(1){
                background:#a4c2ff;
            }
            table#emi input{
                margin-bottom:5px !important;
                margin-top:5px;
            }
            #result td{
                padding:5px;
            }
            table#result{
                width:477px;
                border:1px solid #d4d4d4;
                margin:0 auto;
                margin-top:10px;
                display:none;
                font-family:'Cantora One', sans-serif;
                font-size:14px;
            }
            table#result tr:nth-child(even){
                background:#E4E4E4;
                border:1px solid #D4D4D4;
            }
            table#result tr td:nth-last-child(1){
                width:213px;
            }
        </style>
    </head>
    <body>
       
        <div class="row justify-content-center" style="margin-top:85px">
            
            <div class="col-md-10">
                <div class="property-details">
                    <div class="property-details">
                        <div class="col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded">
                            <form name="loandata" method="post" action="finalemical.php">
                                <label class="row justify-content-center" style="margin-bottom:15px; font-size: 21px"><b>EMI LOAN CALCULATOR</b></label>
                                <table id="emi" width="100%">
                                    
                                    <tr style="height: 60px">
                                        <td colspan="3">
                                            <b style="margin-left:30px; font-size: 18.5px">
                                                Enter Loan Information:
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td width="48%" style=" font-size: 17px" >
                                            Amount of the loan (any currency):
                                            <span class="err" style="color:red;">*</span>
                                        </td>
                                        <td>
                                            <input type="text"  class="btn" name="principal" id="principal" size="18" style="margin-left:30px;" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td style=" font-size: 17px" >
                                            Annual percentage rate of interest: 
                                            <span class="err" style="color:red;">*</span>
                                        </td>
                                        <td>
                                            <input type="text" class="btn" name="interest" id="interest" size="18" style="margin-left:30px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td style=" font-size: 17px" >
                                            Repayment period in years: 
                                            <span class="err" style="color:red;">*</span>
                                        </td>
                                        <td>
                                            <input type="text" class="btn" name="years" id="years" size="18" 
                                            style="margin-left:30px;">
                                        </td>
                                    </tr>   
                                    <tr style="height:50px">
                                        <td colspan="3">
                                            <input type="submit" style="margin-left:30px; width: 140px; color:white;
                                            background-color:#7e4a4f;font-size:18px" value="Compute" 
                                            name="EMI_submit" id="EMI_submit" class="btn">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <table>
                                <td colspan="3" width="90%" >
                                    <input type="submit" style="margin-left:83%; margin-bottom:15px;
                                    color:white;background-color:#7e4a4f; font-size:18px" value="Show Pie Chart"name="EMI_submit1" id="EMI_submit1" class="btn" 
                                    onclick="location.href='pie.php';" style="margin-bottom: 15px">
                                </td>
                                <td colspan="3" >
                                    <input type="submit" style="margin-left:10px; margin-bottom:15px;
                                    color:white;background-color:#7e4a4f; font-size:18px" value="Show Bar Graph" name="EMI_submit2" id="EMI_submit2" class="btn" 
                                    onclick="location.href='ibar.php';" style="margin-bottom: 15px;">
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    error_reporting(0);
    $l=0;
    if(isset($_POST['EMI_submit']))
    {
        $rate = $_POST['interest']/100/12;
        $principle = $_POST['principal'];

        session_start();
        $_SESSION['pri']=$principle;

        //echo $principle;
        $time = $_POST['years']*12;
        $year=$time/12;

        session_start();
        $_SESSION['year']=$year;

        $x= pow(1+$rate,$time);
        $monthly = ($principle*$x*$rate)/($x-1);
        $monthly = round($monthly);
        $total_interest_rate=0;
        $total_principal=0;
        $current_month = 1;
        $current_year  = 1;
        $k=0;
        print("<div class='row justify-content-center' style='margin-top:-30px'><div class='col-md-10'>
                <div class='property-details'>
                <div class='property-details'>
                <div class='col-md-12  table-responsive-sm card shadow-sm p-3 mb-5 bg-white rounded'>
                <table cellpadding='5' cellspacing='0' bgcolor='#eeeeee' border='1' width='100%'>");
        $legend  = "\t<tr valign='top' bgcolor='#a4c2ff' align='center' style='height:38px'>\n";
        $legend .= "\t\t<td><b>Month</b></td>\n";
        $legend .= "\t\t<td><b>Beginning  Balance</b></td>\n";
        $legend .= "\t\t<td><b>Interest Paid</b></td>\n";
        $legend .= "\t\t<td><b>Principal Paid</b></td>\n";
        $legend .= "\t\t<td><b>Monthely Paid</b></td>\n";
        $legend .= "\t\t<td><b>Remaing Balance</b></td>\n";
        $legend .= "\t</tr>\n";
        echo $legend;

        while($current_month <= $time)
        {
            global $rate,$principle,$monthly,$r,$p,$e,$total_interest_rate,$total_principal,$_SESSION,$k;
            $r = $principle * $rate;
            $p = round($monthly-$r);
            // echo $principle,"<br>";
            //echo $p,"<br>";
            $e = round($principle-$p);
            if($current_month==$time-1)
            {
                $_SESSION['tl']=$e;
            }
            if($current_month==$time)
            {
                $p=$_SESSION['tl'];
                $e=$p-$p;
            }
            $total_interest_rate=$total_interest_rate+$r;
            $total_principal=$total_principal+$p;    
            print("\t<tr valign='top' bgcolor='#ffffff' align='center'>");
            print("\t\t<td>".$current_month."</td>");
            print("\t\t<td>".number_format(round($principle))."</td>");
            print("\t\t<td>".number_format(round($r))."</td>");
            print("\t\t<td>".number_format($p)."</td>");
            print("\t\t<td>".number_format($monthly)."</td>");
            print("\t\t<td>".number_format($e)."</td>");
            print("</tr>");

            ($current_month % 12) ? $show_legend = FALSE : $show_legend = TRUE;

            if($show_legend)
            {
                print("\t<tr valign='top' bgcolor='#d4d4d4'>\n");
                print("\t\t<td colspan='6'><b>Totals for year " . $current_year . "</td>\n");
                print("\t</tr>\n");
                $total_spend_year = $total_principal + $total_interest_rate;
                print("\t<tr valign='top' bgcolor='$ffffff'>\n");
                print("\t\t<td>&nbsp;</td>");
                print("\t\t<td colspan='5'>\n");
                print("\t\tYou will Spend ".number_format($total_spend_year)." in year ".$current_year."<br>\n");
                print("\t\tTotal Interest Rate in ".$current_year." year is ".number_format($total_interest_rate)."<br>\n");
                print("\t\tTotal Principal in ".$current_year." year is ".number_format($total_principal)."\n");

                /* session for bar chart */

                $_SESSION['tp'][$l]=(round($total_principal));
                $_SESSION['ir'][$l]=(round($total_interest_rate));
                $l++;

                print("\t\t</td>\n");
                print("\t</tr>");
                print("\t<tr valign='top' bgcolor='$ffffff'>\n");
                print("\t\t<td colspan='6'>&nbsp;<br><br></td>\n");
                print("\t</tr>\n");

                $current_year++;
                if($current_month < $time)
                {
                    echo $legend;
                }

                /* session for pie chart */
                session_start();
                $_SESSION['cm']=$time/12;
                $totalint +=$total_interest_rate;
                //echo round($totalint);
                $_SESSION['totalint']=$totalint;


                /* reseting the value of current month for addition of year seprately */
                if($current_month %12==0)
                {
                    $total_interest_rate=0;
                    $total_principal=0;
                }
            }
            $principle=$e;
            $current_month++;
        }
        print("</table></div></div></div></div>");
    }
?>