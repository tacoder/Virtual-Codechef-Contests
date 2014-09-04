<?php require("../../includes/header.php"); ?><h1>Rihanna and Triangles</h1><div class="content">
<h3>Problem description.</h3>
<p> Rihanna wants to find the number of triangles that can be formed with n lines, no three lines are concurrent.<br />
But there are many sets of parallel lines in those lines.
</p>
<h3>Input</h3>
<p> First line has integer T, the number of test cases<br /><br />
In each test case 1st line has two integers <b>n,m</b><br /><br />
<b>n</b> represents the number of line and <b>m</b> represents the number of sets of parallel lines<br /><br />
 Next line contains <b>m</b>  intergers  <b>m1,m2,m3,m4…</b> , each integer is the number of parallel line in each set.
</p>
<h3>Output</h3>
<p>For each test case output the number of triangles  that can be formed  modulo 10^9 +7 </p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=6<br /><br />
3&lt;=n&lt;=10^9<br /><br />
0&lt;=m&lt;=100000<br /><br />
2&lt;=m1,m2,m3…&lt;=n<br /><br />
m1+m2+m3&lt;=n<br />
 </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 0
7 2
3 3

<b>Output:</b>
1
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ysc_rih">ysc_rih</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2014</td>
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