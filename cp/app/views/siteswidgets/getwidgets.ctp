<?php 
	//print_r($getwidgets);
	/*
	echo '{"widget":[';
	foreach ($getwidgets as $index=>$value){
		echo "{";
		foreach ($getwidgets[$index] as $i => $v){
			foreach ($getwidgets[$index][$i] as $key => $val){
				printf('"'.$key.'":');				
				echo '"'.$val.'",';			
			}		
		}
		echo '"version":"0.1"';
		echo "}";
	}
	echo "]}";
*/
	//echo "serverResponse(";
	$objs = json_encode($getwidgets);
	
	print_r($objs);
	//echo ")";
/*
{
        program : {
                name : "Newswipe",
                season : "01",
                episode : "06",
                nextShowing : {
                        channel : "BBC Four",
                        dateTime : "2009-04-30 22:30"
                },
                description : "Charlie Brooker is back, this time he's got his sights firmly set on news and current affairs",
                categories : [
                        "satirical",
                        "current affairs",
                        "factual"
                ]
        }

}
*/
//{widget:[{sitename:"Pesulu",url:"http://www.pesulu.com"}]}
?>  
