<?php

class Gradefour
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "capstoneproject";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (\Throwable $th) {
            //throw $th;
            echo "Connection error " . $th->getMessage();
        }
    }

    // Fetch Standard

    public function fetchgradefour_section()
    {
        $data = [];

        $query = "SELECT DISTINCT `section` FROM `gradsec`WHERE grade_level = 'Grade - IV'";
        // $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        // inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        // inner join gradsec g on e.gradsec_id = g.gradsec_id
        // inner join adviser a on g.adviser_id = a.adviser_id";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Fetch Result

    public function fetchgradefour_year()
    {
        $data = [];

        // $query = "SELECT DISTINCT `result` FROM `student`";
        $query = "SELECT DISTINCT `year` FROM `schoolyear`  ORDER BY `schoolyear`.`year` ASC";
        // $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        // inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        // inner join gradsec g on e.gradsec_id = g.gradsec_id
        // inner join adviser a on g.adviser_id = a.adviser_id";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Fetch Records

    public function fetchgradefour()
    { 
        $data = [];

        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - IV' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row; 
            }  
        }
   
        return $data;
    }

    // Filter Standard and Result

    public function fetchgradefour_filter($gradefoursection, $gradefouryear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level =  'Grade - IV' AND g.section = '$gradefoursection' AND s.year ='$gradefouryear' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function fetchgradefour_filter_date($gradefoursection, $gradefouryear,$gradefourFrom,$gradefourTo){

        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - IV'  AND (g.section = '$gradefoursection' AND s.year ='$gradefouryear') AND  (a.logdate BETWEEN '$gradefourFrom' AND '$gradefourTo') ORDER BY a.logdate ASC";
        
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;

    }

    // Filter Standard

    public function fetchgradefour_section_filter($gradefoursection)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$std'";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - IV' AND g.section = '$gradefoursection' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Result

    public function fetchgradefour_year_filter($gradefouryear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE result = '$res'";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - IV' AND s.year = '$gradefouryear' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}