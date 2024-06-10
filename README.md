# Queue - PHP Implementation

This project is a simple implementation of a queue in PHP. A queue is a data structure that follows the "first in, first out" (FIFO) principle, where the first element added is the first to be removed.

## Features

- **Push:** Adds an item to the end of the queue.
- **Pop:** Removes the first item from the queue, if any.
- **Top:** Returns the first item in the queue without removing it.
- **Empty:** Checks if the queue is empty.

## How to Use

1. Instantiate an object of the `Queue` class.
2. Add elements to the queue using the `push(item)` method.
3. Remove elements from the queue using the `pop()` method.
4. Check the first element in the queue without removing it using the `top()` method.
5. Check if the queue is empty using the `empty()` method.

## Usage Example

```php
// Declare the class
$queue = new Queue();

// Fill the list with 100 numbers
for ($i = 0; $i < 10 + 1; $i++) {
    $queue->push($i);
    echo "\nList: ";
    echo "[";
    foreach ($queue->list as $item) {
        echo $item . ", ";
    }
    echo "]\n";
    sleep(1);
}

echo "\n";

// Emptying the entire list
while (!$queue->empty()) {
    $queue_first_item = $queue->top();
    $queue->pop();
    echo "\nItem successfully removed from the list: [$queue_first_item]\n";
    echo "\nList: [ ";
    foreach ($queue->list as $item) {
        echo $item . ", ";
    }
    echo "]\n\n";
    sleep(1);
}
```
This example demonstrates how to fill a queue with numbers from 0 to 10, print the queue, wait for a few seconds, and then remove each element from the queue and print the resulting queue.

## Author

This code was developed by Ageu Felipe Nunes Moraes as part of a personal project dedicated to strengthening and maturing coding skills. For any questions or suggestions, please contact me at [ageumoraes67@gmail.com](mailto:ageumoraes67@gmail.com).

## Disclaimer

This is a software project developed by an individual and is not affiliated with any other entity.
