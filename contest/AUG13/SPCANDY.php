<?php require("../../includes/header.php"); ?><h1>Splitting Candies</h1><div class="content">
<p>Cyael is a teacher at a very famous school in Byteland and she is known by her students for being very polite to them and also to encourage them to get good marks on their tests.</p>
<p>Then, if they get good marks she will reward them with candies :) However, she knows they are all very good at Mathematics, so she decided to split the candies evenly to all the students she considers worth of receiving them, so they don't fight with each other. </p>
<p>She has a bag which initially contains <b>N</b> candies and she intends to split the candies evenly to <b>K</b> students. To do this she will proceed as follows: while she has more than <b>K</b> candies she will give exactly 1 candy to each student until she has less than <b>K</b> candies. On this situation, as she can't split candies equally among all students she will keep the remaining candies to herself.</p>
<p>Your job is to tell how many candies will each student and the teacher<br />
receive after the splitting is performed.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case will consist of 2 space separated integers, <b>N</b> and <b>K</b> denoting the number of candies and the number of students as described above.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two space separated integers, the first one being the number of candies each student will get, followed by the number of candies the teacher will get.</p>
<h3>Constraints</h3>
<ul>
<li> <b>T&lt;=100 in each test file</b> </li>
<li><b>0 &lt;= N,K &lt;= 2<sup>33</sup> - 1 </b></li>
</ul>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
2
10 2
100 3
</pre>
<p><b>Output:</b></p>
<pre>
5 0
33 1
</pre><h3>Explanation</h3>
<p>For the first test case, all students can get an equal number of candies and teacher receives no candies at all </p>
<p>For the second test case, teacher can give 33 candies to each student and keep 1 candy to herself</p>
<p><b>Update:</b></p>
<p> There may be multiple whitespaces before, after or between the numbers in input.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-07-2013</td>
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