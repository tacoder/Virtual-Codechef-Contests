<?php require("../../includes/header.php"); ?><h1>Field Trip</h1><div class="content">

<p>Alice's school is planning to take some students from her class on a field trip. Alice is really excited about it. There are a total of <b>S</b> students in her class. But due to budget constraints, the school is planning to take only <b>N</b> students for the trip. These students will be picked randomly. And each student has equal chance of being picked.</p>
<p>Alice's friend circle has <b>M</b> students including her. Though she is excited about the field trip, she will enjoy it only if there are atleast <b>K</b> of her friends with her on the trip. She is wondering what are the chances of that happening. She needs your help. Tell her the probability that she will enjoy given that she goes on the trip.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.</p>
<p> Each test starts with a single line having 4 space separated integers, <b>S</b>, <b>N</b>, <b>M</b> and <b>K</b>.</p>
<h3>Output:</h3>
<p>For each test case, output a line containing the required probability. The answer will be accepted if the relative error is not more than 10<sup>-6</sup>.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>T</b> ≤ 100
1 ≤ <b>S</b> ≤ 1000
1 ≤ <b>N</b> ≤ <b>S</b>
1 ≤ <b>M</b> ≤ <b>S</b>
0 ≤ <b>K</b> &lt; <b>M</b>

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>3
10 10 5 3
10 4 6 4
3 2 2 1


</pre><p><b>Output:</b></p>
<pre>1.000000
0.000000
0.500000
</pre><h3>Explanation:</h3>
<p><b>Case #1:</b><br /> Every student will be taken to the trip. So all her 4 friends will accompany her to the trip no matter what. </p>
<p> <b>Case #2:</b><br /> Alice wants 4 out of her 5 friends to come along with her which isn't possible because the school is willing to pick only 4 students for the trip.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
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