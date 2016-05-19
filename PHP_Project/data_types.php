

<?php

function convert_to_int($value)
  {
    return intval($value);
  }

function convert_to_float($value)
  {
    return floatval($value);
  }

function convert_to_string($value)
  {
    return strval($value);
  }

function convert_to_bool($value)
  {
    return boolval($value);
  }

function convert_to_array($value)
  {
    print_r(str_split($value,4));
  }

function convert_to_null($value)
  {
    return $value;
  }
?>

<html>
  <title>Code Challenge 2</title>
  <body>
    <p>This is my convert_to_int function for (float)2.223. Output:
      <?php echo convert_to_int(2.223); ?></p>
    <p>This is my convert_to_float function for (int)3. Output:
      <?php echo convert_to_float(3); ?></p>
    <p>This is my convert_to_string function for (int)56. Output:
      <?php echo convert_to_string(56); ?></p>
    <p>This is my convert_to_bool function for (string)'Mike'. Output:
      <?php echo convert_to_bool('Mike'); ?> ...I'm not so sure about this one.</p>
    <p>This is my convert_to_array function for (string)'Mike is Awesome'. Output:
      <?php echo convert_to_array('Mike is Awesome'); ?></p>
    <p>This is my convert_to_null function for (int)34. Output:
      <?php echo convert_to_null(null); ?></p>
  </body>
</html>
