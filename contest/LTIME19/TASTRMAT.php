<?php require("../../includes/header.php"); ?><h1>String Matching</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TASTRMAT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TASTRMAT.pdf">Russian</a>.</h3>
<p>In this problem we will have a few definitions as described below:</p>
<ul>
<li><b>Binary string</b>: A string containing only characters '0' and '1'.</li>
<li><b>Hamming distance</b> of the two binary string of the same length is the number of the positions where the two strings have<br />
  different characters. eg. the hamming distance of "0<b>10</b>101<b>0</b>1" and<br />
  "0<b>01</b>101<b>1</b>1" is 3, the hamming distance of a binary string with itself is 0.</li>
<li><b>Sub-string</b> of a string is a segment of contiguous characters of that string.</li>
</ul>

<p>
You would be given two binary strings <b>A</b> and <b>B</b> with the length of <b>N</b> and <b>M</b> respectively.<br />
You need to calculate the Hamming distance between <b>B</b> and every sub-strings of length <b>M</b> of <b>A</b>.
</p>
<p>
For this problem, you will be given a fixed string <b>A</b>. There will be <b>K</b> queries each containing a string representing <b>B</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line contains the binary string <b>A</b>.</li>
<li>The next line contains an integer <b>K</b>.</li>
<li>Each of the next <b>K</b> lines contains a binary string <b>B</b>.</li>
</ul>
<h3>Output</h3>
<p>To avoid generating large output, for each query string <b>B</b> instead of printing <b>N - M + 1</b> values of Hamming distance between<br />
sub-strings of <b>A</b> and <b>B</b> in the order of the position of the sub-string in <b>A</b>, you only need to print<br />
the <b>hash value</b> of this sequence as described below.</p>
<p>Let s[0..<b>L</b> -1] be a sequence of <b>L</b> integers. The recursive function f(s) will return the hash value of s.</p>
<ul>
<li>if <b>L</b> = 1, f(s) = s[0] mod <b>1000000007</b></li>
<li>Otherwise, f(s) = (f(s[0..<b>L</b>-2]) * <b>100001</b> + s[<b>L</b>-1]) mod <b>1000000007</b></li>
</ul>

<p>So overall, your output should be <b>K</b> lines, each containing the hash value corresponding to the query string <b>B</b>.</p>
<h3>Constraints</h3>
<p>
<b>20 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<p>
<b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<p>
<b>40 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>M ≤ N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
10101
3
101
00
0101

<b>Output:</b>
300003
993599731
400004
</pre><h3>Explanation:</h3>
<p><b>First test case: </b> <b>A</b> = "10101", <b>B</b> = "101".<br />
The Hamming distances sequence will be (0, 3, 0) and the hash value of this sequence is 300003.</p>
<p><b>Second test case: </b> <b>A</b> = "10101", <b>B</b> = "00". The Hamming distances sequence will be (1, 1, 1, 1)<br />
and the hash of this sequence is 993599731.</p>
<p><b>Third test case:</b> <b>A</b> = "10101", <b>B</b> = "0101". The Hamming distances sequence will be (4, 0)<br />
and the hash value of this sequence is ((4 mod 1000000007) * 100001 + 0) mod 1000000007 = 400004.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-12-2014</td>
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