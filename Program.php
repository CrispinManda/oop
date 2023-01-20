<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #bColor{
            background-color: blueviolet;
        }
        form{
            justify-content: center;
        }

    </style>
</head>
<body>
    <form id="bColor" action="Program.php" method="post">
    <input type="number" name="units" id="units"> <br> <br>
    <input type="submit" value="calculate Bill">
    </form>
    <?php
 
class WaterBill {
    private $units;
    private $total;
    
    public function __construct($units) {
        $this->units = $units;
    }
    
    public function compute() {
        if($this->units <= 20) {
            $this->total = $this->units * 35;
        }
        else if($this->units <= 49) {
            $this->total = (20 * 35) + (($this->units - 20) * 40);
        }
        else if($this->units <= 100) {
            $this->total = (20 * 35) + (29 * 40) + (($this->units - 49) * 45);
        }
        else {
            $this->total = (20 * 35) + (29 * 40) + (51 * 45) + (($this->units - 100) * 50);
        }
        
        return $this->total;
    }
    
    public function getTotal() {
        return $this->total;
    }
}

// if(isset($_POST);
