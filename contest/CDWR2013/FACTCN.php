<?php require("../../includes/header.php"); ?><h1>The Factorial Conundrum</h1><div class="content">
<p>Little Omrita recently learned about factorials. Her teacher gave her a list of factorials of all the numbers starting from <strong>1</strong> to <strong>N</strong>. Omrita can choose any integer <strong>M, </strong>and she is supposed to compute the product of all the factorials starting from 1 i.e (1! * 2! * 3! * 4! * …) modulo <strong>M</strong>.</p>
<p>During her calculation, she noticed that no matter what <strong>M </strong>she choose before (at the start of the process) after a certain number of multiplication the answer becomes <strong>0</strong> and hence she can’t continue further.</p>
<p>She don't like this and wanted to know: for a chosen <strong>M</strong> what could be the maximum number of products she can compute before she has to stop. (See example for more clarification).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows.The first and the only line of each test case contains a single integer <strong>M</strong> denoting the number omrita had chosen.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> &lt; <b>10<sup>20</sup></b></li>
<li><b>1</b> ≤ <b>N</b> &lt; <b>10<sup>30</sup></b></li>
</ul>
<p> </p>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>   
1
10

<b>Output:</b> 
4
</pre><p> </p>
<h3>Explanation</h3>
<p> </p>
<p>For the test case M = 10; First few terms in Omrita's list:<br /> <br /><br />
1! = 1 <br /><br />
2! = 2 <br /><br />
3! = 6 <br /><br />
4! = 24 <br /><br />
5! = 120 <br /><br />
6! = 720 <br /><br />
7! = 5040 <br /><br />
8! = 40320 <br /> ...  <br /> ...  <br /><br /><br />
Omrita will proceed in the following manner: <br /> <br /><br />
1 *  2    = 2 MOD 10 = 2 <br /><br />
2 * 6     = 12 MOD 10 = 2 <br /><br />
2 * 24   = 48 MOD 10 = 8 <br /><br />
8 * 120 = 960 MOD 10 = 0 <br /> <br /><br />
So, she can perform 4 calculations.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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