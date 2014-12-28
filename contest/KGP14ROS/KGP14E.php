<?php require("../../includes/header.php"); ?><h1>Robot Movement</h1><div class="content">
<p>Consider a <b>K</b>&times;<b>K</b> square made of <b>K<sup>2</sup></b> unit squares. The center of the lowermost, leftmost unit square has coordinates (0, 0) and the center of the rightmost, uppermost unit square has coordinates ((<b>K</b>-1), (<b>K</b>-1)). Consider a robot that can move only in a straight line and cannot change its direction once it starts moving. If the robot starts from the center (p,q) of a unit square to retrieve an object from the center (r,s) of another unit square, what is the number of unit squares it has to pass through? Note that touching any boundary point on a unit square also counts as passing through that unit square.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases <b>N</b> (0 &lt; <b>N</b> &le; 3).</p>
<p>For each test case, the first line contains <b>K</b> (1 &lt; <b>K</b> &le; 10000), the dimension of the grid. The second line contains the x and y coordinates (in that order, separated by one or more spaces) of the starting point of the robot. The third line contains the x and y coordinates (in that order, separated by one or more spaces) of the destination point of the robot.</p>
<h3>Output</h3>
<p>For each test case, in the first line, print the case number, followed by a colon, followed by a single space, followed by a single integer indicating estimated minimum travel time.</p>
<h3>Sample Input</h3>
<pre>
3 
8 
0 7 
3 0 
8 
1 0 
7 1 
8 
3 3 
7 7
</pre><h3>Sample Output</h3>
<pre>
Case 1: 12
Case 2: 8
Case 3: 13
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
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