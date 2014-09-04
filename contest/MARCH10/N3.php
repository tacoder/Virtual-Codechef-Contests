<?php require("../../includes/header.php"); ?><h1>K-important Strings</h1><div class="content">

<p>You are given a set of N strings S<sub>0</sub>, S<sub>1</sub>, …, S<sub>N-1</sub>. These strings consist of only lower case characters a..z and have the same length L. </p>
<p>A string H is said to be K-important if there are at least K strings in the given set of N strings appearing at K different positions in H. These K strings need not to be distinct.</p>
<p>Your task is to find the shortest K-important string. If there are more than one possible solution, your program can output any of them.</p>
<h3>Input</h3>

<p>The first line contains a number t (about 10) which is the number of test cases.</p>
<p>Each test case has the following form.</p>
<p>The first line contains three integers N, L and K. The next N lines contain the strings in the given set.</p>
<p>Each test case's input is separated by a blank line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ N ≤ 150</li>
<li>1 ≤ L ≤ 300</li>
<li>1 ≤ K ≤ 500</li>
</ul>
<h3>Output</h3>

<p>For each test case, output the following information. </p>
<p>The first line contains the length of the shortest K-important strings.
</p>
<p>The second line contains H, one of the K-important strings.
</p>
<p>Each line in the next K lines contains the index of one string in the given set that appears in H and the corresponding position (0-based) in H.</p>
<p>Print a blank line after each test case's output.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
3

3 3 1
abc
cde
bcf

3 3 2
abc
cde
bcf

3 3 3
abc
cde
bcf

<b>Output</b>
3
abc
0 0

4
abcf
0 0
2 1

7
abcfabc
0 0
2 1
0 4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>