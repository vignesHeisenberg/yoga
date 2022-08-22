<?php  
include('db.php');
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=Stock_Daily_Report.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
$sep = "\t"; //tabbed character

print("\n");   
        $schema_insert = str_replace($sep."$", "", "".$sep."Gmail".$sep."Name".$sep."Whatsapp Number".$sep."Contact Number".$sep."Country".$sep."Beginner".$sep."Class".$sep."Health Issues".$sep."Time");
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
$result=mysqli_query($connection,"select itname,rate,stock,date from item");
    while($row =$result->fetch_assoc())
    {
        $schema_insert = "";
          $schema_insert=$row['mail'].$sep.$row['name'].$sep.$row['wp_number'].$sep.$row['contact_number'].$sep.$row['country'].$sep.$row['beginner'].$sep.$row['class'].$sep.$row['health_issue'].$sep.$row['time'];
        
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }  


 exit;
?>