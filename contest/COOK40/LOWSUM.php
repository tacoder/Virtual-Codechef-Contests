<?php require("../../includes/header.php"); ?><h1>Lowest Sum</h1><div class="content">
<h3>Read problems statements in Russian <a href="/download/translated/COOK40/russian/LOWSUM.pdf" target="_blank">here</a></h3>
<p>The Head Chef is studying the motivation and satisfaction level of his chefs . The motivation and satisfaction of a Chef can be represented as an integer . The Head Chef wants to know the <b> N </b> th smallest sum of one satisfaction value and one motivation value for various values of <b> N </b> . The satisfaction and motivation values may correspond to the same chef or different chefs . Given two arrays, the first array denoting the motivation value and the second array denoting the satisfaction value of the chefs . We can get a set of sums(add one element from the first array and one from the second). For each query ( denoted by an integer q<sub>i</sub> ( i = 1 to Q ) , Q denotes number of queries ) , find the q<sub>i</sub> th element in the set of sums ( in non-decreasing order ) .</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a two space seperated integers <b>K</b> and <b> Q </b> denoting the number of chefs and the number of queries . </li>
<li>The second line of each test case contains <b>K</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>K</sub></b> denoting the motivation of Chefs. </li>
<li>The third line of each test case contains <b>K</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>K</sub></b> denoting the satisfaction of Chefs. </li>
<li> The next Q lines contain a single integer q<sub>i</sub> ( for i = 1 to Q ) , find the q<sub>i</sub> th element in the set of sums . </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each query of each test case, output a single line containing the answer to the query of the testcase </li>
</ul>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>20000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>q<sub>i</sub> ( for i = 1 to Q ) </b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^18  ( for i = 1 to K ) </b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub> </b> ≤ <b>10^18 ( for i = 1 to K ) </b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 1
1 2 3
4 5 6
4

<b>Output:</b>
7
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 9 elements in the set of sums : <br /><br /> 1 + 4 = 5 <br /><br /> 2 + 4 = 6 <br /><br /> 1 + 5 = 6 <br /><br /> 1 + 6 = 7 <br /><br /> 2 + 5 = 7 <br /><br /> 3 + 4 = 7 <br /><br /> 2 + 6 = 8 <br /><br /> 3 + 5 = 8 <br /><br /> 3 + 6 = 9 <br /><br /> The fourth smallest element is 7.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rubanenko">rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
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