<?php require("../../includes/header.php"); ?><h1>Jawbreaker</h1><div class="content">

<p>Jawbreaker is a one-person game. You start with a square of dimension n*n, composed of small colored stones. One move consists of indicating one stone. Then, the maximal possible connected group of stones the of the same color, containing the indicated stone, is destroyed. The destroyed rocks disappear, and all rocks which have empty space below them drop to a lower row. If any column is left empty, rocks that are to the right of it are shifted accordingly to the left. When a group of k stones is destroyed, you score k<sup>2</sup>points. Your task is to maximize the total score.</p>
<h3>Input</h3>
<p>First, 50≤n≤100, the size of the starting board. Then, n lines follow, n characters long each, containing a description of the board, with up, down, left, right oriented just as we see it on a computer screen (upper rows first, left columns first). The color of each stone is described by one character, from '0' to '9'.</p>
<h3>Output</h3>
<p>First, output t, the length of answer. The following t pairs of integers are a sequence of moves. Each pair i,j defines one move, i being the 0-based number of a column (column 0 is the one most to the left), and j being the 0-based number of a row (row 0 is the lowest one).</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
202
202
110
<strong>Output:</strong>
3
0 0
2 0
1 1
<strong>Moves:</strong>
<code>
202<br />
202<br />
<strong>1</strong>10<br />
</code>
<code>
..2<br />
202<br />
20<strong>0</strong><br />
</code>
<code>
...<br />
2<strong>2</strong>.<br />
22.<br />
</code>
<strong>Score:</strong>
2<sup>2</sup>+3<sup>2</sup>+4<sup>2</sup>
</pre><h3>Tests</h3>
<p>The size of the tests will be chosen uniformly between 50 and 100, and then the number of colors will be chosen uniformly between 4 and 10. The colors of the rocks are chosen independently at random.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>