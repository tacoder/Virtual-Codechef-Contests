<?php require("../../includes/header.php"); ?><h1>The Production Manager</h1><div class="content">

<p>
Production Manager of a biscuit manufacturing company- &ldquo;Ban-2g Pvt. Ltd.&rdquo; needs a solution. The biscuits are manufactured just on time and are ready to be delivered to a Japanese store. But just a day before the delivery, the company who had taken the contract of packaging the biscuits, changes the cost of all its delivery boxes.</p>
<p>
Ban-2g Pvt. Ltd. wants to buy boxes which are available in two types, first one costs c1 and can hold n1 biscuits and the second one costs c2 and can hold n2 biscuits. Each box has to be filled to its capacity. You have to find the best way to distribute the biscuits such that total cost is minimized.</p>
<h3>Input</h3>
<p>
The first line specifies the number of test cases. For each test case, the first line of input specifies the total number of biscuits to be packed. (numbered 1 to 300,000,000). The next line contains c1, n1, c2, n2.</p>
<h3>Output</h3>
<p>
For each test case in the input, print a line containing the minimum cost solution i.e. three non-negative integers m1, m2 and minimum cost (mi = number of type &lsquo;i&rsquo; boxes required if one exists).<br />
Otherwise print 0 0 0.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
78
10 15 1 8
37
10 9 9 8


<b>Output:</b>
2 6 26
0 0 0

<b>Explanation</b>
In the 1st test case, no of biscuits to be packed is 78. 
The output is &ldquo;2 6 26&rdquo;
(&ldquo;2&rdquo; boxes of size 15, &ldquo;6&rdquo; boxes of size 8 and hence the cost is &ldquo;26&rdquo;)

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rishi_agarwal">rishi_agarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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