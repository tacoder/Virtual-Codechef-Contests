<?php require("../../includes/header.php"); ?><h1>Minimum Product</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/MPROD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/MPROD.pdf">Russian</a>.</h3>
<p>You are given a array <b>A</b> of <b>N</b> positive integers, and you can perform the following operation on the array<br /><br />
1) Pick any two indices <b>i</b> and <b>j</b> in the array<br /><br />
2) Divide A[i] and A[j] by some common factor of A[i] and A[j]<br /><br />
<br /><br />
You can perform the above operation as many number of times as you want, and the aim is to minimize the product of the resulting array. Find this minimum product. Since the answer can be a large number, print the product modulo 1000000007 (10<sup>9</sup>+7).<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line contains <b>T</b>, number of testcases. Each testcase contains 2 lines.<br /><br />
First line of each testcase contains single integer <b>N</b>, size of the array<br /><br />
Second line of each testcase contains N space separated integers, the array <b>A</b><br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output single line indicating the answer to that testcase<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=10<br /><br />
30 points : 1&lt;=N&lt;=2000, 1&lt;=A[i]&lt;=10<sup>6</sup><br /><br />
70 points : 1&lt;=N&lt;=20000, 1&lt;=A[i]&lt;=10<sup>8</sup><br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
3<br /><br />
2 3 6<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
First divide first and third numbers by 2, then the second and third by 3. This makes all numbers equal to 1, hence the product is 1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/balajiganapath">balajiganapath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2014</td>
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