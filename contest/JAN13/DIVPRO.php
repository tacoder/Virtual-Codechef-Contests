<?php require("../../includes/header.php"); ?><h1>Dividing Products</h1><div class="content">

<p>Dr. Bobo, while working in his laboratory, thought of an interesting problem. He has spent considerable time trying to find a solution but in vain. So he turns to you to find the solution using your special powers of coding. </p>
<p>For a positive integer <b>N</b>, he defines a function <b>DIVPRO(N</b>) as follows.</p>
<ul>
<li>Let <b>N</b> be <b>L</b>-digit number and <b>n<sub>i</sub></b> is the <b>i</b>-th digit in the decimal representation of <b>N</b> (<b>i</b> = <b>1</b>, <b>2</b>, ..., <b>L</b>). So we can write <b>N</b> = <b>n<sub>1</sub></b><b>n<sub>2</sub></b>...<b>n<sub>L</sub></b>.</li>
<li>Then <b>DIVPRO(N)</b> = <b>n<sub>1</sub></b> / <b>n<sub>2</sub></b> * <b>n<sub>3</sub></b> / <b>n<sub>4</sub> * ... </b> (i.e., we alternate division and multiplication of digits).</li>
<li>The result is calculated from left to right.</li>
<li>Division here is performed in standard mathematical way, so the result of the division can be non-integer number.</li>
<li>If division by 0 occurs at any point for a given <b>N</b>, then <b>DIVPRO(N)</b> is undefined in such a case.</li>
</ul>
<p>Let's consider some examples:</p>
<ul>
<li><b>DIVPRO(1)</b> = <b>1</b>. In fact, <b>DIVPRO(N)</b> = <b>N</b> for any 1-digit number <b>N</b>.</li>
<li><b>DIVPRO(42)</b> = <b>4</b> / <b>2</b> = <b>2</b> is an integer.</li>
<li><b>DIVPRO(123)</b> = <b>1</b> / <b>2</b> * <b>3</b> = <b>3</b> / <b>2</b> = <b>1.5</b> is non-integer.</li>
<li><b>DIVPRO(370)</b> = <b>3</b> / <b>7</b> * <b>0</b> = <b>0</b>, while intermediate result was <b>3</b> / <b>7</b> which is non-integer.</li>
<li><b>DIVPRO(3465009)</b> = <b>3</b> / <b>4</b> * <b>6</b> / <b>5</b> * <b>0</b> / <b>0</b> * <b>9</b> is undefined since we have division by zero.</li>
</ul>
<p>Now Dr. Bobo would like to know how many <b>L</b>-digit numbers have their <b>DIVPRO</b> value equal to <b>V</b> and he wants your help. Since this number can be quite large output it modulo <b>2<sup>32</sup></b>, that is, you need to find the remainder of the division of the answer by <b>2<sup>32</sup></b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The only line of each test case contains two space-separated integers <b>L</b> and <b>V</b>.</p>
<h3>Output</h3>
<p> For each test case, output a single line containing the number of <b>L</b>-digit positive integers, whose <b>DIVPRO</b> value is <b>V</b>. As was mentioned above you should print this number modulo <b>2<sup>32</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>320000</b> (<b>320</b> thousands)</li>
<li><b>1</b> &le; <b>L</b> &le; <b>36</b> </li>
<li><b>0</b> &le; <b>V</b> &lt; <b>10<sup>18</sup></b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
2 0
3 27
5 24
10 45

<b>Output:</b>
0
5
486
2349595
</pre><h3> Explanation</h3>
<p><b>Example case 1.</b> No 2-digit number has <b>DIVPRO</b> value of <b>0</b> (as leading zeros are not allowed). Hence the answer is zero.</p>
<p><b>Example case 2.</b> The only 3-digit numbers having <b>DIVPRO</b> value of <b>27</b> are <b>319</b>, <b>629</b>, <b>913</b>, <b>926</b> and <b>939</b>. So there are 5 such numbers in all.</p>
<h3>Warning!</h3>
<p>The input file size could reach 7MB so be sure you are using fast I/O method.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>