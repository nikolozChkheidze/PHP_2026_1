<?php
    
    $connect = mysqli_connect("localhost", "root" , "", "blog2026_11");

    // echo "<pre>";
    // print_r( $connect);
    // echo "</pre>";

    $select_roles_query = "SELECT * FROM roles";
    
    $roles_result = mysqli_query($connect, $select_roles_query);

if (isset($_POST['_role']) && !empty($_POST['_role'])) {
    $_role = $_POST['_role'];
    $insert_role_query = "INSERT INTO roles (role) VALUES ('$_role')";
    mysqli_query($connect, $insert_role_query);
    header("location: db_test1.php");
}
    // echo "<pre>";
    // print_r( $query);
    // echo "</pre>";

    $data_of_roles_result = mysqli_fetch_all($roles_result);
    
    // echo "<pre>";
    // print_r( $data_of_roles_result[1][1]);
    // echo "</pre>";
echo "<table border='1', padding='10px'>";
    foreach($data_of_roles_result as $role){
        
        echo "<tr>";
        echo "<td>" . $role[0] . "</td>";
        echo "<td>" . $role[1] . "</td>";
        echo "<td>" . $role[2] . "</td>";
        echo "<td>" . $role[3] . "</td>";
        echo "<td>" . $role[4] . "</td>";
        echo "</tr>";

    }
        echo "</table>";
?>
<style>
    form{
        width: 300px;
        height: 200px;
        border: 1px solid black;
        margin: auto;
    }
</style>
<form method = "post">

    role: <input type="text" name="_role">
    <br>
    <br>
    <button>insert into role</button>

</form>