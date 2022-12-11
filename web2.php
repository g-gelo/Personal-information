<?php
    
   include("web2(1).php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Personal Information</title>
</head>
<body>
    <form action="">
        <div class="upper">
            <label for="empNo">Employee Number:</label>
            <input type="text" id="empNo" value="<?php echo $emp_no ?>"><br>
            <label for="firstN">First Name:</label>
            <input type="text" id="firstN" value="<?php echo $fName ?>"><br>
            <label for="midN">Middle Name:</label>
            <input type="text" id="midN" value="<?php echo $mName ?>"><br>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" value="<?php echo $sName ?>"><br>
            <label for="civStats">Civil Status:</label>
            <input type="text" id="civStats" value="<?php echo $cvlStatus ?>"><br>
            <label for="desig">Designation:</label>
            <input type="text" id="desig" value="<?php echo $designation ?>"><br>
        </div>
    </form>
    <form action="">
    <div class="upper2">
            <label for="dependent">No. of Dependent(s):</label>
            <input type="number" id="dependent" value="<?php echo $nodependent ?>"><br>
            <label for="Paydate">Paydate:</label>
            <input type="date" name="" id="Paydate" value="<?php echo $payDate ?>"><br>
            <label for="Emp">Employee Status:</label>
            <input type="text" id="Emp" value="<?php echo $empStats ?>"><br>
            <label for="Dept">Department:</label>
            <input type="text" name="" id="Dept" value="<?php echo $department ?>"><br>
            <label for="qualdep">Qualified Dependent:</label>
            <input type="text" name="qualdep" id="qualdep" value="<?php echo $qualdep ?>">
        </div>
    </form>
    <div class="pic">
        <div class="box"> <img src="img/sadboy.jpg" alt="Sad boy"></div>
        <button class="brow">Browse</button>
    </div>
    <div class="right">
        <div class="right1">
            <h5>BASIC PAY</h5>
            <form action="" method="post">
                <label for="rate">Rate/Hour: </label>
                <input type="number" id="rate" name="rate" value="<?php echo $rate ?>"><br>
                <label for="cutoff">No. of Hours/Cut off</label>
                <input type="number" id="cutoff" name="cutoff" value="<?php echo $cutoff ?>"><br>
                <label for="income">Income Per Cut Off</label>
                <input type="number" name="income" id="income" disabled="disbaled" value="<?php echo $income ?>"><br>
            </form>
            </div>
        <div class="right2">
            <h5>HONORARIUM</h5>
            <label for="r/h">Rate/Hour:</label>
            <input type="number" id="r/h"name="r/h" ><br>
            <label for="no.hrs">No. of Hours/Cut off: </label>
            <input type="number" id="no.hrs"name="no.hrs" ><br>
            <label for="tot.Honor">Total Honorarium Pay:</label>
            <input type="number" id="tot.Honor" disabled="disbaled" name="tot.Honor" value="<?php echo $totHonor ?>"><br>
        </div>
        <div class="right3">
            <h5>OTHER INCOME</h5>
            <label for="rperh">Rate/Hour:</label>
            <input type="number" id="rperh" name="rperh" ><br>
            <label for="cut">No. of Hours/Cut Off:</label>
            <input type="number" id="cut" name="cut" ><br>
            <label for="totIncome">Total Other Income Pay: </label>
            <input type="number" id="totIncome" disabled="disbaled" name="totIncome" value="<?php echo $totIncome ?>"><br>
        </div>
        <div class="right4">
            <h5>INCOME SUMMARY</h5>
            <label for="gross">GROSS INCOME:</label>
            <input type="number" name="gross" id="gross" disabled="disbaled" value="<?php echo $gross ?>"><br>
            <label for="net">NET INCOME:</label>
            <input type="number" name="net" id="net" disabled="disbaled" value="<?php echo $gross ?>"><br>
        </div>
    </div>
    <div class="left">
        <div class="left1">
            <h5>REGULAR DEDUCTIONS</h5>
            <label for="s">SSS Contribution:</label>
            <input type="number" name="s" id="s" value="<?php echo $sss ?>" disabled="disbaled"><br>
            <label for="Phil">PhilHealth Contribution:</label>
            <input type="number" name="Phil" id="Phil" value="<?php echo $philhealth ?>" disabled="disbaled"><br>
            <label for="Pagibig">Pagibig Contribution:</label>
            <input type="number" name="Pagibig" id="Pagibig" value="<?php echo $pagibig ?>" disabled="disbaled"><br>
            <label for="tax">Tax:</label>
            <input type="number" name="tax" id="tax" value="<?php echo $tax ?>" disabled="disbaled"><br>
        </div>
        <div class="left2">
            
                <h5>OTHER DEDUCTIONS</h5>
                <label for="sss">SSS LOAN:</label>
                <input type="number" id="sss" value="<?php echo $sssloan ?>" name="sss" ><br>
                <label for="pag">PAGIBIG loan:</label>
                <input type="number" id="pag" value="<?php echo $pagibigloan ?>" name="pag" ><br>
                <label for="Dep">Faculty Savings Deposit</label>
                <input type="number" id="Dep" value="<?php echo $fcDeposit ?>" name="Dep" ><br>
                <label for="loan">Faculty Savings Loan:</label>
                <input type="number" id="loan" value="<?php echo $fcLoan ?>" name="loan" ><br>
                <label for="sal">Salary Loan:</label>
                <input type="number" id="sal" value="<?php echo $SalaryLoan ?>" name="sal" ><br>
                <label for="drown">Others:</label>
                <input type="text" name="down" id="otherdeduc" disabled="disabled">
            
        </div>
        <div class="left3">
            <h5>Deduction Summary</h5>
            <label for="deduct">Total Deductions:</label>
            <input type="number" id="deduct" disabled="disbaled"><br>
        </div>
    </div>
    <div class="last">
        
            <button class="button-52" type="submit" name="calcGross" id="calcGross">CALCULATE GROSS INCOME</button>
            <button class="button-52" name="calcNet" id="calcNet">CALCULATE NET INCOME</button>
            <button class="button-52" name="new" id="new">NEW</button>
            <button class="button-52" name="cancel" id="cancel">CANCEL</button>
            <button class="button-52" name="payslip" id="payslip">PRINT PAYSLIP</button>
            <button class="button-52" name="prev" id="prev">PREVIEW PAYSLIP DETAILS</button>
            <button class="button-52" name="exit" id="exit">EXIT</button>
        
    </div>
</body>
</html>