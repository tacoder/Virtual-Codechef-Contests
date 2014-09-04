<?php require("../../includes/header.php"); ?><h1>Number of Factors</h1><div class="content">

<p>Alice has learnt factorization recently. Bob doesn't think she has learnt it properly and hence he has decided to quiz her. Bob gives Alice a very large number and asks her to find out the number of factors of that number. To make it a little easier for her, he represents the number as a product of <b>N</b> numbers. Alice is frightened of big numbers and hence is asking you for help. Your task is simple. Given <b>N</b> numbers, you need to tell the number of distinct factors of the product of these <b>N</b> numbers.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.</p>
<p> Each test starts with a line containing a single integer <b>N</b>.<br /> The next line consists of <b>N</b> space separated integers (<b>A<sub>i</sub></b>).</p>
<h3>Output:</h3>
<p>For each test case, output on a separate line the total number of factors of the product of given numbers.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 10
2 ≤ <b>A<sub>i</sub></b> ≤ 1000000

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>3
3
3 5 7
3
2 4 6
2
5 5

</pre><p><b>Output:</b></p>
<pre>8
10
3

</pre><h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 100.</p>
<p> You will be awarded another <b>30</b> points for correctly solving for <b>A<sub>i</sub></b> ≤ 10000.</p>
<p> The remaining <b>30</b> points will be awarded for correctly solving for <b>A<sub>i</sub></b> ≤ 1000000.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2013</td>
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