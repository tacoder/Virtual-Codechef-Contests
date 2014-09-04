<?php require("../../includes/header.php"); ?><h1>Polo the Penguin and the XOR</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK39/russian/PPXOR.pdf">here</a></h3>
<p>Polo, the Penguin, likes the XOR operation. Please read <a href="#NOTE"><b>NOTE</b></a> if you are not familiar with XOR operation. </p>
<p>XOR-sum of a list of numbers is the result of XOR-ing all of them. XOR-sum of (<b>A[1]</b> XOR <b>A[2]</b> XOR ... XOR <b>A[N]</b>) is defined as <b>A[1]</b> XOR (<b>A[2]</b> XOR (<b>A[3]</b> XOR ( ... XOR <b>A[N]</b>))).</p>
<p>He has an array <b>A</b> consisting of <b>N</b> integers. Index in the array are numbered from <b>1</b> to <b>N</b>, inclusive. Let us denote by <b>F(L, R)</b>, the XOR-sum of all integers in the array <b>A</b> whose indices lie from <b>L</b> to <b>R</b>, inclusive, i.e. <b>F(L, R)</b> = <b>A[L]</b> XOR <b>A[L+1]</b> XOR ... XOR <b>A[R]</b>. Your task is to find the total sum of XOR-sums <b>F(L, R)</b> over all <b>L</b> and <b>R</b> such that <b>1 ≤ L ≤ R ≤ N</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the size of <b>A</b>. The second line contains <b>N</b> space-separated integers <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the total sum to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li><b>0</b> ≤ <b>A[i]</b> ≤ <b>1,000,000,000 (10^9)</b></li>
<li>The total sum of all <b>N</b> over all test cases will not exceed <b>100,000</b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
1 2

<b>Output:</b>
6
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>F(1, 1) = A[1] = 1</b>, <b>F(2, 2) = A[2] = 2</b> and <b>F(1, 2) = A[1]</b> XOR <b>A[2] = 1</b> XOR <b>2 = 3</b>. Hence the answer is <b>1 + 2 + 3 = 6</b>.</p>
<p><a name="NOTE"><br />
<h3>NOTE</h3>
<p></p></a></p>
<p><a href="http://en.wikipedia.org/wiki/Exclusive_or">XOR operation</a> is a bitwise "Exclusive OR" operation performed on two integers in binary representation. First, the shorter number is prepended with leading zeroes until the numbers have equal size in binary. Then the resulting number (also in binary) contains <b>0</b> in all positions where the corresponding bits coincide, and <b>1</b> on the rest of the positions.</p>
<p> For example, <b>3</b> XOR <b>5</b> = <b>011<sub>2</sub></b> XOR <b>101<sub>2</sub></b> = <b>110<sub>2</sub></b> = <b>6</b>. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2013</td>
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