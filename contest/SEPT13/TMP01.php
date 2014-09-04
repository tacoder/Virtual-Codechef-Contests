<?php require("../../includes/header.php"); ?><h1>To Queue or not to Queue</h1><div class="content">
<p>Chef has a string <b>S</b>. Initially, this string is empty. Also, Chef has a sequence of operations. Each operation is one of the two following types:</p>
<ul>
<li>add character to the end of the string <b>S</b>, so the length of <b>S</b> will be increased by 1;</li>
<li>delete the first character of <b>S</b>, so the length of <b>S</b> will be decreased by 1.</li>
</ul>
<p>After each operation Chef asks you the number of distinct substrings of the current string <b>S</b>. Please, answer his questions!</p>
<p>Chef has a string <b>S</b>. Initially, this string is empty. Also, Chef has a sequence of operations. Each operation is of one of the following two types:</p>
<ul>
<li>add character to the end of the string <b>S</b>, so the length of <b>S</b> increases by 1.</li>
<li>delete the first character of <b>S</b>, so the length of <b>S</b> decreases by 1.</li>
</ul>
<p>After each operation Chef asks you the number of distinct substrings of the current string <b>S</b>. Please answer his questions!</p>
<h3>Input</h3>
<p>The first line of input contains <b>Q</b> - the number of operations. Then <b>Q</b> lines follow, each of these lines describes the operation.</p>
<ul>
<li>Add operation is of the form "+ <b>C</b>", where <b>C</b> is a lowercase English letter.</li>
<li>Delete operation is of the from "-".</li>
</ul>
<p>It is guaranteed that after each operation, the length of <b>S</b> is a positive integer.</p>
<h3>Output</h3>
<p>Just to make the size of your output smaller, Chef asks you the sum of answers of all <b>Q</b> operations modulo <b>1000000007</b>.<br /> So, print a single integer - the sum of answers for all operations (the sum of <b>Q</b> numbers) modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<p>1 ≤ Q ≤ 1000000</p>
<h3>Example</h3>
<pre><b>Input:</b>
8
+ a
+ b
+ a
+ a
-
-
-
+ a

<b>Output:</b>
27
</pre>
<p> </p>
<h3>Explanation</h3>
<p>In the first test case the string <b>S</b> transforms as follows:</p>
<ul>
<li>After the first operation <b>S</b> = a. The number of distinct substrings is 1: a.</li>
<li>After the second operation <b>S</b> = ab. The number of distinct substrings is 3: a, b, ab.</li>
<li>After the third operation <b>S</b> = aba. Answer is 5: a, b, ab, ba, aba.</li>
<li>After the fourth operation <b>S</b> = abaa. Answer is 8: a, b, ab, ba, aa, aba, baa, abaa.</li>
<li>After the fifth operation <b>S</b> = baa. Answer is 5: a, b, ba, aa, baa.</li>
<li>After the sixth operation <b>S</b> = aa. Answer is 2: a, aa.</li>
<li>After the seventh operation <b>S</b> = a. Answer is 1: a.</li>
<li>After the eighth operation <b>S</b> = aa. Answer is 2: a, aa.</li>
</ul>
<p>The sum is <b>1 + 3 + 5 + 8 + 5 + 2 + 1 + 2 = 27</b>, <b>27 modulo 1000000007 = 27</b>, so, you should print 27.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-07-2013</td>
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