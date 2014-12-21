<?php require("../../includes/header.php"); ?><h1>Long live the Bacteria</h1><div class="content">
<p> </p>
<p>Amogh has a huge collection of bacteria for some research (probably for his database :P). He lays them on an infinite grid of cells, each bacterium in its own cell.<br />
Now, these bacterium are special, as they reproduce or die following a unique pattern.
</p>
<p>
He observes that each second, the following transformations occur (all simultaneously): <br /><br />
If a bacterium has no neighbor to its north and no neighbor to its west, then it will die.<br /><br />
If a cell has no bacterium in it, but there are bacteria in the neighboring cells to the north and to the west, then a new bacterium will be born in that cell.<br />
<br />
</p>
<p>
Upon examining the grid, he notes that there are a positive, finite number of bacteria in one or more rectangular regions of cells.</p>
<p>Now, he wants to calculate the number of seconds that will pass before all the bacteria die.<br />
Can you help him with that?
</p>
<p>
Here is an example of a grid that starts with 6 cells containing bacteria, and takes 6 seconds for all the bacteria to die. '1's represent cells with bacteria, and '0's represent cells without bacteria.<br />
<br /><br />
000010<br />
011100<br />
010000<br />
010000<br />
000000</p>
<p>000000<br />
001110<br />
011000<br />
010000<br />
000000</p>
<p>000000<br />
000110<br />
001100<br />
011000<br />
000000</p>
<p>000000<br />
000010<br />
000110<br />
001100<br />
000000</p>
<p>000000<br />
000000<br />
000010<br />
000110<br />
000000</p>
<p>000000<br />
000000<br />
000000<br />
000010<br />
000000</p>
<p>000000<br />
000000<br />
000000<br />
000000<br />
000000</p>
<p> </p>
<h3>Input</h3>
<p>The input consists of:<br />
<br /><br />
One line containing C, the number of test cases.<br />
Then for each test case:<br /><br />
One line containing R, the number of rectangles of cells that initially contain bacteria.<br /><br />
R lines containing four space-separated integers X1 Y1 X2 Y2. This indicates that all the cells with X coordinate between X1 and X2, inclusive, and Y coordinate between Y1 and Y2, inclusive, contain bacteria.<br />
The rectangles may overlap.<br /><br />
North is in the direction of decreasing Y coordinate. <br /><br />
West is in the direction of decreasing X coordinate. <br /></p>
<h3>Output</h3>
<p>For each test case, output one line containing  T, where T is the number of seconds until all the bacteria die.
</p>
<p> </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>C</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>X1</b> ≤ <b>X2</b>≤<b>1000000</b></li>
<li><b>1</b> ≤ <b>Y1</b> ≤ <b>Y2</b>≤<b>1000000</b></li>
<li>The number of cells initially containing bacteria will be at most 1000000.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
5 1 5 1
2 2 4 2
2 3 2 4


<b>Output:</b>
6
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prongs7">prongs7</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>