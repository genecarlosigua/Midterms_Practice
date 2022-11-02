<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ACT_1</title>
</head>

<body>

    <h2>Vendo Machine</h2>

        <form method="POST">

            <fieldset style="width: 480px;">

                <legend> Products: </legend>  

                    <?php     

                        $Drinks = array('Coke' => 15, 'Sprite'=> 20, "Royal" => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);

                        if (isset($Drinks)) {
                            foreach ($Drinks as $drinksKey => $drinksValue) {
                                echo "<input type='checkbox' name='chkDrinks[" . $drinksKey . "]' value='" . $drinksValue ."'> 
                                <label>" . $drinksKey . "- ₱" . $drinksValue . "</label><br>";
                            }
                        }                 
                    ?>   

            </fieldset>

            <fieldset style="width: 480px">
                <legend> Options: </legend>

                <label for="drpSize">Size</label>

                <select class="drp" name="drpSize" id="drpSize">

                    <?php 

                        $Sizes = array('Regular' => 'Regular','Up-size (Add ₱5)'=> 'Up-size', 'Jumbo (Add ₱10)' => 'Jumbo');

                        if (isset($Sizes)) {
                            foreach ($Sizes as $SizesKey => $SizesValue) {
                                echo "<option value='" . $SizesValue . "'>". $SizesKey ."</option>";
                            }
                        }     
                    ?>

                </select>

                <label for="nmbQuantity">Quantity</label>
                <input class = "nmb" type="number" name="nmbQuantity" id="nmbQuantity" min="0" max="100" value="0">
                
                <button type = "submit" name="btnsend"> Check Out </button>

            </fieldset>

            <hr>

        </form>

    <?php 
        if (isset($_POST['btnsend'])) {
      
            if(isset($_POST['chkDrinks'])&& isset($_POST['drpSize'])) {

                $drinks = $_POST['chkDrinks'];
                $Size = $_POST['drpSize'];
                $Quantity = $_POST['nmbQuantity'];

                if($Quantity == 1) {
                    $word = "Piece";
                }
                else {
                    $word = "Pieces";
                }

                if ($Size == 'Regular') {
                    $Add = 0;
                }
                else if ($Size == 'Up-size') {
                    $Add = 5;
                }
                else if ($Size == 'Jumbo') {
                    $Add = 10;
                }
                    
                echo "<h2> Purchase Summary</h2>";

                    foreach ($drinks as $drinkskey => $drinksvalue) {

                        echo "<ul><li>". $Quantity ." ". $word ." of ". $Size ." ". $drinkskey ." amounting to ₱" . $total = intval($drinksvalue) * intval($Quantity) + ($Add * intval($Quantity)) ."</li></ul>";
                    }        
                        $totalItems = ($Quantity * sizeof($drinks));
                        $totalAmount = (array_sum($drinks) + $Add * $Quantity) * $Quantity;

                        echo "<label><b>Total number of Items: </b></label>" . $totalItems . "<br>";
                        echo "<label><b>Total Amount: </b></label>" . $totalAmount;

                } else {
                    echo "No Selected Product, Please Try again.";                  
            }
        }    
    ?>

</body>
</html>