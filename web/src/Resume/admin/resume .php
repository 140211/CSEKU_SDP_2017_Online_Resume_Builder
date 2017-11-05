<?php
ob_start();
session_start();
include_once 'dbconnect.php';

// if(isset($_SESSION['usr_id'])!="") {
//     $id = $_SESSION['usr_id'];
// }
// else
// 	{
// 		$id = $_GET['id'];
// 	}
    

?>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat Subrayada' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Farsan' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet'>
</head>

<style>
    body {
        height: 842px;
        width: 595px;
        /* to make A4 size page... */
        margin-left: auto;
        margin-right: auto;        
    }
</style>

<body>
	<form name="StudentRegistration">

		<div style="position:relative; font-family: 'Trebuchet MS', sans-serif; ">
			<hr/>			
			<?php 
			// $result = mysqli_query($connection, "SELECT `uid`, `image`, `fname`, `lname`, `designation`, `phone`, `email`, `website`, `bloodgroup`, `datebirth` FROM personal WHERE uid = '".$id."' ");
	            $result = mysqli_query($connection, "SELECT `uid`, `image`, `fname`, `lname`, `designation`, `phone`, `email`, `website`, `bloodgroup`, `datebirth` FROM personal WHERE uid = 1 ");
	            $row = mysqli_fetch_array($result);

	            $fname = $row['fname'];
	            $lname = $row['lname'];
	            $name = $fname." ".$lname;

	            $email = $row['email'];
	            $phone = $row['phone'];
	            $photo = $row['image'];
	            $bloodgroup = $row['bloodgroup'];
	            $datebirth = $row['datebirth'];
            ?>
            <!-- <img src="<?php echo $photo; ?>" width="auto" height="95px" style="position:absolute; margin-left:470px;margin-top:-8px; border: .5px solid dimgray ;border-radius: 5px;"> -->

            <img src="\web\images\avi.jpg" width="auto" height="95px" style="position:absolute; margin-left:470px;margin-top:-8px; border: .5px solid dimgray ;border-radius: 5px;">

			<center style="position:absolute;  margin-right: auto; font-family:'Alegreya Sans SC'; ">
				<font size=3>Curriculum Vitae of</font>
				<font style="font-family:'Alegreya Sans SC'; " size=6 ><b><?php echo $name ?></b></font>	
			</center>
				<br>

			<font style="position:absolute;  margin-top: 30px; ">
				<font size=3><b>Email :</b> <?php echo $email ?><br><b>Contact no :</b> <?php echo $phone ?></font>
				<b>
			</font>
			<b>
		</div>

		<div style="position:relative; margin-top:70px;">			
			<hr/>

			<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						CARRER OBJECTIVE
					</font>				
					</td>
				</tr>	
			</table>

			<?php 			
	            $result = mysqli_query($connection, "SELECT data FROM pages WHERE pid = 1 ");
	            $row = mysqli_fetch_array($result);
	            
	            $data = $row['data'];
            ?>

			<font style="font-family:Gudea; font-size:15px;">
				<?php echo $data ?>
			<br> 
				.
			</font>

			<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						ACADEMIC QUALIFICATIONS
					</font>				
					</td>
				</tr>	
			</table>
			
		<style>
			table {
			    width:100%;
			}
			table#t01 tr:nth-child(even) {
			    background-color: #eee;
			}
			table#t01 tr:nth-child(odd) {
			   background-color:#fff;
			}
			table#t01 th {
			    background-color: DarkGray ;
			    color: white;
			}
		</style>

		<table id="t01">
		  <tr>
		    <th></th>
		    <th>Institution</th> 
		    <th>Group</th>
		    <th>GPA</th>
		    <th>Passing Year</th>
		    <th>Board</th>
		  </tr>

		  <?php 			
	            $result = mysqli_query($connection, "SELECT `uid`, `group`, `gpa`, `board`, `fromyear`, `toyear`, `college`, `course`, `description` FROM education WHERE uid = 1 and course='SSC' ");
	            $row = mysqli_fetch_array($result);
	            
	            $college = $row['college'];
	            $toyear = $row['toyear'];
	            $board = $row['board'];
	            $group = $row['group'];
	            $gpa = $row['gpa'];
            ?>
		  <tr>
		    <td>SSC</td>
		    <td><?php echo $college ?></td>
		    <td><?php echo $group ?></td>
		    <td><?php echo $gpa ?></td>
		    <td><?php echo $toyear ?></td>
		    <td><?php echo $board ?></td>   
		  </tr>
		  
		  <?php 			
	            $result = mysqli_query($connection, "SELECT `uid`, `group`, `gpa`, `board`, `fromyear`, `toyear`, `college`, `course`, `description` FROM education WHERE uid = 1 and course='HSC' ");
	            $row = mysqli_fetch_array($result);
	            
	            $college = $row['college'];
	            $toyear = $row['toyear'];
	            $board = $row['board'];
	            $group = $row['group'];
	            $gpa = $row['gpa'];
            ?>
		  <tr>
		    <td>HSC</td>
		    <td><?php echo $college ?></td>
		    <td><?php echo $group ?></td>
		    <td><?php echo $gpa ?></td>
		    <td><?php echo $toyear ?></td>
		    <td><?php echo $board ?></td>   
		  </tr>

		  <?php 			
	            $result = mysqli_query($connection, "SELECT `uid`, `group`, `gpa`, `board`, `fromyear`, `toyear`, `college`, `course`, `description` FROM education WHERE uid = 1 and course='Bachelor' ");
	            $row = mysqli_fetch_array($result);
	            
	            $college = $row['college'];
	            $toyear = $row['toyear'];
	            $board = $row['board'];
	            $group = $row['group'];
	            $gpa = $row['gpa'];
            ?>
		  <tr>
		    <td>Bachelor</td>
		    <td><?php echo $college ?></td>
		    <td><?php echo $group ?></td>
		    <td>-</td>
		    <td>-</td>
		    <td>-</td>
		  </tr>
		</table>
		.
		<br>

		<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						WORKING EXPERIENCE
					</font>				
					</td>
				</tr>	
			</table>
		
		<table cellpadding="2" align="left" cellspacing="2" frame="none" style="position: relative;font-family:'Alegreya Sans SC'; font-size:16px;">
				<tr>
					<td><code>Know C , Java , C# , Android , HTML and CSS , PHP, Laravel, Database<!-- Here goes Name --></td>
				</tr>
		</table>
		.<br>

		<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						PROJECTS
					</font>				
					</td>
				</tr>	
			</table>			
			
			<?php 
				$result = mysqli_query($connection, "SELECT `photo`, `title`, `subtitle`, `filter` FROM `projects` WHERE uid = 1 ");
			 ?>
			
			<?php 	
				while($row = mysqli_fetch_assoc($result)){			            		            
		            $photo = $row['photo'];
		            $subtitle = $row['subtitle'];
		            $filter = $row['filter'];
		            $title = $row['title'];	            	            
				 "<ul>";
					 echo "<li>".$title. "</li>";
				"</ul>";
				}				            
			?>

		<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						PERSONAL INFORMATION
					</font>				
					</td>
				</tr>	
		</table>
		<table cellpadding="2" align="left" cellspacing="2" frame="none" style="position: relative;font-family:'Alegreya Sans SC'; font-size:16px;">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $name ?><!-- Here goes Name --></td>
				</tr>
				<tr>
					<td>Father Name</td>
					<td>:</td>
					<td>Md. Sowkat Molla<!-- Here goes Father Name --></td>
				</tr>
				<tr>
					<td>Mother Name</td>
					<td>:</td>
					<td>Hasina Begum<!-- Here goes Mother Name --></td>
				</tr>				
				<tr>
					<td>Blood Group</td>
					<td>:</td>
					<td style="font-family:Gudea;"> <?php echo $bloodgroup ?> <!-- Here goes roll no --></td>
				</tr>
				
				<tr>
					<td>Date of Birth</td>
					<td>:</td>
					<td style="font-family:Gudea;"><?php echo $datebirth ?><!-- Here goes DOB--></td>
				</tr>

				<tr>
					<td>Religious View </td>
					<td>:</td>
					<td >Islam<!-- Here goes Religion --></td>
				</tr>

				<tr>
					<td>Marital Status</td>
					<td>:</td>
					<td >Unmarried<!-- Here goes married state --></td>
				</tr>

				<tr>
					<td>Nationality</td>
					<td>:</td>
					<td style="font-family:Gudea;">Bangladeshi<!-- Here goes nationality --></td>
				</tr>
				<tr>
					<td>Permanent Address </td>
					<td>:</td>
					<td style="font-family:Gudea;">Village+post:Gutudia,Thana:Dumuria,District:Khulna<!-- Here goes Address --></td>
				</tr>
			</table>

			<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						LANGUAGE PROFICIENCY
					</font>				
					</td>
				</tr>	
		</table>
		
		<table cellpadding="2" align="left" cellspacing="2" frame="none" style="position: relative;font-family:'Alegreya Sans SC'; font-size:16px;">
				<tr>
					<td>Bangla</td>
					<td>:</td>
					<td>Mother Language<!-- Here goes Name --></td>
				</tr>
				<tr>
					<td>English</td>
					<td>:</td>
					<td>Good at speaking and writing<!-- Here goes Name --></td>
				</tr>
		</table>

			<table cellpadding="2" align="center" cellspacing="6" style="border: 2px solid dimgray;
		    border-radius: 10px; position: relative;font-family:Gudea; font-size:15px;">
				<tr>	
					<td>				
					<font style="font-family: 'Alegreya Sans SC'; font-size:22px; color:seagreen ;"> 
						REFERENCES
					</font>				
					</td>
				</tr>	
			</table>

			<?php 
			    $result = mysqli_query($connection, "SELECT `refId`, `Name`, `Designation`, `Institute`, `contact_number`, `email` FROM `reference` WHERE uid = 1 ");
	            $row = mysqli_fetch_array($result);

	            $name = $row['Name'];
	            $designation = $row['Designation'];
	            $institute = $row['Institute'];
	            $contact_number = $row['contact_number'];
	            $email = $row['email'];	            
            ?>

		<table id="t01">
		  <tr>
		    <th>Name</th>
		    <th>Designation</th> 
		    <th>Institute</th>
		    <th>Contact</th>
		    <th>Email</th>		    
		  </tr>

		  <tr>
		    <td><?php echo $name ?></td>
		    <td><?php echo $designation ?></td>
		    <td><?php echo $institute ?></td>
		    <td><?php echo $contact_number ?></td>
		    <td><?php echo $email ?></td>		    
		  </tr>
		  <tr>
		    <tr>
		    <td><?php echo $name ?></td>
		    <td><?php echo $designation ?></td>
		    <td><?php echo $institute ?></td>
		    <td><?php echo $contact_number ?></td>
		    <td><?php echo $email ?></td>		    
		  </tr>
		</table>
		</div>
	</form>
</body>
</html>