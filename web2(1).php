<?php


 $fName="Juan";
 $mName="Dela";
 $sName="Cruz";
 $cvlStatus="Single";
 $designation="Student";

 $emp_no=2;
 $nodependent=3;
 $payDate="June 30, 2022";
 $empStats="Pabigat";
 $department="Department of Information Technology";
 $qualdep="Me";


 /*Basic Pay*/ 
 $rate;
 $cutoff;
 $income;

 /*Honorarium*/ 
 $rH2;
 $nopercutoff2;
 $totHonor;

 /*Other Income*/
 $rH3;
 $nopercutoff3;
 $totIncome;

 /*Income Summary*/
 $gross="";
 $net="";

 /* Regular Deductions */
 $sss="";
 $philhealth="";
 $pagibig="";
 $tax="";

 /* Other Deductions */
 $sssloan="";
 $pagibigloan="";
 $fcDeposit="";
 $fcLoan="";
 $SalaryLoan="";

 /* deduc summary */
 $totalDeduction="";

 /* Computation */
 
 if(isset($_POST['calcGross'])){
     // Basic Pay
     $rate=$_POST['rate'];
     $cutoff=$_POST['cutoff'];
     $income= $rate * $cutoff;

     // Honorarium 
     $rH2=$_POST['r/h'];
     $nopercutoff2=$_POST['no.hrs'];
     $totHonor= $rH2 * $nopercutoff2;

     /* Other Income */
     $rH3=$_POST['rperh'];
     $nopercutoff3=$_POST['cut'];
     $totIncome= $rH3 * $nopercutoff3;

     /* Income Summary */
     $gross=$income+$totHonor+$totIncome;
     if($gross>= 1000 && $gross<=1249){ 
        $sss=73.70; 
    } else if($gross>=1250 && $gross<=1749){                     
        $sss=110.50; 
    } else if($gross>=1750 && $gross<=2249){ 
        $sss=147.30; 
    } else if($gross>=2250 && $gross<=2749.99){                     
        $sss=184.20; 
    } else if($gross>=2750 && $gross<=3249.99){                     
        $sss=221.00; 
    } else if($gross>=3250 && $gross<=3749.99){                     
        $sss=257.80; 
    } else if($gross>=3750 && $gross<=4249.99){                     
        $sss=294.70; 
    } else if($gross>=4250 && $gross<=4749.99){                     
        $sss=331.50; 
    } else if($gross>=4750 && $gross<=5249.99){                     
        $sss=368.30; 
    } else if($gross>=5250 && $gross<=5749.99){                     
        $sss=405.20; 
    } else if($gross>=5750 && $gross<=6249.99){                     
        $sss=442.00; 
    } else if($gross>=6250 && $gross<=6749.99){                     
        $sss=478.80; 
    } else if($gross>=6750 && $gross<=7249.99){ 
        $sss=515.70; 
    } else if($gross>=7250 && $gross<=7749.99){ 
        $sss=552.50; 
    } else if($gross>=7750 && $gross<=8249.99){ 
        $sss=589.30; 
    } else if($gross>=8250 && $gross<=8749.99){                     
        $sss=626.20; 
    } else if($gross>=8750 && $gross<=9249.99){ 
        $sss=663.00; 
    } else if($gross>=9250 && $gross<=9749.99){ 
        $sss=699.80; 
    } else if($gross>=9750 && $gross<=10249.99){ 
        $sss=736.70; 
    } else if($gross>=10250 && $gross<=10749.99){                     
        $sss=773.50; 
    } else if($gross>=10750 && $gross<=11249.99){ 
        $sss=810.30; 
    } else if ($gross>=11250 && $gross<=11749.99){ 
        $sss=847.20; 
    } else if($gross>=11750 && $gross<=12249.99){ 
        $sss=884.00; 
    } else if($gross>=12250 && $gross<=12749.99){                     
        $sss=920.80; 
    } else if($gross>=12750 && $gross<=13249.99){ 
        $sss=957.70; 
    } else if($gross>=13250 && $gross<=13749.99){                     
        $sss=994.50; 
    } else if($gross>=13750 && $gross<=14249.99){ 
        $sss=1031.30; 
    } else if($gross>=14250 && $gross<=14749.99){                     
        $sss=1068.20; 
    } else if($gross>=14750 && $gross<=15249.99){ 
        $sss=1105.00; 
    } else if($gross>=15250 && $gross<=15749.99){ 
        $sss=1141.80;    
    } else{ 
        $sss=1178.70; 
    } 


    //PHILHEALTH TABLE CONTRIBUTIIOM
     if($gross<=8999.99 && $gross>=0){ 
        $philhealth=100.00; 
    } else if($gross>=9000 && $gross<=9999.99){ 
        $philhealth=112.50; 
    } else if($gross>=10000 && $gross<=10999.99){                     
        $philhealth=125.00; 
    } else if($gross>=11000 && $gross<=11999.99){                     
        $philhealth=137.50; 
    } else if($gross>=12000 && $gross<=12999.99){                     
        $philhealth=150.00; 
    } else if($gross>=13000 && $gross<=13999.99){                     
        $philhealth=162.50; 
    } else if($gross>=14000 && $gross<=14999.99){                     
        $philhealth=175.00; 
    } else if($gross>=15000 && $gross<=15999.99){ 
        $philhealth=187.50; 
    } else if($gross>=16000 && $gross<=16999.99){                     
        $philhealth=200.00; 
    } else if($gross>=17000 && $gross<=17999.99){ 
        $philhealth=212.50; 
    } else if($gross>=18000 && $gross<=18999.99){                     
        $philhealth=225.00; 
    } else if($gross>=19000 && $gross<=19999.99){ 
        $philhealth=237.50; 
    } else if($gross>=20000 && $gross<=20999.99){                     
        $philhealth=250.00; 
    } else if($gross>=21000 && $gross<=21999.99){ 
        $philhealth=262.50; 
    } else if($gross>=22000 && $gross<=22999.99){                     
        $philhealth=275.00; 
    } else if($gross>=23000 && $gross<=23999.99){ 
        $philhealth=287.50; 
    } else if($gross>=24000 && $gross<=24999.99){ 
        $philhealth=300.00; 
    } else if ($gross>=25000 && $gross<=25999.99){ 
        $philhealth=312.50; 
    } else if($gross>=26000 && $gross<=26999.99){                     
        $philhealth=325.00; 
    } else if($gross>=27000 && $gross<=27999.99){ 
        $philhealth=337.50; 
    } else if($gross>=28000 && $gross<=28999.99){ 
        $philhealth=350.00; 
    } else if ($gross>=29000 && $gross<=29999.99){ 
        $philhealth=362.50; 
    } else if ($gross>=30000 && $gross<=30999.99){ 
        $philhealth=375.00; 
    } else if($gross>=31000 && $gross<=31999.99){ 
        $philhealth=387.50; 
    } else if($gross>=32000 && $gross<=32999.99){                     
        $philhealth=400.00; 
    } else if($gross>=33000 && $gross<=33999.99){ 
        $philhealth=412.50; 
    } else if($gross>=34000 && $gross<=34999.99){ 
        $philhealth=425.00;                 
    } else{ 
        $philhealth=437.50; 
    } 

    //PAGIBIG CONTRIBUTION
    $pagibig=100.00;

    //tax CONTRIBUTION
    $tax=.10;
      if($gross<=150 && $gross>=12500){  
        } else if($gross>=12501 && $gross<=13333){                         
            $tax = $gross - $tax; 
        } else if($gross>=13334 && $gross<=15000){                         
            $tax=$gross - $tax; 
        } else if($gross>=15001 && $gross<=18333){                         
            $tax=$gross - $tax; 
        } else if($gross>=18334 && $gross<=24167){                         
            $tax=$gross - $tax; 
        } else if($gross>=24168 && $gross<=33333){                         
            $tax= $gross - $tax;
        } else if($gross>=33334 && $gross<=54167){ 
            $tax=$gross - $tax; 
        } else{ 
            $tax=$gross - $tax; 
        } 

        /*Other Deductions*/
        $sssloan = $_POST['sss'];
        $pagibigloan = $_POST['pag'];
        $fcDeposit = $_POST['Dep'];
        $fcLoan = $_POST['loan'];
        $SalaryLoan = $_POST['sal'];
        $sssloan="";
}
elseif (isset($_POST['net'])) { 
    $rateperhour = $_POST['rate'];
    $cutoff = $_POST['cutoff'];
    $income = $rateperhour * $cutoff;

    /*Honorarium*/
    $rH2 = $_POST['r/h'];
    $nopercutoff2 = $_POST['no.hrs'];
    $totHonor = $rH2 * $nopercutoff2;

    /*Otherincome*/
    $rH3 = $_POST['rperh'];
    $nopercutoff3 = $_POST['cut'];
    $totIncome = $rH3 * $nopercutoff3;


     /*Income Summary*/
     $gross = $incomepercutoff + $totHonor+$totalotherincome;

      if($gross>= 1000 && $gross<=1249){ 
                    $sss=73.70; 
                } else if($gross>=1250 && $gross<=1749){                     
                    $sss=110.50; 
                } else if($gross>=1750 && $gross<=2249){ 
                    $sss=147.30; 
                } else if($gross>=2250 && $gross<=2749.99){                     
                    $sss=184.20; 
                } else if($gross>=2750 && $gross<=3249.99){                     
                    $sss=221.00; 
                } else if($gross>=3250 && $gross<=3749.99){                     
                    $sss=257.80; 
                } else if($gross>=3750 && $gross<=4249.99){                     
                    $sss=294.70; 
                } else if($gross>=4250 && $gross<=4749.99){                     
                    $sss=331.50; 
                } else if($gross>=4750 && $gross<=5249.99){                     
                    $sss=368.30; 
                } else if($gross>=5250 && $gross<=5749.99){                     
                    $sss=405.20; 
                } else if($gross>=5750 && $gross<=6249.99){                     
                    $sss=442.00; 
                } else if($gross>=6250 && $gross<=6749.99){                     
                    $sss=478.80; 
                } else if($gross>=6750 && $gross<=7249.99){ 
                    $sss=515.70; 
                } else if($gross>=7250 && $gross<=7749.99){ 
                    $sss=552.50; 
                } else if($gross>=7750 && $gross<=8249.99){ 
                    $sss=589.30; 
                } else if($gross>=8250 && $gross<=8749.99){                     
                    $sss=626.20; 
                } else if($gross>=8750 && $gross<=9249.99){ 
                    $sss=663.00; 
                } else if($gross>=9250 && $gross<=9749.99){ 
                    $sss=699.80; 
                } else if($gross>=9750 && $gross<=10249.99){ 
                    $sss=736.70; 
                } else if($gross>=10250 && $gross<=10749.99){                     
                    $sss=773.50; 
                } else if($gross>=10750 && $gross<=11249.99){ 
                    $sss=810.30; 
                } else if ($gross>=11250 && $gross<=11749.99){ 
                    $sss=847.20; 
                } else if($gross>=11750 && $gross<=12249.99){ 
                    $sss=884.00; 
                } else if($gross>=12250 && $gross<=12749.99){                     
                    $sss=920.80; 
                } else if($gross>=12750 && $gross<=13249.99){ 
                    $sss=957.70; 
                } else if($gross>=13250 && $gross<=13749.99){                     
                    $sss=994.50; 
                } else if($gross>=13750 && $gross<=14249.99){ 
                    $sss=1031.30; 
                } else if($gross>=14250 && $gross<=14749.99){                     
                    $sss=1068.20; 
                } else if($gross>=14750 && $gross<=15249.99){ 
                    $sss=1105.00; 
                } else if($gross>=15250 && $gross<=15749.99){ 
                    $sss=1141.80;    
                } else{ 
                    $sss=1178.70; 
                } 
                 
         //PHILHEALTH TABLE CONTRIBUTIIOM
                  if($gross<=8999.99 && $gross>=0){ 
                    $philhealth=100.00; 
                } else if($gross>=9000 && $gross<=9999.99){ 
                    $philhealth=112.50; 
                } else if($gross>=10000 && $gross<=10999.99){                     
                    $philhealth=125.00; 
                } else if($gross>=11000 && $gross<=11999.99){                     
                    $philhealth=137.50; 
                } else if($gross>=12000 && $gross<=12999.99){                     
                    $philhealth=150.00; 
                } else if($gross>=13000 && $gross<=13999.99){                     
                    $philhealth=162.50; 
                } else if($gross>=14000 && $gross<=14999.99){                     
                    $philhealth=175.00; 
                } else if($gross>=15000 && $gross<=15999.99){ 
                    $philhealth=187.50; 
                } else if($gross>=16000 && $gross<=16999.99){                     
                    $philhealth=200.00; 
                } else if($gross>=17000 && $gross<=17999.99){ 
                    $philhealth=212.50; 
                } else if($gross>=18000 && $gross<=18999.99){                     
                    $philhealth=225.00; 
                } else if($gross>=19000 && $gross<=19999.99){ 
                    $philhealth=237.50; 
                } else if($gross>=20000 && $gross<=20999.99){                     
                    $philhealth=250.00; 
                } else if($gross>=21000 && $gross<=21999.99){ 
                    $philhealth=262.50; 
                } else if($gross>=22000 && $gross<=22999.99){                     
                    $philhealth=275.00; 
                } else if($gross>=23000 && $gross<=23999.99){ 
                    $philhealth=287.50; 
                } else if($gross>=24000 && $gross<=24999.99){ 
                    $philhealth=300.00; 
                } else if ($gross>=25000 && $gross<=25999.99){ 
                    $philhealth=312.50; 
                } else if($gross>=26000 && $gross<=26999.99){                     
                    $philhealth=325.00; 
                } else if($gross>=27000 && $gross<=27999.99){ 
                    $philhealth=337.50; 
                } else if($gross>=28000 && $gross<=28999.99){ 
                    $philhealth=350.00; 
                } else if ($gross>=29000 && $gross<=29999.99){ 
                    $philhealth=362.50; 
                } else if ($gross>=30000 && $gross<=30999.99){ 
                    $philhealth=375.00; 
                } else if($gross>=31000 && $gross<=31999.99){ 
                    $philhealth=387.50; 
                } else if($gross>=32000 && $gross<=32999.99){                     
                    $philhealth=400.00; 
                } else if($gross>=33000 && $gross<=33999.99){ 
                    $philhealth=412.50; 
                } else if($gross>=34000 && $gross<=34999.99){ 
                    $philhealth=425.00;                 
                } else{ 
                    $philhealth=437.50; 
                } 


                //PAGIBIG CONTRIBUTION
                  $pagibig=100.00;
         //for single or married with qualified dependents                 
                    if($gross<=150 && $gross>=12500){ 
                        $tax=(($gross-0) + 0); 
                    } else if($gross>=12501 && $gross<=13333){                         
                        $tax=((($gross-12500)*.05) + 0); 
                    } else if($gross>=13334 && $gross<=15000){                         
                        $tax=((($gross-13333)*.10) + 41.67); 
                    } else if($gross>=15001 && $gross<=18333){                         
                        $tax=((($gross-15001)*.15) + 208.33); 
                    } else if($gross>=18334 && $gross<=24167){                         
                        $tax=((($gross-18333)*.20) + 708.33); 
                    } else if($gross>=24168 && $gross<=33333){                         
                        $tax=((($gross-24167)*.25) + 1875); 
                    } else if($gross>=33334 && $gross<=54167){ 
                        $tax=((($gross-33333)*.30) + 4166.67); 
                    } else{ 
                        $tax=((($gross-54167)*.32) + 10416.67); 
                    } 

                
     /*Other Deductions*/
     $sssloan = $_POST['sssloan'];
     $pagibigloan = $_POST['pagibigloan'];
     $facultysavingsdeposit = $_POST['facultysavingsdeposit'];
     $facultysavingsloan = $_POST['facultysavingsloan'];
     $salaryloan = $_POST['salaryloan'];


     $totaldeductions = (float)$sss + (float)$philhealth + (float)$pagibig+ (float)$tax+ (float)$sssloan + (float)$pagibigloan + (float)$facultysavingsdeposit + (float)$facultysavingsloan + (float)$salaryloan ; 
                $net = (float)$gross - (float)$totaldeductions; 

}
elseif (isset($_POST['new'])) {
     /*Basic Pay*/ 
    $rate="";
    $cutoff="";
    $income="";

    /*Honorarium*/ 
    $rH2="";
    $nopercutoff2="";
    $totHonor="";

    /*Other Income*/
    $rH3="";
    $nopercutoff3="";
    $totIncome="";

    /*Income Summary*/
    $gross="";
    $net="";
 }

           
        

?>