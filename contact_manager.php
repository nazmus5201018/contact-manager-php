<?php
// Terminal-based Contact Management App
$name1 = "";
$phone1 = "";
$name2 = "";
$phone2 = "";
$contact_count = 0;

while (true) {
    echo "\nContact Management App\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Enter your choice (1-3): ";
    
    // Get user choice
    $choice = trim(fgets(STDIN));
    
    switch ($choice) {
        case "1":
            if ($contact_count < 2) {
                echo "Enter name: ";
                $name = trim(fgets(STDIN));
                echo "Enter phone number: ";
                $phone = trim(fgets(STDIN));
                if ($contact_count == 0) {
                    $name1 = $name;
                    $phone1 = $phone;
                } else {
                    $name2 = $name;
                    $phone2 = $phone;
                }
                $contact_count++;
                echo "Contact added successfully!\n";
            } else {
                echo "Cannot add more contacts. Maximum limit (2) reached.\n";
            }
            break;
        
        case "2":
            echo "\nSaved Contacts:\n";
            if ($contact_count == 0) {
                echo "No contacts saved.\n";
            } else {
                if ($name1 != "") {
                    echo "Name: $name1, Phone: $phone1\n";
                }
                if ($name2 != "") {
                    echo "Name: $name2, Phone: $phone2\n";
                }
            }
            break;
        
        case "3":
            echo "Goodbye!\n";
            exit;
        
        default:
            echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}
?>