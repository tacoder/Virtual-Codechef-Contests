<?php require("../../includes/header.php"); ?><h1>ABC-Strings</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/ABCSTR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/ABCSTR.pdf">Russian</a> as well.</h3>
<p>
Mike likes strings. He is also interested in algorithms. A few days ago he discovered for himself a very nice problem:
</p>
<p><i><br />
You are given an AB-string <b>S</b>. You need to count the number of substrings of S, which have an equal number of 'A'-s and 'B'-s.<br />
</i></p>
<p>
Do you know how to solve it? Good. Mike will make the problem a little bit more difficult for you.
</p>
<p><i><br />
You are given an ABC-string <b>S</b>. You need to count the number of substrings of S, which have an equal number of 'A'-s, 'B'-s and 'C'-s.<br />
</i></p>
<p>
A string is called AB-string if it doesn't contain any symbols except 'A' or 'B'. A string is called ABC-string if it doesn't contain any symbols except 'A', 'B' or 'C'.
</p>
<h3>Input</h3>

<p>The first line of the input contains an ABC-string <b>S</b>.</p>
<h3>Output</h3>
<p>Your output should contain the only integer, denoting the number of substrings of <b>S</b>, which have an equal number of 'A'-s, 'B'-s and 'C'-s.
</p>
<p>The answer can go above a 32-bit integer. Please, use 64-bit integers for storing and processing data.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>|S|</b> ≤  1 000 000; where <b>|S|</b> denotes the length of the given ABC-string.</p>
<h3>Example</h3>
<pre><b>Input:</b>
ABACABA

<b>Output:</b>
2
</pre>
<h3>Explanation</h3>
<p>
In the example you should count <b>S</b>[2..4] = "BAC" and <b>S</b>[4..6] = "CAB".
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>