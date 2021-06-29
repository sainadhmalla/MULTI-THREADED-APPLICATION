<?php 
include '../src/php/dbh.php';
if(isset($_POST['new'])){  
    $sql = "SELECT * FROM railway_zone";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $zone[] = (object) array('code' => $row['zone_code'],'name' => $row['zone_name']);
    }
    $zone = json_encode($zone);
    echo $zone;
}
if(isset($_POST['new_zone'])){  
$zone_id = mysqli_real_escape_string($conn,$_POST['zone_id']);
$sql = "SELECT * FROM railway_division where zone_code = '$zone_id'";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)){
    $division[] = $row['division_name'];
}
$sql1 = "SELECT * FROM railway_workshop where zone_code = '$zone_id'";
$res1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_assoc($res1)){
    $division1[] = $row1['workshop_name'];
}
$combine = array('division' =>$division,'workshop' => $division1);
$combine = json_encode($combine);
echo $combine;
}

if(isset($_POST['project_category'])){  
    $division_name = mysqli_real_escape_string($conn,$_POST['division_name']);
    $division_type = mysqli_real_escape_string($conn,$_POST['type']);
    $sql = "SELECT * FROM `railway_project_categories` where organisation_name = '$division_name' and  type='$division_type'";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $project_categories[] = (object) array('id'=> $row['id'], 'project_name' => $row['project_category'],'description' => $row['project_description']);
    }
    $project_categories = json_encode($project_categories);
    echo $project_categories;
}
if(isset($_POST['project'])){
    $zone_id = mysqli_real_escape_string($conn,$_POST['zone_id']);
    $division_id = mysqli_real_escape_string($conn,$_POST['division_id']);
    $category_id = mysqli_real_escape_string($conn,$_POST['category_id']);
    $sql = "SELECT * FROM `railway_project` where zone_id = '$zone_id' and division_id = '$division_id' and  category_id = '$category_id' and approval = 'approved'";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        $project[] = (object) array('project_name' => $row['project_name'],'project_nature' => $row['project_nature'],'project_description' => $row['project_description']);
    }
    $project = json_encode($project);
    echo $project;
}
if(isset($_POST['delete_project'])){
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = "DELETE FROM railway_project where id = '$id'";
    echo "success";
}
?>
