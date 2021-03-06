<?php require("../../includes/header.php"); ?><h1>XOR Sum</h1><div class="content">

<p style="text-align:justify"><b>WARNING: This problem has large input / output files. Use of faster I/O methods is recommended.</b></p>
<p style="text-align:justify">Chef has a sequence of <b>N</b> positive integers <b>{ a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, ... a<sub>N</sub> }</b>. The Sous Chef wants to choose another sequence of <b>N</b> <b>non-negative integers</b> <b>{ b<sub>1</sub>, b<sub>2</sub>, b<sub>3</sub>, ... b<sub>N</sub> }</b> such that</p>
<p> </p>
<ul>
<li>The <b>bitwise xor sum</b> of these <b>2</b> sequences is equal</li>
<li>i.e, <b>a<sub>1</sub> ^ a<sub>2</sub> ^ a<sub>3</sub> ^ ... a<sub>N</sub> = b<sub>1</sub> ^ b<sub>2</sub> ^ b<sub>3</sub> ^ ... b<sub>N</sub></b></li>
<li>for each <b>i</b>, <b>b<sub>i</sub></b> ≤ <b>a<sub>i</sub></b></li>
</ul>
<p> </p>
<p style="text-align:justify">The Sous Chef asks for your help. Your allegiance to the Chef withstanding, you tell him that you will not generate such a sequence for him. Instead, you will tell him the number of such sequences possible.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b> denoting the length of your sequence. The second line contains <b>N</b> space-separated integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of ways your friend can choose his sequence. Since this number may be too big, output this number modulo <b>1000000009</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 10</b><br /> <b>1 ≤ N ≤ 100000</b><br /> <b>1 ≤ a<sub>i</sub> ≤ 1000000000</b></p>
<h3>Sample</h3>
<pre><b>Input</b>
4
1
5
2
3 3
3
3 3 3
4
1 2 3 4

<b>Output</b>
1
4
16
6

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> The only possible sequence is <b>{ 5 }</b>.</p>
<p style="text-align:justify"><b>Test Case 2:</b> There are 4 possible sequences whose bitwise xor is equal to 3^3 = 0</p>
<p> </p>
<ul>
<li>{ 0, 0 }</li>
<li>{ 1, 1 }</li>
<li>{ 2, 2 }</li>
<li>{ 3, 3 }</li>
</ul>
<p> </p>
<p style="text-align:justify"><b>Test Case 4:</b> The 6 possible sequences are</p>
<p> </p>
<ul>
<li>{ 0, 0, 0, 4 }</li>
<li>{ 0, 1, 1, 4 }</li>
<li>{ 1, 0, 1, 4 }</li>
<li>{ 1, 1, 0, 4 }</li>
<li>{ 0, 2, 2, 4 }</li>
<li>{ 1, 2, 3, 4 }</li>
</ul>
<p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-05-2013</td>
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