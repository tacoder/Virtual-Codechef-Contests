<?php require("../../includes/header.php"); ?><h1>N Knights Problem</h1><div class="content">

<p>Dave recently mastered the problem of placing N queens on a chessboard so<br />
that no two queens attack eachother.<br />
Now he wants to see how many knights he can place on a chessboard so<br />
that no two knights attack eachother.<br />
Normally this would be a simple task, but some of the squares of the<br />
chessboard have been marked as unusable and hence cannot have a knight placed<br />
on them.</p>
<p>Recall that a knight can attack another knight if their vertical distance<br />
is 2 and their horizontal distance is 1, or if their vertical distance is 1 and<br />
their horizontal distance is 2.  Only one knight may be placed on each square<br />
of the chessboard</p>
<h3>Input</h3>
<p>The first line of input contains an integer T (0&lt;T≤50), the number of test cases to follow.</p>
<p>Each test case will begin with a line containing 2 integers M and N (0&lt;M,N≤30),<br />
denoting the number of rows and columns, respectively.<br />
M lines follow, each containing exactly N characters.<br />
The j-th character of the i-th line is '.' if a knight may be placed in the j-th column of the i-th<br />
row, and '#' if the square is unusable.</p>
<h3>Output</h3>
<p>For each test case, output on a single line the maximum number of knights that may be placed<br />
on the chessboard such that no two attack eachother.</p>
<h3>Sample input:</h3>
<pre><code>2
2 4
....
....
5 5
..#..
#..#.
##...
...##
.....
</code></pre><h3>Sample output:</h3>
<pre>4
11

</pre><p>The following image represents the chessboard and a possible solution to the second test case:<br />
<img src="http://www.codechef.com/download/board.png" alt="nn#_n<br />#n_#n<br />##__n<br />_n_##<br />nnn_n" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>