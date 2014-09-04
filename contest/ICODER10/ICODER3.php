<?php require("../../includes/header.php"); ?><h1>Aqualoo Plants</h1><div class="content">

<p>
A rectangular garden is divided into square shaped cells where each cell consists of a plant. Some plants depending upon their nature need more water than others and some may not require water at all. Invisible water taps keep teleporting around the garden. Each water tap gives water to a plant for a constant time and then teleports to another( or reappears in the same cell ) to give water to another plant( or the same plant ). To simplify the structure, each water tap moves with respect to a base cell, Row offset set and a Column offset set and keeps repeating through the set. For example:
</p>
<p>
Consider a 6 X 6 size rectangle:
</p>
<p>
Therefore,
</p>
<p>
Total Rows = 6<br />
Total Columns = 6<br />
Total cells = Total plants = 36
</p>
<p>
Now consider a tap with following properties
</p>
<p>
1. Base cell:         0<br />
2. Row Offset Set:       0 1 2 0 0<br />
3. Column Offset Set: 1 0 0 1 2
</p>
<p>The cell numbers for the garden in this case will be:
</p>
<p>
  0       1      2       3     4      5<br />
  6       7      8       9    10   11<br />
12   13   14   15   16   17<br />
18   19   20   21   22   23<br />
24   25   26   27   28   29<br />
30   31   32   33   34   35
</p>
<p>
This means the tap starts with giving water to cell '1'( Row offset 0, column offset 1 with respect to cell '0' i.e. the base cell ) and then moves to cells 6 -&gt; 12 -&gt; 1 -&gt; 2. The new cell position is with respect to the base cell, the current row and column offset and has got nothing to do with the previous cell positions where water tap was teleported. Also note that the tap would continuously move in the following order 1-&gt;6-&gt;12-&gt;1-&gt;2-&gt;1-&gt;6-&gt;12... and so on.
</p>
<p>
All the water taps are synchronised i.e. all of them change the cells at the same time, give water for the same amount of time and so on. Consequently, there may be such plants, which at some time instant get water from every tap in the garden. These plants are called Aqualoo plants.
</p>
<p>
Now given the taps and their respective base cell, row offset set and column offset set, you have to give out the total Aqualoo plants in the garden.
</p>
<p>
<b><br />
Notes<br />
</b><br />
- Remember that for the plant to be Aqualoo, every tap in the garden should water this plant at same time instant.<br />
- Every tap may or may not have a different base cell, row offset and column offset.
</p>
<h3>Input</h3>
<p>
1. Number of test cases = 'T' ( 1 &lt;= T &lt;= 300 )<br />
2. For each test case, first line of input contains number of rows = 'R', followed by number of columns = 'C' and total number of water taps = 'N' ( 1 &lt;= R &lt;= 50, 1 &lt;= C &lt;= 50, 1 &lt;= N &lt;= 6 ).<br />
3. For each tap, first line of input contains base cell number = 'B', followed by length of the row offset set and column offset set = 'L' ( 0 &lt;= B &lt; R * C, 1 &lt;= L &lt;= 25 ).<br />
4. Next line contains row offset set, where each value lies in range ( -R, +R )( not inclusive ).<br />
5. Next line contains column offset set, where each value lies in range ( -C, +C )( not inclusive ).
</p>
<h3>Output</h3>
<p>
1. Each line of output contains total Aqualoo plants
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2

6 6 2
7 1
2
3
35 1
-2
-1

6 6 2
13 4
0 1 1 0
0 1 2 3
4 3
0 1 2
0 0 0
<b>
Output:</b>
1
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
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