<?php require("../../includes/header.php"); ?><h1>Problem 4</h1><div class="content">

<p>
Alice and Bob want to go on holiday. Each of them has drawn up a list of cities </p>
<p>to be visited in turn. A list may contain a city more than once. As they want to </p>
<p>travel together, they have to agree upon a common route. Noone wants to change </p>
<p>the order of the cities on his list or add other cities. Therefore they have no </p>
<p>choice but to remove some cities from the list. Of course the common route is to</p>
<p> involve as much sight-seeing in cities as possible. There are exactly 26 cities </p>
<p>in the region. Therefore they are encoded on the lists as lower case letters from 'a' to 'z'.</p>
<h3>Input</h3>
<p>
The first line of input contains a number T &lt;= 10 that indicates the number of test</p>
<p>cases to follow. Each test case consists of two lines; the first line is the list of </p>
<p>Alice, the second line is the list of Bob. Each list consists of 1 to 80 lower case letters.</p>
<h3>Output</h3>
<p>
The output for each test case should contain all different trips exactly once that meet </p>
<p>the conditions described above. There is at least one such trip, but never more than </p>
<p>1000 different ones. You should order the trips in lexicographic order. </p>
<p>Print one blank line between the output of different test cases.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
abcabcaa
acbacba

<b>Output:</b>
ababa
abaca
abcba
acaba
acaca
acbaa
acbca



</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vishesh_sigma">vishesh_sigma</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>