<?php require("../../includes/header.php"); ?><h1>Soccer League</h1><div class="content">

<p>The new season of the Bytelandian Premier League (BPL) has started!</p>
<p>In the BPL, any two soccer teams play with each other exactly once. In each match, the winner earns 3 points and the loser earns no point. There is no draw (if the match is level after the two halves, two teams will take part in a penalty shootout to decide the winner).</p>
<p>At the end of the league, the winner is the team having the largest number of points. In case there are more than one team which has the largest number of points, these teams will be co-champions of the league.</p>
<p>The league has been running for some time. Now, the following problem has arisen: we would like to know if a specific team still has a chance of winning the league.</p>
<h3>Input</h3>
<p>The first line contains T (about 20), the number of test cases. Then T test cases follow. Each test case has the following form.</p>
<p>The first line of the test case contains a number N (1 &lt;= N &lt;= 140), the number of teams in the league.</p>
<p>The i-th line in the next N lines contains N numbers ai1, ai2, ..., ain. The number aij gives the status of the match between the i-th team and the j-th team:</p>
<ul>
<li>aij = 1 if the i-th team wins,
</li><li>aij = 0 if the i-th team loses,
</li><li>aij = 2 if the match has not taken place yet.
</li></ul>
<p>The input data is such that if i!=j, then aij + aji = 1 or aij = aji = 2. Moreover, aii = 0 for all i.  </p>
<h3>Output</h3>
<p>For each test case, print a binary string of length N, in which the i-th character is 1 if the i-th team still has a chance to be a champion of the league, and 0 otherwise.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
0 0 0 
1 0 1 
1 0 0 
4
0 1 1 0 
0 0 2 0 
0 2 0 0 
1 1 1 0 
5
0 2 2 1 0 
2 0 1 1 0 
2 0 0 1 0 
0 0 0 0 1 
1 1 1 0 0 

<b>Output:</b>
010
0001
11001
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2010</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>