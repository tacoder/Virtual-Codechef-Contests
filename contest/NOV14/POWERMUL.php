<?php require("../../includes/header.php"); ?><h1>Fombinatorial</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/POWERMUL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/POWERMUL.pdf">Russian</a>.</h3>
<p>You are given a function f which is defined as :<br /><br /><br />
<img src="https://codechef_shared.s3.amazonaws.com/download/NOV14/CodeCogsEqn%283%29.gif" /><br /><br /></p>
<p>Your task is to find the value of  <b>f(N) / ( f(r)*f(N-r) )</b><br /><br /> . As it will be a large number output it modulo <b>M</b>. </p>
<h3> Input </h3>
<p>First line contains <b>T</b> , number of test cases to follow.<br /></p>
<p>Next follows <b>T</b> test case.<br /></p>
<p>First line of ever test case contain 3 space separated integers <b>N , M</b> and <b>Q</b>.<br /></p>
<p>Next <b>Q</b> line follows , each line contain r.<br /></p>
<h3>Output</h3>
<p>For every test case , output <b>Q</b> lines , each line containing the answer.<br /></p>
<h3>Constraints</h3>
<ul>
<li>2 ≤  <b>N</b>  ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>M</b> ≤ 10<sup>9</sup></li>
<li>2 ≤ Sum of <b>N</b> over all test cases ≤ 5*10<sup>5</sup></li>
<li>2 ≤ Sum of <b>Q</b> over all test cases ≤ 10<sup>5</sup></li>
<li>1 &lt; <b>r</b> &lt; <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> Subtask 1:  N ≤ 5 , rest of the constraints are same. Points - 9 </li>
<li> Subtask 2:  N ≤ 500 , M is a prime number , rest of the constraints are same. Points - 31 </li>
<li> Subtask 3: Refer to constraints above : Points-60 </li>
</ul>
<pre><h3>Sample Input</h3>
1
5 24 2
2
3
<h3>Sample Output</h3>
8
8
</pre><h3>Explanation</h3>
<p>f[1] = 1<br /><br />
f[2] = 4<br /><br />
f[3] = 1*2<sup>2</sup>*3<sup>3</sup> = 108<br /><br />
f[4] =1*2<sup>2</sup>*3<sup>3</sup>*4<sup>4</sup> = 27648<br /><br />
f[5] = 1*2<sup>2</sup>*3<sup>3</sup>*4<sup>4</sup>*5<sup>5</sup> =86400000<br /><br />
value of f[5] / (f[2]*f[3]) = 200000 and 200000%24 is 8<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/devuy11">devuy11</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-07-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>