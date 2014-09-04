<?php require("../../includes/header.php"); ?><h1>Polo the Penguin and the Numbers</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPNUM.pdf">here</a></h3>
<p>Polo, the Penguin, likes numbers. He says that the goodness of a number is itself multiplied by the number of digits in it's decimal representation. For example, the goodness of the integer <b>474</b> is <b>474*3 = 1422</b>.</p>
<p>Help him to count the sum of goodness of all integers from <b>L</b> to <b>R</b>, inclusive. Since the answer can be too large, output it modulo <b>1,000,000,007 (10^9+7)</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains the pair of integers <b>L</b> and <b>R</b>, separated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1,000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>1,000,000,000 (10^9)</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
9 12

<b>Output:</b>
75

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The answer is <b>9*1 + 10*2 + 11*2 + 12*2 = 75</b>.</p>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-09-2013</td>
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