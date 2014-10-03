<?php require("../../includes/header.php"); ?><h1>World War 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/WW2.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/WW2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/WW2.pdf">Russian</a> as well.</h3>
<p><i><b>Richard Winters: We're not lost, Private... we're in Normandy.</b></i></p>
<p><img src="http://www.codechef.com/download/COOK50/ww2.jpg" height="400" /></p>
<p>In WW2, allies have placed their mines on the ground  which can be considered as a gird of size <b>N</b>*<b>M</b>. Rows are numbered by integers from <b>1</b> to <b>N</b> and columns are numbered by integers from <b>1</b> to <b>M</b>. Each cell <b>(i,j)</b>  has a mine in it if <b>(i+j)</b> is divisible by <b>2</b>. All the other cells are empty.<br /><br /><br />
Two cells are neighbors if they share a boundary or a corner. Your aim is to move from the first row to the last row using some special rules that the automatic mine placing system follows. The mines won't blow if the following rules are followed:<br /></p>
<ul>
<li>If your current row number is odd, from a 'mined' cell(ie. cell having a mine in it) you can move only to a neighboring 'mined' cells in the next row, and similarly, from a 'not mined'(ie. an empty cell) cell you can only move to a neighboring 'not mined' cell in the next row.</li>
<p><br /></p>
<li>If your current row number is even, you can move to any neighboring cell in the next row, irrespective of the mining.</li>
</ul>
<p><br /></p>
<p>You have to find the number of ways to reach row number <b>N</b> starting from row number <b>1</b>, modulo <b>10<sup>9</sup>+7</b>. Two ways are different, if there is at least one different cell on the paths.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> and <b>M</b> in one line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>30</b></li>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 5
2 5

<b>Output:</b>
5
8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b>You can start at any of the 5 cells available.<br /><br />
<b>Example case 2.</b><br /><br />
8 ways are:<br /><br />
(1,1) to (2,2)<br /><br />
(1,2) to (2,1)<br /><br />
(1,2) to (2,3)<br /><br />
(1,3) to (2,2)<br /><br />
(1,3) to (2,4)<br /><br />
(1,4) to (2,3)<br /><br />
(1,4) to (2,5)<br /><br />
(1,5) to (2,4)<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-08-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>