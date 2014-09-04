<?php require("../../includes/header.php"); ?><h1>Asmany Number Verification</h1><div class="content">

<p style="text-align:justify">
Asmany strings are strings of '0's and '1's that have as many 00 as 11. A string such as 00110001 consists of 3 "00" and<br />
1 "11". Of course this is not an Asmany string. 0011, 1100, 000111000111 are Asmany strings. An L'th Asmany number is the number of<br />
Asmany strings of length L for all positive integers L.
</p>
<p style="text-align:justify">
For esoteric purposes Chef had an oracle (a device) that was capable of answering whether a number that he entered was an Asmany number.<br />
The problem is that his oracle takes too long for large numbers. Him being Chef, he wants to ask the oracle very<br />
large numbers! You tell him that you can give him a better oracle (a program) that will tell him what he wants to know in the blink of<br />
an eye.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first Line contains a single number T, the number of test cases.
</p>
<p style="text-align:justify">
Each test case contains 1 positive integer N, with not more than 1000 digits.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Print YES if N is an Asmany number, NO otherwise.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
<pre>1 ≤ T ≤ 100
1 ≤ Number of digits in N ≤ 1000
</pre></p>
<h3>Sample Input</h3>
<p style="text-align:justify">
<pre>2
3
4
</pre></p>
<h3>Sample Output</h3>
<p style="text-align:justify">
<pre>NO
YES
</pre></p>
<h3>Explanation</h3>
<p style="text-align:justify">
4 is an Asmany number. To be precise, it is the 4th Asmany number: There are 4 Asmany strings of length 4. 0011, 1100, 0101, 1010.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2012</td>
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