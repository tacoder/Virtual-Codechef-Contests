<?php require("../../includes/header.php"); ?><h1>Cell Phone Towers</h1><div class="content">

<p>Byteline is currently the largest mobile phone operator in Byteland.<br />
They have N cellphone towers at different places in Byteland.</p>
<p>
Byteland can be viewed as a two dimensional plane, with each tower or skyscraper described by a point in that plane. Of course, no two points have the same coordinates.</p>
<p>
Two towers can only communicate with each other if there is no tower nor skyscraper lying on the<br />
straight line segment connecting them.
</p>
<p>
As the most skillful programmer in the company, Johnny's job is to write a program to help<br />
Byteland compute the number of pairs of towers which can communicate with each other.
</p>
<p>
And once again, Johnny has asked for your help!
</p>
<h3>Input</h3>
<p>The first line contains a number t (about 15) which is the number of test cases. Then t test cases follow.<br />
Each test case has the following form.</p>
<p>The first line contains two numbers N and M (1 ≤ N, M ≤ 1000), the number of towers and skyscrapers<br />
in Byteland.</p>
<p>Each line in the next N lines contains two integers representing the coordinates of the cellphone towers.</p>
<p>Finally, each line in the next M lines contains two integers representing the coordinates of the skyscrapers.</p>
<p>All coordinates have absolute values not larger than 10000.</p>
<h3>Output</h3>
<p>For each test case, print a single number, describing the number of pairs of towers which can communicate with each other.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
1
5 4
-1 -1
1 -1
0 -2
-2 -2
0 0
-1 -2
1 0
-1 1
0 -1

<b>Output</b>
6
</pre><h3>Output details</h3>
<p><img src='http://www.codechef.com/download/celltwr.png' />
</p>
<p>In the above figure, the blue points represent the cell towers and the red points represent the skyscrapers as in the example input. The 6 segments AE, BE, BC, AC, AD and BD correspond to the 6 pairs of towers that can communicate with each other.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>