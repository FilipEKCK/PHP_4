<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    array_fill() - Wypełnia tablicę wartościami. <?php $array = array_fill(0, 5, 'jabłko');
                                                    print_r($array); // Wynik: Array ( [0] => jabłko [1] => jabłko [2] => jabłko [3] => jabłko [4] => jabłko )
                                                    ?> <br>
    array_key_exists() - Sprawdza, czy określony klucz istnieje w tablicy. <?php $array = ['a' => 1, 'b' => 2];
                                                                            if (array_key_exists('a', $array)) {
                                                                                echo 'Klucz istnieje!';
                                                                            }
                                                                            ?> <br>
    array_keys() - Zwraca wszystkie klucze tablicy. <?php $array = ['a' => 1, 'b' => 2];
                                                    $keys = array_keys($array);
                                                    print_r($keys); // Wynik: Array ( [0] => a [1] => b )
                                                    ?> <br>
    array_pop() - Usuwa ostatni element z tablicy. <?php $array = [1, 2, 3];
                                                    $last = array_pop($array);
                                                    print_r($array); // Wynik: Array ( [0] => 1 [1] => 2 )
                                                    ?> <br>
    array_push() - Dodaje jeden lub więcej elementów na koniec tablicy. <?php $array = [1, 2];
                                                                        array_push($array, 3, 4);
                                                                        print_r($array); // Wynik: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
                                                                        ?> <br>
    array_reverse() - Zwraca tablicę z elementami w odwrotnej kolejności. <?php $array = [1, 2, 3];
                                                                            $reversed = array_reverse($array);
                                                                            print_r($reversed); // Wynik: Array ( [0] => 3 [1] => 2 [2] => 1 )
                                                                            ?> <br>
    array_search() - Przeszukuje tablicę w poszukiwaniu wartości i zwraca klucz. <?php $array = ['a' => 1, 'b' => 2];
                                                                                    $key = array_search(2, $array);
                                                                                    echo $key; // Wynik: b
                                                                                    ?> <br>
    array_slice() - Wyciąga fragment tablicy. <?php $array = [1, 2, 3, 4, 5];
                                                $slice = array_slice($array, 1, 3);
                                                print_r($slice); // Wynik: Array ( [0] => 2 [1] => 3 [2] => 4 )
                                                ?> <br>
    array_unique() - Usuwa zduplikowane wartości z tablicy. <?php $array = [1, 2, 2, 3];
                                                            $unique = array_unique($array);
                                                            print_r($unique); // Wynik: Array ( [0] => 1 [1] => 2 [3] => 3 )
                                                            ?> <br>
    array_values() - Zwraca wszystkie wartości tablicy. <?php $array = ['a' => 1, 'b' => 2];
                                                        $values = array_values($array);
                                                        print_r($values); // Wynik: Array ( [0] => 1 [1] => 2 )
                                                        ?> <br>
    - <br>
    count() - Liczy wszystkie elementy w tablicy. <?php $array = [1, 2, 3];
                                                    echo count($array); // Wynik: 3
                                                    ?> <br>
    explode() - Dzieli string na tablicę według określonego separatora. <?php $string = 'a,b,c';
                                                                        $array = explode(',', $string);
                                                                        print_r($array); // Wynik: Array ( [0] => a [1] => b [2] => c )
                                                                        ?> <br>
    in_array() - Sprawdza, czy wartość istnieje w tablicy. <?php $array = [1, 2, 3];
                                                            if (in_array(2, $array)) {
                                                                echo 'Wartość istnieje!';
                                                            }
                                                            ?> <br>
    is_array() - Sprawdza, czy zmienna jest tablicą. <?php $array = [1, 2, 3];
                                                        if (is_array($array)) {
                                                            echo 'To jest tablica!';
                                                        }
                                                        ?> <br>
    range() - Tworzy tablicę zawierającą zakres elementów. <?php $array = range(1, 5);
                                                            print_r($array); // Wynik: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
                                                            ?> <br>
    list() - Przypisuje zmienne tak, jakby były tablicą. <?php $array = [1, 2, 3];
                                                            list($a, $b, $c) = $array;
                                                            echo $a; // Wynik: 1
                                                            ?> <br>
    shuffle() - Miesza elementy tablicy. <?php $array = [1, 2, 3];
                                            shuffle($array);
                                            print_r($array); // Wynik: Array ( [0] => 3 [1] => 1 [2] => 2 ) (przykładowy wynik, rzeczywista kolejność może się różnić)
                                            ?> <br>
    - <br>
    sort() - Sortuje tablicę. <?php $array = [3, 1, 2];
                                sort($array);
                                print_r($array); // Wynik: Array ( [0] => 1 [1] => 2 [2] => 3 )
                                ?> <br>
    rsort() - Sortuje tablicę w odwrotnej kolejności. <?php $array = [3, 1, 2];
                                                        rsort($array);
                                                        print_r($array); // Wynik: Array ( [0] => 3 [1] => 2 [2] => 1 )
                                                        ?> <br>
    asort() - Sortuje tablicę i zachowuje indeksy. <?php $array = ['a' => 3, 'b' => 1, 'c' => 2];
                                                    asort($array);
                                                    print_r($array); // Wynik: Array ( [b] => 1 [c] => 2 [a] => 3 )
                                                    ?> <br>
    ksort() - Sortuje tablicę według kluczy. <?php $array = ['c' => 3, 'a' => 1, 'b' => 2];
                                                ksort($array);
                                                print_r($array); // Wynik: Array ( [a] => 1 [b] => 2 [c] => 3 )
                                                ?> <br>
    arsort() - Sortuje tablicę w odwrotnej kolejności i zachowuje indeksy. <?php $array = ['a' => 3, 'b' => 1, 'c' => 2];
                                                                            arsort($array);
                                                                            print_r($array); // Wynik: Array ( [a] => 3 [c] => 2 [b] => 1 )
                                                                            ?> <br>
    krsort() - Sortuje tablicę według kluczy w odwrotnej kolejności. <?php $array = ['c' => 3, 'a' => 1, 'b' => 2];
                                                                        krsort($array);
                                                                        print_r($array); // Wynik: Array ( [c] => 3 [b] => 2 [a] => 1 )
                                                                        ?> <br>
</body>

</html>