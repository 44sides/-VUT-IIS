<?php
include_once("db_setup.php");
include_once("db_user.php");

function get_my_requests($id, $state){
    $db = get_pdo();
    return $db->query("SELECT * FROM SERVICE_REQUEST WHERE worker_id=".$id." AND state=".$state.";");
}

function get_request_tickets($id){
    $db = get_pdo();
    return $db->query("SELECT * FROM TICKET WHERE id = (SELECT for_ticket FROM SERVICE_REQUEST WHERE worker_id=".$id.");");
}

function get_request_by_ticket($ticket_id){
    $db = get_pdo();
    return $db->query("SELECT * FROM SERVICE_REQUEST WHERE for_ticket=".$ticket_id.";");
}

function state_update_0_1($request_id, $date, $price, $comment){
    $db = get_pdo();
    return $db->query("UPDATE SERVICE_REQUEST SET state=1, expected_date='".$date."', price=".$price.", comment_from_worker='".$comment."' WHERE id=".$request_id.";");
}

function state_update_1_2($request_id){
    $db = get_pdo();
    return $db->query("UPDATE SERVICE_REQUEST SET state=2, date_fixed=CURDATE() WHERE id=".$request_id.";");
}

// function aaa($request_id){
//     $db = get_pdo();
//     return $db->query("UPDATE SERVICE_REQUEST SET state=1 WHERE id=".$request_id.";");
// }

?>