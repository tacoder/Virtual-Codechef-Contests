<?php require("../../includes/header.php"); ?><h1>Hit The Target</h1><div class="content">

<p>You are a Fighter Pilot trainer. Recently you have had an innovative idea of testing the pilots. A series of obstacles will be placed in front of the pilots, and the target will be placed at the other side of the obstacles. The obstacles will have opening in between them. The pilot’s test will be to find the perfect opening so that he can hit the target without hitting any of the obstacles.<br />
The problem is that in some combinations of obstacles the target cannot be hit. Your job is to find out if for a given set of obstacles the target is hittable or not.  </p>
<p><img src="http://i42.tinypic.com/2vcye0k.jpg" /></p>
<p>You are a Fighter Pilot trainer. Recently you have had an innovative idea of testing the pilots. A series of obstacles will be placed in front of the pilots, and the target will be placed at the other side of the<br />
obstacles. The obstacles will have opening in between them. The pilot’s test will be to find the perfect opening so that he can hit the target without hitting any of the obstacles.<br />
The problem is that in some combinations of obstacles the target cannot be hit. Your job is to find out if for a given set of obstacles the target is hittable or not. The figure below shows the layout of an example maze.</p>
<h3>Input</h3>

<p>Your program is to read from standard input. The input consists of T test cases. The number of test cases T (1≤ T ≤ 30) is given in the first line of the input. Each test case starts with a line containing an integer W (2 ≤ W≤ 100), the width of an archer line. The next line contains an integer N (2 ≤ N ≤ 20), the number of obstacles. The i-th line of the following N lines contains three integers Di, Li, Ri (1 ≤ Di ≤ W, 0 ≤ Li &lt; Ri ≤W), where 1 ≤ i ≤ N, Di represents the y-coordinate of the i-th obstacle, and Li and Ri represent the x-coordinates of the leftmost point and the rightmost point of the opening in the i-th obstacle, respectively. Note that Di ≠ Dj if i ≠ j.  </p>
<h3>Output</h3>

<p>Your program is to write to standard output. Print exactly one line for each test case. Print “YES”, if there exists a position on the fire line from which a pilot can hit the target, otherwise, “NO”.</p>
<pre>
<b>2
15
4
10 2 7
7 5 12
2 7 12
4 9 13
6
3
2 1 3
4 0 2
5 4 6
</b>
 

<b>Output:</b>
YES
NO

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/aman871988">aman871988</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-02-2010</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>