<?php
session_start();

class DB
{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db11";
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    public function a2s($a)
    {
        $t = [];
        foreach ($a as $k => $v) {
            $t[] = "`$k`='$v'";
        }
        return $t;
    }

    public function all(...$arg)
    {
        $sql = "select * from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $t = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $t);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll(2);
    }

    public function count(...$arg)
    {
        $sql = "select count(*) from `$this->table`";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $t = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $t);
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
            $t = $this->a2s($arg);
            $sql .= " where " . join(" && ", $t);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->query($sql)->fetch(2);
    }

    public function del($arg)
    {
        $sql = "delete from `$this->table`";
        if (is_array($arg)) {
            $t = $this->a2s($arg);
            $sql .= " where " . join(" && ", $t);
        } else {
            $sql .= " where `id` = '$arg'";
        }
        return $this->pdo->exec($sql);
    }

    public function save($arg)
    {
        if (isset($arg['id'])) {
            $t = $this->a2s($arg);
            $sql = "update `$this->table` set " . join(",", $t);
            $sql .= " where `id` = '{$arg['id']}'";
        } else {
            $k = array_keys($arg);
            $sql = " insert into `$this->table` (`" . join("`,`", $k) . "`) values ('" . join("','", $arg) . "')";
        }
        return $this->pdo->exec($sql);
    }
}

function q($sql)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=db11";
    $pdo = new PDO($dsn, 'root', '');
    return $pdo->query($sql)->fetchAll(2);
}

function dd($a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
function to($url)
{
    header("location:" . $url);
}


$Title = new DB('title');
$Ad = new DB('ad');
$Mvim = new DB('mvim');
$Image = new DB('images');
$Total = new DB('total');
$Bottom = new DB('bottom');
$News = new DB('news');
$Admin = new DB('admin');
$Menu = new DB('menu');

if (!isset($_SESSION['view'])) {
    $total = $Total->find(1);
    $total['text']++;
    $Total->save($total);
    $_SESSION['view'] = $total['text'];
}
