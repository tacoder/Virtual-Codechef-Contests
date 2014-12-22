<?php require("../../includes/header.php"); ?><h1>Book Game with Chef</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUBGC.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUBGC.pdf">Russian</a> as well.</h3>
<h3>Statement</h3>
<p>Chef gives you a book with <b>N</b> pages. The pages are numbered from <b>1</b> to <b>N</b>.</p>
<p>Chef randomly selects a <b>Secret Digit</b> from <b>0</b> to <b>9</b>. Now he asks you to open one page of the book without looking at the book. You win the game if that page number contains the <b>Secret Digit</b>. For example if the <b>Secret Digit</b> is 8, then 8, 80, 1238213, 98 are all winning pages and 9, 90, 1239123 are loosing pages.</p>
<p>What is the probability of winning, if both Chef's choice and your choice has uniform distribution?</p>
<h3>Input</h3>
<p>The first line of input contains integer <b>T</b>, denoting the number of test cases.</p>
<p>Each test case consists of a single line with integer <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output the required probability <b>P/Q</b>. <b>P/Q</b> is an irreducible fraction.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>17</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
5

<b>Output:</b>
1/10
1/10
</pre><p> </p>
<h3>Explanation</h3>
<p>Chef can choose any <b>Secret Digit</b> from <b>0</b> to <b>9</b>. But you can only open page with number <b>1</b>. Probability that the <b>Secret Digit</b> is <b>1</b> after you opened the page with number <b>1</b> is <b>1/10</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-03-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>