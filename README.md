# PHP Unexpected Empty Array Return from Function

This repository demonstrates a subtle bug in PHP related to how arrays are handled when passed to functions.  The core issue is the unexpected return of an empty array when modifying an array within a function, caused by PHP's copy-on-write mechanism.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.

This example highlights the importance of understanding how PHP handles data structures to avoid this type of hard-to-find bug.