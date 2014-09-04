<?php require("../../includes/header.php"); ?><h1>The Power of 2</h1><div class="content">

<p>Sherlock Holmes has helped the London Police to solve a lot of cases and sent a lot of criminals to prison. But now he is getting bored as there is no interesting case to solve. So he decides to play a game with Watson to spend his time.</p>
<p>Initially he gives him an array of N numbers A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, … A<sub>n</sub>. Now, he asks Watson to tell him the sum of the squares of all numbers in any subarray from A<sub>i</sub> to A<sub>j</sub>.</p>
<p>i.e. A<sub>i</sub><sup>2</sup> + A<sub>i+1</sub><sup>2</sup> + ...+ A<sub>j</sub><sup>2</sup>.</p>
<p>To increase the difficulty of the task, he updates the numbers in any subarray from A<sub>i</sub> to A<sub>j</sub> from time to time. The update is performed in two steps-</p>
<p>1) He multiplies all numbers in the subarray by 2.</p>
<p>2) He divides all multiples of 2048 in the subarray by 2048.</p>
<p>Dr. Watson knows that if he is unable to answer Sherlock’s queries, Sherlock will boast about it for days. So he asks for your help to keep Sherlock’s ego under control.</p>
<h3>Input</h3>
<p>The first line contains T, the number of test cases.</p>
<p>For each test case, the first line of input contains 2 integers N and Q(number of queries).</p>
<p>Next line contains N integer A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, … A<sub>n</sub>.<br />
Next Q lines contain each defines a query-</p>
<p>0 i j -  Sherlock updates all the numbers in the subarray from A<sub>i</sub> to A<sub>j</sub> as defined above.</p>
<p>1 i j -  Watson needs to tell the sum of squares of all numbers in the subarray from A<sub>i</sub> to A<sub>j</sub>.</p>
<h3>Output</h3>
<p>For each query of the form 1 i j, output 1 line containing the answer to Sherlock's problem.</p>
<h3>Constraints</h3>
<p>T&lt;=5</p>
<p>1&lt;=N&lt;=10^5</p>
<p>1&lt;=Q&lt;=10^5</p>
<p>1&lt;=Ai&lt;=1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 3
5 2 1 6
1 2 3
0 1 3
1 2 4
1 3
512
0 1 1
0 1 1
1 1 1

<b>Output:</b>
5
56
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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