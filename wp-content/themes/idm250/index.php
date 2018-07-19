<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Excercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Task</h1>
<p>Example 1: Use a PHP for Loop to display the array below</p>
<pre>
<code>
$characters = ['Paul', 'Mark', 'Jane'];


</code>
<?php
    $characters = ['Paul', 'Mark', 'Jane'];

    $length = count($characters);
    for ($i = 0; $i < $length; $i++) {
        echo '<p>'.$i.' is the key and '.$characters[i].' is the value in the $characters array</p>';
    }
    
    ?>
</pre>

<br>
<p>Example 2: Use a PHP foreach Loop to display the array</p>
<pre>
<code>
$schools = [
    'Drexel University' => [
        'type' => 'University',
        'url'  => 'https://drexel.edu'
    ],
    'Temple University'  => [
        'type' => 'University',
        'url'  => 'https://www.temple.edu/'
    ],
    'University of Pennsylvania' => [
        'type' => 'University',
        'url'  => 'https://www.upenn.edu/'
    ]
];
</code>
<?php
$schools = [
    'Drexel University' => [
        'type' => 'University',
        'url'  => 'https://drexel.edu'
    ],
    'Temple University'  => [
        'type' => 'University',
        'url'  => 'https://www.temple.edu/'
    ],
    'University of Pennsylvania' => [
        'type' => 'University',
        'url'  => 'https://www.upenn.edu/'
    ]
];
    foreach ($schools as $key=>$value) {
        echo '<p>'.$key.' is a '.$value['type'].' and the website is '.$value['url'].'</p>';
    }
?>
</pre>


<?php
?>

</body>
</html>