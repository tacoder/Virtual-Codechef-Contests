<?php require("../../includes/header.php"); ?><h1>Tree Boundary</h1><div class="content">
<h2>Problem Statement</h2>
<p>Himesh is a student of NIT Jalandhar. There is a garden in NITJ which has a fountain in the centre of it. There are four paths from the fountain: east path, west path, north path, south path.<br /><br />
There are n  trees located in the garden, for each of them there are two arguments are:<br /><br />
First argument shows the distance on the east-west path from fountain. If it is negative then the distance is on the east path otherwise it is on the west path.<br />
Second argument shows the distance on the north-south path.<br />
If it is negative then the distance is on the south path otherwise it is on the north path.<br />
Himesh wants to make a boundary with a rope such that all trees in the garden lie inside that boundary.<br />
Calculate the minimum length of rope required to provide this boundary. </p>
<h3>Input</h3>
<p>First line contain single integer T, the number of test cases. T test cases follow. First line of each test case contains single integer n - number of trees.<br />
Then n lines follow. Each line contains two single spaced values representing first and second argument respectively for each tree.</p>
<h3>Output</h3>
<p>In T lines, print T integers - the minimum length of rope required for the corresponding test case.<br /><br />
The answer should be up-to two decimal places.</p>
<h3>Constraints</h3>
<pre>
1 &lt;= T &lt;= 100
3 &lt;= n &lt;= 300
-100 &lt;= first argument &lt;= 100
-100 &lt;= second argument &lt;= 100
</pre><h3>Example:</h3>
<h4>Input:</h4>
<pre>
1
3
1 1
3 1
2 5</pre><h4>Output:</h4>
<pre>10.25</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ratish1992">ratish1992</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2013</td>
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
    </table> <?php require("../../includes/footer.php"); ?>