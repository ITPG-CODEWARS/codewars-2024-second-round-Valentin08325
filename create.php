<form method="post" >
    <div>
        <label>Url: </label>
        <input type="text" name="url">
        <input type="submit" value="Add">
    </div>
    <div> 

</form>
<?php
if (isset($_POST['url'])) {
     $url = $_POST['url'];
     echo $code = crc32($url);
    $Sql = new SQLite3('dburl.sqlite3');
    $query = 'Create table Url';
    $query .= '( id INTEGER PRIMARY KEY AUTOINCREMENT, ';
    $query .= ' code text not null UNIQUE,';
    $query .= ' url text not null UNIQUE )';
    // insert sql
     $query = 'insert into Url (code, url) VALUES ("'.$code.'", "'.$url.'")';
    $Sql->query($query);
    $Sql->lastErrorMsg();
    $Sql->close();
}
?>