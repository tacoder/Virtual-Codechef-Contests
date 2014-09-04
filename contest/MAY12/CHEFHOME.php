<?php require("../../includes/header.php"); ?><h1>A Home for Chef</h1><div class="content">

<p>
Our hardworking chef is bored of sleeping in his restaurants. He has decided to settle down. The first thing he must do is to find a suitable location to build a palatial home.
</p>
<p>
Think of the city as a two-dimensional grid. There are <b> N </b> restaurants in the city. Each of the chef's restaurant is a point denoted by (<b>X</b> , <b>Y</b>). A <b>house</b> can be located at a grid point (<b>R</b>, <b>S</b>)  if the sum of the distances between this point and each of the restaurants is as small as possible. Find the number of possible house locations in the city to help out chef build a home.
</p>
<p>
More than one restaurant can be located at the same point. <br />
Houses and restaurants can be located at the same point. <br />
Every house must have integer co-ordinates. In other words, <b>R</b> and <b>S</b> are integers. <br />
The distance between two points (A,B) and (C,D)  is |A-C| + |B-D|. Here |X| is the absolute function.
</p>
<h3>Input</h3>
<p>
First line in the input contains <b>T</b>, number of test cases. <br />
First line of each test case contains <b>N</b>, number of restaurants.<br />
Each of the next <b>N</b> lines contain two integers <b>X</b> and <b>Y</b> separated by a space.
</p>
<p>
<b>T</b> &lt;= 100 <br />
<b> N </b> &lt;= 10^3 <br />
-10^8 &lt;= <b>X</b> &lt;=10^8 <br />
-10^8 &lt;= <b>Y</b> &lt;=10^8
</p>
<h3>Output</h3>
<p>
The number of possible locations (grid points) where houses can be built.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
0 0
-1 0
1 0
0 1
0 -1
5
31 11
30 -41
20 14
25 18
25 38
2
0 0
1 1

<b>Output:</b>
1
1
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-04-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>