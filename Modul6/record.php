<style>
body {
    background: #456;
    font-family: 'Open Sans', sans-serif;
    padding: 0px;
}
table {
    border-collapse: collapse;
    border: none;
}
.header {
    color: white;
}
table tr:nth-child(even) {
    background-color: #eee;     
}
table tr:nth-child(odd) {
    background-color:#fff;      
}
th {
    background-color:#28d;
    color:white;
}
td {
    text-align:center;
}
a {
    color: white;
    text-decoration: none;
    font-size: 20px;
}
h3 {
    color: white;
}
</style>

<?php
require_once "connect.php";

$sql = 'SELECT * FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if($result){
    if(mysqli_num_rows($result)){  
?>
<body>
<h1 class="header">Data Record</h1>
<div class="table">
<table border=0 cellspacing=1 cellpadding=5>
    <tr>
        <th width=50 height=50><b>#</b></th>
        <th width=300><b>NIS</b></th>
        <th width=500><b>Nama</b></th>
        <th width=500><b>Alamat</b></th>
    </tr>
    <?php
        $i = 1;
        while($row = mysqli_fetch_row($result)){
    ?>
    <tr>
        <td height=40>
            <?php echo $i;?>
        </td>
        <td>
            <?php echo $row[0];?>
        </td>
        <td>
            <?php echo $row[1];?>
        </td>
        <td>
            <?php echo $row[2];?>
        </td>
    </tr>
    <?php
        $i++;
    }
    ?>
</table>

</div>
<h3><a href="add_data.php">Tambah Data</a> | <a href="logout.php">Logout</a></h3> 
<?php
}
else{
    echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
?>

</body>
