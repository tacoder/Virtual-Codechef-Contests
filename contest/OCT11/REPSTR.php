<?php require("../../includes/header.php"); ?><h1>Repeated String</h1><div class="content">

<p>Given a string S (containing at most 10<sup>5</sup> lowercase English letters). You are requested to find out from continuous substrings a string having length from L to H, which appears the most times; if there are more than one answer, find the most length.</p>
<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:</p>
<ul>
<li>The first line contains two positive integers L, H.</li>
<li>The second line contains the string S.</li>
</ul>
<p>The input is ended with L = H = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line two integers which are the number of times appearing and the length of the found string, respectively.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 5
aabcbcbca
3 5
baaaababababbababbab
1 4
abcd
0 0


<b>Output:</b>
2 4
6 3
1 4
</pre><h3>Explanation</h3>
<p>Case #1: <b>bcbc</b> occurs twice - at position 3 and position 5 (occurrences may overlap).<br />
Case #2: <b>bab</b> occurs 6 times.<br />
Case #3: <b>abcd</b> occurs 1 time.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-08-2011</td>
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