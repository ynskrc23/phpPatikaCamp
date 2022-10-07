<?php

interface IEatable{
    public function eat();
}

interface IPayable{
    public function pay();
}

interface IWorkable{
    public function work();
}

class OutsourceWorker implements IWorkable{
    public function work() {
        echo "danışman firması çalışan"."<br>";
    }
}

class Worker implements IWorkable,IEatable,IPayable {

    public function work() {
        echo "bizim çalışan"."<br>";
    }

    public function eat() {

    }

    public function pay() {

    }
}

$worker = new Worker();
$worker->work();

$outsourceWorker = new OutsourceWorker();
$outsourceWorker->work();