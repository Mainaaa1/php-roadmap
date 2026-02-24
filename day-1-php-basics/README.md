# Week 7 — Day 1

# PHP Basics

Objective: Understand the fundamentals of PHP before moving into Laravel.

---

# Topics Covered

* PHP Syntax
* Variables
* Arrays
* Conditionals
* Loops
* Functions

---

# Basic PHP Script

```php
<?php

$name = "Ian";
$age = 25;

if ($age > 18) {
    echo "$name is an adult";
} else {
    echo "$name is a minor";
}

?>
```

---

# Arrays

```php
<?php

$skills = ["PHP", "Laravel", "JavaScript"];

foreach ($skills as $skill) {
    echo $skill . "\n";
}

?>
```

---

# Functions

```php
<?php

function greet($name) {
    return "Hello " . $name;
}

echo greet("Ian");

?>
```

---

# Mini Exercise

Create a script that:

* Stores a list of blog titles
* Loops through them
* Prints them to the screen

Example:

```php
<?php

$posts = [
    "Intro to PHP",
    "Understanding Arrays",
    "Laravel Routing Basics"
];

foreach ($posts as $post) {
    echo $post . "<br>";
}

?>
```

---

# What I Learned

* PHP is simple and flexible
* Syntax is beginner friendly
* Server-side scripting is straightforward
* Good preparation for Laravel
