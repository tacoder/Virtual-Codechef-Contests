<?php require("../../includes/header.php"); ?><h1>Traffic Control</h1><div class="content">

<p>With the advent of technology, the speed of cars has increased considerably. So have the traffic rules to keep them under control. Sophisticated electronic devices are used to sense speed and digital cameras to identify the car. While the automobile technology has reached India, the speed control techniques are still very obsolete. The traffic police usually have to remember the Registration number of the car while it flashes past him at sky high speeds.<br />
We know that certain numbers are easy to remember as entering in sequence of digits implies an easy-to-remember geometric figure. For simplicity we shall assume that the Registration number of each car is entirely numeric, i.e, contains only digits (0-9).<br />
</p>
<p><img src="http://i50.tinypic.com/qpqlw6.jpg" /><br />
For each Registration number, we can make a corresponding geometric figure, Number Plot, which is a sequence of connected line segments. Assume that a registration number with n digits is a1 a2 a3 . . .  an-1 an. The first line segment of Number Plot is a line segment connecting the center points of square a1 and square a2 . The second line segment of Number Plot connects the center points of square a2 and a3. In a similar way the k-th line segment connects the center points of square ak and square ak+1 , and the last segment connects an-1 and an.</p>
<h3>Input</h3>
<p>Your program is to read from standard input. The number of test cases N is given in the first line of the input. The following N lines contain the Registration numbers. Assume that the Registration Numbers are of fixed size of 8 digits. </p>
<h3>Output</h3>
<p>Your program is to write to standard output. For each test case you have to print the number of distinct lines in the plot.</p>
<h3>Example</h3>
<p>For example, the number plot for the number 15803517 and 15906395 are,</p>
<p><img src="http://i46.tinypic.com/j5v7gy.jpg" /><br />
<br />
The plots contain 5 and 4 distinct lines respectively. Similarly various different plots may contain varying number of distinct lines. It is easy to remember the number with lesser number of distinct lines. If the plot is reduced to a single point, the number of distinct lines is considered as Zero.</p>
<pre>
<b>Input:</b>
4
15803517
15906395
55555555
12580889


<b>Output:</b>
5
4
0
3

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aman871988">aman871988</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>25 sec</td>
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