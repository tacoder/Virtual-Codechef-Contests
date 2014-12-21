<?php require("../../includes/header.php"); ?><h1>Sereja and two strings</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/SEATSR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/SEATSR.pdf">Russian</a>.</h3>
<p>Sereja has two strings <b>s</b> and <b>w</b>. Sereja can do <b>3</b> types of operations: </p>
<ul>
<li>Remove any character from the first string, this operation takes <b>a</b> minutes of time</li>
<li>Add any character in any position of the first string, this operation takes <b>a</b> minutes of time</li>
<li>Replace some character form first string by some other character, this operation takes <b>b</b> minutes of time</li>
</ul>
<p>Sereja has <b>k</b> minutes to do some operations. Find the minimum time that Sereja needs to transform the first string to the second.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line contains string <b>s</b>. The second line contains string <b>w</b>. Both strings contain only lowercase Latin letters. The third line contains integers <b>a</b>,<b>b</b> and <b>k</b>, separated by spaces.</p>
<h3>Output</h3>
<p>For each test case on different lines print the answer to the problem - minimum time required to transform the first string to the second by the operations of the first, second and third types. If you can not transform the first string to the second for the specified time, print <b>-1</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|s|, |w|</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>a, b, k</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
aaa
bbbb
0 0 100
abab
acac
1 1 100
baaaaa
aaaaab
1 100 100
aaaaaa
bbbbbb
100 100 0

<b>Output:</b>
0
2
2
-1

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2013</td>
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