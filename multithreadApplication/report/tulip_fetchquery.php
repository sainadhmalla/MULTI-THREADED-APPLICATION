<?php
include '../../src/php/dbh.php';

if (isset($_POST['applied'])) {
    $filter = mysqli_real_escape_string($conn, $_POST['filter']);
    $sql = "Select count(*) as posted from railways_form where zone = '$filter'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        echo '
        <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
    }
}
if (isset($_POST['ongoing'])) {
    $filter = mysqli_real_escape_string($conn, $_POST['filter']);
    $sql = "Select count(*) as posted from railways_form where status = 'selected' where zone = '$filter'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        echo '
        <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
    }
}
if (isset($_POST['completed'])) {
    $filter = mysqli_real_escape_string($conn, $_POST['filter']);
    $sql = "Select count(*) as posted from railways_form where status = 'Internship completed' where zone = '$filter'";
    $res = mysqli_query($conn,$sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        echo '
        <span class="h2 font-weight-bold mb-0">' . $row['posted'] . '</span>';
    }
}
if (isset($_POST['body'])) {
    $filter = mysqli_real_escape_string($conn, $_POST['filter']);
    $sql = "Select student_first_name,student_middle_name,student_last_name,f.status,student_stream,student_course from railways_form f inner join student_register r on r.student_uid = f.student_uid where zone = '$filter'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
            <tr>
            <td class="h3">' . $row['student_first_name'] . ' ' . $row['student_middle_name'] . ' ' . $row['student_last_name'] . '</td>
            <td>' . $row['student_course'] . ', ' . $row['student_stream'] . '</td>
            <td>2 August 2020</td>
            <td>' . $row['status'] . '</td>
          </tr>';
        }
    }
}
