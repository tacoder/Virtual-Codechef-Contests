<?php require("../../includes/header.php"); ?><h1>Sum Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRSUM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRSUM.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Andrii is good in Math, but not in Programming. He is asking you to solve following problem: Given an integer number <b>N</b> and two sets of integer <b>A</b> and <b>B</b>. Let set <b>A</b> contain all numbers from <b>1</b> to <b>N</b> and set B contain all numbers from <b>N + 1</b> to <b>2N</b>. Multiset <b>C</b> contains all sums <b>a + b</b> such that <b>a</b> belongs to <b>A</b> and <b>b</b> belongs to <b>B</b>. Note that multiset may contain several elements with the same values. For example, if <b>N</b> equals to three, then <b>A</b> = <b>{1, 2, 3}</b>, <b>B</b> = <b>{4, 5, 6}</b> and <b>C</b> = <b>{5, 6, 6, 7, 7, 7, 8, 8, 9}</b>. Andrii has <b>M</b> queries about multiset <b>C</b>. Every query is defined by a single integer <b>q</b>. Andrii wants to know the number of times <b>q</b> is contained in <b>C</b>. For example, number <b>6</b> is contained two times, <b>1</b> is not contained in <b>C</b> at all. <br />
Please, help Andrii to answer all the queries.</p>
<p> </p>
<h3>Input</h3>
<p>
The first line of the input contains two integers <b>N</b> and <b>M</b>. Each of the next <b>M</b> line contains one integer <b>q</b>, the query asked by Andrii.</p>
<p> </p>
<h3>Output</h3>
<p>Output the answer for each query in separate lines as in example.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>q</b> ≤ <b>3N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 5
6
2
9
7
5
<b>Output:</b>
2
0
1
3
1
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-07-2014</td>
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