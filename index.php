<? include ("blocks/bd.php");

$result=mysqli_query($link, "SELECT title, meta_d,meta_k,text FROM settings WHERE page='index'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="description" content="<? echo $row['meta_d'] ?>">
<meta name="keywords" content="<? echo $row['meta_k'] ?>">

<title><? echo $row['title']; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>	
<table width="690" cellspacing="0" cellpadding="0" border="0" align="center" class="main_border">
  <tbody>   
	  <? include ("blocks/header.php"); ?>	   
    <tr>
	 <? include ("blocks/lefttd.php");  ?>
	      
	  <td width="505" valign="top">
		  
		  
	<?	$l=0; $n=0;    $h=0;       
		  		  
$result1=mysqli_query($link, "SELECT firm, text, description, author FROM lessons ORDER BY firm");
$row1=mysqli_fetch_array($result1); 
do {     if($row1["firm"]==$n) {$l=$l-1;} printf( "<a href='#'  style='color:red;display:none' class='box%s'> <p style='color:red;'> %s</p> <p style='color:blue;'> %s</p> <p style='color:green;'> %s</p> </a>",$l,$row1["text"],$row1["author"],$row1["description"]); 


		  
$l++; $n=$row1["firm"];
   }
while ($row1=mysqli_fetch_array($result1));  
		  
		  		 
		 
		  ?>

<script>  let a=0; let filterBox; let filterBox1; let filterBox2; let filterBox3;
	let b0=0; let b1=0; let b2=0; 
	 let c0=0; let c1=0; let c2=0;
	let b; let c;
	
	let arr=[];
	let arr1=[];
	
	f=<? echo $l; ?>;
	
	   if(a==0) { 
		   
		   for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="inline-block" ;} );  
			 	  }
				}
	
  
	
	
 function myFunction(myCheck) { 
  // Get the checkbox
  let checkBox = document.getElementById(myCheck);
  // Get the output text
/*  var text = document.getElementById(text);
*/	  // If the checkbox is checked, display the output text
 if (checkBox.checked){	a=a+1; 
									
	for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="none" ;} );  
			 	  }    							
				
													
		/*	var arr={myFirstName:'John'};
	for(key in arr) alert(key+': '+arr[key]);
		y=arr[key];	alert(y);	*/	
					
											
				
				m00='m'+0;			
	                 
		if (myCheck==m00 || arr['0']==1 ) { arr['0']=1;
			filterBox = document.querySelectorAll('.box0');
			filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['0']=0;
 		 }			
					
		if (checkBox==m1 || arr['1']==1 ) { arr['1']=1;
			filterBox = document.querySelectorAll('.box1');
			filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['1']=0;
 		 }					
	
		if (checkBox==m2 || arr['2']==1 ) { arr['2']=1;
   	    filterBox= document.querySelectorAll('.box2');
		filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['2']=0;
    		}	
		if (checkBox==m3 || arr['3']==1 ) { arr['3']=1;
   	    filterBox= document.querySelectorAll('.box3');
		filterBox.forEach( elem => { 
		elem.style.display ="inline-block" ;} ); arr1['3']=0;
    		}
								
								
		
		} 
	 else {   a=a-1;    
		   
		   
	/*for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="inline-block" ;} );  
			 	  }
		*/
			   
		 
		         
		   if (checkBox==m0 || arr1['0']==1  || arr['0']==0) { arr1['0']=1;
			filterBox= document.querySelectorAll('.box0');
			filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['0']=0;
       	 }	     
			if (checkBox==m1 || arr1['1']==1  || arr['1']==0) { arr1['1']=1;
			filterBox= document.querySelectorAll('.box1');
			filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['1']=0;
       	 }		  
			if (checkBox==m2 || arr1['2']==1 || arr['2']==0) { arr1['2']=1;
   	    filterBox = document.querySelectorAll('.box2');
		filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['2']=0;
		}
		   
		   
		  if (checkBox==m3 || arr1['3']==1 || arr['3']==0) { arr1['3']=1;
   	    filterBox = document.querySelectorAll('.box3');
		filterBox.forEach( elem => { 
		elem.style.display ="none" ;} ); arr['3']=0;
		} 
  
		   
      }
		   
		   
			 
	 
	 
	 
					
	 
	 
if(a==0) {   for (let h=0; h<f; h=h+1) {
		     filterBox = document.querySelectorAll('.box'+h); 
				filterBox.forEach( elem => { 
					elem.style.display ="inline-block" ;} );  
			 	  }
				
				}
 
 
 
 }


	
	/*
	
	
	
	 let b=0;  let filterBox1;
	
	   if(b==0) { filterBox1 = document.querySelectorAll('.box1'); 
				filterBox1.forEach( 
					elem => { 
					elem.style.display ="inline-block" ;} );	 
		     	
						 }
  
	
 function myFunction(myCheck,text) { 
  // Get the checkbox
  var checkBox = document.getElementById(myCheck);
  // Get the output text
  var text = document.getElementById(text);
	  // If the checkbox is checked, display the output text
 if (checkBox.checked == true ){	b=b+1; 
    text.style.display = "inline-block";
  } 
	 else {   b=b-1;
    text.style.display = "none";
  }
	 
	
	         
	 
	   if(b==0) {  filterBox1 = document.querySelectorAll('.box1'); 
				filterBox1.forEach( 
				elem => { 
	        	elem.style.display = "inline-block"; } );	}
	        
	        if(b==1) {	filterBox1 = document.querySelectorAll('.box1'); 
				filterBox1.forEach( 
					elem => { 
					elem.style.display ="none" ;} );	 
					text.style.display ="inline-block" ;		 
						 } if (b>1)
							 {
								  
 var checkBox = document.getElementById(myCheck);
  // Get the output text
  var text = document.getElementById(text);
	  // If the checkbox is checked, display the output text
 if (checkBox.checked == true ){	b=b+1; 
    text.style.display = "inline-block";
  } 
	 else {   b=b-1;
    text.style.display = "none";
  } 
								 
							 }}
	
	
	
	
	*/
	
	
	
	
	
	
	
</script>

		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  </br>
		  
		  
		<?  echo $row['text']; ?>
		</td>
    </tr>
    <tr>
      
	<? include ("blocks/footer.php"); ?>	
   </tr>
  </tbody>
</table>
</body>
</html>