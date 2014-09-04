<?php require("../../includes/header.php"); ?><h1>Prime words</h1><div class="content">

<p>In the magic land of Mathtopia, the words of the language are written only using two symbols: ones and zeros.</p>
<p>
A given word <var>w</var> is called "prime" if it cannot be written in the form of the concatenation of several copies of some shorter word. So, for example the words '100', '1100', and '001100' are prime, while the words '0101', '100100', '1111', and '101010' are not prime.</p>
<p>Your task is to calculate the number of prime words which can be built from exactly <var>a</var> ones and <var>b</var> zeros.</p>
<h3>Input</h3>
<p>t - the number of test cases. For each test case, two integers: 1&lt;=<var>a</var>&lt;=10<sup>9</sup>, 1&lt;=<var>b</var>&lt;=10<sup>9</sup>.</p>
<h3>Output</h3>
<p>For each test case, output the required answer modulo 531169.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 2

<b>Output:</b>
4
</pre><p>
Explanation: the 4 words from the example are:<br />
'0011','1100','0110','1001'.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>