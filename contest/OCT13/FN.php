<?php require("../../includes/header.php"); ?><h1>Fibonacci Number</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/FN.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>
As we know, Fibonacci Number is defined as </p>
<p></p><p><b>F<sub>n</sub>=n if n  ≤ 1 </b></p>
<p> <b>F<sub>n</sub>=F<sub>n-1</sub>+F<sub>n-2</sub>, otherwise</b></p>
<p>Now this problem is quite simple: you are given one  prime number  <b>P</b> and one non-negative integer <b>C</b><br />
</p>
<p>You are expected to find the smallest non-negative integer  <b>n</b>, such that</p>
<p><b>F<sub>n</sub>≡C(mod P)</b></p>
<p>The definition of "mod" could be found here:<br />
<a target="_blank" href="http://en.wikipedia.org/wiki/Modular_arithmetic"><br />
here</a></p>
<p> </p>
<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
<p>Only one line of each test case, which contains two integers <b>C</b> and <b>P</b> denoting the number described above.
</p></ul>
<p> </p>
<h3>Output</h3>
<ul>
For each test case, output a single line containing one integer indicates the smallest <b>n</b>. If such <b>n</b> do not exist, output <b>-1</b> instead
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<b>1</b> ≤ <b>T</b> ≤ <b>100</b><br /><br />
<b>11</b> ≤ <b>P</b> ≤ <b>2000000000</b>  and  is one <b>prime number</b><br /><br />
<b>0</b> ≤ <b>C</b> ≤ <b>P-1</b><br /><br />
<b>(P Mod 10)</b> is <b>square number</b><br />
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
0 11
16 19
18 19
4 19

<b>Output:</b>
0
14
16
-1

<p>
<b>Hint:</b>
Here are the first few fibonacci number when mod by 19:

n	
0	1	2	3	4	5	6	7	8	9	10	11	12	13	14	15	16	17	18	19
F_n(mod 19)	
0	1	1	2	3	5	8	13	2     15	17	13	11	5	16	2	18	1	0	1
</p>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aekd_adm">aekd_adm</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 - 15 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>20000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>