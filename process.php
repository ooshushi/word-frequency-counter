<?php
// function that will tokenize and count word frequencies
function calc_word_frequency($text) {
    // tokenize the input text into words
    $words = str_word_count($text, 1);
    $words = array_map('strtolower', $words);
    
    // filter out common conjunction words that are used as stop words
    $conjunctions = ['and', 'or', 'so', 'since', 
    'for', 'because', 'as', 'but', 'yet', 'still', 'while'];
    $filter_stop_words = array_diff($words, $conjunctions);

    // count frequency of words
    $word_count = array_count_values($filter_stop_words);

    // sort frequency by desc or asc
    if ($_POST['sort'] === 'desc') {
        arsort($word_count);
    } else {
        asort($word_count);
    }

    return $word_count;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get user input
    $text = $_POST['text'];

    // calculate the frequncy of words
    $wordFrequency = calc_word_frequency($text);
    $limit = (int)$_POST['limit'];
    $wordFrequency = array_slice($wordFrequency, 0, $limit);

    // print result
    echo '<h2>Word Frequency:</h2>';
    echo '<ul>';
    foreach ($wordFrequencies as $word => $frequency) {
        echo '<li>' . $word . ': ' . $frequency . '</li>';
    }
    echo '</ul>';
}
?>