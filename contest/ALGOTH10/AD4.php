<?php require("../../includes/header.php"); ?><h1>Triangle Revisited</h1><div class="content">

<p>Cody is busy in making triangles, so he has got another problem here, there are a set of given integral points on a 2-D plane. Johnny needs to find out how many triangles can be drawn using the set of given points.</p>
<h3>Input</h3>

<p>First line of input consists of ‘t’ (1&lt;=t&lt;=15)  test cases, then ‘t’ test cases follows<br />
1st line consisting of ‘n’, the no. of the points (1&lt;=n&lt;=1000), and next ‘n’ lines consisting of two integers, the x and the y co-ordinate of each point<br />
All coordinates have absolute values not larger than 10000</p>
<h3>Output</h3>

<p>The output must contain ‘n’ lines of output, with 1 integer in each line. The integer is the number of possible triangles that could be formed using the set of all the given points.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5
-1 -1
1 -1
0 -2
-2 -2
0 0
4
-1 -2
1 0
-1 1
0 -1


<b>Output:</b>
8
3

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/killer17">killer17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>