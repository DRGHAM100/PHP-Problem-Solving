<?php
/*
    Problem: Brothers or Not

    Description:
    Given two person names. Each person has a first name and a second name.
    Determine whether they are brothers or not.

    Note:
    - Two persons are brothers if they share the same second name.

    Input:
    - First line contains two strings F1, S1 representing the first and second names of the 1st person.
    - Second line contains two strings F2, S2 representing the first and second names of the 2nd person.

    Output:
    - Print "ARE Brothers" if they are brothers, otherwise print "NOT".

    Examples:
    Input:
    Drgham Dakhol
    Yoshaa Dakhol
    Output:
    ARE Brothers

    Input:
    Ahmed Ali
    Mahmoud Ammar
    Output:
    NOT
*/

// Read the two names
$first_person = explode(" ", readline());
$second_person = explode(" ", readline());

// Extract last names
$first_person_last_name = $first_person[count($first_person) - 1];
$second_person_last_name = $second_person[count($second_person) - 1];

// Compare and print result
if ($first_person_last_name === $second_person_last_name) {
    echo "ARE Brothers";
} else {
    echo "NOT";
}
