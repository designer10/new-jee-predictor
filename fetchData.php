<?php 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
include "configs.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = json_decode(file_get_contents("php://input"));
    $type = $data->type;
    $rank = $data->rank;
    $category = $data->category;
    $gender = $data->gender;
    $round = $data->round;
    $page = $data->page;
    $limit = $data->limit;
    $start = $page * $limit;
    if($type == 'main'){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `josaa` WHERE `category` = '$category' AND `gender` = '$gender' AND NOT `instituteType` = 'iit' AND cRank>='$rank' ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    elseif($type=="iit"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `josaa` WHERE `category` = '$category' AND `gender` = '$gender' AND `instituteType` = 'iit' AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }

    }
    elseif($type=="csab"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `csab` WHERE `category` = '$category' AND `gender` = '$gender' AND round=$round AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    elseif($type=="aktu"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `aktu` WHERE `category` = '$category' AND round=$round AND gender='$gender' AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        
            }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    elseif($type=="wbjee"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `wbjee` WHERE `category` = '$category' AND round=$round AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    
    }
    elseif($type=="jacChandigarh"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `jac_chandigarh` WHERE `category` = '$category' AND round='$round' AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    elseif($type=="jacDelhi"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `jac_delhi` WHERE `category` = '$category' AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    elseif($type=="ipu"){
        $sql = mysqli_query($conn,"SELECT round,institute,branchName,category,gender,quota,oRank,cRank FROM `ipu` WHERE `category` = '$category' AND round=$round AND cRank>=$rank ORDER BY cRank ASC LIMIT $start,$limit");
        $data = [];
        while($row = mysqli_fetch_assoc($sql)){
            $data[] = $row;
        }
        if(isset($data)){
            echo json_encode($data);
        }
        else{
            echo json_encode(['error' => 'No data found']);
        }
    }
    else{
        echo json_encode(['error' => 'Invalid Type']);
    }
    

}

else{
    echo json_encode(['error' => 'Invalid Request']);
}

?>