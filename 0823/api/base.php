<?php

session_start();

class DB
{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    public function a2s($array)
    {
        $tmp = [];
        foreach ($array as $k => $v) {
            $tmp[] = "`$k`='$v'";
        }
        return $tmp;
    }

    public function all(...$arg)
    {
        $sql = "select * from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function count(...$arg)
    {
        $sql = "select count(*) from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    public function find($arg)
    {
        $sql = "select * from `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    public function del($arg)
    {
        $sql = "delete from `$this->table`";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->exec($sql);
    }

    public function save($arg)
    {
        if (isset($arg['id'])) {
            $tmp = $this->a2s($arg);
            $sql = "update `$this->table` set " . join(",", $tmp);
            $sql .= " where `id` = '{$arg['id']}'";
        } else {
            $k = array_keys($arg);
            $sql = "insert into `$this->table` (`" . join("`,`", $k) . "`) values ('" . join("','", $arg) . "')";
        }
        return $this->pdo->exec($sql);
    }
}

function q($sql)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    $pdo = new PDO($dsn, 'root', '');
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
   header("location:".$url);
}


// $data = [
//     'id' => '2',
//     'acc' => 'aaa',
//     'pw' => 'eeeeeee',
// ];

$Title = new DB('title');
$Ad = new DB('ad');
$Mvim = new DB('mvim');
$Image = new DB('image');
$Total = new DB('total');
$Bottom = new DB('bottom');
$News = new DB('news');
$Admin = new DB('admin');
$Menu = new DB('menu');

// $Admin->save($data);
// echo $Admin->count();
// $Admin->del(2);

// dd($Admin->all());
// dd($Admin->find(1));

if(!isset($_SESSION['view'])){
$total=$Total->find(1);
// dd($total);
$total['text']++;
$Title->save($total);
$_SESSION['view']=$total['text'];
}
// dd($_SESSION['view']);