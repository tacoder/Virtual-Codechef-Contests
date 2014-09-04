<?php require("../../includes/header.php"); ?><h1>Little Elephant and Bubble Sort</h1><div class="content">

<p>Little Elephant loves bubble sorting.</p>
<p>Bubble sorting for any array <b>A</b> of <b>n</b> integers works in the   following way:  <i> </i></p>
<p><i> var int i, j; <br /> for i from n downto 1 <br /> { <br /> for j from 1 to i-1  <br /> {  <br /> if (A[j] > A[j+1]) <br /> swap(A[j], A[j+1]) <br /> } <br />} </i></p>
<p>You are given an array <b>B</b> of <b>n</b> integers. Then the array <b>A</b> is created using array <b>B</b> as following : for each <b>i</b> (<b>1 &lt;= i &lt;= n</b>), we set <b>A<sub>i</sub></b> = <b>B<sub>i</sub> + d</b> with the   probability <b>P<sub>i</sub></b>, otherwise <b>A<sub>i</sub></b> =   <b>B<sub>i</sub></b>.</p>
<p>Help Little Elephant to find the expect number of swaps that bubble sorting   will make when the array <b>A</b> is sorted with the above bubble sorting   algorithm.</p>
<h3>Input</h3>
<p>First line of the input contains single integer <b>T</b> - the number of test   cases. <b>T</b> test cases follows. First line of each test case contains pair of   integers <b>n</b> and <b>d</b>. Next line of each test case contains   <b>n</b> integers - array <b>B</b>. Next line contains <b>n</b> integers -   array <b>P</b>.</p>
<h3>Output</h3>
<p>In <b>T</b> lines print <b>T</b> real numbers - the answers for the   corresponding test case. Please round all numbers to exactly 4 digits after   decimal point.</p>
<h3>Constraint</h3>
<p>1 &lt;= <b>T</b> &lt;= 5</p>
<p>1 &lt;= <b>n</b> &lt;= 50000</p>
<p>1 &lt;= <b>B<sub>i</sub>, d</b> &lt;= 10^9</p>
<p>0 &lt;= <b>P<sub>i</sub>,</b> &lt;= 100</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 7
4 7
50 50
4 7
5 6 1 7
25 74 47 99

<b>Output:</b>
0.2500
1.6049

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-05-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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