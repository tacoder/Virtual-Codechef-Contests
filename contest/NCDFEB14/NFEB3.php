<?php require("../../includes/header.php"); ?><h1>Robot Game</h1><div class="content">
<h2>Robot Game</h2>
<p>
There is a maze of size <b>N</b>*<b>M</b>, consisting of unit blocks. At the start Robot has <b>RC</b> percentage of battery charged.<br />
Now Robot start from <b>1 st</b> row and move towards <b>N th</b> row. From the present block robot can move to a block in the next row, which is either on right or on left side of the present block. On moving to a block in <b>i th</b> row <b>j th</b> column, Robots battery charge will reduce by <b>C(i,j)</b> percent if <b>C(i,j)</b> is greater then 0, else it will be recharged by <b>C(i,j)</b> percent.<br />
For Example if battery has 50 percent of charge, on moving to block with <b>C(i,j)</b> = 15, battery will have 35 ( 50 -15 ) percent of the charge. </p>
<p></p><p>
Now the task is to find out the status of the battery in the end, if the Robot moves optimally to save maximum charge. ( Remember : Battery Charge will not exceed more than 100 percent, and Robot will not move further if Battery charge goes down to 0 percent ).</p>
<p><h3>Input</h3>
</p><p>
First line of the input contains <b>T</b>, number of test cases.<br />
In Each test case<br />
First line consists of three space separated integers <b>N</b>, <b>M</b> and <b>RC</b>, representing values as described in the question.<br />
Next <b>N</b> line contains <b>M</b> space separated Integers,( starting from <b>1 st</b> row ). <b>j th</b> Integer in <b>i th</b> row is<br />
<b>C(i,j)</b>, charged gained or reduced on moving to <b>i th</b> row <b>j th</b> column in the maze.
</p>
<h3>Output</h3>
<p>
For each test case print a single line containing single integer <b>FC</b>, maximum possible percentage of charge in the battery when Robot reaches <b>N th</b> row. If Robot can not reach the <b>N th</b> row then print -1.
</p>
<h3>Constraints</h3>
<ul>
<li> 1 &lt;= <b>T</b> &lt;= 10 </li>
<li> 1 &lt;= <b>N,M</b> &lt;= 500</li>
<li> 0 &lt;= <b>RC</b> &lt;= 100</li>
<li> -100 &lt;= <b>C(i,j)</b> &lt;= 100</li>
</ul>
<pre>
<h3>Sample Input</h3>
1
4 4 50
10 -10 10 -10
-10 10 -10 10
5 -5 5 -5
-5 -5 -5 -5
<h3>Sample Output</h3>
80
</pre><h3>Explanation</h3>
<ul>
<li> One of the optimal move will be &lt;1,2&gt; -&gt; &lt;2,1&gt; -&gt; &lt;3,2&gt; -&gt; &lt;4,1&gt;, in this move Robot gains 30 percent of the charge hence in the end Battery will have 80 percent of charge</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>