<?php
include('../security.php');
class Model
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

    // Fetch Sectioi

    public function fetch_section()
    {
        $data = [];

        $query = "SELECT DISTINCT `section` FROM `gradsec`";
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

    // Fetch year

    public function fetch_year()
    {
        $data = [];

        // $query = "SELECT DISTINCT `result` FROM `student`";
        $query = "SELECT DISTINCT `year`,'toyear' FROM `schoolyear` ORDER BY `schoolyear`.`year` ASC";
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

    public function fetch()
    {
        $data = [];

        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        inner join qrcode q on p.qrcode_id = q.qrcode_id
        inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        inner join gradsec g on e.gradsec_id = g.gradsec_id
        inner join adviser a on g.adviser_id = a.adviser_id WHERE a.adviser_id = '".$_SESSION["user_log"]["adviser_id"]."'   ";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Section and year

    public function fetch_filter($section, $year)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$section' AND result = '$year' ";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id inner join schoolyear s on e.schoolyear_id = s.schoolyear_id inner join gradsec g on e.gradsec_id = g.gradsec_id inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.section = '$section' AND s.year ='$year'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter Section

    public function fetch_section_filter($section)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE standard = '$std'";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id inner join schoolyear s on e.schoolyear_id = s.schoolyear_id inner join gradsec g on e.gradsec_id = g.gradsec_id inner join adviser a on g.adviser_id = a.adviser_id inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.section = '$section'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }

    // Filter year

    public function fetch_year_filter($year)
    {
        $data = [];

        // $query = "SELECT * FROM student WHERE result = '$res'";
        $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
        inner join qrcode q on p.qrcode_id = q.qrcode_id
        inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
        inner join gradsec g on e.gradsec_id = g.gradsec_id
        inner join adviser a on g.adviser_id = a.adviser_id WHERE a.adviser_id = ".$_SESSION["user_log"]["adviser_id"]." AND s.year = '$year'";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}

