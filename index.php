<DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="PHP Sudoku Löser">
        <meta name="author" content="Bilal Kuzey">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="PHP, PHP-Projekte, Sudoku-Löser">
        <title>PHP Sudoku Löser</title>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="container">
        <h1 class="title">PHP Sudoku Löser</h1>
        <div class="content">

            <form action="sudoku.php" method="get">
                <input type="number" name="1x1" id="1x1" placeholder="0" min="0" max="9">
                <input type="number" name="2x1" id="2x1" placeholder="0" min="0" max="9">
                <input type="number" name="3x1" id="3x1" placeholder="0" min="0" max="9">
                <input type="number" name="4x1" id="4x1" placeholder="0" min="0" max="9">
                <input type="number" name="5x1" id="5x1" placeholder="0" min="0" max="9">
                <input type="number" name="6x1" id="6x1" placeholder="0" min="0" max="9">
                <input type="number" name="7x1" id="7x1" placeholder="0" min="0" max="9">
                <input type="number" name="8x1" id="8x1" placeholder="0" min="0" max="9">
                <input type="number" name="9x1" id="9x1" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x2" id="1x2" placeholder="0" min="0" max="9">
                <input type="number" name="2x2" id="2x2" placeholder="0" min="0" max="9">
                <input type="number" name="3x2" id="3x2" placeholder="0" min="0" max="9">
                <input type="number" name="4x2" id="4x2" placeholder="0" min="0" max="9">
                <input type="number" name="5x2" id="5x2" placeholder="0" min="0" max="9">
                <input type="number" name="6x2" id="6x2" placeholder="0" min="0" max="9">
                <input type="number" name="7x2" id="7x2" placeholder="0" min="0" max="9">
                <input type="number" name="8x2" id="8x2" placeholder="0" min="0" max="9">
                <input type="number" name="9x2" id="9x2" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x3" id="1x3" placeholder="0" min="0" max="9">
                <input type="number" name="2x3" id="2x3" placeholder="0" min="0" max="9">
                <input type="number" name="3x3" id="3x3" placeholder="0" min="0" max="9">
                <input type="number" name="4x3" id="4x3" placeholder="0" min="0" max="9">
                <input type="number" name="5x3" id="5x3" placeholder="0" min="0" max="9">
                <input type="number" name="6x3" id="6x3" placeholder="0" min="0" max="9">
                <input type="number" name="7x3" id="7x3" placeholder="0" min="0" max="9">
                <input type="number" name="8x3" id="8x3" placeholder="0" min="0" max="9">
                <input type="number" name="9x3" id="9x3" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x4" id="1x4" placeholder="0" min="0" max="9">
                <input type="number" name="2x4" id="2x4" placeholder="0" min="0" max="9">
                <input type="number" name="3x4" id="3x4" placeholder="0" min="0" max="9">
                <input type="number" name="4x4" id="4x4" placeholder="0" min="0" max="9">
                <input type="number" name="5x4" id="5x4" placeholder="0" min="0" max="9">
                <input type="number" name="6x4" id="6x4" placeholder="0" min="0" max="9">
                <input type="number" name="7x4" id="7x4" placeholder="0" min="0" max="9">
                <input type="number" name="8x4" id="8x4" placeholder="0" min="0" max="9">
                <input type="number" name="9x4" id="9x4" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x5" id="1x5" placeholder="0" min="0" max="9">
                <input type="number" name="2x5" id="2x5" placeholder="0" min="0" max="9">
                <input type="number" name="3x5" id="3x5" placeholder="0" min="0" max="9">
                <input type="number" name="4x5" id="4x5" placeholder="0" min="0" max="9">
                <input type="number" name="5x5" id="5x5" placeholder="0" min="0" max="9">
                <input type="number" name="6x5" id="6x5" placeholder="0" min="0" max="9">
                <input type="number" name="7x5" id="7x5" placeholder="0" min="0" max="9">
                <input type="number" name="8x5" id="8x5" placeholder="0" min="0" max="9">
                <input type="number" name="9x5" id="9x5" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x6" id="1x6" placeholder="0" min="0" max="9">
                <input type="number" name="2x6" id="2x6" placeholder="0" min="0" max="9">
                <input type="number" name="3x6" id="3x6" placeholder="0" min="0" max="9">
                <input type="number" name="4x6" id="4x6" placeholder="0" min="0" max="9">
                <input type="number" name="5x6" id="5x6" placeholder="0" min="0" max="9">
                <input type="number" name="6x6" id="6x6" placeholder="0" min="0" max="9">
                <input type="number" name="7x6" id="7x6" placeholder="0" min="0" max="9">
                <input type="number" name="8x6" id="8x6" placeholder="0" min="0" max="9">
                <input type="number" name="9x6" id="9x6" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x7" id="1x7" placeholder="0" min="0" max="9">
                <input type="number" name="2x7" id="2x7" placeholder="0" min="0" max="9">
                <input type="number" name="3x7" id="3x7" placeholder="0" min="0" max="9">
                <input type="number" name="4x7" id="4x7" placeholder="0" min="0" max="9">
                <input type="number" name="5x7" id="5x7" placeholder="0" min="0" max="9">
                <input type="number" name="6x7" id="6x7" placeholder="0" min="0" max="9">
                <input type="number" name="7x7" id="7x7" placeholder="0" min="0" max="9">
                <input type="number" name="8x7" id="8x7" placeholder="0" min="0" max="9">
                <input type="number" name="9x7" id="9x7" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x8" id="1x8" placeholder="0" min="0" max="9">
                <input type="number" name="2x8" id="2x8" placeholder="0" min="0" max="9">
                <input type="number" name="3x8" id="3x8" placeholder="0" min="0" max="9">
                <input type="number" name="4x8" id="4x8" placeholder="0" min="0" max="9">
                <input type="number" name="5x8" id="5x8" placeholder="0" min="0" max="9">
                <input type="number" name="6x8" id="6x8" placeholder="0" min="0" max="9">
                <input type="number" name="7x8" id="7x8" placeholder="0" min="0" max="9">
                <input type="number" name="8x8" id="8x8" placeholder="0" min="0" max="9">
                <input type="number" name="9x8" id="9x8" placeholder="0" min="0" max="9">
                <br>
                <input type="number" name="1x9" id="1x9" placeholder="0" min="0" max="9">
                <input type="number" name="2x9" id="2x9" placeholder="0" min="0" max="9">
                <input type="number" name="3x9" id="3x9" placeholder="0" min="0" max="9">
                <input type="number" name="4x9" id="4x9" placeholder="0" min="0" max="9">
                <input type="number" name="5x9" id="5x9" placeholder="0" min="0" max="9">
                <input type="number" name="6x9" id="6x9" placeholder="0" min="0" max="9">
                <input type="number" name="7x9" id="7x9" placeholder="0" min="0" max="9">
                <input type="number" name="8x9" id="8x9" placeholder="0" min="0" max="9">
                <input type="number" name="9x9" id="9x9" placeholder="0" min="0" max="9">
                <br>
                <input type="submit" value="Lösen">
                <input type="reset">
            </form>

            <?php
                $sudoku = array(
                    array(5, 3, 0, 0, 7, 0, 0, 0, 0),
                    array(6, 0, 0, 1, 9, 5, 0, 0, 0),
                    array(0, 9, 8, 0, 0, 0, 0, 6, 0),
                    array(8, 0, 0, 0, 6, 0, 0, 0, 3),
                    array(4, 0, 0, 8, 0, 3, 0, 0, 1),
                    array(7, 0, 0, 0, 2, 0, 0, 0, 6),
                    array(0, 6, 0, 0, 0, 0, 2, 8, 0),
                    array(0, 0, 0, 4, 1, 9, 0, 0, 5),
                    array(0, 0, 0, 0, 8, 0, 0, 7, 9)
                );

            function solveSudoku(&$sudoku)
            {
                $emptyCell = findEmptyCell($sudoku);
                if (!$emptyCell) {
                    // Wenn keine leeren Zellen mehr vorhanden sind, ist das Sudoku gelöst.
                    return true;
                }

                $row = $emptyCell[0];
                $col = $emptyCell[1];

                for ($num = 1; $num <= 9; $num++) {
                    if (isValidMove($sudoku, $row, $col, $num)) {

                        $sudoku[$row][$col] = $num;

                        if (solveSudoku($sudoku)) {
                            return true;
                        }

                        $sudoku[$row][$col] = 0;
                    }
                }
                return false;
            }

            function findEmptyCell($sudoku)
            {
                foreach ($sudoku as $row => $cells) {
                    foreach ($cells as $col => $val) {
                        if ($val === 0) {
                            return array($row, $col);
                        }
                    }
                }
                return null;
            }

            function isValidMove($sudoku, $row, $col, $num)
            {
                for ($i = 0; $i < 9; $i++) {
                    if ($sudoku[$row][$i] === $num || $sudoku[$i][$col] === $num) {
                        return false;
                    }
                }

                $startRow = $row - ($row % 3);
                $startCol = $col - ($col % 3);
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        if ($sudoku[$startRow + $i][$startCol + $j] === $num) {
                            return false;
                        }
                    }
                }

                return true;
            }

            if (solveSudoku($sudoku)) {

                foreach ($sudoku as $row) {
                    echo implode(' ', $row) . PHP_EOL;
                }
            } else {
                echo "Das Sudoku hat keine eindeutige Lösung.";
            }
            ?>
        </div>
    </div>
    </body>
    </html>