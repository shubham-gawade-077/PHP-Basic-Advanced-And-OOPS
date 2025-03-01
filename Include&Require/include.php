<?php
// show warning if file not found
//      include  - can multiple time add
//      include_once  -only one time add

// show error if file not found
//      require  - can multiple time add
//      require_once  -only one time add
for($i=1;$i<=5;$i++)
{
   include("./includeDemo.php");
}

for($i=1;$i<=5;$i++)
{
   include_once("./includeDemo.php");
}

for($i=1;$i<=5;$i++)
{
   require("./includeDemo.php");
}

for($i=1;$i<=5;$i++)
{
   require_once("./includeDemo.php");
}
?>