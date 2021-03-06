<?php

/*###################################################################################################
#########                                                                                    ########
#########                             COLOR PICKER CREATOR CLASS                             ########
#########                               CREATED BY M�rcio Elias                              ########
#########                                marcioelias@gmail.com                               ########
#########                                                                                    ########
###################################################################################################*/


class colorPickerSelect{
	var $name;
	var $id;
	var $first_option;
	var $colors = array();
	var $selected = null;

	function colorPickerSelect($type='pastels',$name='color', $first_option='', $selected='') {
		switch($type) {
			case 'regular':
				$this->colors = array(
		"#000000,000000",
		"#000033,000033",
		"#000066,000066",
		"#000099,000099",
		"#0000CC,0000CC",
		"#0000FF,0000FF",
		"#003300,003300",
		"#003333,003333",
		"#003366,003366",
		"#003399,003399",
		"#0033CC,0033CC",
		"#0033FF,0033FF",
		"#006600,006600",
		"#006633,006633",
		"#006666,006666",
		"#006699,006699",
		"#0066CC,0066CC",
		"#0066FF,0066FF",
		"#009900,009900",
		"#009933,009933", 
		"#009966,009966",
		"#009999,009999",
		"#0099CC,0099CC",
		"#0099FF,0099FF",
		"#00CC00,00CC00",
		"#00CC33,00CC33", 		
		"#00CC66,00CC66",
		"#00CC99,00CC99",
		"#00CCCC,00CCCC",
		"#00CCFF,00CCFF",
		"#00FF00,00FF00", 	
		"#00FF33,00FF33",
		"#00FF66,00FF66",
		"#00FF99,00FF99",
		"#00FFCC,00FFCC",
		"#00FFFF,00FFFF",
		"#330000,330000",
		"#330033,330033",
		"#330066,330066",
		"#330099,330099",
		"#3300CC,3300CC",
		"#3300FF,3300FF",
		"#333333,333333",
		"#333366,333366", 	
		"#333399,333399",
		"#3333CC,3333CC",
		"#3333FF,3333FF",
		"#336600,336600",
		"#336633,336633",
		"#336666,336666",
		"#336699,336699",
		"#3366CC,3366CC",
		"#3366FF,3366FF",
		"#339900,339900",
		"#339933,339933",
		"#339966,339966",
		"#339999,339999",
		"#3399CC,3399CC",
		"#3399FF,3399FF",
		"#33CC00,33CC00",
		"#33CC33,33CC33",
		"#33CC66,33CC66",
		"#33CC99,33CC99",
		"#33CCCC,33CCCC",
		"#33CCFF,33CCFF",
		"#33FF00,33FF00", 
		"#33FF33,33FF33",
		"#33FF66,33FF66",
		"#33FF99,33FF99",
		"#33FFCC,33FFCC",
		"#33FFFF,33FFFF",
		"#660000,660000", 	
		"#660033,660033",
		"#660066,660066",
		"#660099,660099",
		"#6600FF,6600FF",
		"#663300,663300",
		"#663333,663333",
		"#663366,663366",
		"#663399,663399",
		"#6633CC,6633CC",
		"#6633FF,6633FF",
		"#666600,666600",
		"#666633,666633",
		"#666666,666666",
		"#666699,666699",
		"#6666CC,6666CC",
		"#6666FF,6666FF",
		"#669900,669900",
		"#669933,669933",
		"#669966,669966",
		"#669999,669999",
		"#6699CC,6699CC",
		"#6699FF,6699FF",
		"#66CC00,66CC00",
		"#66CC33,66CC33",
		"#66CC66,66CC66",
		"#66CC99,66CC99",
		"#66CCCC,66CCCC",
		"#66CCFF,66CCFF", 		
		"#66FF00,66FF00",
		"#66FF33,66FF33",
		"#66FF66,66FF66",
		"#66FF99,66FF99",
		"#66FFCC,66FFCC",
		"#66FFFF,66FFFF",
		"#990000,990000",
		"#990033,990033",
		"#990066,990066",
		"#990099,990099",
		"#9900CC,9900CC",
		"#9900FF,9900FF",
		"#993300,993300",
		"#993333,993333",
		"#993366,993366",
		"#993399,993399",
		"#9933CC,9933CC",
		"#9933FF,9933FF",
		"#996600,996600",
		"#996633,996633",
		"#996666,996666",
		"#996699,996699", 
		"#9966CC,9966CC",
		"#9966FF,9966FF",
		"#999900,999900", 		
		"#999933,999933",
		"#999966,999966", 	
		"#999999,999999",
		"#9999CC,9999CC",
		"#9999FF,9999FF",
		"#99CC00,99CC00",
		"#99CC33,99CC33",
		"#99CC66,99CC66",
		"#99CC99,99CC99",
		"#99CCCC,99CCCC",
		"#99CCFF,99CCFF",
		"#99FF00,99FF00",
		"#99FF33,99FF33",
		"#99FF66,99FF66",
		"#99FF99,99FF99",
		"#99FFCC,99FFCC",
		"#99FFFF,99FFFF",
		"#CC0000,CC0000",
		"#CC0033,CC0033",
		"#CC0066,CC0066",
		"#CC0099,CC0099",
		"#CC00CC,CC00CC",
		"#CC00FF,CC00FF",
		"#CC3300,CC3300",
		"#CC3333,CC3333",
		"#CC3366,CC3366",
		"#CC3399,CC3399",
		"#CC33CC,CC33CC",
		"#CC33FF,CC33FF",
		"#CC6600,CC6600",
		"#CC6633,CC6633",
		"#CC6666,CC6666",
		"#CC6699,CC6699",
		"#CC66CC,CC66CC",
		"#CC66FF,CC66FF",
		"#CC9900,CC9900",
		"#CC9933,CC9933",
		"#CC9966,CC9966",
		"#CC9999,CC9999",
		"#CC99CC,CC99CC",
		"#CC99FF,CC99FF", 		
		"#CCCC00,CCCC00",
		"#CCCC33,CCCC33",
		"#CCCC66,CCCC66",
		"#CCCC99,CCCC99", 
		"#CCCCCC,CCCCCC",
		"#CCCCFF,CCCCFF",
		"#CCFF00,CCFF00",
		"#CCFF33,CCFF33",
		"#CCFF66,CCFF66",
		"#CCFF99,CCFF99",
		"#CCFFCC,CCFFCC",
		"#CCFFFF,CCFFFF", 
		"#FF0000,FF0000",
		"#FF0033,FF0033", 
		"#FF0066,FF0066",
		"#FF0099,FF0099",
		"#FF00CC,FF00CC",
		"#FF00FF,FF00FF",
		"#FF3300,FF3300",
		"#FF3333,FF3333",
		"#FF3366,FF3366",
		"#FF3399,FF3399",
		"#FF33CC,FF33CC",
		"#FF33FF,FF33FF",
		"#FF6600,FF6600",
		"#FF6633,FF6633",
		"#FF6666,FF6666",
		"#FF6699,FF6699",
		"#FF66CC,FF66CC",
		"#FF66FF,FF66FF",
		"#FF9900,FF9900",
		"#FF9933,FF9933",
		"#FF9966,FF9966",
		"#FF9999,FF9999",
		"#FF99CC,FF99CC",
		"#FF99FF,FF99FF",
		"#FFCC00,FFCC00",
		"#FFCC33,FFCC33",
		"#FFCC66,FFCC66",
		"#FFCC99,FFCC99",
		"#FFCCCC,FFCCCC",
		"#FFCCFF,FFCCFF",
		"#FFFF00,FFFF00",
		"#FFFF33,FFFF33",
		"#FFFF66,FFFF66",
		"#FFFF99,FFFF99",
		"#FFFFCC,FFFFCC",
		"#FFFFFF,FFFFFF"
				);
				break;
			case 'pastels':
				$this->colors = array(
				"#FFF8DC,Cornsilk",
				"#FAEBD7,Antiquewhite",
				"#FFF5EE,Seashell",
				"#FAF0E6,Linen",
				"#FFFFF0,Ivory",
				"#FFFAF0,Floralwhite",
				"#FFFAFA,Snow",
				"#F0FFFF,Azure",
				"#F5FFFA,Mintcream",
				"#F8F8FF,Ghostwhite",
				"#F0FFF0,Honeydew",
				"#F0F8FF,Aliceblue",
				"#F5F5DC,Beige",
				"#FDF5E6,Oldlace",
				"#FFE4C4,Bisque",
				"#FFE4B5,Moccasin",
				"#F5DEB3,Wheat",
				"#FFDEAD,Navajowhite",
				"#FFEBCD,Blanchedalmond",
				"#D2B48C,Tan",
				"#FFE4E1,Mistyrose",
				"#FFF0F5,Lavenderblush",
				"#E6E6FA,Lavender",
				"#87CEFA,Lightskyblue",
				"#87CEEB,Skyblue",
				"#00BFFF,Deepskyblue",
				"#7FFFD4,Aquamarine",
				"#6495ED,Cornflowerblue",
				"#E9967A,Darksalmon",
				"#FFA07A,Lightsalmon",
				"#B0E0E6,Powderblue"
				);
				break;
		}
		$this->name = $name;
		$this->first_option = $first_option;
		$this->selected = $selected;
	}

	function render(){
		$out='';
		$out.= "<select id=\"{$this->id}\" name=\"".$this->name."\" onchange='this.style.backgroundColor=this.value;' >\n";
		$out.= "<option value=\"\">".$this->first_option."</option>\n";
		for($i=0;$i<count($this->colors);$i++){
			$wiersz = explode(",",$this->colors[$i]);
			$value = $wiersz[0];
			$color = $wiersz[1];
			if ($this->selected == $value) {
				$out.= "<option value=\"".$value."\" style=\"background-color:".$value."\" selected>".$color."</option>\n";
			} else {
				$out.= "<option value=\"".$value."\" style=\"background-color:".$value."\">".$color."</option>\n";
			}
		}
		$out.= "</SELECT>\n\n";
		return $out;
	}
}
?>
