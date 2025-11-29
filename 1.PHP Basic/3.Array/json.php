<?php

$students = [
    "Soumen" => [
        "name" => "Soumen",
        "department" => "CSE",
        "University" => "SU",
        "Year" => "4th",
    ],
    "Shuvo" => [
        "name" => "Shuvo",
        "department" => "CSE",
        "University" => "SU",
        "Year" => "4th",
    ],
];

// Encode PHP array → JSON
echo json_encode($students, JSON_PRETTY_PRINT);

echo "\n\n";

// Valid JSON string
$json = '{
    "Soumen": {
        "name": "Soumen",
        "department": "CSE",
        "University": "SU",
        "Year": "4th"
    },
    "Shuvo": {
        "name": "Shuvo",
        "department": "CSE",
        "University": "SU",
        "Year": "4th"
    }
}';

// Decode JSON string → PHP array
$decoded = json_decode($json, true);

print_r($decoded);
