# PHP builder using closures (proof of concept)

This example is using closure to set private properties of an object that is being built.
This guarantees isolation, as no setter methods are needed (neither a constructor).

Although, PHPStorm has some hard time as autocompletion is not fully working despite the fact the code is correct.

https://youtrack.jetbrains.com/issue/WI-20105  
https://youtrack.jetbrains.com/issue/WI-29871  
https://youtrack.jetbrains.com/issue/WI-57407