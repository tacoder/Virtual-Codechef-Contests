<?php require("../../includes/header.php"); ?><h1>Johny the farmer</h1><div class="content">

<p>Johny the Farmer has decided to plant potatoes. He quickly realized that he must build a net fence to keep animals from eating his precious plantation. But he only has 3 sticks which can act as vertical poles supporting fence; on the other hand, his supply of net is unlimited. Moreover, since the ground is extremely rocky, the poles can only be positioned in some special places on the field. So, he has decided that the fence must be triangular in shape, with vertices in the distinguished points. Quite naturally, he would also like to maximize the area of the field inside fence -- please help him achieve this goal!</p>
<h3>Task</h3>
<p>Write a program which:</p>
<ul>
<li>reads from the input the coordinates of the points which can hold the poles,</li>
<li>calculates the maximal possible area of the potato plantation.</li>
</ul>
<h3>Input</h3>
<p>First, an integer t, representing the number of test cases.</p>
<p>Each test case starts with an integer n (n≤10<sup>6</sup>). In the next line there are n  pairs of <strong>integers</strong> separated by spaces, x<sub>i</sub>, y<sub>i</sub>, which are the coordinates for i-th point where a pole can potentially be located (-10000≤x<sub>i</sub>,y<sub>i</sub>≤10000).</p>
<h3>Output</h3>
<p>For each test case output a single integer - the area of the field surrounded by the fence, <strong>multiplied by 2</strong>.</p>
<h3>Example</h3>
<pre><strong>Input</strong>
1
5
0 0 1 0  0 1 1 2 1 1

<strong>Output</strong>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>