
<?php

class Fila{
    public $lista = array();

    public function __construct(){
        $this->lista = array();
    }

    public function vazia(){
        return empty($this->lista);
    }
    
    public function push($item){
        array_push($this->lista, $item);
    }
    
    public function pop(){
        if (!$this->vazia()){
            array_shift($this->lista);
        }else{
            throw new Exception("A lista está vazia");
        }
    }
        
    public function top(){
        if (!$this->vazia()){
            return $this->lista[0];
        }else{
            return null;
        }
    }
};

$fila = new Fila();

for ($i = 0; $i < 10+1; $i++) {
    $fila->push($i);
    echo "\nLista: ";
    echo "[";
    foreach ($fila->lista as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}

echo "\n";

while (!$fila->vazia()){
    $primeiro_item_lista = $fila->top();
    $fila->pop();
    echo "\nItem removido da lista com sucesso: [$primeiro_item_lista]\n";
    echo "\nLista: [ ";
    foreach($fila->lista as $item){
        echo $item . ", ";
    }
    echo "]\n\n";
    sleep(1);
}
?>
