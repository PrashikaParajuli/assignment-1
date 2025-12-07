<?php
print_r($_GET);
if(isset($_GET['btn_search'])){
    echo " Search Button Clicked";
}
if(isset($_GET['btn_search_country'])){
    echo " button search country clicked";
}
?>
<h2>Search Users</h2>
<form>
    Search: <input type="text" name="q" id ="q"><br>
    <input type="reset" value="Clear">
    <input type="submit" name="btn_search" value="Search">
</form>

<h2>Search Countries</h2>
<form>
    Search: <input type="text" name="q" id ="q"><br>
    <input type="reset" value="Clear">
    <input type="submit" name="btn_search_country" value="Search">
</form>