# PHP Course 101

## Primative: basic datatype

strings - mixed characters
integers - whole numbers
floats - points numbers
bool - true, false
time -
date - 

## Declare var

assign var in memory then name it after give it a value after equal sign

```
$x = 1;
$str1 = "hello";
// ...
```

## integers

```
echo 1.2 . "<br>"; //output: 1.2 \n
echo 1 . 2 . "<br>"; //output: 12 \n
```

### NOTICE: **

`echo $A + + $A;` *is correct output as $A plus not negative*

**but not ++ as one**


## important note: FOR VARIABLE DECLARATION

- name of variable can begin with any allowed chars but not a number.

e.g: `$_underscore = 123;`

## NOTE:

single qoute is just get me the exact same variable as string not value

```
$x = 3;
echo '$x'; // output: $x
echo "$x"; // output: 3
```
     
## datatype print: var_dump(...)

```
$x = 1;
var_dump($x); // output: integer(1)

$txt = "abc";
var_dump($txt); // output: string(3) "abc"

$isTrue = true;
var_dump($isTrue); // output: bool(true)
echo $isTrue; // output: 1
echo !$isTrue; // output: null
```

## Constaints

cannot be changed later

```
define(CONST_NAME, VALUE, ?BOOL=>CASE_INSENSITIVE);
```

`echo CONST_NAME, ...`

## Conditions

if something come true then do it otherwise do that

```yaml
  if (condition satisfaied) then
    execute this 
  otherwise
    execute this
```

```php
  if (condition) 
  {
    // execute this 
  }
  else
  {
    // if not true execute this
  }
```

```php
  if (condition) 
  {
    // execute this 
  }
  elseif (condition)
  {
    // execute this
  }
  else
  {
    // if not true execute this
  }
```

## shapes of if

```php
  if (condition) 
    // execute this;
```

```php
  if (condition) 
    // execute this
  else
    // if not true execute this;    
```   

```php
if (condition);  <-- if is not the case anymore
{
  //execution
}
```

#### NOTES:
 
- curly brackets not affecting the program to run even if they put without any conditions
- Track if so if they have any semi colons they end.
- keep tracking on properties and ++x x++ and see changing in RAM until program exit.
- know if the question what exatly want simple if or elseif
- Do math then write your programming code

### NOTES: Switch statement

- Switch statement cannot handle many operations it is just a one operation with cases 
  ```php 
    // incorrect code
    $x = 2;
    $y = 3;
    switch ($x) 
    {
      case ($x + $y): 
        echo 5; // use if...else... instead!
    }
  ```
  
- Switch cannot handle operators cases it is only equal something.
  ```php 
    // incorrect code
    $x = 2;
    switch ($x) 
    {
      case ($x > 2): 
        echo 5; // use if...else... instead!
    }
  
  ```
  
