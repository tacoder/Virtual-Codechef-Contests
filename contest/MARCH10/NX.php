<?php require("../../includes/header.php"); ?><h1>The Best Tower</h1><div class="content">

<p>ByteTel, the largest mobile operator in Byteland, would like to find a place to construct a cellphone tower. There are N important places in Byteland that need to be considered.</p>
<p>These N buildings can be represented by N points in a 2D plane. The cellphone tower can be represented by a circle, and in order to construct the tower, ByteTel needs to specify its center and radius.
</p>
<p>Moreover, the center of the tower cannot be outside the secure area, which is also a circle.
</p>
<p>ByteTel wants to find a center and radius for the tower such that <b>the total squared distance</b> between each of the building and the tower is as small as possible.
</p>
<p>The distance between a point and a circle is defined to be the difference between the distance from the circle's center to the point and the circle's radius.
</p>
<p>Your task is to help ByteTel find a center and radius for their cellphone tower.</p>
<h3>Input</h3>

<p>The first line contains a number t (about 10), which is the number of test case. Each test case has the following form.</p>
<p>The first line contains three numbers (X<sub>s</sub>, Y<sub>s</sub>) and R<sub>s</sub>, specifying the secure circle.
</p>
<p>The second line contains N, the number of buildings (1 ≤ N ≤ 100).</p>
<p>Each line in the next N lines contain two numbers which are the coordinates of a building.
</p>
<p>All coordinates are integer and are between 0 and 10000 (inclusive).</p>
<h3>Output</h3>
<p>For each test case, output 3 numbers (X,Y) and R, rounded to 3 decimal digits, which are the center and radius of the cellphone tower. </p>
<h3>Scoring</h3>

<p>For each test case, your score is d/D in which:
</p>
<p>d is the total square distance between each of the building and the tower your program has found
</p>
<p>D is the total square distance between each of the building and the secure circle's center.
</p>
<p>Your program's score is the sum of each test case's score, the lower the better.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1

1 1 4
5
3 -2
2 1
5 3
4 3
4 -1

<b>Output:</b>
4.000 1.000 2.000
</pre>
<p>The sample output's score is 0.023444. The secure circle is red and the tower is yellow.</p>
<p><img src='https://www.spoj.pl/content/paulmcvn:circle.png' /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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