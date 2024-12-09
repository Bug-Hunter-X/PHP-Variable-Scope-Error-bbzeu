# PHP Variable Scope Bug
This repository demonstrates a common PHP error related to variable scope.  The `myFunc` function attempts to return the loop counter variable `$i`, which is only defined within the `for` loop's scope. Accessing it outside the loop results in an undefined variable error.