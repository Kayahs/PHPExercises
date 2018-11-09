<!DOCTYPE html>   
  <html> 
  <head> 
    <title>PHP Exercises</title> 
  </head>
  <body>   
  <?php 
  $sopen = "<section>";
  $sclose = "</section>";
  echo "$sopen Hello, World! $sclose";
  $t = 'Twinkle';
  $s = 'Star';
  echo "$sopen $t, $t little $s. $sclose";
  $x = 10;
  $y = 7;
  echo $sopen;
  $answer = $x+$y;
  echo "$x + $y = $answer<br>";
  $answer = $x-$y;
  echo "$x - $y = $answer<br>";
  $answer = $x*$y;
  echo "$x * $y = $answer<br>";
  $answer = $x/$y;
  echo "$x / $y = $answer<br>";
  $answer = $x%$y;
  echo "$x % $y = $answer<br>";
  echo $sclose;
  echo $sopen;
  $variable = 8;
  echo "Value is now $variable.<br>";
  $variable += 2;
  echo "Add 2. Value is now $variable.<br>";
  $variable -= 4;
  echo "Subtract 4. Value is now $variable.<br>";
  $variable *= 5;
  echo "Multiply by 5. Value is now $variable.<br>";
  $variable /= 3;
  echo "Divide by 3. Value is now $variable.<br>";
  $variable++;
  echo "Increment value by one. Value is now $variable.<br>";
  $variable--;
  echo "Decrement value by one. Value is now $variable.<br>";
  echo $sclose;
  echo $sopen;
  $name = "Harry";
  var_dump($name);
  echo "<br/>";
  print_r($name);
  echo "<br/>";
  $num = 28;
  var_dump($num);
  echo "<br/>";
  $val = null;
  var_dump($val);
  echo $sclose;
  echo $sopen;
  $around = "around";
  echo 'What goes '.$around.' comes '.$around.'.';
  echo $sclose;
  echo $sopen;
  $whatisit = "string";
  echo "Value is ".gettype($whatisit).".<br>";
  $whatisit = 5.5;
  echo "Value is ".gettype($whatisit).".<br>";
  $whatisit = true;
  echo "Value is ".gettype($whatisit).".<br>";
  $whatisit = 5;
  echo "Value is ".gettype($whatisit).".<br>";
  $whatisit = null;
  echo "Value is ".gettype($whatisit).".<br>";
  echo $sclose;
  echo $sopen;
  $curmonth = date('F', time());
  if ($curmonth == 'August') {
    echo "It's August, so it's really hot.<br>";
  } else {
    echo "Not August, so at least not in the peak of the heat.<br>";
  }
  echo $sclose;
  echo $sopen;
  $count = 0;
  while ($count < 9) {
    echo "abc ";
    $count++;
  }
  echo "<br>";
  $count = 0;
  do {
    echo "xyz ";
    $count++;
  } while($count < 9);
  echo "<br>";
  for ($i = 1; $i < 10; $i++) {
    echo "$i ";
  }
  echo "<br>";
  echo "<ol>";
  $charArr = ['A', 'B', 'C', 'D', 'E', 'F'];
  for ($i = 0; $i < sizeof($charArr); $i++) {
    echo "<li>Item $charArr[$i]</li>";
  }
  echo "</ol>";
  echo $sclose;
  echo $sopen;
  for ($i = 1; $i <= 12; $i++) {
    $sq = $i*$i;
    echo "$i * $i = $sq<br>";
  }
  echo $sclose;
  echo $sopen;
  echo "<table>";
  for ($i = 1; $i <= 7; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) {
      $answer = $i*$j;
      echo "<td>$answer</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
  echo $sclose;
  echo $sopen;
  ?>
  <form method="post" action="formresult.php">
  Please enter your favourite city: <br>
  <input type="text" name="city" />
  <br>
  <input type="submit" name="submit" value="Go" />
  </form>
  <?php
  echo $sclose;
  echo $sopen;
  if (empty($_POST) || !isset($_POST['city2'])) {
    ?>
    <form method="post" action="index.php">
    Please enter your favourite city: <br>
    <input type="text" name="city2" />
    <br>
    <input type="submit" name="submit2" value="Go" />
    </form>
    <?php
  } else {
      $city = $_POST['city2'];
      echo "Your favourite city is $city.";
  }
  echo $sopen;
    if (empty($_POST) || !isset($_POST['day'])) {
      ?>
      <form method="post" action="index.php">
      Please enter in the day: <br>
      <input type="text" name="day" />
      <br>
      <input type="submit" name="submit3" value="Go" />
      </form>
      <?php
    } else if ($_POST['day'] == "Monday") {
      echo "Laugh on Monday, laugh for danger.";
    } else if ($_POST['day'] == "Tuesday") {
      echo "Laugh on Tuesday, kiss a stranger.";
    } else if ($_POST['day'] == "Wednesday") {
      echo "Laugh on Wednesday, laugh for a letter.";
    } else if ($_POST['day'] == "Thursday") {
      echo "Laugh on Thursday, something better.";
    } else if ($_POST['day'] == "Friday") {
      echo "Laugh on Friday, laugh for sorrow.";
    } else if ($_POST['day'] == "Saturday") {
      echo "Laugh on Saturday, joy tomorrow.";
    } else {
      echo "Invalid Input";
    }
  echo $sclose;

  echo $sopen;
    if (empty($_POST) || !isset($_POST['day2'])) {
      ?>
      <form method="post" action="index.php">
      Please enter in the day: <br>
      <input type="text" name="day2" />
      <br>
      <input type="submit" name="submit4" value="Go" />
      </form>
      <?php
    } else {
      switch ($_POST['day2']) {
        case "Monday":
          echo "Laugh on Monday, laugh for danger.";
          break;
        case "Tuesday":
          echo "Laugh on Tuesday, kiss a stranger.";
          break;
        case "Wednesday":
          echo "Laugh on Wednesday, laugh for a letter.";
          break;
        case "Thursday":
          echo "Laugh on Thursday, something better.";
          break;
        case "Friday":
          echo "Laugh on Friday, laugh for sorrow.";
          break;
        case "Saturday":
          echo "Laugh on Saturday, joy tomorrow.";
          break;
        default:
          echo "Invalid Input";
      }
    }
  echo $sclose;
  echo $sopen;
  $weatherArr = ['rain', 'sunshine', 'clouds', 'hall', 'sleet', 'snow', 'wind'];
  echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weatherArr[5] and $weatherArr[6]. Then came $weatherArr[1] with a few $weatherArr[2] and some $weatherArr[0]. At least we didn't get any $weatherArr[3] or $weatherArr[4].";
  echo $sclose;
  echo $sopen;
  $lc = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
  for ($i = 0; $i < sizeof($lc)-1; $i++) {
    echo "$lc[$i], ";
  }
  echo $lc[sizeof($lc)-1]."<br>";
  sort($lc);
  echo "<ul>";
  for ($i = 0; $i < sizeof($lc); $i++) {
    echo "<li>$lc[$i]</li>";
  }
  echo "</ul>";
  array_push($lc, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
  sort($lc);
  echo "<ul>";
  for ($i = 0; $i < sizeof($lc); $i++) {
    echo "<li>$lc[$i]</li>";
  }
  echo "</ul>";
  echo $sclose;
  ?> 
  </body> 
 </html>