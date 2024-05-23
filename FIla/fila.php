
<?php

class Queue{
    public $list = array();

    public function __construct(){
        $this->list = array();
    }

    public function empty(){
        return empty($this->list);
    }
    
    public function push($item){
        array_push($this->list, $item);
    }
    
    public function pop(){
        if (!$this->empty()){
            array_shift($this->list);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
        
    public function top(){
        if (!$this->empty()){
            return $this->list[0];
        }else{
            return null;
        }
    }
};

$queue = new Queue();

for ($i = 0; $i < 10+1; $i++) {
    $queue->push($i);
    echo "\nLista: ";
    echo "[";
    foreach ($queue->list as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}

echo "\n";

while (!$queue->empty()){
    $queue_first_item = $queue->top();
    $queue->pop();
    echo "\nItem removido da lista com sucesso: [$queue_first_item]\n";
    echo "\nLista: [ ";
    foreach($queue->list as $item){
        echo $item . ", ";
    }
    echo "]\n\n";
    sleep(1);
}
?>
