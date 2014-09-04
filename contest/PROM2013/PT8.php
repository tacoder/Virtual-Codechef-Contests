<?php require("../../includes/header.php"); ?><h1>The Gellar Siblings</h1><div class="content">

<p>Monica Gellar loves to organize things. At the same time Monica has her own picky tastes and would like to include her favorite numbers 4 and 7 in her organizing / numbering system, i.e. her numbering system will consist a sequence of the numbers 4 and 7.<br />
Monica brought home a book collection s with n books. The numberings of her book collection only consists of her favorite numbers. The digits are numbered from the left to the right starting with 1. Her brother Ross the Phd, challenges Monica to do the following steps to her numbering system. Now Monica should execute m queries of the following form:<br />
•	switch l r — Exchanges her favorite numbers  at all positions  with the opposite favorite number with indexes from l to r, inclusive: each digit 4 is replaced with 7 and each digit 7 is replaced with 4 (1 ≤ l ≤ r ≤ n);<br />
Ross loves to irritate Monica being her brother and then asks to find out the following from the revised numberings she created above.<br />
•	count — find and print on the screen the length of the longest non-decreasing subsequence of books of book collection s.<br />
Subsequence of a book collection s is a book collection that can be obtained from s by removing zero or more of its elements. A book collection s is called non-decreasing if each successive book has a numbering which is not less than the previous one according to the revised numberings.<br />
Help Monica complete Ross’ challenge.</p>
<h3>Input</h3>
<p>The first line contains two integers n and m   — the size of the book collection s and the number of queries correspondingly. The second line contains n favorite digits without spaces — Monica’s initial string. Next m lines contain queries in the form described in the statement given by Ross.</p>
<h3>Output</h3>
<p>For each query count print an answer on a single line.</p>
<p> </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b>3*10^5</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2 3
47
count
switch 1 2
count

3 5
747
count
switch 1 1
count
switch 1 3
count
<b>Output:</b>
2
1

2
3
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-04-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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