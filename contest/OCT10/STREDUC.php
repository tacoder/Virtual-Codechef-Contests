<?php require("../../includes/header.php"); ?><h1>Reduce string</h1><div class="content">

<p>Give a string s of length l, and a set S of n sample string(s). We do reduce the string s using the set S by this way:</p>
<ul>
<li>Wherever S<sub>i</sub> appears as a consecutive substring of the string s, you can delete (or not) it.</li>
<li>After each deletion, you will get a new string s by joining the part to the left and to the right of the deleted substring.</li>
</ul>

<h3>Request</h3>
<p>By that way, try to reduce the given string s to get a new string of minimum length. You can do delete for unlimited times.</p>
<h3>Input</h3>
<p><ul>
<li>The first line contains the string s.</li>
<li>The second line contains the integer n.</li>
<li>Within the last n lines, the i-th line contains the string S<sub>i</sub>.</li>
</ul>
</p>
<h3>Output</h3>
<p>Output on a single line an integer which is the minimum length found.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
aaabccd
3
abc
ac
aaa
</pre><p>
<b>Output:</b></p>
<pre>
2
</pre><h3>Limitations</h3>
<p><ul>
<li>0&lt;l≤250</li>
<li>0&lt;n≤30</li>
<li>0&lt;|S<sub>i</sub>|≤20</li>
</ul>
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>