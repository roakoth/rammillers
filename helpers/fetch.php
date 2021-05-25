<?php 
# code to display school on homepage section school
function Schools()
{
	#code...
	include 'connect.php';
	$query= mysqli_query($connect,"SELECT * FROM schoolview ORDER BY id LIMIT 3");
	foreach ($query as $key => $data){
		#code..
		$ID= $data['id'];
		$School=$data['school'];
		$Photo=$data['photo'];
		$Total=$data['total'];
		echo '<div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="course__item">
                        <img src="vote/images/'.$Photo.'" alt="" class="fit">
                        <h5>'.$School.'</h5>
                        <h4>'.$Total.' voters</h4>
                        <a href="school-results.php">View Results</a>
                    </div>
                </div>';
	}	
}
function Gallery()
{
	#code...
	include 'connect.php';
	$query= mysqli_query($connect,"SELECT * FROM gallery ORDER BY id desc");
	foreach ($query as $key => $data){
		#code..
		$ID= $data['id'];
		$Photo=$data['photo'];
		$Description=$data['description'];
		echo '<div class="col-lg-4 col-ms-6" style="padding-bottom:30px">
                    <div class="course_item">
		<img src="ugalileo/images/'.$Photo.'" alt="school-details" style="height:300px;width:400px;object-fit:cover">
                        
                        <h5>'.$Description.'</h5>
                        
                    </div>
                </div>';
	}	
}
function Blog()
{
	#code...
	include 'connect.php';
	$query= mysqli_query($connect,"SELECT * FROM blog ORDER BY id desc");
	foreach ($query as $key => $data){
		#code..
		$ID= $data['id'];
		$Tittle=$data['title'];
		$Category=$data['category'];
		$Photo=$data['photo'];
		$Details=$data['details'];
		$Date=$data['date'];
		$dDate=date_create($Date);
	$NewDate=date_format($dDate,'d M Y');

	echo '
	<div class="col-lg-4 col-ms-6" style="padding-bottom:30px">
                    <div class="course_item">
		<img src="ugalileo/images/'.$Photo.'" alt="school-details" style="height:300px;width:400px;object-fit:cover">
    <h5 class="blog" >'.$Tittle.'</h5>
    
    <p>'.$NewDate.'</p>
    
     <a href="single-blog.php?id='.$ID.'"><button>Read Article</button></a>
    <hr>	
                        
                    </div>
                    </div>
                </div>';
	}	
}
function blogDetails()
{
	#code...
	include 'connect.php';
	$query= mysqli_query($connect,"SELECT * FROM blog ORDER BY id desc");
	foreach ($query as $key => $data){
		#code..
		$ID= $data['id'];
		$Tittle=$data['title'];
		$Category=$data['category'];
		$Photo=$data['photo'];
		$Details=$data['details'];
		$Date=$data['date'];
		$dDate=date_create($Date);
	$NewDate=date_format($dDate,'d M Y');

	echo '
	<div class="col-lg-4 col-ms-6" style="padding-bottom:30px">
                    <div class="course_item">
		<img src="ugalileo/images/'.$Photo.'" alt="school-details" style="height:300px;width:400px;object-fit:cover">
    <h5 class="blog" >'.$Tittle.'</h5>
    
    <p>'.$NewDate.'</p>
    <p>'.$Details.'</p>
    
    
     
    <hr>	
                        
                    </div>
                    </div>
                </div>';
    
     
    }
}  
?>