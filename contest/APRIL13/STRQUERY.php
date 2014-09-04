<?php require("../../includes/header.php"); ?><h1>String Query</h1><div class="content">

<p>Hey, you've got a new mission! This time your client ask you to write a editor and it should run fast! However the client's request is somehow strange, but they give a lot of money so your boss ask you to finish it as fast as possible.</p>
<p>This editor deal with a string <b>S</b>. And the length <b>|S|</b> of the string <b>S</b> would never be smaller than <b>10</b>. This editor must support the following <b>7</b> operations quickly. Here the string would be indexed starting at <b>0</b>.</p>
<ol>
<li>INSERT_LEFT <b>c</b> : insert character <b>c</b> at the beginning of <b>S</b></li>
<li>INSERT_RIGHT <b>c</b> : insert character <b>c</b> at the end of <b>S</b></li>
<li>INSERT_MIDDLE <b>c</b> : insert character <b>c</b> at the middle of <b>S</b> (before the <b>(|S| div 2)</b>-th character)</li>
<li>DELETE_LEFT : delete the first character of <b>S</b></li>
<li>DELETE_RIGHT : delete the last character of <b>S</b></li>
<li>DELETE_MIDDLE : delete the middle character of <b>S</b> (the <b>(|S| div 2)</b>-th character)</li>
<li>QUERY <b>q</b> : print how many times the string <b>q</b> occur in <b>S</b>. (overlap is allowed)</li>
</ol>
<p>Here <b>div</b> means integer division, that is, <b>|S| div 2</b> = <b>floor(|S| / 2)</b>.</p>
<h3>Input</h3>
<p>The first line of input contains the initial string <b>S<sub>Init</sub></b>. The second line contains one integer <b>Q</b>, denoting the number of operations. Then each of the next <b>Q</b> lines contains an operation with the format mentioned above.</p>
<h3>Output</h3>
<p>For each QUERY operation, print the answer in a line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>150000</b> (<b>1.5 * 10<sup>5</sup></b>)</li>
<li><b>|S<sub>Init</sub>|</b> = <b>10</b></li>
<li><b>S<sub>Init</sub></b>, <b>q</b> contain only lower Latin letters ('a'-'z').</li>
<li><b>c</b> is a lower Latin letter ('a'-'z').</li>
<li>The total length of the string <b>q</b> over all the queries does not exceed <b>1500000</b> (<b>1.5 * 10<sup>6</sup></b>).</li>
<li>The DELETE_LEFT, DELETE_RIGHT, DELETE_MIDDLE operations do not appear when <b>|S|</b> = <b>10</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
bbabaaaaab
12
INSERT_MIDDLE b
INSERT_LEFT b
INSERT_MIDDLE b
INSERT_MIDDLE b
INSERT_RIGHT a
INSERT_LEFT a
INSERT_MIDDLE b
INSERT_LEFT a
INSERT_MIDDLE a
QUERY bbaaa
DELETE_MIDDLE
DELETE_MIDDLE

<b>Output:</b>
1
</pre><h3>Explanation</h3>
<p>In the sample, the string <b>|S|</b> will be changed as follows:</p>
<pre>bbabaaaaab (<b>S<sub>Init</sub></b>)
bbababaaaab (after INSERT_MIDDLE b)
bbbababaaaab (after INSERT_LEFT b)
bbbababbaaaab (after INSERT_MIDDLE b)
bbbababbbaaaab (after INSERT_MIDDLE b)
bbbababbbaaaaba (after INSERT_RIGHT a)
abbbababbbaaaaba (after INSERT_LEFT a)
abbbababbbbaaaaba (after INSERT_MIDDLE b)
aabbbababbbbaaaaba (after INSERT_LEFT a)
aabbbababab<b>bbaaa</b>aba (after INSERT_MIDDLE a)
aabbbababbbbaaaaba (after DELETE_MIDDLE)
aabbbababbbaaaaba (after DELETE_MIDDLE)
</pre><p>For QUERY bbaaa, this string occurs once. It is shown in boldface type.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wjmzbmr">wjmzbmr</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2013</td>
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