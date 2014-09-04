<?php require("../../includes/header.php"); ?><h1>Prime Pattern</h1><div class="content">

<p><img src="http://www.spoj.pl/content/spookycookie:spiral" />There is a very large field, colored white and divided into squares. There is a coordinate system attached to the field: y-axis goes from south to north and x-axis goes from west to east. Sides of the squares are parallel to the axes. There is a robot in the (0, 0) square. Robot starts to move in spiral as depicted. First it moves one step east and one step north. Then two steps west and two steps south. Then three steps east and three steps north, four steps west and four steps south and so on. It moves to a new square with each step. As it moves it counts squares it passes and, if the number of the square is the prime number, then the robot fills this square with black color. The (0, 0) square has the number 0. Given the coordinates of a square you are to calculate the distance from this square to the nearest to it black square. For two squares with coordinates (x1, y1) and (x2, y2) the distance between those squares is |x1-x2|+|y1-y2|.</p>
<div></div>
<h3>Input</h3>

<p>Input file consists of a set of tests. The first line of the file is number T – the number of tests (T &lt;= 500). Following T lines contains two integers each separated with a space: x and y – the coordinates of the square (-2000001 &lt; x &lt; 2000001, -2000001 &lt; y &lt; 2000001).</p>
<h3>Output</h3>

<p>For each coordinate pair in the input file you are to output the distance between this square and the nearest to it black square.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8
0 0
1 0
1 1
0 1
3 3
-3 -3
-1 2
0 -3

<b>Output:</b>
1
1
0
0
1
1
2
2

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-05-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>