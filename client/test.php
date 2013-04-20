<!DOCTYPE HTML>
<meta charset="utf-8" />
<?php
echo "Valera! ";
$student = "Дима"; // string
echo "Студента \"зовут {$student}!" . " еще Илья.";
$age = 20; //integer
$weight = 70.5; //double
$mariage_status = false; //boolean
//$students = array('Кристина','Аня','Юрий','Женя','Дима','Илья','Виктор', 'Валера');//array
$students[4] = 'Кристина';
$students[] = 'Аня';
$students[] = 74.832;
$students[2] = 'Женя';
$students['Хо-хо'] = 'Дима';
$students[] = array('студент1' => 'Дима', 'студент2' => 'Илья', 'студент3' => 'Валера');
$students[] = 'Виктор';
$students[] = 'Виктор';
echo $students[7]['студент2'];
echo "<div>-----------------</div>";
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<div>-----------------</div>";
echo "<pre>";
var_dump($students);
echo "</pre>";
?>
  <?php if (count($students) > 0) { ?>
  <ul>
      <?php foreach ($students as $student) { ?>
      <?php if (gettype($student)==='string'){?>
      <li>
      <?php echo $student." (".gettype($student).")"; ?>
      </li>
      <?php } } ?>
  </ul>
<?php } ?>
<?php
// есть еще объекты
// NULL
// resourse
?>
