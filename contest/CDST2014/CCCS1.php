<?php require("../../includes/header.php"); ?><h1>ROSE</h1><div class="content">
<p></p>
<p>A Boy asks out a Girl for a date. The Girl told the Boy to get roses for her at that instant. She wants N different kinds of roses but only one of each type. Each rose have several layers of petals. The number of petals in each layer goes on decreasing from outside to inside. Now, the girl will count every petal of all the roses and if total petals of all the roses are odd then she will go with him otherwise she won’t. Help girl to make decision.</p>
<p></p>
<h3>Input</h3>
<p></p>
<p>First line of input contains a number N total number of test cases. </p>
<p>First line of each test case will contain a number specifying types of roses <strong>T</strong>.</p>
<p>Each of the following  <strong>T </strong> lines will contain two numbers. First number is difference  <strong>D </strong> and second number is number of petals  <strong>O </strong> in outermost layer.</p>
<p></p>
<h3>Output</h3>
<p></p>
<p>YES if she goes on date and NO if she does not.</p>
<p></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>D </b> ≤ <b>O </b></li>
<li><b>1</b> ≤ <b>O </b> ≤ <b>1000^5 </b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 9
3 8
4
2 4
3 9
1 9
2 7
</pre><p><b>Output:</b></p>
<pre>
NO
YES
</pre><p> </p>
<p><strong>Explaination</strong><br />
</p>
<p>Two is the number of test cases.For First Input there are 2 Types of roses 1st Rose has 9 petals at outermost layer and 1 is the difference of petals from outer to inner side and second has 8 petals at outermost layer and 3 is the difference.For second Input there are 4 types of roses and the difference and number of petals of the outer most layer is given for each type of rose respectively.The sum for First 2type does not satisfy the condition of the girl hence output is NO,while the second does hence output is YES.</p>
<p></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aagg">aagg</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>