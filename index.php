<?php include 'blade/header.php'?>

    <div class="subtitle">
        <h2>Donor List</h2> 
    </div>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM personinfo JOIN bloodgroup WHERE personinfo.groupid = bloodgroup.gid";
        $result = mysqli_query($conn, $sql) or die("Connection Erorr");

        if(mysqli_num_rows($result)>0){
    ?>
    <div class="donor-list">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Blood Group</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ 
                
                ?>
                <td><?php echo $row['pid']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['groupname']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href="" class="tbody-update">Update</a>
                    <a href="" class=tbody-delete>Delete</a>
                </td>
            </tbody>

            <?php } ?>                          
        </table>
    </div>
    </div>

    <?php } ?>

<?php include 'blade/footer.php'?>
    