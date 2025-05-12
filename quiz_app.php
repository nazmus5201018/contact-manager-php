<?php

// Array of questions, options, and correct answers about Bangladeshi cities
$questions = [
    [
        'question' => 'What is the capital city of Bangladesh?',
        'options' => ['a) Dhaka', 'b) Chittagong', 'c) Khulna'],
        'correct' => 'a'
    ],
    [
        'question' => 'Which city is known as the port city of Bangladesh?',
        'options' => ['a) Sylhet', 'b) Chittagong', 'c) Rajshahi'],
        'correct' => 'b'
    ],
    [
        'question' => 'Which city is famous for its tea gardens?',
        'options' => ['a) Barisal', 'b) Dhaka', 'c) Sylhet'],
        'correct' => 'c'
    ]
];

$score = 0;
$total_questions = count($questions);


foreach ($questions as $index => $q) {
    // Display question and options
    echo "Question " . ($index + 1) . ": " . $q['question'] . "\n";
    foreach ($q['options'] as $option) {
        echo $option . "\n";
    }
    

    echo "Your answer (a/b/c): ";
    $answer = strtolower(trim(fgets(STDIN)));
    

    if ($answer === $q['correct']) {
        echo "Correct!\n\n";
        $score++;
    } else {
        echo "Incorrect. The correct answer was " . $q['correct'] . ")\n\n";
    }
}

echo "Quiz completed! You got $score out of $total_questions correct.\n";

?>