<?php

class Gradetwo
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

    public function fetchgradetwo_section()
    {
        $data = [];

        $query = "SELECT DISTINCT `section` FROM `gradsec`WHERE grade_level = 'Grade - II'";
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

    public function fetchgradetwo_year()
    {
        $data = [];

        // $query = "SELECT DISTINCT `result` FROM `student`";
        $query = "SELECT DISTINCT `year` FROM `schoolyear` ORDER BY `schoolyear`.`year` ASC";
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

    public function fetchgradetwo()
    { 
        $data = [];

        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - II' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row; 
            }  
        }
   
        return $data;
    }

    // Filter Standard and Result

    public function fetchgradetwo_filter($gradetwosection, $gradetwoyear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - II' AND g.section = '$gradetwosection' AND s.year ='$gradetwoyear' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    
    public function fetchgradetwo_filter_date($gradetwosection, $gradetwoyear,$gradetwoFrom,$gradetwoTo){

        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - II'  AND (g.section = '$gradetwosection' AND s.year ='$gradetwoyear') AND  (a.logdate BETWEEN '$gradetwoFrom' AND '$gradetwoTo') ORDER BY a.logdate ASC";
        
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;

    }

    // Filter Standard

    public function fetchgradetwo_section_filter($gradetwosection)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$std'";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level = 'Grade - II' AND g.section = '$gradetwosection' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Result

    public function fetchgradetwo_year_filter($gradetwoyear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE result = '$res'";
        $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE g.grade_level =  'Grade - II' AND s.year = '$gradetwoyear' ORDER BY a.logdate ASC";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}