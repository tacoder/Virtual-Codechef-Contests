<?php require("../../includes/header.php"); ?><h1>The Easiest Problem</h1><div class="content">
<p><span>This is probably the easiest task of this problem set. To help you understand the task let us define two key functions:</span></p>
<p><span><strong>f(n,k)</strong>, (with <strong>k &lt;= n</strong>) which gives the number of ways we can draw a sample of <strong>k</strong> objects from a set of <strong>n</strong>-distinct objects where order of drawing is not important and we do not allow repetition.</span></p>
<p><span><strong>G(x1, x2, x3, ... , xn)</strong> is the largest integer that perfectly divides all of  <strong>{x1, x2, x3, ... , xn}</strong>.</span></p>
<p><span>Given an integer <strong>N,</strong>  your task is to compute the value of <strong>Y</strong> where </span></p>
<p></p>
<p>                                         <span><span>     <span><strong>Y =  G( f(2*N,1), f(2*N,3), f(2*N,5), ... , f(2*N,2*N-1)).</strong></span></span></span></p>
<p><span><br /></span></p>
<h3><span>Input</span></h3>
<p><span>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. The first and the only line of each test case contains a single integer denoting the given <strong>N </strong> as described in the problem statement. </span></p>
<p><span><br /></span></p>
<h3><span>Output</span></h3>
<p><span><span>For each test case, output a single line containing the value of </span><strong>Y.</strong></span></p>
<h3><span>Constraints</span></h3>
<ul>
<li><span><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>10000</strong></span></li>
</ul>
<ul>
<li><span><strong>2</strong> ≤ <strong>N</strong> ≤ <strong>10<sup>11</sup></strong></span></li>
</ul>
<p><span><br /></span></p>
<h3><span>Example</span></h3>
<pre><strong><span>Input:</span></strong></pre><pre><span>3</span></pre><pre><span>6</span></pre><pre><span>5</span></pre><pre><span>4</span></pre><pre><span><strong>Output:</strong>
4<br />2</span></pre><pre><span>8</span></pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-09-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>