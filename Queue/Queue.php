
<?php

// Class for queue operations
class Queue{
    // list
    public $list = array();

    // Initial function
    public function __construct(){
        $this->list = array();
    }
    // Function that checks if it is empty
    public function empty(){
        return empty($this->list);
    }
    // Puts item in the final list
    public function push($item){
        array_push($this->list, $item);
    }
    // Removes the first item from the list
    public function pop(){
        // Only delete the item from the list if it is not empty
        if (!$this->empty()){
            array_shift($this->list);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
    // Stores the first item in the list in a variable
    public function top(){
        // Return a value only if the list is different from empty
        if (!$this->empty()){
            return $this->list[0];
        }else{
            return null;
        }
    }
}

// Declare of the class
$queue = new Queue();

// Fills the list with 100 numbers
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

// Emptying the entire list
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
