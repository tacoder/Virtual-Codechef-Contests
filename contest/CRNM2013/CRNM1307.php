<?php require("../../includes/header.php"); ?><h1>A Study in Pink</h1><div class="content">

<p>Sherlock Holmes is chasing a cab driver and he(Holmes) is carrying a gun with which he can shoot the . cabbie. Both Sherlock Holmes and the cab driver are initially in the first cell (1,1) and the Jail is at (N,M). Sherlock Holmes will shoot the cab exactly one time whenever they both are in same cell i.e. whenever they are in the same cell, the strength of the car reduces by 1. The cabdriver’s car has strength equal to K i.e. after exactly K shots car will break down. So in order to save the pain of taking the cab driver to the police, he decided to break down his car at (N,M) i.e. he will take his last shot at (N,M). </p>
<p>The size of the grid is N x M and none of them can go out of the grid. Also both the cab driver and Sherlock can either go to the left or down (i.e if one is at (x,y) then he can either go to (x+1,y) or to (x,y+1) ). Both Sherlock Holmes and the cab driver are travelling at the same speed.</p>
<p>Given the size of the grid and the strength of the car, you need to tell the no. of ways Sherlock could have stopped the cabbie.</p>
<p><b>Note: They are always together in the first and last cell. Two ways are different if path taken by at least one of them different in both ways.</b></p>
<h3>Input</h3>
<p>First line of input contains T, the no. of testcases.</p>
<p>Each test case contains one line containing 3 integers N M and K separated by a space.</p>
<h3>Output</h3>
<p>Output of each test case is a single integer denoting the no. ways. Since this number can be very large, output the number after taking mod with 1,000,000,007 (10^9 +7)</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=1000</p>
<p>1&lt;=N,M&lt;=50</p>
<p>0&lt;=K&lt;=100</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
2 1 2
2 2 1
2 2 2
2 2 3
3 3 3
<b>Output:</b>
1
0
2
2
12
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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