<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<body> 
    <?php  
        $name = "Iswanaziera binti Ismail"; 
        $matricNumber = "AI220030";
        $course = "Bachelor of computer Science (Software Engineering)";
        $yearOfStudy = " Year 3";
        $address = "A-12-07 Suasana Lumayan Kondominium , Jalan Tasik Permaisuri 2 , Bandar Tun Razak , 56000,Cheras, Kuala Lumpur."
    ?> 
 
    <table border = "1"> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr> 
            <td>Matric Number</td> 
            <td><?php echo "$matricNumber"; ?></td>  
        </tr> 
        <tr> 
            <td>Course</td> 
            <td><?php echo "$course"; ?></td>  
        </tr> 
        <tr> 
            <td>Year Of Study</td> 
            <td><?php echo "$yearOfStudy"; ?></td>  
        </tr> 
        <tr> 
            <td>Address</td> 
            <td><?php echo "$address"; ?></td>  
        </tr> 
    </table> 
     
</body> 
</html> 
