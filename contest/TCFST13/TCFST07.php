<?php require("../../includes/header.php"); ?><h1>Winning Sequence</h1><div class="content">
<p> </p>
<p>Consider a sequence of non- negative integers b(1), b(2) … , b(n) of length n. The given sequence is called a winning sequence if and only if there exists integers p and q between 1 and n (both inclusive) such that a(p) xor a(p+1) xor a(p+2) …. xor a(q) = 0. The xor operation is the bitwise xor operation between two integers.</p>
<p>
The task at hand for you is to compute the number of sequence made of n integers as described earlier, ranging from zero to 2<sup>k</sup> - 1 that are not winning sequences. Print your final answer in output modulo (10<sup>9</sup> + 9) .
</p>
<p> </p>
<h3>Input</h3>
<p>The input line contains contains two space-separated integers n and k </p>
<p> </p>
<h3>Output</h3>
<p>Print answer modulo 1000000009 (10<sup>9</sup> + 9) on the only line of output.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ n ≤ 10<sup>5</sup> <br />
1 ≤ k ≤ 10<sup>5</sup> </p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
<b>Output:</b>
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-10-2013</td>
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