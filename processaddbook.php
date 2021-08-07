<?php
require('includes/config.php');

	
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['publisher'])|| empty($_POST['edition']) || empty($_POST['isbn']) || empty($_POST['pages']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		if(!(is_numeric($_POST['pages'])))
		{
			$msg[]="Page must be in Numeric  Format...";
		}
		
		
		else
		{
			$b_nm=$_POST['name'];
			$b_cat=$_POST['cat'];
			$b_desc=$_POST['description'];
			$b_edition=$_POST['edition'];
			$b_publisher=$_POST['publisher'];			
			$b_isbn=$_POST['isbn'];
			$b_pages=$_POST['pages'];
			$b_price=$_POST['price'];
                        $fname=$b_nm;
			$pic = $_FILES['notes']['name'];
			$pic_loc = $_FILES['notes']['tmp_name'];
			$info = pathinfo($_FILES['notes']['name']);
			$ext = $info['extension'];
			$newname = "$fname.".$ext;
			$folder="images/";
			$target=$folder.$newname;
			if(move_uploaded_file($pic_loc,$folder.$newname))
			{
                            $query="insert into book(b_nm,b_subcat,b_desc,b_edition,b_publisher,b_isbn,b_page,b_price,b_img)values('$b_nm','$b_cat','$b_desc','$b_edition','$b_publisher','$b_isbn',$b_pages,$b_price,'$target')";
                            //echo $query;
			if(mysqli_query($conn,$query)){
                        echo '<script>alert("Book Added Successfully")</script>';
                        echo '<META http-equiv="refresh" content="0;addbooks.php">';
                        }
                        else
			{
				echo '<script>alert("Error DB")</script>';
                                echo '<META http-equiv="refresh" content="0;addbooks.php">';
			}
                        }
			else
			{
				echo '<script>alert("Error DB")</script>';
                                echo '<META http-equiv="refresh" content="0;addbooks.php">';
			}
		
		}
	
?>
	
	