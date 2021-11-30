<?php include_once './top_design.php'; ?>
   
<?php if($emailD_new !== "admin@gmail.com"){ ?>
<script>
    document.location = "logout.php";
    </script>
<?php } ?>

<?php 
$count_contact = 0;
include_once './db_connector.php';
    $sql = "SELECT * from signin_table";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->rowCount();
    $rows = $stmt->fetchAll(); 
    ?>   
<h3 style="margin-left: 15%; 
    margin-bottom: 0px; font-weight: lighter;">
    All Contacts: <?php echo $count; ?></h3>
<table>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email ID</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
   <?php 
   foreach ($rows as $row) { ?>
    <tr> 
        <td><?php echo ++$count_contact; ?></td>
        <td><?php echo $row->firstName; ?></td>
        <td><?php echo $row->lastName; ?></td>
        <td><?php echo $row->emailID; ?></td> 
        
        
        
        <td>
            
    <form action="edit_users.php" method="POST">
    <input type="hidden" name="firstName" value="<?php echo $row->firstName; ?>" />
   <input type="hidden" name="lastName" value="<?php echo $row->lastName; ?>" />
   <input type="hidden" name="emailID" value="<?php echo $row->emailID; ?>" />
   <input type="hidden" name="contactAddress" value="<?php echo $row->contactAddress; ?>" />
   
          <button>Edit</button>
            </form>
        
        
        </td>
        
        
        
        <td>
<form action="delete_users.php" method="POST">
    <input type="hidden" name="emailID" value="<?php echo $row->emailID; ?>" />
  <button onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
</form>
        
        </td>
    </tr> 
       <?php } ?>   
</table>

<style>
    table{        
   width: 70%;
   margin: 0 auto;
   border-collapse: collapse;   
    }
    th,td{
        border: 1px #ccc solid;
        padding: 8px;
        text-align: left;
        color: #5b5b5b;
    }
</style>

<?php include_once './bottom_design.php'; ?>