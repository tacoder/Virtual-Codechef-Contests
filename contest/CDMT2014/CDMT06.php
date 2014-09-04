<?php require("../../includes/header.php"); ?><h1>Hiring in Chefland</h1><div class="content">
<p>Well it is the hiring season in Chefland, and many hotels have decided to hire a chef.Let there be N such hotels which want to hire a chef and N such chefs which are searching for job.So, after conducting the interviews each hotel has prepared its own ordered list of chef according to their preferance and similarly, every chef has also prepared a ordered list of hotels according to his/her preference. Now, your are given prefrence list of all hotels and chefs, and you need to calculate how many hotels and chef get their first preference.</p>
<h3>Input</h3>
<p>First line will contain number of test cases T. Next line will contain N i.e. number of chefs and hotels.<br />Then there would be N lines each containing N intergers, where ith line represents the list of ith hotel (in decreasing order of preference).<br />Then next N lines would contain the preference list of chefs, where ith line represent preference list of ith chef.</p>
<h3>Output</h3>
<p>For each test case print two integers H and C, where H is number of hotels which got their most prefred chef and C mens number of chefs which got their most prefered hotel.</p>
<p>Constraints</p>
<p>1&lt;=T&lt;=100<br />1&lt;=N&lt;=100<br />1&lt;=(each integer in preference list)&lt;=N</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2<br />4<br />1 2 3 4<br />2 3 4 1<br />4 2 3 1<br />1 3 2 4<br />1 2 3 4<br />4 3 2 1<br />4 2 3 1<br />4 1 2 3<br />6<br />1 2 3 5 6 4<br />4 3 2 1 6 5<br />3 2 1 4 5 6<br />1 2 3 4 5 6<br />3 2 5 4 1 6<br />6 2 4 5 1 3<br />1 2 3 4 5 6<br />2 4 5 5 1 3<br />4 2 3 1 5 6<br />3 4 1 2 6 5<br />4 3 2 1 5 6<br />5 2 3 1 4 6

<strong>Output:</strong>
1 2<br />2 4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/a_g2009">a_g2009</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2014</td>
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