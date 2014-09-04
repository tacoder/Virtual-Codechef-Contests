<?php require("../../includes/header.php"); ?><h1>Shoppers</h1><div class="content">

<p>A group of N shoppers go to a supermarket. The supermarket has M items. Each shopper wants to buy only the items he likes. They plan to buy K items in all. A shopper can buy at max only one item. Some shoppers may not buy anything and some items might not be bought.</p>
<h3>Input</h3>
<p>First line contains the number of test cases.</p>
<p>Each test case contains three integers N , M and K separated by spaces.<br />
Then follow N lines containing M characters each. If jth character of ith line is 1 then ith shopper likes item j. </p>
<p> 1&lt;= K &lt;= N, M &lt;=13 </p>
<h3>Output</h3>
<p>For each test case, output the number of ways K items in all can be bought.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 4 2
1111
0100
0100
1100


<b>Output:</b>
14
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mandark">mandark</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 - 4 sec</td>
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