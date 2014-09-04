<?php require("../../includes/header.php"); ?><h1>Ripple-Carry Adder</h1><div class="content">

<p>
Amortized analysis deals with analyzing the average amount of work done per operation over a series of operations. In some cases, the average amount of work done per operation is dramatically less than the worst case analysis indicates.</p>
<p>
A typical example is counting the number of times a bit is flipped in a ripple-carry counter. A ripple-carry counter is an implementation of a binary counter where incrementing from B to B+1 is done in the following manner. Say the binary number is represented as B = b<sub>n-1</sub>b_<sub>n-2</sub>...b_<sub>1</sub>b<sub>0</sub> where b<sub>i</sub> is the bit corresponding to 2<sup>i</sup>. B is increased to B+1 in the following manner:</p>
<p>
<code><br />
i := 0<br />
while b<sub>i</sub> == 1<br />
   b<sub>i</sub> := 0<br />
   i := i+1<br />
b<sub>i</sub> := 1<br />
</code></p>
<p>
This doesn't account for overflow when increasing from 2<sup>n</sup>-1 to 2<sup>n</sup>, but we'll ignore that error for this problem.</p>
<p>
Each time a bit is changed from 0 to 1 or from 1 to 0 we say the bit is "flipped". In the worst case, we may have to flip every bit. However, a standard result says the average number of bits flipped per increment when counting from 0 to 2<sup>n</sup>-1 is less than 2.</p>
<p>
Being the curious sort, you decide to explore this result in a slightly more general setting. That is, you want to know how many bits are flipped when the counter is incremented from a number a to b where a &lt; b. </p>
<h3>Input</h3>

<p>
The first line denotes the number of test cases (about 20).</p>
<p>
Each test case consists of three lines. The first contains a single integer n between 1 and 100,000 denoting the number of bits in the counter. The second line contains the number a written in binary and the third line contains the number b written in binary. Both a and b are described using exactly n bits.</p>
<h3>Output</h3>

<p>
The output for each test case consists of a single line that describes the total number of bits flipped when the counter is increased from a to b. This number should be expressed in binary with the most significant bit being 1 (i.e. no leading zeros should pad the output).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
0
1
2
00
11
3
011
100

<b>Output:</b>
1
100
11

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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