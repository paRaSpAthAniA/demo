<?php

$students = [
    [
        "id" => 1,
        "name" => "Anuj",
        "subjects" => [
            "DSA" => 85,
            "C++" => 90,
            "Networks" => 78
        ]
    ],
    [
        "id" => 2,
        "name" => "Yash",
        "subjects" => [
            "DSA" => 0,
            "C++" => 5,
            "Networks" => 8
        ]
    ],
    [
        "id" => 3,
        "name" => "Rahul",
        "subjects" => [
            "DSA" => 95,
            "C++" => 88,
            "Networks" => 92
        ]
        ],
        [
            "id" => 4,
            "name" => "Rohit",
            "subjects" => [
                "DSA" => 75,
                "C++" => 80,
                "Networks" => 85
            ]
        ],
        [
            "id" => 5,
            "name" => "Raj",
            "subjects" => [
                "DSA" => 60,
                "C++" => 65,
                "Networks" => 70
            ]
        ]
];


function calculateGrade($marks) {
    $total = array_sum($marks);
    $average = $total / count($marks);
    
    if ($average >= 90) {
        $grade = "A";
    } elseif ($average >= 80) {
        $grade = "B";
    } elseif ($average >= 70) {
        $grade = "C";
    } elseif ($average >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    return ["total" => $total, "average" => $average, "grade" => $grade];
}

echo "<h3>Student Grade Manager</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ID</th><th>Name</th><th>DSA</th><th>C++</th><th>Networks</th><th>Total</th><th>Average</th><th>Grade</th></tr>";

foreach ($students as $student) {
    $result = calculateGrade($student["subjects"]);
    
    echo "<tr>";
    echo "<td>{$student['id']}</td>";
    echo "<td>{$student['name']}</td>";
    echo "<td>{$student['subjects']['DSA']}</td>";
    echo "<td>{$student['subjects']['C++']}</td>";
    echo "<td>{$student['subjects']['Networks']}</td>";
    echo "<td>{$result['total']}</td>";
    echo "<td>" . number_format($result['average'], 2) . "</td>";
    echo "<td>{$result['grade']}</td>";
    echo "</tr>";
}

echo "</table>";
?>