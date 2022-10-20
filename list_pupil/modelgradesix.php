<?php

class Gradesix
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

    public function fetchgradesix_section()
    {
        $data = [];

        $query = "SELECT DISTINCT `section` FROM `gradsec`WHERE grade_level = 'Grade - VI'";
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

    public function fetchgradesix_year()
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

    public function fetchgradesix()
    { 
        $data = [];

        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id inner join schoolyear s on e.schoolyear_id = s.schoolyear_id inner join gradsec g on e.gradsec_id = g.gradsec_id inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.grade_level = 'Grade - VI'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row; 
            }  
        }
   
        return $data;
    }

    // Filter Standard and Result

    public function fetchgradesix_filter($gradesixsection, $gradesixyear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        inner join gradsec g on e.gradsec_id = g.gradsec_id
        inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.grade_level = 'Grade - VI' AND g.section = '$gradesixsection' AND s.year ='$gradesixyear'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Standard

    public function fetchgradesix_section_filter($gradesixsection)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$std'";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        inner join gradsec g on e.gradsec_id = g.gradsec_id
        inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.grade_level = 'Grade - VI' AND g.section = '$gradesixsection'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Result

    public function fetchgradesix_year_filter($gradesixyear)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE result = '$res'";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        inner join gradsec g on e.gradsec_id = g.gradsec_id
        inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.grade_level = 'Grade - VI' AND s.year = '$gradesixyear'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}