<?php
    // while (true) {
      
    // }
    //     loop with $counter
    //     $counter = 0;
    //     $loop = true;
    //     while ($loop){
    //         echo "Counter $counter" . '<br>';
    //         if ($counter >= 10){
    //             $loop = false;
    //         };
    //         $counter++;
    //     }
    // do = while
    // $counter = 10;
    // {
    //     echo "Counter $counter";
    // } while ($counter < 10);

    $person = [
        'name'=> 'Brad',
        'surname'=> 'Traversy',
        'age' => 30,
        'hobbies' => ['Tennis,','Video Game']
    ];
    foreach ($person as $key => $value){
        if ($key === 'hobbies') break;
        echo $value . '<br>';
    }

?>