<?php
class ListSchool 
{
    var $name;
    var $year_in;
    var $year_out;
    var $major;
    function __construct($name, $year_in, $year_out, $major)
    {
        $this->name     = $name;
        $this->year_in  = $year_in;
        $this->year_out = $year_out;
        $this->major    = $major;
    }
}
class Skill 
{
    var $skill_name;
    var $level;
    
    function __construct($skill_name, $level)
    {
        $this->skill_name   = $skill_name;
        $this->level        = $level;
    }
    
}

function biodata($nama, $umur)
{
    $listSchool = new ListSchool('SMKN 1 Jamblang', 2016, 2019, null);
    $skill = new Skill('PHP', 'advanced');
    $data = [
        'Nama'              => $nama,
        'Age'               => $umur,
        'Address'           => 'Jl Wijaya Kusuma No 63 Blok Prapatan Desa Getasan Kecamatan Depok Kabupaten Cirebon',
        'Hobbies'           => [
            '1' => 'Main Game',
            '2' => 'Ngoding'
        ],
        'is_merried'        => false,
        'List_school'       => (array)$listSchool,
        'skills'            => (array)$skill,
        'interest_in_coding'=> true


    ];
    var_dump($data);
    $json = json_encode(['Biodata' => $data]);
    if (file_put_contents("1.json", $json)) {
        echo "json data berhasil dibuat";
    } else {
        echo "terjadi kesalahan";
    }
}

biodata('nurdin', 18);
?>