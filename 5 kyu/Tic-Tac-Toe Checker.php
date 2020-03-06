<?php
/**
 * https://www.codewars.com/kata/525caa5c1bf619d28c000335
 *
 * If we were to set up a Tic-Tac-Toe game, we would want to know whether the board's current state is solved,
 * wouldn't we? Our goal is to create a function that will check that for us!
 *
 * Assume that the board comes in the form of a 3x3 array, where the value is 0 if a spot is empty,
 * 1 if it is an "X",
 * or 2 if it is an "O",
 *
 * like so:
 *
 * [[0, 0, 1],
 * [0, 1, 2],
 * [2, 1, 0]]
 *
 * We want our function to return:
 *
 * -1 if the board is not yet finished (there are empty spots),
 * 1 if "X" won,
 * 2 if "O" won,
 * 0 if it's a cat's game (i.e. a draw).
 * You may assume that the board passed in is valid in the context of a game of Tic-Tac-Toe.
 */
function is_solved(array $board): int
{
    // check lines
    foreach ($board as $line) {
        for ($n = 1; $n <= 2; $n++) {
            if (array_count_values($line)[$n] === 3) {
                return $n;
            }
        }
    }

    // transpose board and check columns
    array_unshift($board, null);
    $transposeBoard = call_user_func_array("array_map", $board);
    foreach ($transposeBoard as $column) {
        for ($n = 1; $n <= 2; $n++) {
            if (array_count_values($column)[$n] === 3) {
                return $n;
            }
        }
    }
    array_shift($board);

    // check diagonals
    for ($n = 1; $n <= 2; $n++) {
        if ($board[2][0] === $n && $board[1][1] === $n && $board[0][2] === $n) {
            return $n;
        }

        if ($board[0][0] === $n && $board[1][1] === $n && $board[2][2] === $n) {
            return $n;
        }
    }

    // completion check
    foreach ($board as $line) {
        $isFinished = in_array(0, $line);
        if ($isFinished) {
            return -1;
        }
    }
    return 0;
}
