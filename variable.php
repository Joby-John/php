<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class = container>
        <h2>Rules on declaring variables</h2>
        <ul>
            <li>Starts with a dollar ($) sign</li>
            <li>Cannot start with a number</li>
            <li>Must start with al letter or an underscore</li>
            <li>can only contain underscore character and alphanumeric character</li>
      </ul>
      <h2> PHP Data Types</h2>
      <ol>
        <li> String :- between single quotes or double quotes </li>
        <?php $name = "Joby";?>
        <li> Integer :- Just add as number</li>
        <?php $number = 143;?>
        <li> Float :- adds decimal number</li>
        <?php $floatType=143.43;?>
        <li> Boolean:- true or false </li>
        <?php $bool=true;?>
        <li> Object:- object of a class </li>
        <li> Array :- to store multiple values</li>
        <?php  $array1 = array("abcd", "efgh");?>
        <li> Null:- stores null value </li>
        <?php  $nullvar = NULL;?>
        
        <li> var_dump(variable) gives the datatype and value of the variable</li>
      </ol>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>