<?php
if(isset($_POST["Temp"])){
// if the user entered the a vaild number in the input
// the result will be returned
// get the temperature from the input and add to the variable $temp
$temp = $_POST["Temp"];
// get the type of selected from the user and add to the variable $type
$type = $_POST["TemperatureConversion"];
echo "<div>";
// function declaration convertTemp
function convertTemp($temp,$type){
    if($type == 'fc'){// Fahrenheit to Celsius selected 
        $newTemp = round(($temp - 32) * 5/9,2); 
        return $temp.'&deg; Fahrenheit = '.$newTemp.'&deg; Celsius';
    }elseif($type == 'cf'){// Celsius to Fahrenheit selected
        $newTemp = round(($temp * 9/5) + 32,2);
        return $temp.'&deg; Celsius = '.$newTemp.'&deg; Fahrenheit';
    }elseif($type == 'fk'){ // Fahrenheit to Kelvin selected
        $newTemp = round(($temp + 459.67) * 5/9,2);
        return $temp.'&deg; Fahrenheit = '.$newTemp.'&deg; Kelvin';
    }elseif($type == 'kf'){// Kelvin to Fahrenheit selected
        $newTemp = round(($temp * 9/5) - 459.67,2);
        return $temp.'&deg; Kelvin = '.$newTemp.'&deg; Fahrenheit';
    }elseif($type == 'kc'){// Kelvin to Celsius selected
        $newTemp = round($temp - 273.15,2);
        return $temp.'&deg; Kelvin = '.$newTemp.'&deg; Celsius';
    }elseif($type == 'ck'){// Celsius to Kelvin selected
        $newTemp = round($temp + 273.15,2);
        return $temp.'&deg; Celsius = '.$newTemp.'&deg; Kelvin';
    }
}
// invoke the function and pass the $temp and $type parameters
echo '<h2>'.convertTemp($temp,$type).'</h2>';
echo '<p><button class="submit"><a href="/ITC250/sandbox/p1_form.php">Convert another temp</a></button></p>';
echo "</div>";
}else{
// display the input
    echo '
        <div>
            <form action="" method="POST">
                <h2>Enter your temperature <input type="number" max="500" name="Temp" /></h2>  
                    <legend>Select a temperature conversion</legend>
                    <p><input type="radio" name="TemperatureConversion" value="fc" />Fahrenheit to Celsius</p>
                    <p><input type="radio" name="TemperatureConversion" value="cf" />Celsius to Fahrenheit</p>
                    <p><input type="radio" name="TemperatureConversion" value="fk" />Fahrenheit to Kelvin</p>
                    <p><input type="radio" name="TemperatureConversion" value="kf" />Kelvin to Fahrenheit</p>
                    <p><input type="radio" name="TemperatureConversion" value="kc" />Kelvin to Celsius</p>
                    <p><input type="radio" name="TemperatureConversion" value="ck" />Celsius to Kelvin</p>
                    <p class="submit"><input type="submit" value="convert" /></p>
            </form>
        </div>
    ';
}
?>