<html>
<body>


<?php
//set tag to variable
$tag = $_GET["tag"];

// fetch raw data and declare counters and variables
$searchData = file_get_contents('https://www.instagram.com/explore/tags/'.$tag.'/?__a=1');
$x = 0;
$link1="";
$link2="";
$link3="";
$link4="";
$link5="";
$link6="";
//loop through raw data and find desired data, in this case "display_url"
//extract the actual link
while (true)
	{
	if ( $searchData[$x] == 'd' && $searchData[$x+1] == 'i' && $searchData[$x+2] == 's' && $searchData[$x+3] == 'p' && $searchData[$x+4] == 'l' && $searchData[$x+5] == 'a' && $searchData[$x+6] == 'y' && $searchData[$x+7] == '_' && $searchData[$x+8] == 'u' && $searchData[$x+9] == 'r' && $searchData[$x+10] == 'l')
	{
		$counter = 0;
		// once display_url is found, another loop to extract the individual characters and insert into another viariable
		// loop ends when .jpg is found. This marks the end of the url		
		// repeat for the 6 different links, future improvement make this a function so repeated code can be removed.								
		if (empty($link1)) 
		{
		While(true)
			{	
				$link1[$counter] = $searchData[$x+14+$counter]; // adds 14 because there is 14 characters from x being 'd' from display_url":"https.... to the actual start of the link. 
				
				if(!empty($link1[0]) && !empty($link1[1]) && !empty($link1[2])) // will return an error if u do not check if the link is not empty, starts checking for .jpg at 3 characters in the link
				{
					if($link1[$counter] == 'g' && $link1[$counter-1] == 'p' && $link1[$counter-2] == 'j' && $link1[$counter-3] == '.')
					{
					
					$link1 = implode($link1); // since putting it in the variables results in a individual array of characters, we merge them with implode to 1 string
					$x = $x + 14+$counter; // continues to search for other links 
					break;
					}
				}
				$counter = $counter + 1; // adds counter until .jpg is found
			}
		}
		
	else if(empty($link2)) // refer to $link1
	{
		While(true)
			{	
				$link2[$counter] = $searchData[$x+14+$counter];
				
				if(!empty($link2[0]) && !empty($link2[1]) && !empty($link2[2]))
				{
					if($link2[$counter] == 'g' && $link2[$counter-1] == 'p' && $link2[$counter-2] == 'j' && $link2[$counter-3] == '.')
					{
					
					$link2 = implode($link2);
					$x = $x + 14+$counter;
					break;
					}
				}
				$counter = $counter + 1;
			}
	}
	
	
	else if(empty($link3))// refer to $link1
	{
		While(true)
		{	
				$link3[$counter] = $searchData[$x+14+$counter];
				
				if(!empty($link3[0]) && !empty($link3[1]) && !empty($link3[2]))
				{
					if($link3[$counter] == 'g' && $link3[$counter-1] == 'p' && $link3[$counter-2] == 'j' && $link3[$counter-3] == '.')
					{
					
					$link3 = implode($link3);
					$x = $x + 14+$counter;
					break;
					}
				}
				$counter = $counter + 1;
			}

	}
	else if(empty($link4))// refer to $link1
	{
		While(true)
		{	
				$link4[$counter] = $searchData[$x+14+$counter];
				
				if(!empty($link4[0]) && !empty($link4[1]) && !empty($link4[2]))
				{
					if($link4[$counter] == 'g' && $link4[$counter-1] == 'p' && $link4[$counter-2] == 'j' && $link4[$counter-3] == '.')
					{
					
					$link4 = implode($link4);
					$x = $x + 14+$counter;
					break;
					}
				}
				$counter = $counter + 1;
			}

	}
	else if(empty($link5))// refer to $link1
	{
		While(true)
		{	
				$link5[$counter] = $searchData[$x+14+$counter];
				
				if(!empty($link5[0]) && !empty($link5[1]) && !empty($link5[2]))
				{
					if($link5[$counter] == 'g' && $link5[$counter-1] == 'p' && $link5[$counter-2] == 'j' && $link5[$counter-3] == '.')
					{
					
					$link5 = implode($link5);
					$x = $x + 14+$counter;
					break;
					}
				}
				$counter = $counter + 1;
			}
	}
	else if(empty($link6))// refer to $link1
	{
		While(true)
		{	
				$link6[$counter] = $searchData[$x+14+$counter];
				
				if(!empty($link6[0]) && !empty($link6[1]) && !empty($link6[2]))
				{
					if($link6[$counter] == 'g' && $link6[$counter-1] == 'p' && $link6[$counter-2] == 'j' && $link6[$counter-3] == '.')
					{
					
					$link6 = implode($link6);
					$x = $x + 14+$counter;
					break;
					}
				}
				$counter = $counter + 1;
		}
		
			
			
	}
			
	
	
	
	}
	// exit when there are 6 links
	if (!empty($link6)) 
	{
		break;
	}
	// adding counter to move to next character
	$x = $x + 1;

	
}

$allLink = array($link1,$link2,$link3,$link4,$link5,$link6); // set variable array to all the links, this is mainly for shorten of code if transfered into functions.

?>
<!–– display all the images -->

<body style="background-color:powderblue;">

<img src="<?php echo $allLink[0] ?> " alt="insta6" width="500" height="600">
<img src="<?php echo $allLink[1] ?> " alt="insta1" width="500" height="600">
<img src="<?php echo $allLink[2] ?> " alt="insta2" width="500" height="600">
<img src="<?php echo $allLink[3] ?> " alt="insta3" width="500" height="600">
<img src="<?php echo $allLink[4] ?> " alt="insta4" width="500" height="600">
<img src="<?php echo $allLink[5] ?> " alt="insta5" width="500" height="600">


</body>
</html>

