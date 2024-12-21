<html>

<head>
  <title>PHP Test</title>
</head>

<body>


  <?php

  $firstName = readline('ВВедите имя: ');
  $secondName = readline('Введите фамилию: ');
  $fatherName = readline(prompt: 'Введите отчество: ');

  // // преобразует первый символ строки в верхний регистр, используем встроенную функцию mb_ucfirst.
  // $firstName = mb_ucfirst($firstName, "utf-8");
  // $secondName = mb_ucfirst($secondName, "utf-8");
  // $fatherName = mb_ucfirst($fatherName, "utf-8");

  // преобразует первый символ строки в верхний регистр, используем встроенную функцию mb_convert_case.
  $firstName = mb_convert_case($firstName, MB_CASE_TITLE_SIMPLE , "utf-8");
  $secondName = mb_convert_case($secondName, MB_CASE_TITLE_SIMPLE , "utf-8");
  $fatherName = mb_convert_case($fatherName, MB_CASE_TITLE_SIMPLE , "utf-8");


  $fullname = $secondName . ' ' . $firstName . ' ' . $fatherName;

  echo "Полное имя: '$fullname' \n";

  //С помощью функции mb_substr достанем первую букву из каждой переменной
  $firstLetterFirstName = mb_substr($firstName, 0, 1);
  $firstLetterFatherName = mb_substr($fatherName, 0, 1);
  $firstLetterSecondName = mb_substr($secondName, 0, 1);

  $surnameAndInitials = $secondName . ' ' . $firstLetterFirstName . '.' . $firstLetterFatherName;

  echo "Фамилия и инициалы: '$surnameAndInitials' \n";

  $fio = "'$firstLetterSecondName.$firstLetterFirstName.$firstLetterFatherName'";

  echo "Аббревиатура: $fio";

  ?>

</body>


</html>