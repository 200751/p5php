<?php


class Table {
    private $_cells;

    public function __construct() {
        $this->_rows = array();
    }

    public function append($row) {
        $this->_rows[] = $row;
    }

    public function draw() {
        echo '<table border="1">'.PHP_EOL;

        foreach($this->_rows as $row) {
            echo '<tr>'.PHP_EOL;

            foreach($row->getCells() as $cell) {
                echo '<td>'.$cell->getContent().'</td>'.PHP_EOL;
            }
            echo '</tr>'.PHP_EOL;
        }
        echo '</table>'.PHP_EOL;
    }
}

class Row {
    private $_cells;

    public function __construct() {
        $this->_cells = array();
    }

    public function append($cell) {
        $this->_cells[] = $cell;
    }

    public function getCells() {
        return $this->_cells;
    }
}

class Cell {
    private $_content;

    public function __construct($content) {
        $this->_content = $content;
    }

    public function getContent() {
        return $this->_content;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>
            </td>
        </tr>
    </table>
</body>
</html>