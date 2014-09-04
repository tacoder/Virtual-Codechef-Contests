<?php require("../../includes/header.php"); ?><h1>Magic sequence</h1><div class="content">

<p>Johnny has invented a magic sequence. Each element of the sequence is defined by the same recursive definition - take some linear combination of previous elements (whose coefficients are fixed) and add to them the n-th powers of some integers. Formally: X<sub>n</sub> = X<sub>n-1</sub>*a<sub>1</sub> + ... + X<sub>n-i</sub>*a<sub>i</sub> + b<sub>1</sub>*d<sub>1</sub><sup>n</sup> + ... + b<sub>j</sub>*d<sub>j</sub><sup>n</sup>, for some integer constants p,q,a<sub>1</sub>,...,ap,b<sub>1</sub>,..., b<sub>q</sub>,d<sub>1</sub>,..., d<sub>q</sub>. Of course, as the values can quickly grow, he computed them modulo a fixed value: 10<sup>6</sup>. He wrote many consecutive values of the sequence, but then he lost most of his work. All he has now, is 10 consecutive values taken from somewhere in the sequence (he doesn't know at what n they begin), and the recursive rule. And he would like to recover the sequence, or at the very least, to be able to write the next 10 values taken from the sequence.</p>
<h3>Input</h3>
<p>First, two integers, 0≤p≤4, 0≤q≤4. Then come the descriptions of the coefficients, -100 ≤ a<sub>1</sub>,...,ap,b<sub>1</sub>,..., b<sub>q</sub>,d<sub>1</sub>,..., d<sub>q</sub> ≤ 100. Then, the following 10 integers are X<sub>n</sub>,X<sub>n+1</sub>,...,X<sub>n+9</sub> for some unknown n.</p>
<h3>Output</h3>
<p>Output 10 integers - X<sub>n+10</sub>,X<sub>n+11</sub>,...,X<sub>n+19</sub></p>
<h3>Example</h3>
<pre><strong>Input:</strong><br />1 1<br />1<br />1<br />1<br />11 12 13 14 15 16 17 18 19 20<br /><strong><br />Output:</strong><br />21 22 23 24 25 26 27 28 29 30<br /><strong><strong><br />Explanation:</strong></strong><br />x<sub>n</sub>=x<sub>n-1</sub>+1<br /><strong><br />Input:</strong><br />1 1<br />1 <br />1 <br />2 <br />1 3 7 15 31 63 127 255 511 1023<br /><strong>Output:</strong><br />2047 4095 8191 16383 32767 65535 131071 262143 524287 48575<br /><strong>Explanation:</strong><br />x<sub>n</sub>=x<sub>n-1</sub>+2<sup>n</sup>=...=2<sup>n</sup>+2<sup>n-1</sup>+...+1=2<sup>n+1</sup>-1<strong><br /><br />Input:</strong><br />2 0<br />1 1<br />1 1 2 3 5 8 13 21 34 55<br /><strong>Output:</strong><br />89 144 233 377 610 987 1597 2584 4181 6765<strong><br />Explanation:</strong><br />x<sub>n</sub>=Fib(n) is the n-th Fibonacci number<strong><br /><br />Input:</strong><br />2 1<br />2 -1 <br />2 <br />1 <br />0 1 4 9 16 25 36 49 64 81<br /><strong>Output:<br /></strong>100 121 144 169 196 225 256 289 324 361<br /><strong>Explanation:<br /></strong>x<sub>n</sub>=n<sup>2</sup><br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-07-2009</td>
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