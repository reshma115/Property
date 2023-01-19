<?php
 		
 	include("config.php"); 

    if (isset($_POST['submit6']))
    {  
        $filename=$_FILES["agentpic"]["name"];

        // $tempname=$_FILES["builderpic"]["tmp_name"];    
        // $folder="images/".$filename;
        // move_uploaded_file($tempname,$folder);

        // $builderpic=$_POST['builderpic'];
        $agentname=$_POST['agentname'];
        $agentinfo=$_POST['agentinfo'];
        $agentarea=$_POST['agentarea'];
        $agentyear=$_POST['agentyear'];
        $agentsale=$_POST['agentsale'];
        $aminsale=$_POST['aminsale'];
        $amaxsale=$_POST['amaxsale'];
        $agentrent=$_POST['agentrent'];
        $aminrent=$_POST['aminrent'];
        $amaxrent=$_POST['amaxrent'];
        $pcode=$_POST['pcode'];

        // if(file_exists("images/". $_FILES["builderpic"]["name"])) 
        // {
        //     // $store =$_FILES["builderpic"]["name"];
        //     header("location:builder-details.php");
        //     echo "image is already exists..........";
        // }
        // else
        // {
            $result=mysqli_query($mysqli,"Insert into popular_agent_details values ('','$filename','$agentname',
              '$agentinfo','$agentarea','$agentyear','$agentsale','$aminsale','$amaxsale','$agentrent','$aminrent','$amaxrent','$pcode')");

    	    if ($result) /*for images*/
    	    {   
             

              move_uploaded_file($_FILES["agentpic"]["tmp_name"],"../../images1/".$_FILES["agentpic"]["name"]);
    	        header("location:popular-agent.php");
              // echo "success";
    	    }    
    	    else
          {
    	        echo "failed";
    	    }

      // }
  }

      /*delete functionality*/

    $popular_agent_id=$_GET['popular_agent_id'];
    //echo $id;
    $query=" DELETE FROM `popular_agent_details` WHERE popular_agent_id = $popular_agent_id";
    mysqli_query($mysqli,$query);
    
    header("location:popular-agent.php");

    
?>


