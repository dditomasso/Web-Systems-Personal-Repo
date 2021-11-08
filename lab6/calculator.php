<?php 

abstract class Operation {
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2) {
    // Make sure we're working with numbers...
    if (!is_numeric($o1)){
      throw new Exception('Non-numeric operand.');
    }
    
    // Assign passed values to member variables
    $this->operand_1 = $o1;
    $this->operand_2 = $o2;
  }
  public abstract function operate1();
  public abstract function getEquation(); 
}

// Addition subclass inherits from Operation
class Addition extends Operation {
  public function operate1() {
    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation() {
    if (!is_numeric($this->operand_2)){
      throw new Exception('Non-numeric operand.');
    }
    else{
      return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate1();
    }
  }
}

class Subtraction extends Operation {
  public function operate1() {
    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation() {
    if (!is_numeric($this->operand_2)){
      throw new Exception('Non-numeric operand.');
    }
    else{
      return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate1();
    }
  }
}

//Multiplication and Division operations

class Multiplication extends Operation {
  public function operate1() {
    return $this->operand_1 * $this->operand_2;
  }
  public function getEquation() {
    if (!is_numeric($this->operand_2)){
      throw new Exception('Non-numeric operand.');
    }
    else{
      return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate1();
    }
  }
}

class Division extends Operation {
  public function operate1() {
    return $this->operand_1 / $this->operand_2;
  }
  public function getEquation() {
    if (!is_numeric($this->operand_2)){
      throw new Exception('Non-numeric operand.');
    }
    else{
      return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate1();
    }
  }
}

// Square root, Squared, and x^y Operations

class Square_Root extends Operation{
  public function operate1() {
    return sqrt($this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return "√(" . $this->operand_1 . ') = ' . $this->operate1();
    }
  }
}

class Squared extends Operation{
  public function operate1() {
    return $this-> operand_1 * $this->operand_1;
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
     return $this->operand_1 . '² = ' . $this->operate1();
    }
  }
}

class x_power_y extends Operation{
  public function operate1() {
    return pow($this->operand_1, $this->operand_2);
  }
  public function getEquation(){
    if (!is_numeric($this->operand_2)){
      throw new Exception('Non-numeric operand.');
    }
    else{
      return $this->operand_1 . '^' . $this->operand_2 . ' = ' . $this->operate1();
    }
  }
}

//Log(10) and Ln Operations

class Log_10 extends Operation{
  public function operate1() {
    return log10($this-> operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return $this->operand_1 . ' * Log(10) = ' . $this->operate1();
    }
  }
}

class Ln extends Operation{
  public function operate1() {
    return log($this-> operand_1, 2);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return 'Ln(' . $this->operand_1 .') = ' . $this->operate1();
    }
  }
}

// Add 10^x and e^x here:

class ten_power_x extends Operation{
  public function operate1() {
    return pow(10, $this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return ' 10^' . $this->operand_1 . " = " . $this->operate1();
    }
  }
}

class e_power_x extends Operation{
  public function operate1() {
    return pow(M_E, $this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return ' e^' . $this->operand_1 . " = " . $this->operate1();
    }
  }
}

//Code for Sin, Cos, and Tan operations
class Sin extends Operation{
  public function operate1() {
    return sin($this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return ' Sin(' . $this->operand_1 . ') = ' . $this->operate1();
    }
  }
}

class Cos extends Operation{
  public function operate1() {
    return cos($this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return ' Cos(' . $this->operand_1 . ') = ' . $this->operate1();
    }
  }
}

class Tan extends Operation{
  public function operate1() {
    return tan($this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return ' Tan(' . $this->operand_1 . ') = ' . $this->operate1();
    }
  }
}

//Extra operations I addded for creativity

class x_times_pi extends Operation{
  public function operate1() {
    return $this->operand_1 * M_PI;
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return $this->operand_1 . " * π = " . $this->operate1();
    }
  }
}

class rad_to_deg extends Operation{
  public function operate1() {
    return rad2deg($this->operand_1);
  }
  public function getEquation() {
    if (!empty($this->operand_2)){
      return "Please enter a number for 'x' only.";
    }
    else{
      return $this->operand_1 . " radians = " . $this->operate1() . " degrees";
    }
  }
}

// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday...

  try {
    if (isset($_POST['add']) && $_POST['add'] == 'Add') {
      $op = new Addition($o1, $o2);
    }


// Put code for subtraction, multiplication, and division here
    if (isset($_POST['sub']) && $_POST['sub'] == 'Subtract') {
      $op = new Subtraction($o1, $o2);
    }
    if (isset($_POST['mult']) && $_POST['mult'] == 'Multiply') {
      $op = new Multiplication($o1, $o2);
    }
    if (isset($_POST['divi']) && $_POST['divi'] == 'Divide') {
      $op = new Division($o1, $o2);
    }

// Square Root, Squared code, x^y here
    if (isset($_POST['sqrt']) && $_POST['sqrt'] == '√(x)'){
      $op = new Square_Root($o1, $o2);
    }
    if (isset($_POST['squ']) && $_POST['squ'] == 'x²'){
      $op = new Squared($o1, $o2);
    }
    if (isset($_POST['x^y']) && $_POST['x^y'] == 'xⁿ'){
      $op = new x_power_y($o1, $o2);
    }

//Log(10) and Ln code here
    if (isset($_POST['log']) && $_POST['log'] == 'Log(10)'){
      $op = new Log_10($o1, $o2);
    }
    if (isset($_POST['ln']) && $_POST['ln'] == 'Ln(x)'){
      $op = new Ln($o1, $o2);
    }

//10^x and e^x code here
    if (isset($_POST['10^x']) && $_POST['10^x'] == '10˟'){
      $op = new ten_power_x($o1, $o2);
    }
    if (isset($_POST['e^x']) && $_POST['e^x'] == 'eˣ'){
      $op = new e_power_x($o1, $o2);
    }

//Sin, Cos, and Tan code here
    if (isset($_POST['sin']) && $_POST['sin'] == 'Sin(x)'){
      $op = new Sin($o1, $o2);
    }
    if (isset($_POST['cos']) && $_POST['cos'] == 'Cos(x)'){
      $op = new Cos($o1, $o2);
    }
    if (isset($_POST['tan']) && $_POST['tan'] == 'Tan(x)'){
      $op = new Tan($o1, $o2);
    }
//Extra creativity operations here
    if (isset($_POST['x*π']) && $_POST['x*π'] == 'x*π'){
      $op = new x_times_pi($o1, $o2);
    }
    if (isset($_POST['rad2deg']) && $_POST['rad2deg'] == 'Radians -> Degrees'){
      $op = new rad_to_deg($o1, $o2);
    }
  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!doctype html>
<html>
<head>
<title>PHP Calculator</title>
<style>
  /* Basic CSS for the docuement */
  /* Sets the background image and basic font size for the calculator page. */
  body{
    background-image: url("background.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-size: large;
  }
  /* Sets styling for the "Calculator" heading */
  h1{
    font-size: 100px;
    text-align: center;
  }
  /* Creates button styling and hover effect with all of the operations */
  .div1 {
    width: 300px;
    height: 100px;
    border: 1px solid blue;
  }
  .button {
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white; 
    color: black; 
    border: 2px solid #8db3e2;
  }

  .button:hover {
    background-color: #8db3e2;
    color: white;
  }
  /* Creates a container for the buttons, which allows them to be equally 
  distrubuted on the screen */
  .button-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-gap: 10px;
    padding: 10px;
  }
  /* Creates a container for the input boxes and output text, which allows them 
  to be equally distrubuted on the screen */
  .input-container {
    display: grid;
    grid-template-columns: auto auto auto auto;
    grid-gap: 10px;
    padding: 10px;
    align-content: center;
  }
  #result{
    font-size: 25px;
  }
}
</style>
</head>
<body>
  <h1> Calculator </h1>
  <form method="post" action="calculator.php">
    <div class="input-container">
      <input type="text" name="op1" id="name" size="25px" placeholder="Enter a number for 'x' here." value="" />
      <input type="text" name="op2" id="name" size="25px" placeholder="Enter a number for 'n' here." value="" />
      <pre id="result">
        <?php 
          if (isset($op)) {
            try {
              echo $op->getEquation();
            }
            catch (Exception $e) { 
              $err[] = $e->getMessage();
            }
          }

          foreach($err as $error) {
              echo $error . "\n";
          } 
        ?>
      </pre>
    </div>
    <br/>
    <br>
    <!-- Only one of these will be set with their respective value at a time -->
    <div class="button-container">
      <input class="button" type="submit" name="add" value="Add" />  
      <input class="button" type="submit" name="sub" value="Subtract" />  
      <input class="button" type="submit" name="mult" value="Multiply" />  
      <input class="button" type="submit" name="divi" value="Divide" />  
      <input class="button" type="submit" name="x*π" value="x*π" />
      <input class="button" type="submit" name="sqrt" value="√(x)" /> 
      <input class="button" type="submit" name="squ" value="x²" />
      <input class="button" type="submit" name="x^y" value="xⁿ" />  
      <input class="button" type="submit" name="10^x" value="10˟" />
      <input class="button" type="submit" name="e^x" value="eˣ" />
      <input class="button" type="submit" name="log" value="Log(10)" /> 
      <input class="button" type="submit" name="ln" value="Ln(x)" />  
      <input class="button" type="submit" name="sin" value="Sin(x)" /> 
      <input class="button" type="submit" name="cos" value="Cos(x)" /> 
      <input class="button" type="submit" name="tan" value="Tan(x)" />  
      <input class="button" type="submit" name="rad2deg" value="Radians -> Degrees" />
    </div>
  </form>
</body>
</html>

