<?php require("../../includes/header.php"); ?><h1>Plant Location</h1><div class="content">

<p>A new highway called Highway 1 has just been built in the Kingdom of Byteland. Ingoo, the largest CPU manufacturer in Byteland, would like to build a new chipset plant along the highway.</p>
<p>Ingoo currently has N warehouses in the kingdom. None of these warehouses are near the new highway. Chipsets manufactured from the new plant must be delivered to the warehouses. Thus, the further the distances from the new plant to the warehouses, the more the delivery cost Ingoo needs to bear.</p>
<p>Therefore, the CEO of Ingoo would like to find a place on Highway 1 to build the new plant in such a way that the total distance from the plant to all the warehouses is minimized.</p>
<p>You are visiting Byteland on December vacation and have decided to help Ingoo to locate the new plant!</p>
<h3>Input</h3>
<p>The first line contains T (about 20), the number of test cases. Then T test cases follow. Each test case has the following form:</p>
<p>The first line contains a number N (1 &lt;= N &lt;= 2000), the number of Ingoo's warehouses.</p>
<p>The second line contains three integers A, B, C which describe the line equation (Ax+By+C=0) of Highway 1 (|A|, |B|, |C| &lt;= 5000).</p>
<p>The next N lines contains the coordinates (x, y) of the warehouses (|x|, |y| &lt;= 5000).</p>
<p>You are guaranteed that A, B, C form a valid line equation (i.e. A and B are not both 0) and no warehouses lie on Highway 1.</p>
<h3>Output</h3>
<p>For each test case, print in a single line the minimum total distance between the new plant and all the warehouses, rounded to 6 decimal places. If there is no optimum distance, print "NO" instead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5
3 -5 -7	
1 3
-2 4
4 -7
7 6
3 3

<b>Output:</b>
26.232349
</pre><h3>Output details</h3>
<p>The line equation of Highway 1 is 3x-5x-7=0. Ingoo have 5 warehouses: A(1,3), B(-2,4), C(4,-7), D(7,6), and E(3,3). The optimum location of the new plant is P as shown in the figure below:</p>
<p><img src='http://www.codechef.com/download/plant.png' /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11--0001</td>
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