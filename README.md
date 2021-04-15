Using Code Example

```php
<form method="post">

  <?php data($box['fields']); ?>

  <input type="submit">
  
</form>
```

Check Post Parameter(s)

```php
print_r('<pre>');
print_r($_POST);
print_r('</pre>');
```

or

```php 
var_dump($_POST);
```

