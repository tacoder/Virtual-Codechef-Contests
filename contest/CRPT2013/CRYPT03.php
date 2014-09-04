<?php require("../../includes/header.php"); ?><h1>Apple Orchard</h1><div class="content">
<h2>Problem Statement </h2>
<p>Jason and his dad own an apple orchard of size N x M. And every fall he would help his father pick apples for the production of cider. But the cider press can take only K kilograms a day due to its small size.  Every day he would pick apples only in a special sub-rectangle which has size S x T where S&lt;=X and T&lt;=Y, for some fixed X and Y. He has Q queries, each query contains X, Y. For each query, he wanted to know how many special sub-rectangles contain <b>at least</b> K kilograms of apples..</p>
<h3>Input</h3>
<p>The first line of the input contains integers N, M and K(1&lt;=N, M&lt;=300, 1&lt;=K&lt;=N*M).<br />
The next N lines contain M characters (either 'A' or '.'). 'A' means there is 1 kg of apples in that cell, while '.' means there are no apples in that cell.<br />
The next line contains an integer Q (1&lt;=Q&lt;=100 000).<br />
The next Q lines contain integers X and Y (1&lt;=X&lt;=N , 1&lt;=Y&lt;=M).
</p>
<h3>Output</h3>
<p>The output contains Q lines, each line contains the number of special sub-rectangles which satisfy the requirement. (The amount of apples is at least K inside the special sub-rectangle)</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 5 4
A.A..
..A..
A...A
AAAA.
AA..A
2
1 1
2 3


<b>Output:</b>
0
4

</pre><p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : Codechef </b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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