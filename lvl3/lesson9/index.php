<?php
    if ('string') {echo 'Условие выполнилось ';} #не пустая строка равно true
    if (0) {echo 'Условие выполнилось ';}# ноль равен false
    if (null) {echo 'Условие выполнилось ';}# null = 0 = false
    if (5) {echo 'Условие выполнилось ';} # (число>0) = true
    $number = 4;
    echo ($number % 2 == 0) ? 'число четное' : 'число нечетное';